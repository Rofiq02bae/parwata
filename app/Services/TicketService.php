<?php

declare(strict_types=1);

namespace App\Services;

use App\Jobs\SendTicketStatusNotification;
use App\Models\Ticket;
use App\Models\TicketLog;
use App\Repositories\Contracts\TicketRepositoryInterface;
use Illuminate\Contracts\Pagination\LengthAwarePaginator;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Support\Facades\DB;

class TicketService
{
    public function __construct(
        private readonly TicketRepositoryInterface $repository
    ) {}

    public function getAllTickets(int $perPage = 15): LengthAwarePaginator
    {
        return $this->repository->allWithRelations($perPage);
    }

    public function getClientTickets(int $clientId, int $perPage = 15): LengthAwarePaginator
    {
        return $this->repository->allForClient($clientId, $perPage);
    }

    public function getTechnicianTickets(int $technicianId, int $perPage = 15): LengthAwarePaginator
    {
        return $this->repository->allForTechnician($technicianId, $perPage);
    }

    public function getTicket(int $id): ?Ticket
    {
        return $this->repository->findById($id);
    }

    public function createTicket(array $data, int $clientId): Ticket
    {
        $data['client_id'] = $clientId;
        $data['ticket_code'] = $this->generateTicketCode();
        $data['status'] = 'queued';

        $ticket = $this->repository->create($data);

        $this->createLog($ticket, null, 'queued', 'Ticket created', $clientId);

        return $ticket;
    }

    public function updateTicket(Ticket $ticket, array $data): Ticket
    {
        $this->repository->update($ticket, $data);

        return $ticket->refresh();
    }

    public function changeStatus(Ticket $ticket, string $newStatus, int $changedBy, ?string $comment = null): Ticket
    {
        $previousStatus = $ticket->status;

        DB::transaction(function () use ($ticket, $newStatus, $changedBy, $previousStatus, $comment): void {
            $this->repository->updateStatus($ticket, $newStatus);
            $this->createLog($ticket, $previousStatus, $newStatus, $comment, $changedBy);
        });

        SendTicketStatusNotification::dispatch($ticket, $previousStatus, $newStatus);

        return $ticket->refresh();
    }

    public function assignTechnician(Ticket $ticket, int $technicianId, int $assignedBy): Ticket
    {
        $previousStatus = $ticket->status;

        DB::transaction(function () use ($ticket, $technicianId, $assignedBy, $previousStatus): void {
            $this->repository->updateStatus($ticket, 'assigned');
            $this->repository->update($ticket, ['technician_id' => $technicianId]);
            $this->createLog($ticket, $previousStatus, 'assigned', "Assigned to technician #{$technicianId}", $assignedBy);
        });

        return $ticket->refresh();
    }

    public function getQueuedTickets(): Collection
    {
        return $this->repository->getQueuedTickets();
    }

    public function getClientStatusCounts(int $clientId): array
    {
        return $this->repository->getStatusCountsForClient($clientId);
    }

    public function getTechnicianStatusCounts(int $technicianId): array
    {
        return $this->repository->getStatusCountsForTechnician($technicianId);
    }

    private function generateTicketCode(): string
    {
        $prefix = 'SRV';
        $date = now()->format('Ymd');
        $random = strtoupper(substr(bin2hex(random_bytes(3)), 0, 6));

        return "{$prefix}-{$date}-{$random}";
    }

    private function createLog(
        Ticket $ticket,
        ?string $previousStatus,
        string $newStatus,
        ?string $comment,
        int $changedBy
    ): TicketLog {
        return TicketLog::create([
            'ticket_id' => $ticket->id,
            'changed_by' => $changedBy,
            'previous_status' => $previousStatus,
            'new_status' => $newStatus,
            'comment' => $comment,
        ]);
    }
}
