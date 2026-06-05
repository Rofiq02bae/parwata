<?php

declare(strict_types=1);

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreTicketRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'device_type' => ['required', 'in:laptop,desktop,printer,monitor,other'],
            'device_brand' => ['required', 'string', 'max:255'],
            'problem_desc' => ['required', 'string'],
            'service_type' => ['required', 'in:repair,maintenance,upgrade,diagnosis'],
            'priority' => ['required', 'in:low,medium,high,critical'],
        ];
    }
}
