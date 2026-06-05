{{-- resources/views/auth/partials/fields-login.blade.php --}}
<div class="grid grid-cols-1 gap-4">
    <div>
        <input type="email" name="email" id="email" value="{{ old('email') }}" required placeholder="Email Address"
            class="w-full px-4 py-2.5 border border-gray-800 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 bg-gray-50/50 focus:bg-white transition-all @error('email') border-red-500 @enderror">
        @error('email')<p class="text-red-500 text-xs mt-1 px-1">{{ $message }}</p>@enderror
    </div>

    <div>
        <input type="password" name="password" id="password" required placeholder="Password"
            class="w-full px-4 py-2.5 border border-gray-800 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 bg-gray-50/50 focus:bg-white transition-all @error('password') border-red-500 @enderror">
        @error('password')<p class="text-red-500 text-xs mt-1 px-1">{{ $message }}</p>@enderror
    </div>
</div>
