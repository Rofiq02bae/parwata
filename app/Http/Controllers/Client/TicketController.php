<?php

declare(strict_types=1);

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreTicketRequest;
use App\Services\TicketService;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class TicketController extends Controller
{
    public function __construct(
        private readonly TicketService $ticketService
    ) {}

    public function index(): View
    {
        $userId = (int) auth()->id();
        $tickets = $this->ticketService->getClientTickets($userId);
        $counts = $this->ticketService->getClientStatusCounts($userId);

        return view('client.tickets.index', compact('tickets', 'counts'));
    }

    public function create(): View
    {
        return view('client.tickets.create');
    }

    public function store(StoreTicketRequest $request): RedirectResponse
    {
        $ticket = $this->ticketService->createTicket($request->validated(), (int) auth()->id());

        return redirect()->route('client.tickets.show', $ticket->id)
            ->with('success', 'Ticket created successfully. Your ticket code: '.$ticket->ticket_code);
    }

    public function show(int $id): View
    {
        $ticket = $this->ticketService->getTicket($id);

        abort_if(is_null($ticket), 404);

        $this->authorize('view', $ticket);

        return view('client.tickets.show', compact('ticket'));
    }
}
