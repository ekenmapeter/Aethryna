<!-- Navigation -->
<nav id="navbar">
    <div class="nav-container">
        <div class="logo" id="siteLogo">
            <a href="{{ route('home') }}">
                <img src="{{ asset('images/logo_white.png') }}" alt="Aethryna Foundation" class="default-logo">
                <img src="{{ asset('images/logo_black.png') }}" alt="Aethryna Foundation" class="scrolled-logo" style="display: none;">
            </a>
        </div>

        <div class="nav-links">
            <a href="{{ route('about') }}">About</a>
            <a href="{{ route('pathway') }}">Pathway</a>
            <a href="{{ route('programs') }}">Programs</a>
            <a href="{{ route('impact') }}">Impact</a>
            <a href="{{ route('stories') }}">Stories</a>
        </div>

        <div class="nav-buttons">
            @auth
                @if(auth()->user()->isAdmin())
                    <a href="{{ route('admin.dashboard') }}" class="btn btn-outline">Admin Dashboard</a>
                @else
                    <a href="{{ route('dashboard') }}" class="btn btn-outline">Dashboard</a>
                @endif
                <form method="POST" action="{{ route('logout') }}" style="display: inline;">
                    @csrf
                    <button type="submit" class="btn btn-primary">Logout</button>
                </form>
            @else
                <a href="{{ route('login') }}" class="text-white btn btn-outline">Login</a>
                <a href="{{ route('register') }}" class="text-white btn btn-primary">Get Started</a>
            @endauth
        </div>

        <div class="mobile-menu" id="mobileMenu">
            <i class="fas fa-bars"></i>
        </div>
    </div>

    <!-- Mobile Navigation Menu -->
    <div class="mobile-nav-menu" id="mobileNavMenu">
        <div class="mobile-nav-links">
            <a href="{{ route('about') }}">About</a>
            <a href="{{ route('pathway') }}">Pathway</a>
            <a href="{{ route('programs') }}">Programs</a>
            <a href="{{ route('impact') }}">Impact</a>
            <a href="{{ route('stories') }}">Stories</a>
        </div>
        <div class="mobile-nav-buttons">
            @auth
                @if(auth()->user()->isAdmin())
                    <a href="{{ route('admin.dashboard') }}" class="btn btn-outline">Admin Dashboard</a>
                @else
                    <a href="{{ route('dashboard') }}" class="btn btn-outline">Dashboard</a>
                @endif
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button type="submit" class="btn btn-primary">Logout</button>
                </form>
            @else
                <a href="{{ route('login') }}" class="btn btn-outline">Login</a>
                <a href="{{ route('register') }}" class="btn btn-primary">Get Started</a>
            @endauth
        </div>
    </div>
</nav>
