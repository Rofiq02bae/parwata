<?php

declare(strict_types=1);

namespace App\Policies;

use App\Models\Ticket;
use App\Models\User;

class TicketPolicy
{
    public function view(User $user, Ticket $ticket): bool
    {
        if ($user->isAdmin()) {
            return true;
        }

        if ($user->isTechnician() && $ticket->technician_id === $user->id) {
            return true;
        }

        return $user->id === $ticket->client_id;
    }

    public function update(User $user, Ticket $ticket): bool
    {
        return $user->isAdmin() || $user->isTechnician();
    }

    public function delete(User $user, Ticket $ticket): bool
    {
        return $user->isAdmin();
    }
}
