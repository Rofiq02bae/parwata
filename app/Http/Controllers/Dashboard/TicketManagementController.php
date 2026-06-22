<?php

declare(strict_types=1);

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Http\Requests\UpdateTicketStatusRequest;
use App\Models\User;
use App\Services\TicketService;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class TicketManagementController extends Controller
{
    public function __construct(
        private readonly TicketService $ticketService
    ) {}

    public function index(): View
    {
        $tickets = $this->ticketService->getAllTickets();

        return view('dashboard.tickets.index', compact('tickets'));
    }

    public function show(int $id): View
    {
        $ticket = $this->ticketService->getTicket($id);

        abort_if(is_null($ticket), 404);

        $technicians = User::where('role', 'technician')->get();

        return view('dashboard.tickets.show', compact('ticket', 'technicians'));
    }

    public function updateStatus(int $id, UpdateTicketStatusRequest $request): RedirectResponse
    {
        $ticket = $this->ticketService->getTicket($id);

        abort_if(is_null($ticket), 404);

        $data = $request->validated();
        $newStatus = $data['status'];
        $comment = $data['comment'] ?? null;

        $this->ticketService->changeStatus($ticket, $newStatus, (int) auth()->id(), $comment);

        if (isset($data['priority'])) {
            $this->ticketService->updateTicket($ticket, ['priority' => $data['priority']]);
        }

        if (isset($data['admin_notes'])) {
            $this->ticketService->updateTicket($ticket, ['admin_notes' => $data['admin_notes']]);
        }

        if (isset($data['tech_notes'])) {
            $this->ticketService->updateTicket($ticket, ['tech_notes' => $data['tech_notes']]);
        }

        return back()->with('success', 'Ticket status updated successfully.');
    }

    public function assignTechnician(int $id, int $technicianId): RedirectResponse
    {
        $ticket = $this->ticketService->getTicket($id);

        abort_if(is_null($ticket), 404);

        $this->ticketService->assignTechnician($ticket, $technicianId, (int) auth()->id());

        return back()->with('success', 'Technician assigned successfully.');
    }
}
