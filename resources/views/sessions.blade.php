@extends('layouts.aethryna')

@section('title', 'Sessions & Events | SkillsCo-op')

@section('content')

    <!-- Hero Section -->
    <section class="sessions-hero">
        <div class="ath-container">
            <div class="sessions-hero-content">
                <span class="ath-badge">Monthly Panels</span>
                <h1 class="ath-title">Sessions & <span class="ath-gradient-text">Events</span></h1>
                <p>Join our monthly panel discussions with industry experts, mentors, and learners. Network, learn, and grow
                    with the SkillsCo-op community.</p>
                <a href="#register-section" class="btn btn-primary">Register for Next Session <i
                        class="fas fa-arrow-down"></i></a>
            </div>
        </div>
    </section>

    <!-- Upcoming Session Details -->
    <section class="session-details">
        <div class="ath-container">
            <div class="section-title">
                <span class="ath-sub">What to Expect</span>
                <h2>Monthly Panel Sessions</h2>
                <p>Engaging discussions on digital skills, career development, and community impact</p>
            </div>
            <div class="details-grid">
                <div class="detail-card">
                    <div class="detail-icon"><i class="fas fa-microphone-alt"></i></div>
                    <h3>Expert Panels</h3>
                    <p>Hear from industry professionals, data scientists, tech leaders, and educators sharing real-world
                        insights and career advice.</p>
                </div>
                <div class="detail-card">
                    <div class="detail-icon"><i class="fas fa-comments"></i></div>
                    <h3>Open Q&A</h3>
                    <p>Ask questions directly to panelists and get personalized advice on your digital skills journey and
                        career aspirations.</p>
                </div>
                <div class="detail-card">
                    <div class="detail-icon"><i class="fas fa-handshake"></i></div>
                    <h3>Networking</h3>
                    <p>Connect with fellow learners, potential mentors, and industry partners in a welcoming,
                        community-driven environment.</p>
                </div>
                <div class="detail-card">
                    <div class="detail-icon"><i class="fas fa-lightbulb"></i></div>
                    <h3>Skill Spotlights</h3>
                    <p>Each session features a deep-dive into one of our learning tracks — Web Dev, Digital Design, IT
                        Support, or Digital Sales.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Registration Form -->
    <section id="register-section" class="session-register">
        <div class="ath-container">
            <div class="register-grid">
                <div class="register-info">
                    <span class="ath-sub">Get Involved</span>
                    <h2>Register for Our Next Session</h2>
                    <p>Our sessions are free and open to everyone. Whether you're a learner, mentor, partner, or simply
                        curious — you're welcome.</p>
                    <div class="session-meta">
                        <div class="meta-item">
                            <i class="fas fa-calendar-alt"></i>
                            <div>
                                <strong>Frequency</strong>
                                <span>Monthly — dates announced via email</span>
                            </div>
                        </div>
                        <div class="meta-item">
                            <i class="fas fa-clock"></i>
                            <div>
                                <strong>Duration</strong>
                                <span>90 minutes (including Q&A)</span>
                            </div>
                        </div>
                        <div class="meta-item">
                            <i class="fas fa-laptop"></i>
                            <div>
                                <strong>Format</strong>
                                <span>Virtual (Eventbrite) — link sent after registration</span>
                            </div>
                        </div>
                        <div class="meta-item">
                            <i class="fas fa-pound-sign"></i>
                            <div>
                                <strong>Cost</strong>
                                <span>Completely free</span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="register-form-wrapper">
                    @if (session('success'))
                        <div class="success-message">
                            <div class="success-icon"><i class="fas fa-check-circle"></i></div>
                            <h3>You're Registered!</h3>
                            <p>{{ session('success') }}</p>
                            <a href="{{ route('home') }}" class="btn btn-primary" style="margin-top: 1.5rem;">Back to
                                Home</a>
                        </div>
                    @else
                        <form action="{{ route('sessions.register') }}" method="POST" class="register-form">
                            @csrf
                            <h3>Reserve Your Spot</h3>

                            <div class="form-group">
                                <label for="name">Full Name *</label>
                                <input type="text" id="name" name="name" value="{{ old('name') }}" required
                                    placeholder="Your full name">
                                @error('name')
                                    <span class="form-error">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="email">Email Address *</label>
                                <input type="email" id="email" name="email" value="{{ old('email') }}" required
                                    placeholder="you@example.com">
                                @error('email')
                                    <span class="form-error">{{ $message }}</span>
                                @enderror
                            </div>

                            @error('interest_type')
                                <span class="form-error">{{ $message }}</span>
                            @enderror
                        </div>
