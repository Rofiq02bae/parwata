<?php

declare(strict_types=1);

namespace Database\Seeders;

use App\Models\Ticket;
use App\Models\TicketLog;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        $admin = User::create([
            'name' => 'Admin User',
            'email' => 'admin@repair.com',
            'password' => bcrypt('password'),
            'role' => 'admin',
            'phone_number' => '+1234567890',
        ]);

        $technician = User::create([
            'name' => 'John Technician',
            'email' => 'tech@repair.com',
            'password' => bcrypt('password'),
            'role' => 'technician',
            'phone_number' => '+1234567891',
        ]);

        $client = User::create([
            'name' => 'Jane Client',
            'email' => 'client@repair.com',
            'password' => bcrypt('password'),
            'role' => 'client',
            'phone_number' => '+1234567892',
            'address' => '123 Main St, City',
        ]);

        $ticket = Ticket::create([
            'ticket_code' => 'SRV-'.now()->format('Ymd').'-DEMO01',
            'client_id' => $client->id,
            'technician_id' => $technician->id,
            'device_type' => 'laptop',
            'device_brand' => 'Dell',
            'problem_desc' => 'Screen flickering and overheating issues.',
            'service_type' => 'repair',
            'priority' => 'high',
            'status' => 'in_progress',
            'tech_notes' => 'Diagnosed as GPU issue. Ordering replacement part.',
        ]);

        TicketLog::create([
            'ticket_id' => $ticket->id,
            'changed_by' => $admin->id,
            'previous_status' => null,
            'new_status' => 'pending',
            'comment' => 'Ticket created',
        ]);

        TicketLog::create([
            'ticket_id' => $ticket->id,
            'changed_by' => $admin->id,
            'previous_status' => 'pending',
            'new_status' => 'assigned',
            'comment' => 'Assigned to John Technician',
        ]);

        TicketLog::create([
            'ticket_id' => $ticket->id,
            'changed_by' => $technician->id,
            'previous_status' => 'assigned',
            'new_status' => 'in_progress',
            'comment' => 'Started diagnosis',
        ]);
    }
}
