@extends('layouts.app-ticket')

@section('content')
<div class="mb-stack-lg flex items-center">
    <a class="group flex items-center text-on-surface-variant hover:text-electric-blue transition-colors duration-300" href="{{ route('client.tickets.index') }}">
        <span class="material-symbols-outlined mr-2 group-hover:-translate-x-1 transition-transform">arrow_back</span>
        <span class="font-label-caps text-label-caps">Back to Tickets</span>
    </a>
</div>

<div class="max-w-2xl bg-white border border-outline-variant/20 rounded-xl overflow-hidden shadow-2xl ring-1 ring-outline-variant/10">
    <div class="p-stack-lg md:p-12">
        <h1 class="font-headline-xl text-headline-xl tracking-tight text-surface-dim mb-12">Create New Ticket</h1>

        <form method="POST" action="{{ route('client.tickets.store') }}">
            @csrf

            <div class="grid grid-cols-1 md:grid-cols-2 gap-x-gutter gap-y-8">
                <div>
                    <label for="device_type" class="font-label-caps text-label-caps text-outline mb-2 uppercase tracking-widest block">Device Type</label>
                    <input type="text" name="device_type" id="device_type" value="{{ old('device_type') }}" required
                        class="w-full px-4 py-3 bg-white border border-outline-variant/30 rounded-lg text-surface-dim placeholder-outline/50 focus:border-electric-blue focus:ring-1 focus:ring-electric-blue outline-none transition-colors"
                        placeholder="e.g., Keyboard, Mouse, Projector, Laptop">
                </div>

                <div>
                    <label for="device_brand" class="font-label-caps text-label-caps text-outline mb-2 uppercase tracking-widest block">Device Brand</label>
                    <input type="text" name="device_brand" id="device_brand" value="{{ old('device_brand') }}" required
                        class="w-full px-4 py-3 bg-white border border-outline-variant/30 rounded-lg text-surface-dim placeholder-outline/50 focus:border-electric-blue focus:ring-1 focus:ring-electric-blue outline-none transition-colors"
                        placeholder="e.g., Dell, HP, Apple">
                </div>

                <div>
                    <label for="service_type" class="font-label-caps text-label-caps text-outline mb-2 uppercase tracking-widest block">Service Type</label>
                    <select name="service_type" id="service_type" required
                        class="w-full px-4 py-3 bg-white border border-outline-variant/30 rounded-lg text-surface-dim focus:border-electric-blue focus:ring-1 focus:ring-electric-blue outline-none transition-colors">
                        <option value="">Select Service Type</option>
                        <option value="repair" {{ old('service_type') === 'repair' ? 'selected' : '' }}>Repair</option>
                        <option value="maintenance" {{ old('service_type') === 'maintenance' ? 'selected' : '' }}>Maintenance</option>
                        <option value="upgrade" {{ old('service_type') === 'upgrade' ? 'selected' : '' }}>Upgrade</option>
                        <option value="diagnosis" {{ old('service_type') === 'diagnosis' ? 'selected' : '' }}>Diagnosis</option>
                    </select>
                </div>

                <div class="md:col-span-2">
                    <label for="problem_desc" class="font-label-caps text-label-caps text-outline mb-2 uppercase tracking-widest block">Problem Description</label>
                    <textarea name="problem_desc" id="problem_desc" rows="5" required
                        class="w-full px-4 py-3 bg-white border border-outline-variant/30 rounded-lg text-surface-dim placeholder-outline/50 focus:border-electric-blue focus:ring-1 focus:ring-electric-blue outline-none transition-colors resize-y"
                        placeholder="Describe the issue in detail...">{{ old('problem_desc') }}</textarea>
                </div>
            </div>

            <div class="flex items-center gap-4 pt-8 mt-8 border-t border-outline-variant/20">
                <button type="submit" class="px-8 py-3 bg-electric-blue text-white font-label-caps text-label-caps rounded-lg hover:brightness-110 transition-all duration-300">
                    Create Ticket
                </button>
                <a href="{{ route('client.tickets.index') }}" class="px-8 py-3 bg-transparent border border-outline-variant/30 text-surface-dim font-label-caps text-label-caps rounded-lg hover:border-electric-blue transition-all duration-300">
                    Cancel
                </a>
            </div>
        </form>
    </div>
</div>
@endsection
