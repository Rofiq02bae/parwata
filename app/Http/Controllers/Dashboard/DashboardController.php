<?php

declare(strict_types=1);

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Ticket;
use App\Models\User;
use App\Services\TicketService;
use Illuminate\View\View;

class DashboardController extends Controller
{
    public function __construct(
        private readonly TicketService $ticketService
    ) {}

    public function index(): View
    {
        $stats = [
            'total' => Ticket::count(),
            'pending' => Ticket::where('status', 'pending')->count(),
            'in_progress' => Ticket::where('status', 'in_progress')->count(),
            'completed' => Ticket::where('status', 'completed')->count(),
            'clients' => User::where('role', 'client')->count(),
            'technicians' => User::where('role', 'technician')->count(),
        ];

        $recentTickets = Ticket::with(['client', 'technician'])
            ->latest()
            ->take(10)
            ->get();

        return view('dashboard.index', compact('stats', 'recentTickets'));
    }

    public function clientDashboard(): View
    {
        $clientId = (int) auth()->id();

        $assignedTickets = $this->ticketService->getClientTickets($clientId);
        $counts = $this->ticketService->getClientStatusCounts($clientId);

        return view('client.index', compact('assignedTickets', 'counts'));
    }
}
