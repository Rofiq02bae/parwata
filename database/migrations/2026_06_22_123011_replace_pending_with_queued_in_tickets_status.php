<?php

declare(strict_types=1);

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    public function up(): void
    {
        DB::table('tickets')->where('status', 'pending')->update(['status' => 'queued']);
        DB::table('ticket_logs')->where('new_status', 'pending')->update(['new_status' => 'queued']);
        DB::table('ticket_logs')->where('previous_status', 'pending')->update(['previous_status' => 'queued']);

        if (DB::getDriverName() !== 'sqlite') {
            DB::statement("ALTER TABLE tickets MODIFY COLUMN status ENUM('queued','assigned','in_progress','waiting_for_parts','ready_for_pickup','completed','cancelled') NOT NULL DEFAULT 'queued'");
        }
    }

    public function down(): void
    {
        if (DB::getDriverName() !== 'sqlite') {
            DB::statement("ALTER TABLE tickets MODIFY COLUMN status ENUM('pending','assigned','in_progress','waiting_for_parts','ready_for_pickup','completed','cancelled') NOT NULL DEFAULT 'pending'");
        }

        DB::table('tickets')->where('status', 'queued')->update(['status' => 'pending']);
        DB::table('ticket_logs')->where('new_status', 'queued')->update(['new_status' => 'pending']);
        DB::table('ticket_logs')->where('previous_status', 'queued')->update(['previous_status' => 'pending']);
    }
};
