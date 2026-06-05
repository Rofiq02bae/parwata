{{-- resources/views/auth/partials/fields.blade.php --}}
<div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
    
    <div class="sm:col-span-2">
        <div class="relative">
            <input type="text" name="name" id="name" value="{{ old('name') }}" required placeholder="Full Name"
                class="w-full pl-4 pr-3 py-2.5 border border-gray-800 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 bg-gray-50/50 focus:bg-white transition-all @error('name') border-red-500 @enderror">
        </div>
        @error('name')<p class="text-red-500 text-xs mt-1 px-1">{{ $message }}</p>@enderror
    </div>

    <div class="sm:col-span-2">
        <input type="email" name="email" id="email" value="{{ old('email') }}" required placeholder="Email Address"
            class="w-full px-4 py-2.5 border border-gray-800 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 bg-gray-50/50 focus:bg-white transition-all @error('email') border-red-500 @enderror">
        @error('email')<p class="text-red-500 text-xs mt-1 px-1">{{ $message }}</p>@enderror
    </div>

    <div>
        <input type="password" name="password" id="password" required placeholder="Password"
            class="w-full px-4 py-2.5 border border-gray-800 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 bg-gray-50/50 focus:bg-white transition-all @error('password') border-red-500 @enderror">
        @error('password')<p class="text-red-500 text-xs mt-1 px-1">{{ $message }}</p>@enderror
    </div>

    <div>
        <input type="password" name="password_confirmation" id="password_confirmation" required placeholder="Confirm Password"
            class="w-full px-4 py-2.5 border border-gray-800 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 bg-gray-50/50 focus:bg-white transition-all">
    </div>

    <div class="sm:col-span-2">
        <input type="text" name="phone_number" id="phone_number" value="{{ old('phone_number') }}" placeholder="Phone Number (e.g. 08123456789)"
            class="w-full px-4 py-2.5 border border-gray-800 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 bg-gray-50/50 focus:bg-white transition-all @error('phone_number') border-red-500 @enderror">
        @error('phone_number')<p class="text-red-500 text-xs mt-1 px-1">{{ $message }}</p>@enderror
    </div>

    <div class="sm:col-span-2">
        <textarea name="address" id="address" rows="2" placeholder="Your Complete Address"
            class="w-full px-4 py-2.5 border border-gray-800 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 bg-gray-50/50 focus:bg-white transition-all @error('address') border-red-500 @enderror">{{ old('address') }}</textarea>
        @error('address')<p class="text-red-500 text-xs mt-1 px-1">{{ $message }}</p>@enderror
    </div>

</div>