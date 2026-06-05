@extends('layouts.app')

@section('content')
<div class="px-4 py-6 sm:px-0">
    <h1 class="text-2xl font-bold text-gray-900 mb-6">Dashboard</h1>

    <div class="grid grid-cols-1 md:grid-cols-3 lg:grid-cols-6 gap-4 mb-8">
        <div class="bg-white rounded-lg shadow p-4">
            <p class="text-sm text-gray-500">Total Tickets</p>
            <p class="text-2xl font-bold">{{ $stats['total'] }}</p>
        </div>
        <div class="bg-white rounded-lg shadow p-4">
            <p class="text-sm text-yellow-500">Pending</p>
            <p class="text-2xl font-bold">{{ $stats['pending'] }}</p>
        </div>
        <div class="bg-white rounded-lg shadow p-4">
            <p class="text-sm text-blue-500">In Progress</p>
            <p class="text-2xl font-bold">{{ $stats['in_progress'] }}</p>
        </div>
        <div class="bg-white rounded-lg shadow p-4">
            <p class="text-sm text-green-500">Completed</p>
            <p class="text-2xl font-bold">{{ $stats['completed'] }}</p>
        </div>
        <div class="bg-white rounded-lg shadow p-4">
            <p class="text-sm text-gray-500">Clients</p>
            <p class="text-2xl font-bold">{{ $stats['clients'] }}</p>
        </div>
        <div class="bg-white rounded-lg shadow p-4">
            <p class="text-sm text-gray-500">Technicians</p>
            <p class="text-2xl font-bold">{{ $stats['technicians'] }}</p>
        </div>
    </div>

    <div class="bg-white rounded-lg shadow">
        <div class="px-6 py-4 border-b">
            <h2 class="text-lg font-semibold">Recent Tickets</h2>
        </div>
        <div class="overflow-x-auto">
            <table class="min-w-full divide-y divide-gray-200">
                <thead class="bg-gray-50">
                    <tr>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Code</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Client</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Technician</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Status</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Created</th>
                    </tr>
                </thead>
                <tbody class="bg-white divide-y divide-gray-200">
                    @forelse($recentTickets as $ticket)
                        <tr>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <a href="{{ route('dashboard.tickets.show', $ticket->id) }}" class="text-blue-600 hover:underline">
                                    {{ $ticket->ticket_code }}
                                </a>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">{{ $ticket->client->name }}</td>
                            <td class="px-6 py-4 whitespace-nowrap">{{ $ticket->technician?->name ?? 'Unassigned' }}</td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                @include('components.status-badge', ['status' => $ticket->status])
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">{{ $ticket->created_at->format('M d, Y') }}</td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="5" class="px-6 py-4 text-center text-gray-500">No tickets found.</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
