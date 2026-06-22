<?php

declare(strict_types=1);

namespace App\Repositories\Eloquent;

use App\Models\Ticket;
use App\Repositories\Contracts\TicketRepositoryInterface;
use Illuminate\Contracts\Pagination\LengthAwarePaginator;
use Illuminate\Database\Eloquent\Collection;

class TicketRepository implements TicketRepositoryInterface
{
    public function allForClient(int $clientId, int $perPage = 15): LengthAwarePaginator
    {
        return Ticket::query()
            ->with(['technician', 'logs.changedBy'])
            ->where('client_id', $clientId)
            ->latest()
            ->paginate($perPage);
    }

    public function allForTechnician(int $technicianId, int $perPage = 15): LengthAwarePaginator
    {
        return Ticket::query()
            ->with(['client', 'logs.changedBy'])
            ->where('technician_id', $technicianId)
            ->latest()
            ->paginate($perPage);
    }

    public function allWithRelations(int $perPage = 15): LengthAwarePaginator
    {
        return Ticket::query()
            ->with(['client', 'technician', 'logs.changedBy'])
            ->latest()
            ->paginate($perPage);
    }

    public function findById(int $id): ?Ticket
    {
        return Ticket::query()
            ->with(['client', 'technician', 'logs.changedBy'])
            ->find($id);
    }

    public function create(array $data): Ticket
    {
        return Ticket::create($data);
    }

    public function update(Ticket $ticket, array $data): bool
    {
        return $ticket->update($data);
    }

    public function updateStatus(Ticket $ticket, string $status): bool
    {
        return $ticket->update(['status' => $status]);
    }

    public function findByCode(string $code): ?Ticket
    {
        return Ticket::query()
            ->with(['client', 'technician', 'logs.changedBy'])
            ->where('ticket_code', $code)
            ->first();
    }

    public function getQueuedTickets(): Collection
    {
        return Ticket::query()
            ->with('client')
            ->where('status', 'queued')
            ->latest()
            ->get();
    }

    public function getStatusCountsForClient(int $clientId): array
    {
        return $this->buildStatusCounts('client_id', $clientId);
    }

    public function getStatusCountsForTechnician(int $technicianId): array
    {
        return $this->buildStatusCounts('technician_id', $technicianId);
    }

    private function buildStatusCounts(string $column, int $id): array
    {
        $counts = Ticket::query()
            ->selectRaw('status, COUNT(*) as count')
            ->where($column, $id)
            ->groupBy('status')
            ->pluck('count', 'status')
            ->toArray();

        $result = [
            'queued' => $counts['queued'] ?? 0,
            'assigned' => $counts['assigned'] ?? 0,
            'in_progress' => $counts['in_progress'] ?? 0,
            'waiting_for_parts' => $counts['waiting_for_parts'] ?? 0,
            'ready_for_pickup' => $counts['ready_for_pickup'] ?? 0,
            'completed' => $counts['completed'] ?? 0,
            'cancelled' => $counts['cancelled'] ?? 0,
        ];

        $result['total'] = array_sum($result);

        return $result;
    }
}
