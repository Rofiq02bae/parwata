@extends('layouts.app-client')

@section('content')
<div class="px-4 py-6 sm:px-0">
    <h1 class="text-2xl font-bold text-gray-900 mb-6">{{ auth()->user()->name }} Dashboard</h1>

    <div class="grid grid-cols-1 md:grid-cols-4 gap-4 mb-8">
        <div class="bg-white rounded-lg shadow p-4">
            <p class="text-sm text-gray-500">Total Assigned</p>
            <p class="text-2xl font-bold">{{ $counts['total'] }}</p>
        </div>
        <div class="bg-white rounded-lg shadow p-4">
            <p class="text-sm text-blue-500">In Progress</p>
            <p class="text-2xl font-bold">{{ $counts['in_progress'] }}</p>
        </div>
        <div class="bg-white rounded-lg shadow p-4">
            <p class="text-sm text-green-500">Completed</p>
            <p class="text-2xl font-bold">{{ $counts['completed'] }}</p>
        </div>
        <div class="bg-white rounded-lg shadow p-4">
            <p class="text-sm text-yellow-500">Queued</p>
            <p class="text-2xl font-bold">{{ $counts['queued'] }}</p>
        </div>
    </div>

    <div class="bg-white rounded-lg shadow">
        <div class="px-6 py-4 border-b flex justify-between items-center">
            <h2 class="text-lg font-semibold">My Assigned Tickets</h2>
            <a href="{{ route('technician.tickets.index') }}" class="text-sm text-blue-600 hover:underline">View All</a>
        </div>
        <div class="overflow-x-auto">
            <table class="min-w-full divide-y divide-gray-200">
                <thead class="bg-gray-50">
                    <tr>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Code</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Client</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Device</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Status</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Created</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Actions</th>
                    </tr>
                </thead>
                <tbody class="bg-white divide-y divide-gray-200">
                    @forelse($assignedTickets as $ticket)
                        <tr>
                            <td class="px-6 py-4 whitespace-nowrap font-medium text-gray-900">{{ $ticket->ticket_code }}</td>
                            <td class="px-6 py-4 whitespace-nowrap">{{ $ticket->client->name }}</td>
                            <td class="px-6 py-4 whitespace-nowrap">{{ ucfirst($ticket->device_type) }} - {{ $ticket->device_brand }}</td>
                            <td class="px-6 py-4 whitespace-nowrap">@include('components.status-badge', ['status' => $ticket->status])</td>
                            <td class="px-6 py-4 whitespace-nowrap">{{ $ticket->created_at->format('M d, Y') }}</td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <a href="{{ route('client.tickets.show', $ticket->id) }}" class="text-blue-600 hover:underline">View</a>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="6" class="px-6 py-4 text-center text-gray-500">No tickets assigned to you.</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>

    <div class="mt-6">
        {{ $assignedTickets->links() }}
    </div>
</div>
@endsection