<?php

declare(strict_types=1);

namespace App\Jobs;

use App\Models\Ticket;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Mail;

class SendTicketStatusNotification implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    public function __construct(
        public readonly Ticket $ticket,
        public readonly string $previousStatus,
        public readonly string $newStatus
    ) {}

    public function handle(): void
    {
        Mail::raw(
            "Your ticket {$this->ticket->ticket_code} status has changed from {$this->previousStatus} to {$this->newStatus}.",
            fn ($message) => $message
                ->to($this->ticket->client->email)
                ->subject("Ticket {$this->ticket->ticket_code} Status Updated")
        );
    }
}
