<?php

declare(strict_types=1);

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateTicketStatusRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'status' => ['required', 'in:queued,assigned,in_progress,waiting_for_parts,ready_for_pickup,completed,cancelled'],
            'priority' => ['nullable', 'in:low,medium,high,critical'],
            'admin_notes' => ['nullable', 'string'],
            'tech_notes' => ['nullable', 'string'],
            'comment' => ['nullable', 'string'],
        ];
    }
}
