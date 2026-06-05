<!DOCTYPE html>
<html class="dark" lang="en" style="">
   <head>
      <meta charset="utf-8">
      <meta content="width=device-width, initial-scale=1.0" name="viewport">
      <title>Ticket Details | QUANTUM Support</title>
      <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
      <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600&amp;family=Montserrat:wght@600;700&amp;family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet">
      <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet">
      <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&amp;family=Montserrat:wght@100..900&amp;display=swap" rel="stylesheet">
      <script id="tailwind-config">
         tailwind.config = {
           darkMode: "class",
           theme: {
             extend: {
               "colors": {
                   "surface-variant": "#353437",
                   "on-primary": "#002f65",
                   "surface-container": "#1f1f21",
                   "primary-container": "#0066cc",
                   "on-error-container": "#ffdad6",
                   "inverse-primary": "#005cba",
                   "on-primary-fixed-variant": "#00458e",
                   "primary-fixed": "#d7e3ff",
                   "surface-tint": "#aac7ff",
                   "inverse-on-surface": "#303032",
                   "on-tertiary-fixed": "#1a1c1d",
                   "secondary-fixed-dim": "#c7c6cb",
                   "on-error": "#690005",
                   "surface": "#131315",
                   "electric-blue": "#007AFF",
                   "secondary-container": "#46464b",
                   "on-background": "#e4e2e4",
                   "surface-container-highest": "#353437",
                   "surface-bright": "#39393b",
                   "on-primary-fixed": "#001b3e",
                   "surface-dark": "#1D1D1F",
                   "on-surface": "#e4e2e4",
                   "secondary": "#c7c6cb",
                   "on-tertiary": "#2f3132",
                   "surface-container-high": "#2a2a2c",
                   "on-secondary": "#2f3034",
                   "on-surface-variant": "#c1c6d5",
                   "error": "#ffb4ab",
                   "primary": "#aac7ff",
                   "on-tertiary-container": "#e8e8ea",
                   "surface-container-lowest": "#0e0e10",
                   "inverse-surface": "#e4e2e4",
                   "tertiary-fixed": "#e2e2e4",
                   "tertiary": "#c6c6c8",
                   "tertiary-container": "#67686a",
                   "on-secondary-container": "#b5b4ba",
                   "error-container": "#93000a",
                   "background": "#131315",
                   "surface-dim": "#131315",
                   "on-primary-container": "#dfe8ff",
                   "primary-fixed-dim": "#aac7ff",
                   "surface-container-low": "#1b1b1d",
                   "deep-charcoal": "#121212",
                   "secondary-fixed": "#e3e2e7",
                   "outline-variant": "#414753",
                   "outline": "#8b919e",
                   "sleek-silver": "#E8E8ED",
                   "on-tertiary-fixed-variant": "#454749",
                   "on-secondary-fixed": "#1a1b1f",
                   "tertiary-fixed-dim": "#c6c6c8",
                   "on-secondary-fixed-variant": "#46464b"
               },
               "borderRadius": {
                   "DEFAULT": "0.125rem",
                   "lg": "0.25rem",
                   "xl": "0.5rem",
                   "full": "0.75rem"
               },
               "spacing": {
                   "stack-sm": "8px",
                   "margin-mobile": "20px",
                   "container-max": "1440px",
                   "stack-lg": "32px",
                   "stack-md": "16px",
                   "section-gap": "120px",
                   "margin-desktop": "80px",
                   "gutter": "24px"
               },
               "fontFamily": {
                   "body-lg": ["Inter"],
                   "body-md": ["Inter"],
                   "display-lg": ["Montserrat"],
                   "label-caps": ["Inter"],
                   "headline-xl": ["Montserrat"],
                   "headline-lg": ["Montserrat"],
                   "display-lg-mobile": ["Montserrat"]
               },
               "fontSize": {
                   "body-lg": ["18px", {"lineHeight": "28px", "fontWeight": "400"}],
                   "body-md": ["16px", {"lineHeight": "24px", "fontWeight": "400"}],
                   "display-lg": ["64px", {"lineHeight": "72px", "letterSpacing": "-0.02em", "fontWeight": "700"}],
                   "label-caps": ["12px", {"lineHeight": "16px", "letterSpacing": "0.05em", "fontWeight": "600"}],
                   "headline-xl": ["48px", {"lineHeight": "56px", "fontWeight": "600"}],
                   "headline-lg": ["32px", {"lineHeight": "40px", "fontWeight": "600"}],
                   "display-lg-mobile": ["40px", {"lineHeight": "48px", "letterSpacing": "-0.01em", "fontWeight": "700"}]
               }
             }
           }
         }
      </script>
      <style>
         .material-symbols-outlined {
         font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24;
         }
         .timeline-dot::before {
         content: '';
         position: absolute;
         left: 11.5px;
         top: 24px;
         bottom: -24px;
         width: 1px;
         background-color: #414753;
         }
         .timeline-dot:last-child::before {
         display: none;
         }
      </style>
   </head>
   <body class="min-h-screen font-body-md overflow-x-hidden bg-white text-surface-dim">
    <!-- BEGIN: MainHeader -->
    <header class="bg-[#0f172a] text-white py-3 px-6 flex justify-between items-center z-10" data-purpose="top-navigation-bar">
        <div class="flex items-center space-x-2">
            <!-- Logo/Brand Name -->
            <img src="/logo.png" alt="{{ config('app.name') }}">
            <h1 class="text-xl font-bold tracking-tight">{{ config('app.name') }}</h1>
        </div>
        <!-- User Profile & Actions -->
        <div class="flex items-center space-x-6 text-sm">
            <span class="opacity-90">{{ auth()->user()->name }} ({{ ucfirst(auth()->user()->role) }})</span>
            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <button class="hover:text-sky-400 transition-colors cursor-pointer">Logout</button>
            </form>
        </div>
    </header>
    <!-- END: MainHeader -->
    <!-- BEGIN: DashboardLayout -->
    <div class="flex flex-1 overflow-hidden" data-purpose="main-layout-container">
    <!-- BEGIN: Sidebar -->
        <aside class="w-64 bg-white border-r border-slate-200 py-6" data-purpose="sidebar-navigation">
            <nav class="space-y-1">
            <!-- Dashboard Link -->
                <a class="flex items-center px-6 py-3 text-slate-600 hover:bg-slate-50 transition-colors group" href="/client/dashboard">
                    <svg class="w-5 h-5 mr-3 text-slate-400 group-hover:text-slate-600" fill="none" stroke="currentColor" viewbox="0 0 24 24">
                    <path d="M4 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2V6zM14 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V6zM4 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2v-2zM14 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"></path>
                    </svg>
                    <span class="font-medium">Dashboard</span>
                </a>
                <!-- Active Link: My Tickets -->
                <a class="flex items-center px-6 py-3 bg-sky-50 text-sky-700 border-r-4 border-sky-600 group" href="/client/tickets">
                    <svg class="w-5 h-5 mr-3 text-sky-600" fill="none" stroke="currentColor" viewbox="0 0 24 24">
                    <path d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"></path>
                    </svg>
                    <span class="font-semibold">My Tickets</span>
                </a>
                <!-- Profile -->
                <!-- <a class="flex items-center px-6 py-3 text-slate-600 hover:bg-slate-50 transition-colors group" href="#">
                    <svg class="w-5 h-5 mr-3 text-slate-400 group-hover:text-slate-600" fill="none" stroke="currentColor" viewbox="0 0 24 24">
                    <path d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"></path>
                    </svg>
                    <span class="font-medium">Profile</span>
                </a> -->
                <!-- Support -->
                <!-- <a class="flex items-center px-6 py-3 text-slate-600 hover:bg-slate-50 transition-colors group" href="#">
                    <svg class="w-5 h-5 mr-3 text-slate-400 group-hover:text-slate-600" fill="none" stroke="currentColor" viewbox="0 0 24 24">
                    <path d="M8.228 9c.549-1.165 2.03-2 3.772-2 2.21 0 4 1.343 4 3 0 1.4-1.278 2.575-3.006 2.907-.542.104-.994.54-.994 1.093m0 3h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"></path>
                    </svg>
                    <span class="font-medium">Support</span>
                </a> -->
                <!-- Settings -->
                <!-- <a class="flex items-center px-6 py-3 text-slate-600 hover:bg-slate-50 transition-colors group" href="#">
                    <svg class="w-5 h-5 mr-3 text-slate-400 group-hover:text-slate-600" fill="none" stroke="currentColor" viewbox="0 0 24 24">
                    <path d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"></path>
                    <path d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"></path>
                    </svg>
                    <span class="font-medium">Settings</span>
                </a> -->
            </nav>
        </aside>
        <!-- END: Sidebar -->
        <!-- BEGIN: MainContent -->
      <!-- TopNavBar -->
      <main class="pt-32 pb-section-gap px-margin-mobile md:px-margin-desktop max-w-container-max mx-auto">
            @if (session('success'))
                <div class="mb-4 bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded">
                    {{ session('success') }}
                </div>
            @endif

            @if ($errors->any())
                <div class="mb-4 bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded">
                    <ul class="list-disc list-inside">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif   
            @yield('content')
      </main>
      <script>
         // Subtle micro-interactions
         document.querySelectorAll('.group').forEach(item => {
             item.addEventListener('mouseenter', () => {
                 const icon = item.querySelector('.material-symbols-outlined');
                 if (icon) icon.style.transition = 'transform 0.3s cubic-bezier(0.34, 1.56, 0.64, 1)';
             });
         });
         
         // Sticky header opacity on scroll
         window.addEventListener('scroll', () => {
             const header = document.querySelector('header');
             if (window.scrollY > 20) {
                 header.classList.add('shadow-xl');
                 header.style.backgroundColor = 'rgba(19, 19, 21, 0.95)';
             } else {
                 header.classList.remove('shadow-xl');
                 header.style.backgroundColor = 'rgba(19, 19, 21, 0.8)';
             }
         });
      </script>
   </body>
</html>