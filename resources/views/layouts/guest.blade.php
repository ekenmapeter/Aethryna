<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Primary Meta Tags -->
    <title>@yield('title', 'Aethryna | Empowering Youth Through Digital Skills & Mentorship')</title>
    <meta name="title" content="@yield('meta_title', 'Aethryna | Empowering Youth Through Digital Skills & Mentorship')">
    <meta name="description" content="@yield('meta_description', 'Aethryna Foundation transforms young lives through digital skills training, mentorship programs, and career pathways in tech. Join our mission to empower the next generation.')">
    <meta name="keywords" content="@yield('meta_keywords', 'youth empowerment, digital skills training, tech mentorship, career development, nonprofit organization, coding bootcamp, web development, IT support, digital design')">
    <meta name="author" content="Aethryna Foundation">
    <meta name="robots" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1">

    <!-- Canonical URL -->
    <link rel="canonical" href="{{ url()->current() }}">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

    <!-- Favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
    <link rel="manifest" href="/site.webmanifest">

    <!-- Scripts -->
    @if(app()->environment('local'))
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    @else
        <!-- Production assets -->
        <script src="https://cdn.tailwindcss.com"></script>
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        <link rel="stylesheet" href="{{ asset('css/aethryna.css') }}">
    @endif

    @stack('styles')
        <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

</head>
<body class="font-sans antialiased bg-dark-gray text-light">
    <!-- Navigation -->
    @include('layouts.navigation')
    <div class="pt-20"></div>
    <!-- Auth Page Hero Section -->
    <section class="min-h-screen bg-gradient-to-b from-dark-gray/90 to-teal/30 bg-cover bg-center bg-fixed flex items-center justify-center relative overflow-hidden pt-20 text-light" style="background-image: url('https://plus.unsplash.com/premium_photo-1681494370365-6bc631f820e9?q=80&w=870&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D')">

        <!-- Floating Shapes -->
        <div class="absolute inset-0 pointer-events-none">
            <div class="absolute w-20 h-20 rounded-full bg-gradient-to-br from-teal to-gold opacity-10 animate-float" style="top: 10%; left: 10%; animation-delay: 0s;"></div>
            <div class="absolute w-15 h-15 rounded-full bg-gradient-to-br from-teal to-gold opacity-10 animate-float" style="top: 20%; right: 15%; animation-delay: 2s;"></div>
            <div class="absolute w-25 h-25 rounded-full bg-gradient-to-br from-teal to-gold opacity-10 animate-float" style="bottom: 15%; left: 20%; animation-delay: 4s;"></div>
        </div>

        <div class="auth-hero-content w-full">
            <div class="auth-container max-w-6xl mx-auto px-2 w-full">
                <div class="auth-wrapper grid grid-cols-1 lg:grid-cols-2 gap-16 lg:gap-16 items-stretch min-h-[calc(100vh-80px)] w-full">

                    <!-- Auth Form Section -->
                    <div class="auth-form-section flex justify-center items-center">
                        <div class="auth-card bg-dark-gray/95 backdrop-blur-custom rounded-xl p-12 shadow-lg border border-white/10 w-full max-w-md h-fit flex flex-col">
                            <div class="auth-header text-center mb-8">
                                <h1 class="text-4xl font-extrabold mb-4 bg-gradient-teal-gold bg-clip-text text-transparent">@yield('auth-title', 'Welcome Back')</h1>
                                <p class="text-white/80 text-lg leading-relaxed">@yield('auth-subtitle', 'Sign in to your account to continue your journey')</p>
                            </div>

                            @yield('auth-content')
                        </div>
                    </div>

                    <!-- Auth Caption Section -->
                    <div class="auth-caption-section flex justify-center items-center py-8 lg:order-2">
                        <div class="auth-caption text-center text-light max-w-md">
                            <h2 class="text-5xl font-extrabold mb-6 text-gradient">@yield('caption-title', 'Transform Your Future')</h2>
                            <p class="text-xl leading-relaxed text-white/90 mb-8">@yield('caption-text', 'Join thousands of youth who have discovered their potential through our digital skills programs and mentorship opportunities.')</p>
                            <div class="caption-stats flex justify-around gap-8 mt-8">
                                <div class="stat-item text-center">
                                    <span class="stat-number block text-4xl font-extrabold text-gold mb-2" style="text-shadow: 0 0 20px rgba(232, 182, 71, 0.3);">500+</span>
                                    <span class="stat-label text-sm text-white/70 font-medium">Students Trained</span>
                                </div>
                                <div class="stat-item text-center">
                                    <span class="stat-number block text-4xl font-extrabold text-gold mb-2" style="text-shadow: 0 0 20px rgba(232, 182, 71, 0.3);">95%</span>
                                    <span class="stat-label text-sm text-white/70 font-medium">Success Rate</span>
                                </div>
                                <div class="stat-item text-center">
                                    <span class="stat-number block text-4xl font-extrabold text-gold mb-2" style="text-shadow: 0 0 20px rgba(232, 182, 71, 0.3);">50+</span>
                                    <span class="stat-label text-sm text-white/70 font-medium">Partner Companies</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    @stack('scripts')
</body>
</html>
