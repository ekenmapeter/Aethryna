@extends('layouts.aethryna')

@section('title', 'About Aethryna | Empowering Youth Through Digital Skills & Mentorship')

@section('content')

    <!-- Hero Section -->
    <section class="about-hero">
        <div class="hero-content">
            <h1>About Aethryna Foundation</h1>
            <p>Building futures through mentorship, learning, and leadership development</p>
        </div>
        <div class="hero-shapes">
            <div class="shape"></div>
            <div class="shape"></div>
            <div class="shape"></div>
        </div>
    </section>

    <!-- Mission Section -->
    <section class="mission">
        <div class="section-title">
            <h2>Our Mission</h2>
            <p>Empowering the next generation through meaningful connections and transformative experiences</p>
        </div>
        <div class="mission-content">
            <div class="mission-text">
                <h3>Building Futures Together</h3>
                <p>Aethryna Foundation is a modern youth empowerment nonprofit dedicated to creating pathways to success for young people from all backgrounds. Through our innovative mentorship programs, we connect aspiring youth with experienced professionals who guide them toward achieving their personal and professional goals.</p>
                <p>Our approach combines personalized mentorship with skill-building workshops, leadership development, and community engagement opportunities that prepare youth for the challenges of tomorrow.</p>
                <div class="mission-stats">
                    <div class="stat">
                        <span class="stat-number">500+</span>
                        <span class="stat-label">Youth Empowered</span>
                    </div>
                    <div class="stat">
                        <span class="stat-number">95%</span>
                        <span class="stat-label">Employment Rate</span>
                    </div>
                    <div class="stat">
                        <span class="stat-number">£25K</span>
                        <span class="stat-label">Average Starting Salary</span>
                    </div>
                </div>
            </div>
            <div class="mission-image">
                <img src="https://plus.unsplash.com/premium_photo-1681494370365-6bc631f820e9?q=80&w=870&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="Youth mentorship program">
            </div>
        </div>
    </section>

    <!-- Values Section -->
    <section class="values">
        <div class="section-title">
            <h2>Our Core Values</h2>
            <p>The principles that guide everything we do</p>
        </div>
        <div class="values-grid">
            <div class="value-card">
                <div class="value-icon">
                    <i class="fas fa-hands-helping"></i>
                </div>
                <h3>Mentorship</h3>
                <p>We believe in the power of one-on-one relationships to transform lives and build lasting connections between mentors and mentees.</p>
            </div>
            <div class="value-card">
                <div class="value-icon">
                    <i class="fas fa-graduation-cap"></i>
                </div>
                <h3>Education</h3>
                <p>Quality education and skill development are fundamental rights. We provide accessible learning opportunities for all young people.</p>
            </div>
            <div class="value-card">
                <div class="value-icon">
                    <i class="fas fa-rocket"></i>
                </div>
                <h3>Empowerment</h3>
                <p>We empower youth to take control of their futures, build confidence, and become leaders in their communities and careers.</p>
            </div>
            <div class="value-card">
                <div class="value-icon">
                    <i class="fas fa-users"></i>
                </div>
                <h3>Community</h3>
                <p>Strong communities are built on collaboration and support. We foster inclusive environments where everyone can thrive.</p>
            </div>
            <div class="value-card">
                <div class="value-icon">
                    <i class="fas fa-lightbulb"></i>
                </div>
                <h3>Innovation</h3>
                <p>We embrace new approaches and technologies to create better solutions for youth development and career preparation.</p>
            </div>
            <div class="value-card">
                <div class="value-icon">
                    <i class="fas fa-balance-scale"></i>
                </div>
                <h3>Equity</h3>
                <p>We are committed to addressing systemic barriers and ensuring equal opportunities for all young people, regardless of background.</p>
            </div>
        </div>
    </section>

    <!-- Team Section -->
    <section class="team">
        <div class="section-title">
            <h2>Our Leadership Team</h2>
            <p>Meet the passionate individuals driving our mission forward</p>
        </div>
        <div class="team-grid">
            <div class="team-member">
                <div class="member-image">
                    <img src="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?ixlib=rb-4.0.3&auto=format&fit=crop&w=387&q=80" alt="Executive Director">
                </div>
                <div class="member-info">
                    <h3>Sarah Johnson</h3>
                    <p class="member-role">Executive Director</p>
                    <p class="member-bio">Former tech executive with 15+ years in youth development and digital transformation initiatives.</p>
                </div>
            </div>
            <div class="team-member">
                <div class="member-image">
                    <img src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-4.0.3&auto=format&fit=crop&w=1170&q=80" alt="Program Director">
                </div>
                <div class="member-info">
                    <h3>Michael Chen</h3>
                    <p class="member-role">Program Director</p>
                    <p class="member-bio">Experienced educator and mentor specializing in career development and skill-building programs.</p>
                </div>
            </div>
            <div class="team-member">
                <div class="member-image">
                    <img src="https://images.unsplash.com/photo-1494790108755-2616b612b786?ixlib=rb-4.0.3&auto=format&fit=crop&w=387&q=80" alt="Partnership Manager">
                </div>
                <div class="member-info">
                    <h3>Dr. Amanda Rodriguez</h3>
                    <p class="member-role">Partnership Manager</p>
                    <p class="member-bio">PhD in Education with extensive experience in corporate partnerships and youth employment programs.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- History Section -->
    <section class="history">
        <div class="section-title">
            <h2>Our Story</h2>
            <p>How Aethryna Foundation came to be</p>
        </div>
        <div class="timeline">
            <div class="timeline-item">
                <div class="timeline-content">
                    <h3>2018: The Beginning</h3>
                    <p>Founded by a group of tech professionals who recognized the digital skills gap among youth in underserved communities.</p>
                </div>
                <div class="timeline-marker"></div>
            </div>
            <div class="timeline-item">
                <div class="timeline-content">
                    <h3>2019: First Programs</h3>
                    <p>Launched our flagship mentorship program with 50 participants and 25 corporate mentors from leading tech companies.</p>
                </div>
                <div class="timeline-marker"></div>
            </div>
            <div class="timeline-item">
                <div class="timeline-content">
                    <h3>2020: Digital Transformation</h3>
                    <p>Adapted all programs to virtual delivery during the pandemic, reaching 200+ youth across multiple cities.</p>
                </div>
                <div class="timeline-marker"></div>
            </div>
            <div class="timeline-item">
                <div class="timeline-content">
                    <h3>2021: Expansion</h3>
                    <p>Expanded to three new cities and launched specialized tracks in web development, digital design, and IT support.</p>
                </div>
                <div class="timeline-marker"></div>
            </div>
            <div class="timeline-item">
                <div class="timeline-content">
                    <h3>2022: Partnership Growth</h3>
                    <p>Established partnerships with 50+ companies and achieved a 95% employment rate for program graduates.</p>
                </div>
                <div class="timeline-marker"></div>
            </div>
            <div class="timeline-item">
                <div class="timeline-content">
                    <h3>2023: Innovation & Scale</h3>
                    <p>Launched AI-powered assessment tools and scaled to serve 500+ youth annually across our expanded network.</p>
                </div>
                <div class="timeline-marker"></div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="cta">
        <div class="cta-content">
            <h2>Join Our Mission</h2>
            <p>Whether you're a young person seeking growth or a professional wanting to mentor, there's a place for you at Aethryna.</p>
            <div class="cta-buttons">
                <a href="{{ route('register') }}" class="btn btn-primary">Become a Mentee</a>
                <a href="mailto:mentor@aethryna.org" class="btn btn-outline">Become a Mentor</a>
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

        /* General Section Header */
        .section-title {
            text-align: left;
            margin-bottom: 3rem;
            max-width: 1200px;
            margin-left: auto;
            margin-right: auto;
        }

        .section-title h2, .mission-text h3 {
            font-size: clamp(2.2rem, 4vw, 3rem);
            color: var(--ath-deep);
            font-weight: 800;
            margin-bottom: 1rem;
            line-height: 1.2;
        }

        .section-title p {
            font-size: 1.2rem;
            color: var(--ath-muted);
            line-height: 1.6;
            max-width: 800px;
        }

        /* About Hero Section */
        .about-hero {
            height: 60vh;
            background: linear-gradient(135deg, var(--ath-deep), var(--ath-teal));
            background-size: cover;
            background-position: center;
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
            color: white;
            position: relative;
            overflow: hidden;
        }

        .about-hero .hero-content h1 {
            font-size: clamp(3rem, 8vw, 5rem);
            font-weight: 800;
            margin-bottom: 1.5rem;
            text-shadow: 2px 2px 10px rgba(0, 0, 0, 0.3);
        }

        .about-hero .hero-content p {
            font-size: 1.4rem;
            max-width: 700px;
            margin: 0 auto;
            opacity: 0.9;
        }

        .hero-shapes {
            position: absolute;
            width: 100%;
            height: 100%;
            top: 0;
            left: 0;
            pointer-events: none;
        }

        .hero-shapes .shape {
            position: absolute;
            background: linear-gradient(135deg, var(--ath-teal), transparent);
            border-radius: 50%;
            filter: blur(40px);
            opacity: 0.3;
            animation: float 8s ease-in-out infinite;
        }

        .hero-shapes .shape:nth-child(1) {
            width: 300px;
            height: 300px;
            top: 10%;
            left: 5%;
            animation-delay: 0s;
        }

        .hero-shapes .shape:nth-child(2) {
            width: 200px;
            height: 200px;
            top: 60%;
            right: 10%;
            animation-delay: 2s;
            background: linear-gradient(135deg, var(--ath-gold), transparent);
        }

        .hero-shapes .shape:nth-child(3) {
            width: 150px;
            height: 150px;
            bottom: 20%;
            left: 20%;
            animation-delay: 4s;
        }

        @keyframes float {
            0%, 100% {
                transform: translateY(0px) rotate(0deg) scale(1);
            }
            50% {
                transform: translateY(-40px) rotate(180deg) scale(1.1);
            }
        }

        /* Mission Section */
        .mission {
            padding: 100px 5%;
            background: var(--ath-light);
            margin-top: -50px; /* Pull up to join hero flow */
            position: relative;
            z-index: 10;
        }

        .mission-content {
            max-width: 1200px;
            margin: 0 auto;
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 5rem;
            align-items: center;
        }

        .mission-text p {
            font-size: 1.1rem;
            margin-bottom: 2rem;
            color: var(--ath-text);
            line-height: 1.8;
        }

        .mission-stats {
            display: flex;
            gap: 3rem;
            margin-top: 3rem;
        }

        .mission-stats .stat {
            text-align: center;
        }

        .mission-stats .stat-number {
            font-size: 2.5rem;
            font-weight: 800;
            color: var(--ath-teal);
            display: block;
        }

        .mission-stats .stat-label {
            font-size: 1rem;
            color: var(--ath-text);
            margin-top: 0.5rem;
        }

        .mission-image img {
            width: 100%;
            border-radius: var(--radius);
            box-shadow: var(--shadow);
        }

        /* Values Section */
        .values {
            padding: 8rem 5%;
            background: white;
        }

        .values-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(350px, 1fr));
            gap: 3rem;
            max-width: 1200px;
            margin: 0 auto;
        }

        .value-card {
            background: var(--ath-light);
            padding: 3rem 2rem;
            border-radius: var(--ath-radius);
            text-align: center;
            transition: var(--ath-trans);
            box-shadow: var(--shadow);
            position: relative;
            overflow: hidden;
        }

        .value-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 5px;
            background: linear-gradient(90deg, var(--ath-teal), var(--ath-gold));
        }

        .value-card:hover {
            transform: translateY(-10px);
            box-shadow: var(--shadow-hover);
        }

        .value-icon {
            width: 80px;
            height: 80px;
            background: linear-gradient(135deg, var(--ath-teal), var(--ath-gold));
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 2rem;
            color: white;
            font-size: 2rem;
            transition: var(--ath-trans);
        }

        .value-card:hover .value-icon {
            transform: scale(1.1);
        }

        .value-card h3 {
            font-size: 1.5rem;
            margin-bottom: 1.5rem;
            color: var(--ath-deep);
        }

        .value-card p {
            color: var(--ath-text);
            line-height: 1.7;
        }

        /* Team Section */
        .team {
            padding: 100px 5%;
            background: linear-gradient(135deg, #f8f9fa, #e9ecef);
        }

        .team-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 3rem;
            max-width: 1200px;
            margin: 0 auto;
        }

        .team-member {
            background: white;
            border-radius: var(--ath-radius);
            overflow: hidden;
            box-shadow: var(--shadow);
            transition: var(--ath-trans);
        }

        .team-member:hover {
            transform: translateY(-10px);
            box-shadow: var(--shadow-hover);
        }

        .member-image {
            height: 300px;
            overflow: hidden;
        }

        .member-image img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: var(--ath-trans);
        }

        .team-member:hover .member-image img {
            transform: scale(1.05);
        }

        .member-info {
            padding: 2rem;
        }

        .member-info h3 {
            font-size: 1.5rem;
            margin-bottom: 0.5rem;
            color: var(--ath-deep);
            font-weight: 700;
        }

        .member-role {
            color: var(--ath-gold);
            font-weight: 600;
            margin-bottom: 1rem;
        }

        .member-bio {
            color: var(--ath-text);
            line-height: 1.6;
        }

        /* History Section */
        .history {
            padding: 100px 5%;
            background: white;
        }

        .timeline {
            max-width: 800px;
            margin: 0 auto;
            position: relative;
        }

        .timeline::before {
            content: '';
            position: absolute;
            left: 50%;
            top: 0;
            bottom: 0;
            width: 2px;
            background: linear-gradient(to bottom, var(--ath-teal), var(--ath-gold));
            transform: translateX(-50%);
        }

        .timeline-item {
            margin-bottom: 4rem;
            position: relative;
            width: 100%;
        }

        .timeline-item:nth-child(even) .timeline-content {
            margin-left: auto;
            margin-right: 0;
            text-align: right;
        }

        .timeline-content {
            background: var(--ath-light);
            padding: 2.5rem;
            border-radius: var(--ath-radius);
            box-shadow: var(--shadow);
            max-width: 420px;
            position: relative;
            margin-left: 60px;
            transition: var(--ath-trans);
        }

        .timeline-item:nth-child(even) .timeline-content {
            margin-left: auto;
            margin-right: 60px;
        }

        .timeline-content h3 {
            color: var(--ath-teal);
            margin-bottom: 1rem;
            font-size: 1.4rem;
            font-weight: 700;
        }

        .timeline-content p {
            color: var(--ath-text);
            line-height: 1.6;
        }

        .timeline-marker {
            position: absolute;
            left: 50%;
            top: 2rem;
            width: 20px;
            height: 20px;
            background: var(--ath-gold);
            border-radius: 50%;
            border: 4px solid white;
            box-shadow: 0 0 0 4px var(--ath-teal);
            transform: translateX(-50%);
            z-index: 1;
        }

        /* CTA Section */
        .cta {
            background: linear-gradient(135deg, var(--ath-teal), var(--ath-deep));
            color: white;
            text-align: center;
            padding: 100px 2rem;
            position: relative;
            overflow: hidden;
        }

        .cta-content {
            max-width: 800px;
            margin: 0 auto;
            position: relative;
            z-index: 2;
        }

        .cta h2 {
            font-size: 3.5rem;
            margin-bottom: 2rem;
        }

        .cta p {
            font-size: 1.4rem;
            margin-bottom: 3rem;
            opacity: 0.9;
        }

        .cta-buttons {
            display: flex;
            gap: 2rem;
            justify-content: center;
        }

        /* Mobile Responsive */
        @media (max-width: 992px) {
            .about-hero .hero-content h1 {
                font-size: 3rem;
            }

            .mission-content {
                grid-template-columns: 1fr;
                gap: 3rem;
            }

            .mission-stats {
                justify-content: center;
            }

            .values-grid {
                grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            }

            .team-grid {
                grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            }

            .timeline::before {
                left: 30px;
            }

            .timeline-marker {
                left: 30px;
            }

            .timeline-content {
                margin-left: 80px;
                max-width: none;
            }

            .timeline-item:nth-child(even) .timeline-content {
                margin-left: 80px;
                margin-right: 0;
                text-align: left;
            }
        }

        @media (max-width: 768px) {
            .about-hero {
                height: 50vh;
            }

            .about-hero .hero-content h1 {
                font-size: 2.5rem;
            }

            .about-hero .hero-content p {
                font-size: 1.2rem;
            }

            .values-grid {
                grid-template-columns: 1fr;
            }

            .team-grid {
                grid-template-columns: 1fr;
            }

            .cta h2 {
                font-size: 2.8rem;
            }

            .cta-buttons {
                flex-direction: column;
                align-items: center;
            }

            .timeline::before {
                display: none;
            }

            .timeline-marker {
                display: none;
            }

            .timeline-content {
                margin-left: 0;
                text-align: left;
            }

            .timeline-item:nth-child(even) .timeline-content {
                margin-left: 0;
            }
        }

        @media (max-width: 576px) {
            .about-hero .hero-content h1 {
                font-size: 2rem;
            }

            .mission-stats {
                flex-direction: column;
                gap: 2rem;
            }

            .value-card {
                padding: 2rem 1.5rem;
            }

            .member-info {
                padding: 1.5rem;
            }

            .cta h2 {
                font-size: 2.2rem;
            }

            .cta p {
                font-size: 1.2rem;
            }
        }
    </style>
    @endpush

    @push('scripts')
    <script>
        // Intersection Observer for animations
        const observerOptions = {
            threshold: 0.1,
            rootMargin: '0px 0px -50px 0px'
        };

        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('visible');
                }
            });
        }, observerOptions);

        // Observe all sections
        document.querySelectorAll('section').forEach(section => {
            observer.observe(section);
        });

        // Observe value cards
        document.querySelectorAll('.value-card').forEach(card => {
            observer.observe(card);
        });

        // Observe team members
        document.querySelectorAll('.team-member').forEach(member => {
            observer.observe(member);
        });

        // Observe timeline items
        document.querySelectorAll('.timeline-item').forEach(item => {
            observer.observe(item);
        });
    </script>
    @endpush
@endsection
