@php
    $colors = match($status) {
        'queued' => 'bg-yellow-100 text-yellow-800',
        'assigned' => 'bg-blue-100 text-blue-800',
        'in_progress' => 'bg-purple-100 text-purple-800',
        'waiting_for_parts' => 'bg-orange-100 text-orange-800',
        'ready_for_pickup' => 'bg-teal-100 text-teal-800',
        'completed' => 'bg-green-100 text-green-800',
        'cancelled' => 'bg-red-100 text-red-800',
        default => 'bg-gray-100 text-gray-800',
    };
@endphp

<span class="px-2 py-1 text-xs font-medium rounded-full {{ $colors }}">
    {{ str_replace('_', ' ', ucfirst($status)) }}
</span>
