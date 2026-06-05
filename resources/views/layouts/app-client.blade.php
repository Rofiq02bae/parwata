<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8"/>
    <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
    <title>{{ config('app.name') }}</title>
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet"/>
    <style>
        body { font-family: 'Inter', sans-serif; background-color: #f8fafc; }
        .card-shadow { box-shadow: 0 4px 20px -2px rgba(0, 0, 0, 0.05); }
    </style>
</head>
<body class="min-h-screen flex flex-col">
    <header class="bg-[#0f172a] text-white py-3 px-6 flex justify-between items-center z-10">
        <div class="flex items-center space-x-2">
            <img src="/logo.png" alt="{{ config('app.name') }}">
            <h1 class="text-xl font-bold tracking-tight">{{ config('app.name') }}</h1>
        </div>
        <div class="flex items-center space-x-6 text-sm">
            @auth
                <span class="opacity-90">{{ auth()->user()->name }} ({{ ucfirst(auth()->user()->role) }})</span>
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button class="hover:text-sky-400 transition-colors cursor-pointer">Logout</button>
                </form>
            @endauth
        </div>
    </header>
    <div class="flex flex-1 overflow-hidden">
        <aside class="w-64 bg-white border-r border-slate-200 py-6">
            <nav class="space-y-1">
                <a class="flex items-center px-6 py-3 text-slate-600 hover:bg-slate-50 transition-colors group {{ request()->routeIs('client.dashboard') ? 'bg-sky-50 text-sky-700 border-r-4 border-sky-600' : '' }}" href="{{ route('client.dashboard') }}">
                    <svg class="w-5 h-5 mr-3 text-slate-400 group-hover:text-slate-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path d="M4 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2V6zM14 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V6zM4 16a2 2 0 012-2h2a2 2 0 012 2v2a２ ２ ０ ０１－２ ２Ｈ６ａ２ ２ ０ ０１－２－２ｖ－２ｚ" stroke-linecap="round" stroke-linejoin="round" stroke-width="２"/>
                    </svg>
                    <span class="font-medium">Dashboard</span>
                </a>
                <a class="flex items-center px-6 py-3 text-slate-600 hover:bg-slate-50 transition-colors group {{ request()->routeIs('client.tickets.*') ? 'bg-sky-50 text-sky-700 border-r-4 border-sky-600' : '' }}" href="{{ route('client.tickets.index') }}">
                    <svg class="w-5 h-5 mr-3 text-slate-400 group-hover:text-slate-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"/>
                    </svg>
                    <span class="font-medium">My Tickets</span>
                </a>
            </nav>
        </aside>
        <main class="flex-1 overflow-y-auto p-10">
            @if (session('success'))
                <div class="mb-4 bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded">{{ session('success') }}</div>
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
    </div>
</body>
</html>