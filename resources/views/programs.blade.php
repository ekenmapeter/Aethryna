@extends('layouts.aethryna')

@section('title', 'Skills Pathway Programs | Aethryna Foundation')

@section('content')

    <!-- Hero Section -->
    <section class="programs-hero">
        <div class="ath-container">
            <div class="programs-hero-grid">
                <div class="hero-content">
                    <span class="ath-sub">Skill Mastery</span>
                    <h1>Our Specialized <span class="ath-gradient-text">Pathway</span> Programs</h1>
                    <p>Structured learning paths designed for real-world success. Choose the track that defines your future.</p>
                    <div class="hero-actions">
                        <a href="#program-tracks" class="btn btn-primary">Explore Programs <i class="fas fa-arrow-down"></i></a>
                    </div>
                </div>
                <div class="hero-stats">
                    <div class="stat">
                        <span class="stat-number">4</span>
                        <span class="stat-label">Expert Tracks</span>
                    </div>
                    <div class="stat">
                        <span class="stat-number">95%</span>
                        <span class="stat-label">Job success</span>
                    </div>
                    <div class="stat">
                        <span class="stat-number">100%</span>
                        <span class="stat-label">Tuition Funded</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Program Overview -->
    <section class="program-overview">
        <div class="ath-container">
            <div class="section-title">
                <span class="ath-sub">The Methodology</span>
                <h2>Choose Your Path to Success</h2>
                <p>Four specialized tracks tailored to different career goals and interests</p>
            </div>
            <div class="overview-content">
            <div class="overview-text">
                <p>Our Skills Pathway offers four distinct tracks, each designed to provide comprehensive training and real-world experience in high-demand digital careers. Whether you're creative, technical, or customer-focused, there's a track that matches your strengths and interests.</p>
                <p>Each program combines classroom learning with hands-on projects, mentorship from industry professionals, and guaranteed job placement assistance. You'll graduate with a portfolio of work, industry certifications, and the skills employers are looking for.</p>
            </div>
            <div class="overview-features">
                <div class="feature">
                    <i class="fas fa-project-diagram"></i>
                    <h4>Project-Based Learning</h4>
                    <p>Build real projects for real clients</p>
                </div>
                <div class="feature">
                    <i class="fas fa-user-friends"></i>
                    <h4>1-on-1 Mentorship</h4>
                    <p>Personal guidance from industry experts</p>
                </div>
                <div class="feature">
                    <i class="fas fa-certificate"></i>
                    <h4>Industry Certifications</h4>
                    <p>Recognized credentials for your resume</p>
                </div>
                <div class="feature">
                    <i class="fas fa-briefcase"></i>
                    <h4>Job Guarantee</h4>
                    <p>95% placement rate within 6 months</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Program Tracks -->
    <section id="program-tracks" class="program-tracks">
        <div class="ath-container">
            <div class="section-title">
                <span class="ath-sub">Our Offerings</span>
                <h2>Program Specializations</h2>
                <p>Industry-standard training across high-growth domains</p>
            </div>
            <div class="tracks-grid">
            @forelse($pathways as $pathway)
                @php
                    $icon = 'fa-laptop-code';
                    $colorClass = 'web-dev';
                    if (stripos($pathway->name, 'Design') !== false) { $icon = 'fa-palette'; $colorClass = 'digital-design'; }
                    elseif (stripos($pathway->name, 'Development') !== false || stripos($pathway->name, 'Web') !== false) { $icon = 'fa-code'; $colorClass = 'web-dev'; }
                    elseif (stripos($pathway->name, 'Support') !== false || stripos($pathway->name, 'IT') !== false) { $icon = 'fa-tools'; $colorClass = 'it-support'; }
                    elseif (stripos($pathway->name, 'Sales') !== false || stripos($pathway->name, 'Marketing') !== false) { $icon = 'fa-chart-line'; $colorClass = 'digital-sales'; }
                @endphp
                <div class="track-card {{ $colorClass }}">
                    <div class="track-header">
                        <div class="track-icon">
                            <i class="fas {{ $icon }}"></i>
                        </div>
                        <div class="track-info">
                            <h3>{{ $pathway->name }}</h3>
                            <div class="track-meta">
                                <span><i class="fas fa-clock"></i> {{ $pathway->duration_months ?? '6-9' }} Months</span>
                                <span><i class="fas fa-signal"></i> {{ $pathway->difficulty_level ?? 'Beginner' }}</span>
                            </div>
                        </div>
                    </div>
                    <div class="track-content">
                        <div class="track-description">
                            <h4>Overview</h4>
                            <p>{{ Str::limit($pathway->description, 200) }}</p>
                        </div>
                        <div class="track-careers">
                            <h4>Career Tracks:</h4>
                            <div class="career-tags">
                                @if(is_array($pathway->skills))
                                    @foreach(array_slice($pathway->skills, 0, 5) as $skill)
                                        <span>{{ $skill }}</span>
                                    @endforeach
                                @endif
                            </div>
                        </div>
                    </div>
                    <div class="track-footer">
                        <div class="track-cta-info">
                            <span class="salary-label">Enrolling Now</span>
                            <span class="salary">Next Cohort: March</span>
                        </div>
                        <a href="{{ route('assessment.index') }}" class="btn btn-primary btn-sm">Join Track</a>
                    </div>
                </div>
            @empty
                <div class="track-card web-dev">
                    <div class="track-header">
                        <div class="track-icon"><i class="fas fa-code"></i></div>
                        <div class="track-info">
                            <h3>Web Development</h3>
                            <div class="track-meta">
                                <span><i class="fas fa-clock"></i> 6-9 Months</span>
                                <span><i class="fas fa-signal"></i> Beginner</span>
                            </div>
                        </div>
                    </div>
                    <div class="track-content">
                        <div class="track-description">
                            <h4>Overview</h4>
                            <p>Master modern web architecture, responsive design, and full-stack development using industry-standard tools.</p>
                        </div>
                        <div class="track-careers">
                            <h4>Key Skills:</h4>
                            <div class="career-tags">
                                <span>HTML/CSS</span>
                                <span>JavaScript</span>
                                <span>PHP/Laravel</span>
                            </div>
                        </div>
                    </div>
                    <div class="track-footer">
                        <div class="track-cta-info">
                            <span class="salary-label">Enrolling Now</span>
                            <span class="salary">Limited Seats</span>
                        </div>
                        <a href="{{ route('assessment.index') }}" class="btn btn-primary btn-sm">Join Track</a>
                    </div>
                </div>
            @endforelse
            </div>

            <div class="pagination-container">
                {{ $pathways->links() }}
            </div>
        </div>
    </section>

    <!-- Application Process -->
    <section id="apply" class="application-process">
        <div class="ath-container">
            <div class="section-title">
                <span class="ath-sub">Get Started</span>
                <h2>How to Apply</h2>
                <p>Simple steps to start your career transformation</p>
            </div>
            <div class="process-steps">
            <div class="process-step">
                <div class="step-number">01</div>
                <h3>Take Assessment</h3>
                <p>Complete our 2-minute career assessment to identify your ideal track</p>
            </div>
            <div class="process-step">
                <div class="step-number">02</div>
                <h3>Application Review</h3>
                <p>Our team reviews your application and assessment results</p>
            </div>
            <div class="process-step">
                <div class="step-number">03</div>
                <h3>Interview</h3>
                <p>Meet with our admissions team for a personal interview</p>
            </div>
            <div class="process-step">
                <div class="step-number">04</div>
                <h3>Start Learning</h3>
                <p>Begin your journey with orientation and your first classes</p>
            </div>
        </div>
        <div class="application-cta">
            <h3>Ready to Start Your Tech Career?</h3>
            <p>Applications are reviewed on a rolling basis. Don't wait - your future self will thank you!</p>
            <a href="{{ route('register') }}" class="btn btn-primary">Apply Now</a>
        </div>
    </section>

    <!-- FAQ Section -->
    <section class="faq">
        <div class="ath-container">
            <div class="section-title">
                <span class="ath-sub">Common Queries</span>
                <h2>Frequently Asked Questions</h2>
                <p>Everything you need to know about our programs</p>
            </div>
            <div class="faq-container">
            <div class="faq-item">
                <div class="faq-question">
                    <h4>Do I need any prior experience?</h4>
                    <span class="faq-toggle">+</span>
                </div>
                <div class="faq-answer">
                    <p>No prior experience is required for any of our tracks. We designed these programs specifically for beginners. Our curriculum builds from the fundamentals up, and our mentors provide personalized support throughout your journey.</p>
                </div>
            </div>
            <div class="faq-item">
                <div class="faq-question">
                    <h4>How much time do I need to commit?</h4>
                    <span class="faq-toggle">+</span>
                </div>
                <div class="faq-answer">
                    <p>Most tracks require 20-30 hours per week, combining classroom time, project work, and mentorship sessions. We understand that many of our students have other commitments, so we offer flexible scheduling options.</p>
                </div>
            </div>
            <div class="faq-item">
                <div class="faq-question">
                    <h4>Are the programs fully funded?</h4>
                    <span class="faq-toggle">+</span>
                </div>
                <div class="faq-answer">
                    <p>Yes! All our programs are completely free for eligible participants. We believe that financial barriers shouldn't prevent anyone from accessing quality education and career opportunities.</p>
                </div>
            </div>
            <div class="faq-item">
                <div class="faq-question">
                    <h4>What happens after I complete the program?</h4>
                    <span class="faq-toggle">+</span>
                </div>
                <div class="faq-answer">
                    <p>Our job placement team works with you to find employment opportunities. We have partnerships with 50+ companies and a 95% placement rate. You'll also have access to ongoing career support and alumni networking.</p>
                </div>
            </div>
            <div class="faq-item">
                <div class="faq-question">
                    <h4>Can I switch tracks if I change my mind?</h4>
                    <span class="faq-toggle">+</span>
                </div>
                <div class="faq-answer">
                    <p>Yes, we allow track changes within the first month of the program. Our assessment helps match you with the right track initially, but we understand that interests can evolve. We'll work with you to ensure you're on the best path for your goals.</p>
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

        /* Section Headers */
        .section-title {
            text-align: left;
            margin-bottom: 3.5rem;
        }

        .section-title h2 {
            font-size: clamp(2.2rem, 5vw, 3.5rem);
            color: var(--ath-deep);
            font-weight: 800;
            margin-bottom: 1rem;
            line-height: 1.1;
            font-family: 'Outfit', sans-serif;
        }

        .section-title p {
            font-size: 1.25rem;
            color: var(--ath-muted);
            max-width: 800px;
        }

        .ath-sub {
            display: block;
            color: var(--ath-gold);
            text-transform: uppercase;
            letter-spacing: 3px;
            font-weight: 700;
            font-size: 0.9rem;
            margin-bottom: 1rem;
        }

        /* Programs Hero */
        .programs-hero {
            padding: 160px 0 100px;
            background: var(--ath-deep);
            position: relative;
            overflow: hidden;
            color: #fff;
        }

        .programs-hero::before {
            content: '';
            position: absolute;
            top: 0; left: 0; width: 100%; height: 100%;
            background: radial-gradient(circle at 70% 30%, rgba(3, 139, 137, 0.2), transparent 50%),
                        radial-gradient(circle at 30% 70%, rgba(238, 157, 29, 0.1), transparent 50%);
            z-index: 1;
        }

        .programs-hero-grid {
            display: grid;
            grid-template-columns: 1.2fr 0.8fr;
            gap: 60px;
            align-items: center;
            position: relative;
            z-index: 2;
        }

        .programs-hero h1 {
            font-size: clamp(2.5rem, 6vw, 4.5rem);
            font-weight: 800;
            line-height: 1.1;
            margin-bottom: 25px;
            font-family: 'Outfit', sans-serif;
        }

        .ath-gradient-text {
            background: linear-gradient(135deg, var(--ath-gold), #fff);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }

        .programs-hero p {
            font-size: 1.25rem;
            margin-bottom: 40px;
            opacity: 0.9;
            line-height: 1.6;
        }

        .hero-stats {
            display: flex;
            flex-direction: column;
            gap: 20px;
        }

        .hero-stats .stat {
            background: rgba(255, 255, 255, 0.05);
            backdrop-filter: blur(20px);
            border: 1px solid rgba(255, 255, 255, 0.1);
            padding: 30px;
            border-radius: var(--ath-radius);
            text-align: center;
        }

        .hero-stats .stat-number {
            font-size: 2.8rem;
            font-weight: 800;
            color: var(--ath-gold);
            display: block;
            margin-bottom: 5px;
        }

        .hero-stats .stat-label {
            font-size: 0.9rem;
            text-transform: uppercase;
            letter-spacing: 1px;
            opacity: 0.8;
            font-weight: 600;
        }

        /* Program Overview */
        .program-overview {
            padding: 100px 0;
            background: var(--ath-light);
        }

        .overview-content {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 60px;
            align-items: center;
        }

        .overview-text p {
            font-size: 1.15rem;
            line-height: 1.8;
            color: var(--ath-text);
            margin-bottom: 20px;
        }

        .overview-features {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 25px;
        }

        .feature {
            text-align: center;
            padding: 30px;
            background: white;
            border-radius: var(--ath-radius);
            box-shadow: 0 10px 30px rgba(0,0,0,0.05);
            border: 1px solid rgba(0,0,0,0.05);
            transition: var(--ath-trans);
        }

        .feature:hover {
            transform: translateY(-8px);
            box-shadow: 0 25px 50px rgba(0,0,0,0.1);
            border-color: var(--ath-teal);
        }

        .feature i {
            font-size: 2.2rem;
            color: var(--ath-teal);
            margin-bottom: 15px;
            background: rgba(3, 139, 137, 0.05);
            width: 65px; height: 65px;
            display: flex;
            align-items: center;
            justify-content: center;
            border-radius: 18px;
            margin: 0 auto 20px;
            transition: var(--ath-trans);
        }

        .feature:hover i {
            background: var(--ath-teal);
            color: #fff;
        }

        .feature h4 {
            color: var(--ath-deep);
            font-weight: 700;
            margin-bottom: 10px;
            font-size: 1.1rem;
        }

        .feature p {
            color: var(--ath-muted);
            font-size: 0.95rem;
            line-height: 1.5;
        }

        /* Program Tracks */
        .program-tracks {
            padding: 100px 0;
            background: #fff;
        }

        .tracks-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(500px, 1fr));
            gap: 40px;
        }

        .track-card {
            background: white;
            border-radius: var(--ath-radius);
            overflow: hidden;
            box-shadow: 0 10px 40px rgba(0,0,0,0.05);
            border: 1px solid rgba(0,0,0,0.05);
            transition: var(--ath-trans);
            display: flex;
            flex-direction: column;
        }

        .track-card:hover {
            transform: translateY(-12px);
            box-shadow: 0 40px 80px rgba(0,0,0,0.1);
        }

        .track-header {
            padding: 40px;
            display: flex;
            align-items: flex-start;
            gap: 30px;
            background: var(--ath-light);
            border-bottom: 1px solid rgba(0,0,0,0.05);
            position: relative;
        }

        .track-header::after {
            content: '';
            position: absolute;
            top: 0; left: 0; width: 6px; height: 100%;
            background: var(--ath-teal);
        }

        .track-card.digital-design .track-header::after { background: #e84393; }
        .track-card.it-support .track-header::after { background: #0984e3; }
        .track-card.digital-sales .track-header::after { background: #2ed573; }

        .track-icon {
            width: 70px;
            height: 70px;
            background: #fff;
            border-radius: 18px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.8rem;
            color: var(--ath-teal);
            box-shadow: 0 10px 20px rgba(0,0,0,0.05);
            flex-shrink: 0;
        }

        .track-info h3 {
            font-size: 1.6rem;
            color: var(--ath-deep);
            font-weight: 800;
            margin-bottom: 10px;
        }

        .track-info p {
            color: var(--ath-muted);
            font-size: 1.05rem;
            line-height: 1.5;
            margin-bottom: 15px;
        }

        .track-meta {
            display: flex;
            gap: 20px;
        }

        .track-meta span {
            display: flex;
            align-items: center;
            gap: 8px;
            font-size: 0.85rem;
            font-weight: 700;
            text-transform: uppercase;
            letter-spacing: 1px;
            color: var(--ath-teal);
        }

        .track-content {
            padding: 40px;
            flex-grow: 1;
        }

        .track-content h4 {
            font-size: 0.9rem;
            text-transform: uppercase;
            letter-spacing: 1.5px;
            color: var(--ath-deep);
            font-weight: 800;
            margin-bottom: 20px;
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .track-content h4::after {
            content: '';
            flex-grow: 1;
            height: 1px;
            background: rgba(0,0,0,0.05);
        }

        .track-description p {
            color: var(--ath-text);
            line-height: 1.7;
            margin-bottom: 30px;
            font-size: 1.05rem;
        }

        .career-tags {
            display: flex;
            flex-wrap: wrap;
            gap: 10px;
        }

        .career-tags span {
            background: var(--ath-light);
            color: var(--ath-teal);
            padding: 8px 16px;
            border-radius: 10px;
            font-size: 0.9rem;
            font-weight: 700;
            border: 1px solid rgba(3, 139, 137, 0.1);
            transition: var(--ath-trans);
        }

        .career-tags span:hover {
            background: var(--ath-teal);
            color: #fff;
            transform: scale(1.05);
        }

        .track-footer {
            padding: 30px 40px;
            background: var(--ath-light);
            border-top: 1px solid rgba(0,0,0,0.05);
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .track-cta-info .salary {
            font-size: 1.1rem;
            font-weight: 800;
            color: var(--ath-deep);
            display: block;
        }

        .track-cta-info .salary-label {
            font-size: 0.75rem;
            font-weight: 700;
            color: var(--ath-muted);
            text-transform: uppercase;
            letter-spacing: 1px;
            margin-bottom: 2px;
            display: block;
        }

        /* Application Process */
        .application-process {
            padding: 100px 0;
            background: var(--ath-deep);
            color: #fff;
        }

        .application-process .section-title h2 { color: #fff; }
        .application-process .section-title p { color: rgba(255,255,255,0.7); }

        .process-steps {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 30px;
            margin-bottom: 60px;
        }

        .process-step {
            background: rgba(255, 255, 255, 0.05);
            padding: 40px;
            border-radius: var(--ath-radius);
            border: 1px solid rgba(255, 255, 255, 0.1);
            position: relative;
            transition: var(--ath-trans);
        }

        .process-step:hover {
            transform: translateY(-10px);
            background: rgba(255, 255, 255, 0.08);
            border-color: var(--ath-gold);
        }

        .step-number {
            font-size: 3rem;
            font-weight: 800;
            color: rgba(238, 157, 29, 0.2);
            position: absolute;
            top: 20px; right: 30px;
            line-height: 1;
        }

        .process-step h3 {
            color: var(--ath-gold);
            font-weight: 800;
            margin-bottom: 15px;
            font-size: 1.3rem;
        }

        .process-step p {
            color: rgba(255,255,255,0.8);
            line-height: 1.6;
            font-size: 1rem;
        }

        .application-cta {
            background: #fff;
            padding: 60px;
            border-radius: var(--ath-radius);
            text-align: center;
            color: var(--ath-deep);
            max-width: 900px;
            margin: 0 auto;
            box-shadow: 0 40px 100px rgba(0,0,0,0.2);
        }

        .application-cta h3 {
            font-size: 2.2rem;
            font-weight: 800;
            margin-bottom: 15px;
            font-family: 'Outfit', sans-serif;
        }

        .application-cta p {
            font-size: 1.2rem;
            color: var(--ath-muted);
            margin-bottom: 35px;
        }

        /* FAQ Section */
        .faq {
            padding: 100px 0;
            background: var(--ath-light);
        }

        .faq-container {
            max-width: 900px;
            margin: 0 auto;
            display: flex;
            flex-direction: column;
            gap: 15px;
        }

        .faq-item {
            background: #fff;
            border-radius: 18px;
            border: 1px solid rgba(0,0,0,0.05);
            overflow: hidden;
            transition: var(--ath-trans);
        }

        .faq-item:hover {
            border-color: var(--ath-teal);
            box-shadow: 0 10px 30px rgba(0,0,0,0.05);
        }

        .faq-question {
            padding: 25px 35px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            cursor: pointer;
        }

        .faq-question h4 {
            font-size: 1.15rem;
            color: var(--ath-deep);
            font-weight: 700;
            margin: 0;
        }

        .faq-toggle {
            width: 35px; height: 35px;
            background: var(--ath-light);
            border-radius: 10px;
            display: flex;
            align-items: center;
            justify-content: center;
            color: var(--ath-teal);
            font-weight: 800;
            transition: var(--ath-trans);
        }

        .faq-item.active {
            border-color: var(--ath-teal);
            box-shadow: 0 20px 40px rgba(0,0,0,0.08);
        }

        .faq-item.active .faq-toggle {
            background: var(--ath-teal);
            color: #fff;
            transform: rotate(45deg);
        }

        .faq-answer {
            max-height: 0;
            overflow: hidden;
            transition: all 0.5s cubic-bezier(0.16, 1, 0.3, 1);
            background: #fff;
        }

        .faq-item.active .faq-answer {
            max-height: 500px;
            padding: 0 35px 30px;
        }

        .faq-answer p {
            color: var(--ath-text);
            line-height: 1.8;
            font-size: 1.05rem;
            margin: 0;
            padding-top: 5px;
            border-top: 1px solid rgba(0,0,0,0.03);
        }

        /* Pagination Styling */
        .pagination-container {
            margin-top: 60px;
            display: flex;
            justify-content: center;
        }

        .pagination-container .pagination {
            display: flex;
            gap: 10px;
            list-style: none;
            padding: 0;
        }

        .pagination-container .page-item .page-link {
            width: 45px;
            height: 45px;
            display: flex;
            align-items: center;
            justify-content: center;
            border-radius: 12px;
            border: 1px solid rgba(0,0,0,0.1);
            color: var(--ath-deep);
            font-weight: 700;
            text-decoration: none;
            transition: var(--ath-trans);
            background: #fff;
        }

        .pagination-container .page-item.active .page-link {
            background: var(--ath-teal);
            color: #fff;
            border-color: var(--ath-teal);
            box-shadow: 0 10px 20px rgba(3, 139, 137, 0.2);
        }

        .pagination-container .page-item:not(.active):hover .page-link {
            border-color: var(--ath-gold);
            color: var(--ath-gold);
            transform: translateY(-3px);
        }

        .pagination-container .page-item.disabled .page-link {
            opacity: 0.5;
            cursor: not-allowed;
        }

        /* Mobile Responsive */
        @media (max-width: 992px) {
            .programs-hero-grid {
                grid-template-columns: 1fr;
                text-align: center;
                gap: 50px;
            }

            .programs-hero p { margin: 0 auto 40px; }

            .overview-content {
                grid-template-columns: 1fr;
                gap: 50px;
            }

            .tracks-grid {
                grid-template-columns: 1fr;
            }

            .track-header {
                padding: 30px;
            }

            .track-content {
                padding: 30px;
            }
        }

        @media (max-width: 768px) {
            .hero-stats {
                flex-direction: row;
                flex-wrap: wrap;
                justify-content: center;
            }

            .hero-stats .stat {
                flex: 1;
                min-width: 150px;
            }

            .overview-features {
                grid-template-columns: 1fr;
            }

            .application-cta {
                padding: 40px 25px;
            }
        }
    </style>
    @endpush

    @push('scripts')
    <script>
        // FAQ accordion
        document.querySelectorAll('.faq-question').forEach(question => {
            question.addEventListener('click', () => {
                const faqItem = question.parentElement;
                const isActive = faqItem.classList.contains('active');

                // Close all FAQ items
                document.querySelectorAll('.faq-item').forEach(item => {
                    item.classList.remove('active');
                });

                // Open clicked item if it wasn't active
                if (!isActive) {
                    faqItem.classList.add('active');
                }
            });
        });

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

        // Observe track cards
        document.querySelectorAll('.track-card').forEach(card => {
            observer.observe(card);
        });

        // Observe process steps
        document.querySelectorAll('.process-step').forEach(step => {
            observer.observe(step);
        });

        // Observe features
        document.querySelectorAll('.feature').forEach(feature => {
            observer.observe(feature);
        });
    </script>
    @endpush
@endsection
