@extends('layouts.guest')

@section('auth-title', 'Verify Your Email')
@section('auth-subtitle', 'Please verify your email address to continue')

@section('auth-content')
<!-- Session Status -->
@if (session('status') == 'verification-link-sent')
    <div class="mb-4 p-4 bg-white/10 rounded-lg text-white/80 text-center">
        A new verification link has been sent to the email address you provided during registration.
    </div>
@endif

@if (session('message'))
    <div class="mb-4 p-4 bg-white/10 rounded-lg text-white/80 text-center">
        {{ session('message') }}
    </div>
@endif

<div class="auth-form">
    <div class="form-group mb-8">
        <p class="text-white/80 mb-6 leading-relaxed">
            Thanks for signing up! Before getting started, could you verify your email address by clicking on the link we just emailed to you? If you didn't receive the email, we will gladly send you another.
        </p>
    </div>

    <div class="flex gap-4 items-center">
        <form method="POST" action="{{ route('verification.send') }}" class="flex-1">
            @csrf
            <button type="submit" class="btn-primary w-full py-3 px-6 bg-gradient-teal-gold text-dark-gray font-semibold rounded-full transition-all duration-300 hover:-translate-y-1 hover:shadow-lg">
                Resend Verification Email
            </button>
        </form>

        <form method="POST" action="{{ route('logout') }}" class="flex-1">
            @csrf
            <button type="submit" class="w-full py-3 px-6 bg-transparent border-2 border-gold text-gold font-semibold rounded-full transition-all duration-300 hover:bg-gold/10 hover:text-light">
                Log Out
            </button>
        </form>
    </div>
</div>
@endsection
