@extends('layouts.guest')

@section('auth-title', 'Confirm Password')
@section('auth-subtitle', 'Please confirm your password before continuing')

@section('auth-content')
<!-- Session Status -->
@if (session('status'))
    <div class="mb-4 p-4 bg-white/10 rounded-lg text-white/80 text-center">
        {{ session('status') }}
    </div>
@endif

@if (session('message'))
    <div class="mb-4 p-4 bg-white/10 rounded-lg text-white/80 text-center">
        {{ session('message') }}
    </div>
@endif

<form method="POST" action="{{ route('password.confirm') }}" class="auth-form w-full">
    @csrf

    <div class="form-group mb-6">
        <p class="text-white/80 mb-6 leading-relaxed">
            This is a secure area of the application. Please confirm your password before continuing.
        </p>
    </div>

    <!-- Password -->
    <div class="form-group mb-6">
        <label for="password" class="block text-light font-semibold mb-2 text-sm">Password</label>
        <input id="password" type="password" name="password" required autocomplete="current-password" placeholder="Enter your password" class="w-full px-4 py-3 border-2 border-white/10 rounded-lg bg-white/5 text-light font-medium transition-all duration-300 focus:outline-none focus:border-gold focus:ring-2 focus:ring-gold/20">
        @error('password')
            <div class="error-message text-red-500 text-xs mt-2">{{ $message }}</div>
        @enderror
    </div>

    <div class="auth-links flex justify-between items-center mt-6 mb-8">
        <a href="{{ route('login') }}" class="text-gold text-sm font-medium hover:text-light transition-colors duration-300">Back to login</a>
        <span></span>
    </div>

    <button type="submit" class="btn-primary w-full py-3 px-6 bg-gradient-teal-gold text-dark-gray font-semibold rounded-full transition-all duration-300 hover:-translate-y-1 hover:shadow-lg">
        Confirm Password
    </button>
</form>
@endsection
