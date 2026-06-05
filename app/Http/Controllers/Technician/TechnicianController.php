<?php

declare(strict_types=1);

namespace App\Http\Controllers\Technician;

use App\Http\Controllers\Controller;
use App\Http\Requests\UpdateTicketStatusRequest;
use App\Services\TicketService;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class TechnicianController extends Controller
{
    public function __construct(
        private readonly TicketService $ticketService
    ) {}

    public function dashboard(): View
    {
        $techId = (int) auth()->id();

        $assignedTickets = $this->ticketService->getTechnicianTickets($techId);
        $counts = $this->ticketService->getTechnicianStatusCounts($techId);

        return view('technician.index', compact('assignedTickets', 'counts'));
    }

    public function index(): View
    {
        $techId = (int) auth()->id();

        $tickets = $this->ticketService->getTechnicianTickets($techId);

        return view('technician.tickets.index', compact('tickets'));
    }

    public function show(int $id): View
    {
        $ticket = $this->ticketService->getTicket($id);

        abort_if(is_null($ticket), 404);

        return view('technician.tickets.show', compact('ticket'));
    }

    public function updateStatus(int $id, UpdateTicketStatusRequest $request): RedirectResponse
    {
        $ticket = $this->ticketService->getTicket($id);

        abort_if(is_null($ticket), 404);

        $data = $request->validated();

        $this->ticketService->changeStatus(
            $ticket,
            $data['status'],
            (int) auth()->id(),
            $data['comment'] ?? null
        );

        return back()->with('success', 'Ticket status updated successfully.');
    }
}
