@extends('layouts.app-ticket')

@section('content')
<!-- Navigation Breadcrumb / Back Action -->
         <div class="mb-stack-lg flex items-center">
            <a class="group flex items-center text-on-surface-variant hover:text-electric-blue transition-colors duration-300" href="{{ route('client.tickets.index') }}">
            <span class="material-symbols-outlined mr-2 group-hover:-translate-x-1 transition-transform">arrow_back</span>
            <span class="font-label-caps text-label-caps">Back to Tickets</span>
            </a>
         </div>
         <!-- Ticket Detail Canvas -->
         <div class="bg-white border border-outline-variant/20 rounded-xl overflow-hidden shadow-2xl ring-1 ring-outline-variant/10">
            <div class="p-stack-lg md:p-12">
               <!-- Ticket Header -->
               <div class="flex flex-col md:flex-row md:items-center justify-between gap-stack-md mb-12">
                  <div class="flex items-center gap-stack-md">
                     <h1 class="font-headline-xl text-headline-xl tracking-tight text-surface-dim">{{ $ticket->ticket_code }}</h1>
                     @include('components.status-badge', ['status' => $ticket->status])
                    <p class="text-gray-500">Created {{ $ticket->created_at->format('M d, Y H:i') }}</p> <!-- Adjusted to show date and time -->
                  </div>
               </div>
               <div class="grid grid-cols-1 lg:grid-cols-3 gap-gutter lg:gap-16">
                  <!-- Details Column -->
                  <div class="lg:col-span-2 space-y-12">
                     <!-- Info Grid -->
                     <div class="grid grid-cols-1 sm:grid-cols-2 gap-y-stack-lg gap-x-gutter">
                        <!-- Device -->
                        <div class="flex items-start gap-4 p-4 rounded-lg hover:bg-surface-container-low transition-colors group">
                           <div class="w-12 h-12 flex items-center justify-center rounded-xl bg-white border border-outline-variant/20 text-electric-blue group-hover:scale-110 transition-transform"><span class="material-symbols-outlined text-headline-lg">laptop_mac</span></div>
                           <div>
                              <p class="font-label-caps text-label-caps text-outline mb-1 uppercase">Device</p>
                              <p class="font-headline-lg text-headline-lg text-surface-dim">{{ ucfirst($ticket->device_type) }} - {{ $ticket->device_brand }}</p>
                           </div>
                        </div>
                        <!-- Service Type -->
                        <div class="flex items-start gap-4 p-4 rounded-lg hover:bg-surface-container-low transition-colors group">
                           <div class="w-12 h-12 flex items-center justify-center rounded-xl bg-white border border-outline-variant/20 text-electric-blue group-hover:scale-110 transition-transform"><span class="material-symbols-outlined text-headline-lg">build</span></div>
                           <div>
                              <p class="font-label-caps text-label-caps text-outline mb-1 uppercase">Service Type</p>
                              <p class="font-headline-lg text-headline-lg text-surface-dim">{{ ucfirst($ticket->service_type) }}</p>
                           </div>
                        </div>
                        <!-- Priority -->
                        <div class="flex items-start gap-4 p-4 rounded-lg hover:bg-surface-container-low transition-colors group">
                           <div class="w-12 h-12 flex items-center justify-center rounded-xl bg-white border border-outline-variant/20 text-electric-blue group-hover:scale-110 transition-transform"><span class="material-symbols-outlined text-headline-lg">priority_high</span></div>
                           <div>
                              <p class="font-label-caps text-label-caps text-outline mb-1 uppercase">Priority</p>
                              <p class="font-headline-lg text-headline-lg text-surface-dim">{{ ucfirst($ticket->priority) }}</p>
                           </div>
                        </div>
                        <!-- Technician -->
                        <div class="flex items-start gap-4 p-4 rounded-lg hover:bg-surface-container-low transition-colors group">
                           <div class="w-12 h-12 flex items-center justify-center rounded-xl bg-white border border-outline-variant/20 text-electric-blue group-hover:scale-110 transition-transform"><span class="material-symbols-outlined text-headline-lg">person</span></div>
                           <div>
                              <p class="font-label-caps text-label-caps text-outline mb-1 uppercase">Technician</p>
                              <p class="font-headline-lg text-headline-lg text-surface-dim">{{ $ticket->technician?->name ?? 'Pending Assignment' }}</p>
                           </div>
                        </div>
                     </div>

                     @if($ticket->tech_notes)
                        <div class="mb-6">
                            <h3 class="font-semibold mb-2">Technician Notes</h3>
                            <p class="text-gray-700">{{ $ticket->tech_notes }}</p>
                        </div>
                    @endif

                     <!-- Problem Description -->
                     <div class="border-t border-outline-variant/20 pt-10">
                        <h2 class="font-label-caps text-label-caps text-outline mb-4 uppercase tracking-widest">Problem Description</h2>
                        <div class="bg-white p-6 rounded-xl border border-outline-variant/20">
                           <p class="font-body-lg text-body-lg text-surface-dim leading-relaxed">{{ $ticket->problem_desc }}</p>
                        </div>
                     </div>
                     <!-- Device Image Context -->
                     <div class="relative h-64 md:h-80 w-full overflow-hidden rounded-xl">
                        <img class="absolute inset-0 w-full h-full object-cover grayscale opacity-60" src="https://lh3.googleusercontent.com/aida-public/AB6AXuDLNLxfHNsS1OahAnig3bY5NJdVUrLO8cCocauCD5_U4kYhU03Qima3T644f42WlemlLeeNGYmb6bHhbU0KbQwxaH5KJYv4nViO3JObgKI1tFGxUmE3MMrCbwFss-N3xe0ARZlkJXpzaaYjkpTPBQhmNzrakiZElC2jFNpPB-ukvKJz9jhftLg8hWiierfIA0uPCEocK-H8kTtVIc_E3N8Ki8jtxLfHnpdMJHt-Jq7FLsgAdpbGnCFCD-e69NODtM8cRPs9jY_gANc">
                        <div class="absolute inset-0 bg-gradient-to-t from-white/40 to-transparent"></div>
                        <div class="absolute bottom-6 left-6">
                           <p class="font-label-caps text-label-caps text-surface-dim bg-white/80 backdrop-blur-md px-4 py-2 rounded-full border border-outline-variant/20">Hardware Inspection: Acer Swift Series</p>
                        </div>
                     </div>
                  </div>
                  <!-- Timeline Column -->
                  <div class="lg:border-l lg:border-outline-variant/20 lg:pl-12">
                     <h2 class="font-label-caps text-label-caps text-electric-blue mb-8 uppercase tracking-widest flex items-center">
                        <span class="material-symbols-outlined mr-2 text-[18px]">history</span>
                        Status History
                     </h2>
                     <div>
                        <h3 class="font-semibold mb-6 text-gray-800">Status History</h3>
                        
                        <div class="space-y-0">
                            @forelse($ticket->logs as $log)
                                <!-- Timeline Item Wrapper -->
                                <!-- Kita pakai loop->last untuk menghilangkan garis bawah di item paling terakhir -->
                                <div class="timeline-dot relative flex gap-6 {{ !$loop->last ? 'pb-12' : '' }} 
                                    before:content-[''] before:absolute before:left-[11px] before:top-6 before:w-[2px] 
                                    {{ !$loop->last ? 'before:h-[calc(100%-24px)]' : 'before:h-0' }} before:bg-gray-200">
                                    
                                    <!-- Icon Dot Status -->
                                    <!-- Menyesuaikan ikon berdasarkan status log aktif -->
                                    <div class="z-10 w-6 h-6 rounded-full bg-blue-600 flex items-center justify-center ring-4 ring-blue-100">
                                        <span class="material-symbols-outlined text-[14px] text-white" style="font-variation-settings: 'FILL' 1;">
                                            @if($log->new_status === 'completed' || $log->new_status === 'finished')
                                                done_all
                                            @else
                                                done
                                            @endif
                                        </span>
                                    </div>
                                    
                                    <!-- Konten Informasi Log -->
                                    <div class="-mt-1 flex-1">
                                        <!-- Judul Status -->
                                        <h3 class="font-headline-lg text-body-lg font-bold text-gray-800">
                                            {{ str_replace('_', ' ', ucfirst($log->new_status)) }}
                                        </h3>
                                        
                                        <!-- Komentar/Keterangan Kerusakan Servis (Jika ada) -->
                                        @if($log->comment)
                                            <p class="font-body-md text-gray-600 text-sm mt-0.5">
                                                {{ $log->comment }}
                                            </p>
                                        @endif
                                        
                                        <!-- Waktu Pembaruan Status -->
                                        <p class="font-body-sm text-gray-400 text-xs mt-1">
                                            {{ $log->created_at->diffForHumans() }}
                                        </p>
                                    </div>
                                </div>
                            @empty
                                <!-- Tampilan jika belum ada aktivitas tracking -->
                                <div class="flex flex-col items-center justify-center py-6 text-center border border-dashed border-gray-200 rounded-lg">
                                    <span class="material-symbols-outlined text-gray-300 text-4xl mb-2">history</span>
                                    <p class="text-sm text-gray-500">No status updates yet.</p>
                                </div>
                            @endforelse
                        </div>
                    </div>
                     <!-- Feedback Card -->
                     <div class="mt-12 p-6 bg-white rounded-xl border border-outline-variant/20 shadow-sm">
                        <p class="font-label-caps text-label-caps text-outline mb-4">Customer Satisfaction</p>
                        <div class="flex gap-2"><span class="material-symbols-outlined text-electric-blue" style="font-variation-settings: 'FILL' 1;">star</span><span class="material-symbols-outlined text-electric-blue" style="font-variation-settings: 'FILL' 1;">star</span><span class="material-symbols-outlined text-electric-blue" style="font-variation-settings: 'FILL' 1;">star</span><span class="material-symbols-outlined text-electric-blue" style="font-variation-settings: 'FILL' 1;">star</span><span class="material-symbols-outlined text-outline">star</span></div>
                        <button class="mt-6 w-full py-3 bg-transparent border border-outline-variant hover:border-electric-blue text-surface-dim font-label-caps text-label-caps transition-all duration-300 rounded-lg">View Details</button>
                     </div>
                  </div>
               </div>
            </div>
         </div>
@endsection