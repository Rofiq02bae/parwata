<?php

declare(strict_types=1);

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('tickets', function (Blueprint $table) {
            $table->id();
            $table->string('ticket_code')->unique();
            $table->foreignId('client_id')->constrained('users')->onDelete('cascade');
            $table->foreignId('technician_id')->nullable()->constrained('users')->onDelete('set null');
            $table->enum('device_type', ['laptop', 'desktop', 'printer', 'monitor', 'other']);
            $table->string('device_brand');
            $table->text('problem_desc');
            $table->enum('service_type', ['repair', 'maintenance', 'upgrade', 'diagnosis']);
            $table->enum('priority', ['low', 'medium', 'high', 'critical'])->default('medium');
            $table->enum('status', ['pending', 'assigned', 'in_progress', 'waiting_for_parts', 'ready_for_pickup', 'completed', 'cancelled'])->default('pending');
            $table->text('admin_notes')->nullable();
            $table->text('tech_notes')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('tickets');
    }
};
