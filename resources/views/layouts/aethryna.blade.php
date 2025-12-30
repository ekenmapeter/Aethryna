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

    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:title" content="@yield('og_title', 'Aethryna | Empowering Youth Through Digital Skills & Mentorship')">
    <meta property="og:description" content="@yield('og_description', 'Transform young lives through digital skills training and mentorship programs. Join Aethryna Foundation\'s mission to create tech career pathways for youth.')">
    <meta property="og:image" content="@yield('og_image', asset('images/og-image.png'))">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="630">
    <meta property="og:site_name" content="Aethryna Foundation">
    <meta property="og:locale" content="en_US">

    <!-- Twitter -->
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:url" content="{{ url()->current() }}">
    <meta property="twitter:title" content="@yield('twitter_title', 'Aethryna | Empowering Youth Through Digital Skills & Mentorship')">
    <meta property="twitter:description" content="@yield('twitter_description', 'Transform young lives through digital skills training and mentorship programs. Join Aethryna Foundation\'s mission to create tech career pathways for youth.')">
    <meta property="twitter:image" content="@yield('twitter_image', asset('images/og-image.png'))">

    <!-- Additional SEO Meta Tags -->
    <meta name="theme-color" content="#2F6E7F">
    <meta name="msapplication-TileColor" content="#2F6E7F">
    <meta name="apple-mobile-web-app-title" content="Aethryna Foundation">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/css/aethryna.css', 'resources/js/app.js'])
<script src="https://cdn.tailwindcss.com"></script>

    @stack('styles')
</head>
<body class="font-sans antialiased">
    @include('layouts.navigation')
<br />
<br />
<br />
    <main>
        @yield('content')
    </main>

    @stack('scripts')
</body>
</html>
