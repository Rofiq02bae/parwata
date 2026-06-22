@extends('layouts.app')

@section('content')
<div class="px-4 py-6 sm:px-0">
    <div class="mb-6">
        <a href="{{ route('dashboard.index') }}" class="text-blue-600 hover:underline">&larr; Back to Tickets</a>
    </div>

    <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
        <div class="lg:col-span-2">
            <div class="bg-white rounded-lg shadow p-6">
                <div class="flex justify-between items-start mb-4">
                    <div>
                        <h1 class="text-2xl font-bold">{{ $ticket->ticket_code }}</h1>
                        <p class="text-gray-500">Created {{ $ticket->created_at->format('M d, Y H:i') }}</p>
                    </div>
                    @include('components.status-badge', ['status' => $ticket->status])
                </div>

                <div class="grid grid-cols-2 gap-4 mb-6">
                    <div>
                        <p class="text-sm text-gray-500">Client</p>
                        <p class="font-medium">{{ $ticket->client->name }}</p>
                    </div>
                    <div>
                        <p class="text-sm text-gray-500">Technician</p>
                        <p class="font-medium">{{ $ticket->technician?->name ?? 'Unassigned' }}</p>
                    </div>
                    <div>
                        <p class="text-sm text-gray-500">Device</p>
                        <p class="font-medium">{{ ucfirst($ticket->device_type) }} - {{ $ticket->device_brand }}</p>
                    </div>
                    <div>
                        <p class="text-sm text-gray-500">Service Type</p>
                        <p class="font-medium">{{ ucfirst($ticket->service_type) }}</p>
                    </div>
                    <div>
                        <p class="text-sm text-gray-500">Priority</p>
                        <p class="font-medium">{{ ucfirst($ticket->priority) }}</p>
                    </div>
                </div>

                <div class="mb-6">
                    <h3 class="font-semibold mb-2">Problem Description</h3>
                    <p class="text-gray-700">{{ $ticket->problem_desc }}</p>
                </div>

                @if($ticket->admin_notes)
                    <div class="mb-6">
                        <h3 class="font-semibold mb-2">Admin Notes</h3>
                        <p class="text-gray-700">{{ $ticket->admin_notes }}</p>
                    </div>
                @endif

                @if($ticket->tech_notes)
                    <div class="mb-6">
                        <h3 class="font-semibold mb-2">Technician Notes</h3>
                        <p class="text-gray-700">{{ $ticket->tech_notes }}</p>
                    </div>
                @endif
            </div>
        </div>

        <div class="space-y-6">
            <div class="bg-white rounded-lg shadow p-6">
                <h3 class="font-semibold mb-4">Update Status & Priority</h3>

                <form method="POST" action="{{ route('dashboard.tickets.update-status', $ticket->id) }}">
                    @csrf
                    @method('PUT')

                    <div class="mb-4">
                        <label class="block text-sm font-medium text-gray-700 mb-1">Status</label>
                        <select name="status" class="w-full px-3 py-2 border border-gray-300 rounded-md">
                            @foreach(['queued', 'assigned', 'in_progress', 'waiting_for_parts', 'ready_for_pickup', 'completed', 'cancelled'] as $status)
                                <option value="{{ $status }}" {{ $ticket->status === $status ? 'selected' : '' }}>
                                    {{ str_replace('_', ' ', ucfirst($status)) }}
                                </option>
                            @endforeach
                        </select>
                    </div>

                    <div class="mb-4">
                        <label class="block text-sm font-medium text-gray-700 mb-1">Priority</label>
                        <select name="priority" class="w-full px-3 py-2 border border-gray-300 rounded-md">
                            @foreach(['low', 'medium', 'high', 'critical'] as $priority)
                                <option value="{{ $priority }}" {{ $ticket->priority === $priority ? 'selected' : '' }}>
                                    {{ ucfirst($priority) }}
                                </option>
                            @endforeach
                        </select>
                    </div>

                    <div class="mb-4">
                        <label class="block text-sm font-medium text-gray-700 mb-1">Admin Notes</label>
                        <textarea name="admin_notes" rows="2" class="w-full px-3 py-2 border border-gray-300 rounded-md">{{ $ticket->admin_notes }}</textarea>
                    </div>

                    <div class="mb-4">
                        <label class="block text-sm font-medium text-gray-700 mb-1">Comment</label>
                        <textarea name="comment" rows="2" class="w-full px-3 py-2 border border-gray-300 rounded-md"></textarea>
                    </div>

                    <button type="submit" class="w-full bg-blue-600 text-white py-2 px-4 rounded-md hover:bg-blue-700">
                        Update Status & Priority
                    </button>
                </form>
            </div>

            @if($ticket->isQueued())
                <div class="bg-white rounded-lg shadow p-6" x-data="{ open: false }">
                    <h3 class="font-semibold mb-4">Assign Technician</h3>

                    <form method="POST" action="{{ route('dashboard.tickets.assign', ['id' => $ticket->id, 'technicianId' => '__TECH_ID__']) }}" id="assign-form">
                        @csrf
                        <div class="mb-4">
                            <select id="technician-select" class="w-full px-3 py-2 border border-gray-300 rounded-md">
                                <option value="">Select Technician</option>
                                @foreach($technicians as $tech)
                                    <option value="{{ $tech->id }}">{{ $tech->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <button type="button" onclick="submitAssign()" class="w-full bg-green-600 text-white py-2 px-4 rounded-md hover:bg-green-700">
                            Assign
                        </button>
                    </form>

                    <script>
                        function submitAssign() {
                            const techId = document.getElementById('technician-select').value;
                            if (!techId) return;
                            const form = document.getElementById('assign-form');
                            form.action = form.action.replace('__TECH_ID__', techId);
                            form.submit();
                        }
                    </script>
                </div>
            @endif

            <div class="bg-white rounded-lg shadow p-6">
                <h3 class="font-semibold mb-4">Ticket Log</h3>
                <div class="space-y-3 max-h-64 overflow-y-auto">
                    @forelse($ticket->logs as $log)
                        <div class="border-l-2 border-gray-300 pl-3">
                            <p class="text-sm font-medium">{{ str_replace('_', ' ', ucfirst($log->new_status)) }}</p>
                            @if($log->comment)
                                <p class="text-xs text-gray-500">{{ $log->comment }}</p>
                            @endif
                            <p class="text-xs text-gray-400">{{ $log->created_at->diffForHumans() }} by {{ $log->changedBy->name }}</p>
                        </div>
                    @empty
                        <p class="text-sm text-gray-500">No logs yet.</p>
                    @endforelse
                </div>
            </div>
        </div>
    </div>
</div>
@endsection