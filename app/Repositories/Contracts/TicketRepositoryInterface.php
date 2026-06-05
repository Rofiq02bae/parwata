<?php

declare(strict_types=1);

namespace App\Repositories\Contracts;

use App\Models\Ticket;
use Illuminate\Contracts\Pagination\LengthAwarePaginator;
use Illuminate\Database\Eloquent\Collection;

interface TicketRepositoryInterface
{
    public function allForClient(int $clientId, int $perPage = 15): LengthAwarePaginator;

    public function allForTechnician(int $technicianId, int $perPage = 15): LengthAwarePaginator;

    public function allWithRelations(int $perPage = 15): LengthAwarePaginator;

    public function findById(int $id): ?Ticket;

    public function create(array $data): Ticket;

    public function update(Ticket $ticket, array $data): bool;

    public function updateStatus(Ticket $ticket, string $status): bool;

    public function findByCode(string $code): ?Ticket;

    public function getPendingTickets(): Collection;

    public function getStatusCountsForClient(int $clientId): array;

    public function getStatusCountsForTechnician(int $technicianId): array;
}
