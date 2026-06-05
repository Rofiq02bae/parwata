<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ config('app.name') }}</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
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
            @auth
                <span class="opacity-90">{{ auth()->user()->name }} ({{ ucfirst(auth()->user()->role) }})</span>
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button class="hover:text-sky-400 transition-colors cursor-pointer">Logout</button>
                </form>
            @endauth
        </div>
    </header>
    <!-- END: MainHeader -->

    <main class="max-w-7xl mx-auto py-6 sm:px-6 lg:px-8">
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
</body>
</html>
