@extends('layouts.guest')

@section('auth-title', 'Join Aethryna')
@section('auth-subtitle', 'Create your account and start your digital transformation journey')

@section('caption-title', 'Your Future Starts Here')
@section('caption-text', 'Be part of a community that empowers youth through technology. Get access to expert mentorship, cutting-edge courses, and real-world opportunities that will shape your career.')

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

<!-- Social Login -->
<div class="social-login mb-8">
    <div class="social-login-title relative text-center text-white/80 text-sm mb-4">
        <span class="relative z-10 bg-dark-gray/95 px-4">Sign up with</span>
        <span class="absolute top-1/2 left-0 right-0 h-px bg-white/20"></span>
    </div>
    <div class="social-buttons flex gap-3 mb-8">
        <a href="#" class="social-btn google flex-1 flex items-center justify-center gap-2 px-3.5 py-3 border-2 border-white/20 rounded-lg bg-white/5 text-light font-medium transition-all duration-300 hover:border-red-500 hover:bg-red-500/10 hover:-translate-y-1 hover:shadow-lg backdrop-blur-sm">
            <i class="fab fa-google text-xl"></i>
            <span>Google</span>
        </a>
        <a href="#" class="social-btn linkedin flex-1 flex items-center justify-center gap-2 px-3.5 py-3 border-2 border-white/20 rounded-lg bg-white/5 text-light font-medium transition-all duration-300 hover:border-blue-600 hover:bg-blue-600/10 hover:-translate-y-1 hover:shadow-lg backdrop-blur-sm">
            <i class="fab fa-linkedin-in text-xl"></i>
            <span>LinkedIn</span>
        </a>
    </div>
</div>

<!-- Divider -->
<div class="divider relative text-center my-8">
    <span class="relative z-10 bg-dark-gray/95 px-4 text-white/60 text-sm">or create account with email</span>
    <span class="absolute top-1/2 left-0 right-0 h-px bg-white/20"></span>
</div>

<form method="POST" action="{{ route('register') }}" class="auth-form w-full">
    @csrf

    <!-- Name -->
    <div class="form-group mb-6">
        <label for="name" class="block text-light font-semibold mb-2 text-sm">Full Name</label>
        <input id="name" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" placeholder="Enter your full name" class="w-full px-4 py-3 border-2 border-white/10 rounded-lg bg-white/5 text-light font-medium transition-all duration-300 focus:outline-none focus:border-gold focus:ring-2 focus:ring-gold/20">
        @error('name')
            <div class="error-message text-red-500 text-xs mt-2">{{ $message }}</div>
        @enderror
    </div>

    <!-- Email Address -->
    <div class="form-group mb-6">
        <label for="email" class="block text-light font-semibold mb-2 text-sm">Email Address</label>
        <input id="email" type="email" name="email" :value="old('email')" required autocomplete="username" placeholder="Enter your email" class="w-full px-4 py-3 border-2 border-white/10 rounded-lg bg-white/5 text-light font-medium transition-all duration-300 focus:outline-none focus:border-gold focus:ring-2 focus:ring-gold/20">
        @error('email')
            <div class="error-message text-red-500 text-xs mt-2">{{ $message }}</div>
        @enderror
    </div>

    <!-- Password -->
    <div class="form-group mb-6">
        <label for="password" class="block text-light font-semibold mb-2 text-sm">Password</label>
        <input id="password" type="password" name="password" required autocomplete="new-password" placeholder="Create a password" class="w-full px-4 py-3 border-2 border-white/10 rounded-lg bg-white/5 text-light font-medium transition-all duration-300 focus:outline-none focus:border-gold focus:ring-2 focus:ring-gold/20">
        @error('password')
            <div class="error-message text-red-500 text-xs mt-2">{{ $message }}</div>
        @enderror
    </div>

    <!-- Confirm Password -->
    <div class="form-group mb-6">
        <label for="password_confirmation" class="block text-light font-semibold mb-2 text-sm">Confirm Password</label>
        <input id="password_confirmation" type="password" name="password_confirmation" required autocomplete="new-password" placeholder="Confirm your password" class="w-full px-4 py-3 border-2 border-white/10 rounded-lg bg-white/5 text-light font-medium transition-all duration-300 focus:outline-none focus:border-gold focus:ring-2 focus:ring-gold/20">
        @error('password_confirmation')
            <div class="error-message text-red-500 text-xs mt-2">{{ $message }}</div>
        @enderror
    </div>

    <div class="auth-links flex justify-between items-center mt-6 mb-8">
        <a href="{{ route('login') }}" class="text-gold text-sm font-medium hover:text-light transition-colors duration-300">Already have an account?</a>
        <span></span>
    </div>

    <button type="submit" class="btn-primary w-full py-3 px-6 bg-gradient-teal-gold text-dark-gray font-semibold rounded-full transition-all duration-300 hover:-translate-y-1 hover:shadow-lg">
        Create Account
    </button>
</form>
@endsection
