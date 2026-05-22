<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Primary Meta Tags -->
    <title>@yield('title', 'SkillsCo-op | Empowering Communities Through Digital Skills & Mentorship')</title>
    <meta name="title" content="@yield('meta_title', 'SkillsCo-op | Empowering Communities Through Digital Skills & Mentorship')">
    <meta name="description" content="@yield('meta_description', 'SkillsCo-op transforms lives through digital skills training, mentorship programs, and career pathways in tech. Join our mission to widen access to digital skills for underserved communities.')">
    <meta name="keywords" content="@yield('meta_keywords', 'digital skills training, tech mentorship, career development, skills cooperative, coding bootcamp, web development, IT support, digital design, underserved communities')">
    <meta name="author" content="SkillsCo-op">
    <meta name="robots" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1">

    <!-- Canonical URL -->
    <link rel="canonical" href="{{ url()->current() }}">

    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:title" content="@yield('og_title', 'SkillsCo-op | Empowering Communities Through Digital Skills & Mentorship')">
    <meta property="og:description" content="@yield('og_description', 'Transform lives through digital skills training and mentorship programs. Join SkillsCo-op\'s mission to create tech career pathways for underserved communities.')">
    <meta property="og:image" content="@yield('og_image', asset('images/og-image.png'))">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="630">
    <meta property="og:site_name" content="SkillsCo-op">
    <meta property="og:locale" content="en_GB">

    <!-- Twitter -->
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:url" content="{{ url()->current() }}">
    <meta property="twitter:title" content="@yield('twitter_title', 'SkillsCo-op | Empowering Communities Through Digital Skills & Mentorship')">
    <meta property="twitter:description" content="@yield('twitter_description', 'Transform lives through digital skills training and mentorship programs. Join SkillsCo-op\'s mission to create tech career pathways for underserved communities.')">
    <meta property="twitter:image" content="@yield('twitter_image', asset('images/og-image.png'))">

    <!-- Additional SEO Meta Tags -->
    <meta name="theme-color" content="#038b89">
    <meta name="msapplication-TileColor" content="#038b89">
    <meta name="apple-mobile-web-app-title" content="SkillsCo-op">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

    <!-- Tailwind CSS -->
    @production
        {{-- In production, Tailwind is compiled via Vite (run: npm run build). --}}
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    @else
        {{-- Dev convenience only. Do not rely on the CDN in production. --}}
        <script src="https://cdn.tailwindcss.com"></script>
        <script>
            tailwind.config = {
                theme: {
                    extend: {
                        colors: {
                            'ath-teal': '#038b89',
                            'ath-gold': '#ee9d1d',
                            'ath-deep': '#055860',
                        }
                    }
                }
            }
        </script>
    @endproduction

    <!-- Custom Styles -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/aethryna.css') }}">

    @stack('styles')
</head>
<body class="font-sans antialiased">
    @include('layouts.navigation')

    <main class="py-20">
        @yield('content')
    </main>

    @include('layouts.footer')

    @stack('scripts')
</body>
</html>
