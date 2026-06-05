{{-- resources/views/auth/register.blade.php --}}
@extends('layouts.app')

@section('content')
<div class="fixed inset-0 z-50 bg-gray-100 flex items-center justify-center md:p-6 overflow-y-auto">    
    <div class="bg-white w-full max-w-full md:max-w-6xl min-h-screen md:min-h-[650px] md:rounded-2xl md:shadow-2xl overflow-hidden flex flex-col md:flex-row my-auto">    
        <div class="w-full md:w-3/5 p-8 sm:p-12 flex flex-col justify-center items-center bg-white">    
            <div class="text-center mb-4">
                <span class="text-2xl font-black text-blue-600 tracking-tight flex items-center justify-center gap-1">
                    💻 TECH-FIX
                </span>
            </div>

            <h2 class="text-2xl sm:text-3xl font-extrabold text-gray-900 mb-2 text-center">Sign in to your account</h2>
            <p class="text-gray-500 text-center mb-6 text-sm">Log in to submit laptop service tickets</p>

            <div class="flex gap-3 w-full max-w-md mb-6">
                <a href="#" class="flex-1 flex items-center justify-center gap-2 px-4 py-2.5 border border-gray-300 rounded-lg text-gray-700 hover:bg-gray-50 transition-all text-sm font-medium shadow-sm">
                    <svg class="w-5 h-5 text-blue-600" fill="currentColor" viewBox="0 0 24 24"><path d="M24 12.073c0-6.627-5.373-12-12-12S0 5.446 0 12.073c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/></svg>
                    Facebook
                </a>
                <a href="#" class="flex-1 flex items-center justify-center gap-2 px-4 py-2.5 border border-gray-300 rounded-lg text-gray-700 hover:bg-gray-50 transition-all text-sm font-medium shadow-sm">
                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M22.56 12.25c0-.78-.07-1.53-.2-2.25H12v4.26h5.92a5.06 5.06 0 01-2.2 3.32v2.77h3.57c2.08-1.92 3.28-4.74 3.28-8.1z" fill="#4285F4"/><path d="M12 23c2.97 0 5.46-.98 7.28-2.66l-3.57-2.77c-.98.66-2.23 1.06-3.71 1.06-2.86 0-5.29-1.93-6.16-4.53H2.18v2.84C3.99 20.53 7.7 23 12 23z" fill="#34A853"/><path d="M5.84 14.09c-.22-.66-.35-1.36-.35-2.09s.13-1.43.35-2.09V7.07H2.18C1.43 8.55 1 10.22 1 12s.43 3.45 1.18 4.93l2.85-2.22.81-.62z" fill="#FBBC05"/><path d="M12 5.38c1.62 0 3.06.56 4.21 1.64l3.15-3.15C17.45 2.09 14.97 1 12 1 7.7 1 3.99 3.47 2.18 7.07l3.66 2.84c.87-2.6 3.3-4.53 6.16-4.53z" fill="#EA4335"/></svg>
                    Google
                </a>
            </div>

            <form method="POST" action="{{ route('login') }}" class="w-full max-w-md lg:max-w-xl space-y-4">
                @csrf

                @include('auth.partials.fields-login')

                <div class="pt-2 flex justify-center">
                    <button type="submit" class="w-full bg-blue-600 text-white py-3 rounded-lg hover:bg-blue-700 font-bold transition-all shadow-md active:scale-95 text-center">
                        Sign in
                    </button>
                </div>
            </form>
            
            <p class="mt-6 text-sm text-gray-600 text-center">
                Don't have an account?
                <a href="{{ route('register') }}" class="text-blue-600 hover:underline font-bold">Sign up</a>
            </p>
        </div>

        <div class="hidden md:flex md:w-2/5 bg-slate-100 p-10 flex-col justify-center items-center border-l border-gray-200 group relative overflow-hidden">
            <div class="absolute -top-10 -right-10 w-40 h-40 bg-blue-100 rounded-full opacity-40"></div>
            <div class="absolute -bottom-10 -left-10 w-40 h-40 bg-orange-100 rounded-full opacity-40"></div>
            
            <div class="w-full max-w-xs mb-8 transform transition-transform duration-500 group-hover:scale-105 group-hover:-translate-y-2 relative z-10">
                <svg class="w-full h-auto text-blue-500" viewBox="0 0 200 200" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <rect x="20" y="40" width="160" height="100" rx="6" fill="#3B82F6" fill-opacity="0.15" stroke="#3B82F6" stroke-width="4"/>
                    <line x1="10" y1="140" x2="190" y2="140" stroke="#3B82F6" stroke-width="6" stroke-linecap="round"/>
                    <line x1="85" y1="140" x2="75" y2="160" stroke="#3B82F6" stroke-width="4"/>
                    <line x1="115" y1="140" x2="125" y2="160" stroke="#3B82F6" stroke-width="4"/>
                    <rect x="60" y="160" width="80" height="6" rx="3" fill="#3B82F6"/>
                    <circle cx="100" cy="90" r="15" stroke="#3B82F6" stroke-width="4" stroke-dasharray="4 4"/>
                </svg>
            </div>
            
            <div class="text-center max-w-sm relative z-10">
                <h3 class="text-xl font-bold text-gray-900 mb-2 transition-colors group-hover:text-blue-600">
                    Laptop rusak & mengganggu kerja?
                </h3>
                <p class="text-gray-600 text-sm leading-relaxed">
                    Tech-Fix membantu kamu mendata kerusakan, memantau proses servis secara langsung, hingga sistem pembayaran yang transparan.
                </p>
            </div>
        </div>

    </div>
</div>
@endsection