>>>>>>> 2960d8a85b638f5ea9525871ce394b8bff52ecb4

                            <div class="form-group">
                                <label for="interest_type">I'm interested as a... *</label>
                                <select id="interest_type" name="interest_type" required>
                                    <option value="">Select one</option>
                                    <option value="learner" {{ old('interest_type') == 'learner' ? 'selected' : '' }}>
                                        Learner — I want to develop digital skills</option>
                                    <option value="mentor" {{ old('interest_type') == 'mentor' ? 'selected' : '' }}>Mentor —
                                        I want to guide others</option>
                                    <option value="partner" {{ old('interest_type') == 'partner' ? 'selected' : '' }}>
                                        Partner — I represent an organisation</option>
                                    <option value="curious" {{ old('interest_type') == 'curious' ? 'selected' : '' }}>Just
                                        Curious — I want to learn more</option>
                                </select>
                                @error('interest_type')
                                    <span class="form-error">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="referral_source">How did you hear about us?</label>
                                <select id="referral_source" name="referral_source">
                                    <option value="">Select one (optional)</option>
                                    <option value="social_media"
                                        {{ old('referral_source') == 'social_media' ? 'selected' : '' }}>Social Media
                                    </option>
                                    <option value="word_of_mouth"
                                        {{ old('referral_source') == 'word_of_mouth' ? 'selected' : '' }}>Word of Mouth
                                    </option>
                                    <option value="search_engine"
                                        {{ old('referral_source') == 'search_engine' ? 'selected' : '' }}>Search Engine
                                        (Google, etc.)</option>
                                    <option value="community_org"
                                        {{ old('referral_source') == 'community_org' ? 'selected' : '' }}>Community
                                        Organisation</option>
                                    <option value="event" {{ old('referral_source') == 'event' ? 'selected' : '' }}>Event
                                        / Workshop</option>
                                    <option value="other" {{ old('referral_source') == 'other' ? 'selected' : '' }}>Other
                                    </option>
                                </select>
                            </div>

                            <button type="submit" class="btn btn-primary btn-full">
                                <i class="fas fa-paper-plane"></i> Register Now
                            </button>
                        </form>
                    @endif
                </div>
            </div>
        </div>
    </section>

    @push('styles')
        <style>
            :root {
                --ath-teal: #038b89;
                --ath-gold: #ee9d1d;
                --ath-deep: #055860;
                --ath-light: #F8FBFB;
                --ath-white: #ffffff;
                --ath-text: #404952;
                --ath-muted: #57616a;
                --ath-trans: all 0.6s cubic-bezier(0.16, 1, 0.3, 1);
                --ath-radius: 24px;
            }

            .ath-container {
                max-width: 1250px;
                margin: 0 auto;
                padding: 0 5%;
            }

            /* Hero */
            .sessions-hero {
                padding: 180px 0 120px;
                background: var(--ath-deep);
                color: #fff;
                position: relative;
                overflow: hidden;
            }

            .sessions-hero::before {
                content: '';
                position: absolute;
                top: 0;
                left: 0;
                width: 100%;
                height: 100%;
                background: radial-gradient(circle at 80% 20%, rgba(238, 157, 29, 0.15), transparent 50%),
                    radial-gradient(circle at 20% 80%, rgba(3, 139, 137, 0.2), transparent 50%);
            }

            .sessions-hero-content {
                position: relative;
                z-index: 2;
                max-width: 700px;
            }

            .sessions-hero h1 {
                font-size: clamp(3rem, 8vw, 5rem);
                font-weight: 800;
                line-height: 1.05;
                margin-bottom: 25px;
                font-family: 'Outfit', sans-serif;
            }

            .sessions-hero p {
                font-size: 1.3rem;
                opacity: 0.9;
                line-height: 1.6;
                margin-bottom: 40px;
            }

            .ath-badge {
                display: inline-block;
                padding: 10px 20px;
                background: rgba(255, 255, 255, 0.1);
                border-radius: 100px;
                font-size: 0.85rem;
                font-weight: 800;
                margin-bottom: 25px;
                letter-spacing: 2px;
                text-transform: uppercase;
                border: 1px solid rgba(255, 255, 255, 0.15);
            }

            .ath-gradient-text {
                background: linear-gradient(135deg, var(--ath-gold), #fff);
                -webkit-background-clip: text;
                -webkit-text-fill-color: transparent;
            }

            /* Session Details */
            .session-details {
                padding: 100px 0;
                background: var(--ath-light);
            }

            .section-title {
                text-align: left;
                margin-bottom: 3.5rem;
            }

            .section-title h2 {
                font-size: clamp(2rem, 5vw, 3rem);
                color: var(--ath-deep);
                font-weight: 800;
                margin-bottom: 1rem;
                font-family: 'Outfit', sans-serif;
            }

            .section-title p {
                font-size: 1.2rem;
                color: var(--ath-muted);
                max-width: 700px;
            }

            .ath-sub {
                display: block;
                color: var(--ath-gold);
                text-transform: uppercase;
                letter-spacing: 3px;
                font-weight: 700;
                font-size: 0.85rem;
                margin-bottom: 1rem;
            }

            .details-grid {
                display: grid;
                grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
                gap: 30px;
            }

            .detail-card {
                background: #fff;
                padding: 40px;
                border-radius: var(--ath-radius);
                box-shadow: 0 10px 30px rgba(0, 0, 0, 0.04);
                border: 1px solid rgba(0, 0, 0, 0.04);
                transition: var(--ath-trans);
            }

            .detail-card:hover {
                transform: translateY(-10px);
                box-shadow: 0 30px 60px rgba(0, 0, 0, 0.08);
                border-color: var(--ath-teal);
            }

            .detail-icon {
                width: 65px;
                height: 65px;
                background: rgba(3, 139, 137, 0.08);
                border-radius: 18px;
                display: flex;
                align-items: center;
                justify-content: center;
                font-size: 1.6rem;
                color: var(--ath-teal);
                margin-bottom: 25px;
                transition: var(--ath-trans);
            }

            .detail-card:hover .detail-icon {
                background: var(--ath-teal);
                color: #fff;
            }

            .detail-card h3 {
                font-size: 1.4rem;
                color: var(--ath-deep);
                font-weight: 800;
                margin-bottom: 15px;
            }

            .detail-card p {
                color: var(--ath-muted);
                line-height: 1.7;
            }

            /* Registration */
            .session-register {
                padding: 100px 0;
                background: #fff;
            }

            .register-grid {
                display: grid;
                grid-template-columns: 1fr 1fr;
                gap: 80px;
                align-items: start;
            }

            .register-info h2 {
                font-size: clamp(2rem, 4vw, 2.8rem);
                color: var(--ath-deep);
                font-weight: 800;
                margin-bottom: 20px;
                font-family: 'Outfit', sans-serif;
            }

            .register-info>p {
                font-size: 1.15rem;
                color: var(--ath-muted);
                line-height: 1.8;
                margin-bottom: 40px;
            }

            .session-meta {
                display: grid;
                gap: 25px;
            }

            .meta-item {
                display: flex;
                gap: 20px;
                align-items: flex-start;
            }

            .meta-item i {
                width: 50px;
                height: 50px;
                background: rgba(3, 139, 137, 0.08);
                border-radius: 14px;
                display: flex;
                align-items: center;
                justify-content: center;
                color: var(--ath-teal);
                font-size: 1.2rem;
                flex-shrink: 0;
            }

            .meta-item strong {
                display: block;
                color: var(--ath-deep);
                font-weight: 700;
                margin-bottom: 3px;
            }

            .meta-item span {
                color: var(--ath-muted);
                font-size: 0.95rem;
            }

            /* Form */
            .register-form-wrapper {
                position: sticky;
                top: 120px;
            }

            .register-form {
                background: var(--ath-light);
                padding: 50px;
                border-radius: var(--ath-radius);
                border: 1px solid rgba(0, 0, 0, 0.05);
                box-shadow: 0 20px 60px rgba(0, 0, 0, 0.06);
            }

            .register-form h3 {
                font-size: 1.8rem;
                color: var(--ath-deep);
                font-weight: 800;
                margin-bottom: 30px;
                font-family: 'Outfit', sans-serif;
            }

            .form-group {
                margin-bottom: 22px;
            }

            .form-group label {
                display: block;
                font-weight: 700;
                color: var(--ath-deep);
                margin-bottom: 8px;
                font-size: 0.95rem;
            }

            .form-group input,
            .form-group select {
                width: 100%;
                padding: 14px 18px;
                border: 2px solid rgba(0, 0, 0, 0.08);
                border-radius: 14px;
                font-size: 1rem;
                background: #fff;
                transition: var(--ath-trans);
                outline: none;
                color: var(--ath-text);
                font-family: 'Outfit', sans-serif;
                box-sizing: border-box;
            }

            .form-group input:focus,
            .form-group select:focus {
                border-color: var(--ath-teal);
                box-shadow: 0 0 0 4px rgba(3, 139, 137, 0.1);
            }

            .form-group input::placeholder {
                color: #adb5bd;
            }

            .form-error {
                color: #e74c3c;
                font-size: 0.85rem;
                margin-top: 5px;
                display: block;
            }

            .btn-full {
                width: 100%;
                padding: 16px;
                font-size: 1.1rem;
                display: flex;
                align-items: center;
                justify-content: center;
                gap: 10px;
                margin-top: 10px;
            }

            /* Success Message */
            .success-message {
                background: var(--ath-light);
                padding: 60px 50px;
                border-radius: var(--ath-radius);
                text-align: center;
                border: 2px solid rgba(3, 139, 137, 0.2);
            }

            .success-icon {
                font-size: 4rem;
                color: var(--ath-teal);
                margin-bottom: 20px;
            }

            .success-message h3 {
                font-size: 2rem;
                color: var(--ath-deep);
                font-weight: 800;
                margin-bottom: 15px;
            }

            .success-message p {
                color: var(--ath-muted);
                font-size: 1.1rem;
                line-height: 1.6;
            }

            /* Responsive */
            @media (max-width: 992px) {
                .register-grid {
                    grid-template-columns: 1fr;
                    gap: 60px;
                }

                .register-form-wrapper {
                    position: static;
                }
            }

            @media (max-width: 768px) {
                .sessions-hero {
                    padding: 140px 0 80px;
                }

                .details-grid {
                    grid-template-columns: 1fr;
                }

                .register-form {
                    padding: 35px 25px;
                }
            }
        </style>
    @endpush
@endsection
