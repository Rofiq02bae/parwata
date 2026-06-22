<?php

declare(strict_types=1);

namespace Tests\Feature;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class TicketCreationTest extends TestCase
{
    use RefreshDatabase;

    public function test_client_can_create_ticket_with_free_text_device_type_and_no_priority(): void
    {
        $client = User::factory()->create(['role' => 'client']);

        $response = $this->actingAs($client)->post(route('client.tickets.store'), [
            'device_type' => 'Mechanical Keyboard',
            'device_brand' => 'Ducky',
            'problem_desc' => 'Spacebar switch is not registering.',
            'service_type' => 'repair',
        ]);

        $response->assertSessionHas('success');

        $this->assertDatabaseHas('tickets', [
            'device_type' => 'Mechanical Keyboard',
            'device_brand' => 'Ducky',
            'status' => 'queued',
            'priority' => 'medium',
        ]);
    }

    public function test_client_cannot_set_priority(): void
    {
        $client = User::factory()->create(['role' => 'client']);

        $response = $this->actingAs($client)->post(route('client.tickets.store'), [
            'device_type' => 'Mouse',
            'device_brand' => 'Logitech',
            'problem_desc' => 'Double clicking issue.',
            'service_type' => 'repair',
            'priority' => 'critical',
        ]);

        $response->assertSessionHas('success');

        $this->assertDatabaseHas('tickets', [
            'device_type' => 'Mouse',
            'status' => 'queued',
            'priority' => 'medium',
        ]);
    }
}
