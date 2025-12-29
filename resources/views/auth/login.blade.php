@extends('layouts.guest')

@section('auth-title', 'Welcome Back')
@section('auth-subtitle', 'Sign in to your account to continue your journey')

@section('caption-title', 'Ready to Rise?')
@section('caption-text', 'Continue your digital transformation journey. Access your personalized dashboard, track your progress, and connect with mentors who believe in your potential.')

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
        <span class="relative z-10 bg-dark-gray/95 px-4">Continue with</span>
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
    <span class="relative z-10 bg-dark-gray/95 px-4 text-white/60 text-sm">or continue with email</span>
    <span class="absolute top-1/2 left-0 right-0 h-px bg-white/20"></span>
</div>

<form method="POST" action="{{ route('login') }}" class="auth-form w-full">
    @csrf

    <!-- Email Address -->
    <div class="form-group mb-6">
        <label for="email" class="block text-light font-semibold mb-2 text-sm">Email Address</label>
        <input id="email" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" placeholder="Enter your email" class="w-full px-4 py-3 border-2 border-white/10 rounded-lg bg-white/5 text-light font-medium transition-all duration-300 focus:outline-none focus:border-gold focus:ring-2 focus:ring-gold/20">
        @error('email')
            <div class="error-message text-red-500 text-xs mt-2">{{ $message }}</div>
        @enderror
    </div>

    <!-- Password -->
    <div class="form-group mb-6">
        <label for="password" class="block text-light font-semibold mb-2 text-sm">Password</label>
        <input id="password" type="password" name="password" required autocomplete="current-password" placeholder="Enter your password" class="w-full px-4 py-3 border-2 border-white/10 rounded-lg bg-white/5 text-light font-medium transition-all duration-300 focus:outline-none focus:border-gold focus:ring-2 focus:ring-gold/20">
        @error('password')
            <div class="error-message text-red-500 text-xs mt-2">{{ $message }}</div>
        @enderror
    </div>

    <!-- Remember Me -->
    <div class="form-group mb-6">
        <label class="checkbox-label flex items-center text-white/80 text-sm font-medium">
            <input type="checkbox" name="remember" class="mr-2">
            <span>Remember me</span>
        </label>
    </div>

    <div class="auth-links flex justify-between items-center mt-6 mb-8">
        @if (Route::has('password.request'))
            <a href="{{ route('password.request') }}" class="text-gold text-sm font-medium hover:text-light transition-colors duration-300">Forgot your password?</a>
        @endif
        <a href="{{ route('register') }}" class="text-gold text-sm font-medium hover:text-light transition-colors duration-300">Don't have an account?</a>
    </div>

    <button type="submit" class="btn-primary w-full py-3 px-6 bg-gradient-teal-gold text-dark-gray font-semibold rounded-full transition-all duration-300 hover:-translate-y-1 hover:shadow-lg">
        Sign In
    </button>
</form>
@endsection
