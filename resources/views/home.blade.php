@extends('layouts.aethryna')

@section('title', 'Aethryna | Empowering Youth Through Digital Skills & Mentorship')

@section('content')

    <!-- Hero Section -->
    <section class="ath-hero" id="hero">
        <div class="ath-hero-bg">
            <div class="ath-blob ath-blob-1"></div>
            <div class="ath-blob ath-blob-2"></div>
            <div class="ath-blob ath-blob-3"></div>
            <div class="ath-grid-layer"></div>
        </div>
        <div class="ath-container">
            <div class="ath-hero-slider">
                <!-- Slide 1 -->
                <div class="ath-hero-content active" data-index="0">
                    <div class="ath-hero-badge">Empowering Tomorrow's Leaders</div>
                    <h1 class="ath-title">Rise. Learn. <span class="ath-gradient-text">Become.</span></h1>
                    <p>Empowering young people to unlock their potential through mentorship, learning, and leadership. Your professional journey starts with Aethryna.</p>
                    <div class="ath-hero-btns">
                        <a href="{{ route('login') }}" class="ath-btn ath-btn-primary">Start Your Journey</a>
                        <a href="{{ route('about') }}" class="ath-btn ath-btn-outline">Learn More</a>
                    </div>
                </div>

                <!-- Slide 2 -->
                <div class="ath-hero-content" data-index="1">
                    <div class="ath-hero-badge">Bridging the Tech Gap</div>
                    <h1 class="ath-title">Tech. Future. <span class="ath-gradient-text">Mastery.</span></h1>
                    <p>Equipping the next generation with cutting-edge digital skills to thrive in a global economy. Master Web Development, Design, and more.</p>
                    <div class="ath-hero-btns">
                        <a href="{{ route('register') }}" class="ath-btn ath-btn-primary">View Programs</a>
                        <a href="{{ route('pathway') }}" class="ath-btn ath-btn-outline">Our Pathway</a>
                    </div>
                </div>

                <!-- Slide 3 -->
                <div class="ath-hero-content" data-index="2">
                    <div class="ath-hero-badge">Building Community</div>
                    <h1 class="ath-title">Connect. Lead. <span class="ath-gradient-text">Impact.</span></h1>
                    <p>Building a community of mentored professionals who create lasting change. Mentorship that transforms potential into excellence.</p>
                    <div class="ath-hero-btns">
                        <a href="{{ route('stories') }}" class="ath-btn ath-btn-primary">Success Stories</a>
                        <a href="{{ route('impact') }}" class="ath-btn ath-btn-outline">Explore Impact</a>
                    </div>
                </div>
            </div>

            <!-- Slider Navigation -->
            <div class="ath-slider-dots">
                <span class="ath-dot active" data-slide="0"></span>
                <span class="ath-dot" data-slide="1"></span>
                <span class="ath-dot" data-slide="2"></span>
            </div>
        </div>
        <div class="ath-scroll-indicator reveal-fade">
            <div class="ath-mouse"></div>
        </div>
    </section>

    <!-- About Section -->
    <section class="ath-section ath-about" id="about">
        <div class="ath-container">
            <div class="ath-section-header reveal-fade-up">
                <span class="ath-sub">Our Vision</span>
                <h2>About Aethryna</h2>
                <p>Our mission is to empower the next generation through meaningful connections and transformative experiences.</p>
            </div>
            <div class="ath-about-grid">
                <div class="ath-about-card reveal-fade-right">
                    <h3>Building Futures Together</h3>
                    <p>Aethryna Foundation is a modern youth empowerment nonprofit dedicated to creating pathways to success for young people from all backgrounds. Through our innovative mentorship programs, we connect aspiring youth with experienced professionals who guide them toward achieving their personal and professional goals.</p>
                    <p>Our approach combines personalized mentorship with skill-building workshops, leadership development, and community engagement opportunities that prepare youth for the challenges of tomorrow.</p>
                </div>
                <div class="ath-about-features">
                    <div class="ath-feature reveal-fade-left" style="--delay: 1">
                        <div class="ath-feature-icon"><i class="fas fa-hands-helping"></i></div>
                        <div class="ath-feature-body">
                            <h4>Mentorship</h4>
                            <p>Personalized guidance from industry professionals</p>
                        </div>
                    </div>
                    <div class="ath-feature reveal-fade-left" style="--delay: 2">
                        <div class="ath-feature-icon"><i class="fas fa-graduation-cap"></i></div>
                        <div class="ath-feature-body">
                            <h4>Leadership</h4>
                            <p>Developing the next generation of change-makers</p>
                        </div>
                    </div>
                    <div class="ath-feature reveal-fade-left" style="--delay: 3">
                        <div class="ath-feature-icon"><i class="fas fa-rocket"></i></div>
                        <div class="ath-feature-body">
                            <h4>Empowerment</h4>
                            <p>Building confidence and skills for success</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Interactive Assessment Box -->
    <section class="ath-section ath-interactive">
        <div class="ath-container">
            <div class="ath-assessment-box reveal-zoom">
                <div class="ath-assessment-content">
                    <h3 class="reveal-fade-up">Discover Your Digital Future</h3>
                    <p class="reveal-fade-up" style="--delay: 1">Take our 2-minute assessment to match with the perfect tech career path and mentorship program tailored to your unique strengths.</p>
                    <button class="ath-btn ath-btn-primary reveal-fade-up" style="--delay: 2" id="assessmentToolBtn">Start Free Assessment</button>
                </div>
                <div class="ath-assessment-shapes">
                    <div class="ath-shape-1"></div>
                    <div class="ath-shape-2"></div>
                </div>
            </div>
        </div>
    </section>

    <!-- Pathway Section -->
    <section class="ath-section ath-pathway" id="pathway">
        <div class="ath-container">
            <div class="ath-section-header reveal-fade-up">
                <span class="ath-sub">The Journey</span>
                <h2>The Transformation Pathway</h2>
                <p>A structured three-phase approach that turns potential into professional success</p>
            </div>
            <div class="ath-grid-3">
                <div class="ath-step-card reveal-fade-up" style="--delay: 1">
                    <div class="ath-step-num">01</div>
                    <h4>Digital Foundations</h4>
                    <p>3-6 months of building confidence, basic digital literacy, and growth mindset. Perfect for beginners with limited tech exposure.</p>
                </div>
                <div class="ath-step-card ath-highlight reveal-fade-up" style="--delay: 2">
                    <div class="ath-step-num">02</div>
                    <h4>Skill Specialization</h4>
                    <p>Choose your track: Web Development, Digital Design, IT Support, or Digital Sales. 6-12 months of project-based learning.</p>
                </div>
                <div class="ath-step-card reveal-fade-up" style="--delay: 3">
                    <div class="ath-step-num">03</div>
                    <h4>Economic Independence</h4>
                    <p>Start earning through freelance projects (£50-£200) and job placement. Ongoing mentorship and career advancement support.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Transition Banner -->
    <div class="ath-brand-banner">
        <div class="ath-container">
            <div class="ath-banner-content reveal-fade-up">
                <h2>Empowering Tomorrow's Tech Leaders Today</h2>
                <p>Join a community where potential meets opportunity, and every aspiring professional finds their path to success in the digital world.</p>
            </div>
        </div>
    </div>

    <!-- Programs Section -->
    <section class="ath-section ath-programs" id="programs">
        <div class="ath-container">
            <div class="ath-section-header reveal-fade-up">
                <span class="ath-sub">Choose Your Path</span>
                <h2>Our Skills Pathway</h2>
                <p>Structured learning paths designed for real-world excellence</p>
            </div>
            <div class="ath-grid-3">
                <div class="ath-prog-item reveal-fade-up" style="--delay: 1">
                    <div class="ath-prog-icon"><i class="fas fa-code"></i></div>
                    <h3>Web Development</h3>
                    <p>Master HTML, CSS, JavaScript and build real websites. Perfect for creative problem-solvers who want to build the digital world.</p>
                    <a href="#" class="ath-link">Explore Track <i class="fas fa-arrow-right"></i></a>
                </div>
                <div class="ath-prog-item reveal-fade-up" style="--delay: 2">
                    <div class="ath-prog-icon"><i class="fas fa-palette"></i></div>
                    <h3>Digital Design</h3>
                    <p>Learn UI/UX design, branding, and visual communication. Create stunning digital experiences that users love.</p>
                    <a href="#" class="ath-link">Explore Track <i class="fas fa-arrow-right"></i></a>
                </div>
                <div class="ath-prog-item reveal-fade-up" style="--delay: 3">
                    <div class="ath-prog-icon"><i class="fas fa-tools"></i></div>
                    <h3>IT Support</h3>
                    <p>Develop troubleshooting skills, customer service, and technical support expertise. High-demand roles with clear career paths.</p>
                    <a href="#" class="ath-link">Explore Track <i class="fas fa-arrow-right"></i></a>
                </div>
            </div>
        </div>
    </section>

    <!-- Impact Section -->
    <section class="ath-section ath-impact" id="impact">
        <div class="ath-container">
            <div class="ath-impact-grid">
                <div class="ath-impact-info reveal-fade-right">
                    <h2>Our Growing Impact</h2>
                    <p>We measure success through the lives we transform and the careers we launch. Every number tells a story of perseverance and growth.</p>
                </div>
                <div class="ath-stats-grid">
                    <div class="ath-stat reveal-zoom" style="--delay: 1">
                        <div class="ath-stat-val counter" data-target="500">0</div>
                        <div class="ath-stat-lab">Youth Empowered</div>
                    </div>
                    <div class="ath-stat reveal-zoom" style="--delay: 2">
                        <div class="ath-stat-val counter" data-target="95">0</div>
                        <div class="ath-stat-lab">Success Rate (%)</div>
                    </div>
                    <div class="ath-stat reveal-zoom" style="--delay: 3">
                        <div class="ath-stat-val counter" data-target="25000">0</div>
                        <div class="ath-stat-lab">Average Salary (£)</div>
                    </div>
                    <div class="ath-stat reveal-zoom" style="--delay: 4">
                        <div class="ath-stat-val counter" data-target="50">0</div>
                        <div class="ath-stat-lab">Partner Companies</div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Success Stories -->
    <section class="ath-section ath-stories" id="stories">
        <div class="ath-container">
            <div class="ath-section-header reveal-fade-up">
                <span class="ath-sub">Success Stories</span>
                <h2>Potential to Professional</h2>
            </div>
            <div class="ath-testimonial reveal-zoom">
                <div class="ath-testi-box">
                    <p class="ath-quote">"Aethryna didn't just teach me coding – they taught me to believe in myself. Today, I'm a full-stack developer earning £35k, and I mentor others just like they mentored me."</p>
                    <div class="ath-testi-user">
                        <div class="ath-user-avatar">S</div>
                        <div class="ath-user-info">
                            <h5>Sarah Johnson</h5>
                            <p>Full-Stack Developer at TechCorp</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Final CTA -->
    <section class="ath-cta-section">
        <div class="ath-container">
            <div class="ath-cta-card reveal-zoom">
                <h2>Ready to Transform Your Future?</h2>
                <p>Join thousands of young people who have discovered their potential and built successful careers in tech.</p>
                <a href="{{ route('register') }}" class="ath-btn ath-btn-gold">Start Your Journey Today</a>
            </div>
        </div>
    </section>

    <br>
    <br>
    <br>
    <br>

    @push('styles')
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    <style>
        /* Scoped variables and resets */
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

        .ath-section {
            padding: 100px 0;
            overflow: hidden;
            width: 100%;
        }

        .ath-container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
            width: 100%;
            box-sizing: border-box;
        }

        /* Hero Fixes */
        .ath-hero {
            height: 100vh;
            min-height: 700px;
            display: flex;
            align-items: center;
            position: relative;
            background: var(--ath-deep);
            color: var(--ath-white);
            overflow: hidden;
        }

        .ath-hero-bg {
            position: absolute;
            inset: 0;
            z-index: 1;
        }

        .ath-blob {
            position: absolute;
            border-radius: 50%;
            filter: blur(80px);
            opacity: 0.25;
            animation: athDrift 20s infinite alternate linear;
        }

        .ath-blob-1 { width: 500px; height: 500px; background: var(--ath-teal); top: -100px; right: -50px; }
        .ath-blob-2 { width: 400px; height: 400px; background: var(--ath-gold); bottom: -100px; left: -50px; animation-delay: -5s; }
        .ath-blob-3 { width: 300px; height: 300px; background: var(--ath-teal); top: 40%; right: 15%; animation-delay: -10s; }

        @keyframes athDrift {
            from { transform: translate(0,0) rotate(0); }
            to { transform: translate(50px, 50px) rotate(90deg); }
        }

        .ath-grid-layer {
            position: absolute;
            inset: 0;
            background-image: radial-gradient(rgba(255,255,255,0.05) 1px, transparent 1px);
            background-size: 30px 30px;
        }

        .ath-hero-content {
            position: absolute;
            top: 50%;
            left: 20px;
            transform: translateY(-50%);
            z-index: 10;
            max-width: 800px;
            text-align: left;
            opacity: 0;
            visibility: hidden;
            transition: all 1s cubic-bezier(0.16, 1, 0.3, 1);
        }

        .ath-hero-content.active {
            opacity: 1;
            visibility: visible;
        }

        .ath-hero-slider {
            position: relative;
            height: 450px; /* Fixed height for slider stability */
            width: 100%;
        }

        .ath-hero-content h1, 
        .ath-hero-content p, 
        .ath-hero-content .ath-hero-badge, 
        .ath-hero-content .ath-hero-btns {
            transform: translateY(30px);
            opacity: 0;
            transition: all 0.8s cubic-bezier(0.16, 1, 0.3, 1);
        }

        .ath-hero-content.active h1, 
        .ath-hero-content.active p, 
        .ath-hero-content.active .ath-hero-badge, 
        .ath-hero-content.active .ath-hero-btns {
            transform: translateY(0);
            opacity: 1;
        }

        .ath-hero-content.active .ath-hero-badge { transition-delay: 0.1s; }
        .ath-hero-content.active h1 { transition-delay: 0.2s; }
        .ath-hero-content.active p { transition-delay: 0.3s; }
        .ath-hero-content.active .ath-hero-btns { transition-delay: 0.4s; }

        .ath-slider-dots {
            position: absolute;
            bottom: -50px;
            left: 20px;
            display: flex;
            gap: 12px;
            z-index: 20;
        }

        .ath-dot {
            width: 12px;
            height: 12px;
            background: rgba(255, 255, 255, 0.2);
            border: 1px solid rgba(255, 255, 255, 0.3);
            border-radius: 50%;
            cursor: pointer;
            transition: var(--ath-trans);
        }

        .ath-dot.active {
            background: var(--ath-gold);
            width: 30px;
            border-radius: 10px;
        }

        .ath-hero-badge {
            display: inline-block;
            padding: 8px 20px;
            background: rgba(255,255,255,0.1);
            border-radius: 100px;
            color: var(--ath-gold);
            font-size: 0.9rem;
            font-weight: 600;
            margin-bottom: 25px;
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255,255,255,0.1);
        }

        .ath-title {
            font-size: clamp(2.5rem, 8vw, 5rem);
            font-weight: 800;
            line-height: 1.1;
            margin-bottom: 20px;
            letter-spacing: -2px;
        }

        .ath-gradient-text {
            background: linear-gradient(135deg, var(--ath-gold), #fff);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }

        .ath-hero-btns {
            display: flex;
            gap: 20px;
            margin-top: 40px;
        }

        /* Buttons */
        .ath-btn {
            padding: 14px 35px;
            border-radius: 100px;
            font-weight: 700;
            text-decoration: none;
            transition: var(--ath-trans);
            display: inline-block;
            cursor: pointer;
            border: none;
            text-align: center;
        }

        .ath-btn-primary { background: var(--ath-teal); color: #fff; }
        .ath-btn-primary:hover { transform: translateY(-3px); box-shadow: 0 10px 20px rgba(3, 139, 137, 0.3); }
        .ath-btn-outline { background: transparent; color: #fff; border: 2px solid rgba(255,255,255,0.3); }
        .ath-btn-outline:hover { border-color: var(--ath-gold); color: var(--ath-gold); }
        .ath-btn-gold { background: var(--ath-gold); color: var(--ath-deep); }
        .ath-btn-gold:hover { transform: translateY(-3px); box-shadow: 0 10px 20px rgba(238, 157, 29, 0.4); }

        /* General Section Header */
        .ath-section-header {
            text-align: center;
            margin-bottom: 60px;
        }

        .ath-sub {
            color: var(--ath-teal);
            font-weight: 800;
            text-transform: uppercase;
            letter-spacing: 3px;
            font-size: 0.8rem;
            display: block;
            margin-bottom: 10px;
        }

        .ath-section-header h2 {
            font-size: clamp(2rem, 5vw, 3.5rem);
            color: var(--ath-deep);
            font-weight: 800;
            margin-bottom: 15px;
        }

        /* Grids */
        .ath-grid-3 {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 30px;
        }

        .ath-about-grid {
            display: grid;
            grid-template-columns: 1.2fr 1fr;
            gap: 50px;
            align-items: center;
        }

        .ath-about-card {
            background: #fff;
            padding: 50px;
            border-radius: var(--ath-radius);
            box-shadow: 0 10px 40px rgba(0,0,0,0.05);
        }

        /* About Features Card Style */
        .ath-about-features {
            display: grid;
            gap: 20px;
        }

        .ath-feature {
            display: flex;
            gap: 25px;
            align-items: center;
            background: #fff;
            padding: 25px;
            border-radius: 20px;
            box-shadow: 0 8px 20px rgba(0,0,0,0.03);
            transition: var(--ath-trans);
            border: 1px solid transparent;
        }
        
        .ath-feature:hover {
            transform: translateX(10px);
            box-shadow: 0 15px 30px rgba(0,0,0,0.06);
            border-color: rgba(3, 139, 137, 0.1);
        }

        .ath-feature-icon {
            width: 60px;
            height: 60px;
            background: rgba(3, 139, 137, 0.1); /* Light Teal Bg */
            color: var(--ath-teal);
            display: flex;
            align-items: center;
            justify-content: center;
            border-radius: 16px;
            font-size: 1.4rem;
            flex-shrink: 0;
            transition: var(--ath-trans);
        }
        
        .ath-feature:hover .ath-feature-icon {
            background: var(--ath-teal);
            color: #fff;
            transform: rotateY(180deg);
        }
        
        .ath-feature-body h4 { font-size: 1.2rem; margin: 0 0 5px; color: var(--ath-deep); font-weight: 700; }
        .ath-feature-body p { margin: 0; font-size: 0.95rem; color: var(--ath-muted); }
        
        /* Program Cards Enhanced */
        .ath-prog-item {
            background: #fff;
            padding: 40px;
            border-radius: 24px;
            box-shadow: 0 10px 40px rgba(0,0,0,0.05); /* Softer, deeper shadow */
            transition: var(--ath-trans);
            border: 1px solid rgba(238, 157, 29, 0.05);
            display: flex;
            flex-direction: column;
            align-items: flex-start;
            position: relative;
            overflow: hidden;
        }
        
        .ath-prog-item::before {
            content: '';
            position: absolute;
            top: 0; left: 0; width: 4px; height: 0;
            background: var(--ath-gold);
            transition: height 0.4s ease;
        }
        
        .ath-prog-item:hover { 
            transform: translateY(-10px); 
            box-shadow: 0 25px 60px rgba(5, 88, 96, 0.1);
        }
        
        .ath-prog-item:hover::before { height: 100%; }

        .ath-prog-icon { 
            font-size: 2.5rem; 
            color: var(--ath-gold); 
            margin-bottom: 25px; 
            background: rgba(238, 157, 29, 0.1);
            width: 70px; height: 70px;
            display: flex; align-items: center; justify-content: center;
            border-radius: 18px;
            transition: var(--ath-trans);
        }
        
        .ath-prog-item:hover .ath-prog-icon {
            background: var(--ath-gold);
            color: #fff;
            transform: scale(1.1) rotate(10deg);
        }
        
        .ath-prog-item h3 { font-size: 1.6rem; margin-bottom: 15px; color: var(--ath-text); font-weight: 700; }
        .ath-prog-item p { color: var(--ath-muted); line-height: 1.6; margin-bottom: 25px; }
        
        .ath-link {
            color: var(--ath-teal);
            font-weight: 700;
            text-decoration: none;
            display: inline-flex;
            align-items: center;
            gap: 8px;
            font-size: 1rem;
            margin-top: auto; /* Push to bottom */
            transition: transform 0.3s ease;
        }
        
        .ath-link:hover { transform: translateX(5px); color: var(--ath-gold); }

        /* Assessment Card */
        .ath-assessment-box {
            background: linear-gradient(135deg, var(--ath-teal), var(--ath-deep));
            border-radius: var(--ath-radius);
            padding: 80px 40px;
            color: #fff;
            text-align: center;
            position: relative;
            overflow: hidden;
        }

        .ath-assessment-content { position: relative; z-index: 5; max-width: 700px; margin: 0 auto; }

        .ath-assessment-box h3 { font-size: 2.5rem; font-weight: 800; margin-bottom: 20px; }

        /* Pathway Cards with Enhanced UI */
        .ath-step-card {
            background: #fff;
            padding: 50px 30px;
            border-radius: var(--ath-radius);
            box-shadow: 0 10px 30px rgba(0,0,0,0.04);
            text-align: center;
            transition: var(--ath-trans);
            border: 1px solid rgba(0,0,0,0.03);
            position: relative;
            z-index: 1;
        }

        .ath-step-card:hover { 
            transform: translateY(-15px); 
            box-shadow: 0 20px 50px rgba(3, 139, 137, 0.1);
            border-color: rgba(3, 139, 137, 0.2);
        }
        
        .ath-highlight { 
            background: linear-gradient(to bottom right, #fff, #fffbf0);
            border: 2px solid var(--ath-gold); 
            transform: scale(1.05); /* Slight default scale */
        }
        
        .ath-highlight:hover { transform: scale(1.05) translateY(-15px); }

        .ath-step-num { 
            font-size: 5rem; 
            font-weight: 900; 
            color: rgba(238, 157, 29, 0.15); /* Gold tint */
            margin-bottom: -30px; 
            position: relative; 
            z-index: -1; 
            transition: var(--ath-trans);
        }
        
        .ath-step-card:hover .ath-step-num {
            transform: scale(1.1);
            color: rgba(3, 139, 137, 0.15); /* Change to Teal on hover */
        }
        
        .ath-step-card h4 { font-size: 1.5rem; color: var(--ath-deep); margin-bottom: 15px; font-weight: 700; }
        .ath-step-card p { color: var(--ath-muted); line-height: 1.6; }

        /* Impact Section Stats with Cards */
        .ath-impact-grid {
            display: grid;
            grid-template-columns: 0.8fr 1.2fr;
            gap: 60px;
            align-items: center;
        }

        .ath-stats-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 25px;
        }

        .ath-stat {
            background: #fff;
            padding: 40px 30px;
            border-radius: 24px;
            text-align: center;
            box-shadow: 0 10px 30px rgba(0,0,0,0.05);
            transition: var(--ath-trans);
            border: 1px solid rgba(0,0,0,0.03);
            position: relative;
            overflow: hidden;
        }
        
        .ath-stat::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            width: 100%;
            height: 4px;
            background: linear-gradient(90deg, var(--ath-teal), var(--ath-gold));
            opacity: 0;
            transition: opacity 0.3s;
        }

        .ath-stat:hover { 
            transform: translateY(-8px); 
            box-shadow: 0 20px 40px rgba(3, 139, 137, 0.1); 
        }
        
        .ath-stat:hover::after { opacity: 1; }
        
        .ath-stat-val { font-size: 3.5rem; font-weight: 800; color: var(--ath-teal); margin-bottom: 10px; line-height: 1; }
        .ath-stat-lab { font-weight: 600; color: var(--ath-muted); letter-spacing: 1px; text-transform: uppercase; font-size: 0.85rem; }

        /* Stories with Enhanced UI */
        .ath-testi-box {
            background: #fff;
            padding: 60px;
            border-radius: var(--ath-radius);
            box-shadow: 0 15px 50px rgba(0,0,0,0.08); /* Enhanced shadow */
            max-width: 900px;
            margin: 0 auto;
            text-align: center;
            border-top: 5px solid var(--ath-gold); /* Brand detail */
            position: relative;
        }
        
        .ath-testi-box::before {
            content: '\201C';
            position: absolute;
            top: 20px;
            left: 40px;
            font-size: 8rem;
            color: rgba(238, 157, 29, 0.1);
            font-family: serif;
            line-height: 1;
        }

        .ath-quote { 
            font-size: 1.6rem; 
            font-style: italic; 
            line-height: 1.6; 
            color: var(--ath-deep); 
            margin-bottom: 30px; 
            position: relative;
            z-index: 2;
        }
        
        .ath-testi-user { display: flex; align-items: center; justify-content: center; gap: 15px; }
        
        .ath-user-avatar { 
            width: 60px; 
            height: 60px; 
            background: linear-gradient(135deg, var(--ath-gold), #ffb347); 
            border-radius: 50%; 
            display: flex; 
            align-items: center; 
            justify-content: center; 
            font-weight: 800; 
            color: var(--ath-deep); 
            font-size: 1.5rem;
            box-shadow: 0 5px 15px rgba(238, 157, 29, 0.3);
        }
        
        .ath-user-info h5 { margin: 0; font-size: 1.1rem; color: var(--ath-text); font-weight: 700; }
        .ath-user-info p { margin: 0; font-size: 0.9rem; color: var(--ath-muted); }

        /* CTA */
        .ath-cta-card {
            background: linear-gradient(135deg, var(--ath-teal), var(--ath-deep));
            padding: 100px 40px;
            border-radius: var(--ath-radius);
            text-align: center;
            color: #fff;
            transform: translateY(50px);
        }

        /* Banner */
        .ath-brand-banner { background: var(--ath-deep); padding: 80px 0; color: #fff; text-align: center; }

        /* Reveal Logic */
        .reveal-fade, .reveal-fade-up, .reveal-fade-right, .reveal-fade-left, .reveal-zoom {
            opacity: 0;
            visibility: hidden;
        }
        
        .reveal-visible {
            opacity: 1 !important;
            visibility: visible !important;
            transform: translate(0,0) scale(1) !important;
            transition-delay: calc(var(--delay, 0) * 0.1s);
        }

        @media screen and (min-width: 992px) {
            .reveal-fade, .reveal-fade-up, .reveal-fade-right, .reveal-fade-left, .reveal-zoom {
                transform: translateY(30px);
                transition: opacity 0.8s ease, transform 0.8s cubic-bezier(0.16, 1, 0.3, 1), visibility 0.8s;
            }
            .reveal-fade-right { transform: translateX(-40px); }
            .reveal-fade-left { transform: translateX(40px); }
            .reveal-zoom { transform: scale(0.95); }
        }

        /* Mobile specific fixes for scattered items */
        @media (max-width: 991px) {
            .ath-about-grid, .ath-impact-grid { grid-template-columns: 1fr; text-align: center; }
            .ath-about-card { padding: 30px; }
            .ath-hero-content { text-align: center; margin: 0 auto; }
            .ath-hero-btns { justify-content: center; }
            .ath-section { padding: 80px 0; }
            .ath-hero { height: auto; min-height: 600px; padding: 120px 0 80px; }
            .ath-stats-grid { grid-template-columns: 1fr; }
        }
    </style>
    @endpush

    @push('scripts')
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Intersection Observer for Reveal
            const observerOptions = { threshold: 0.1, rootMargin: '0px 0px -50px 0px' };
            const revealObserver = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.classList.add('reveal-visible');
                        const counter = entry.target.classList.contains('counter') ? entry.target : entry.target.querySelector('.counter');
                        if (counter) startCounter(counter);
                    }
                });
            }, observerOptions);

            document.querySelectorAll('.reveal-fade, .reveal-fade-up, .reveal-fade-right, .reveal-fade-left, .reveal-zoom').forEach(el => revealObserver.observe(el));

            // Counter Logic
            function startCounter(el) {
                if (el.dataset.started) return;
                el.dataset.started = 'true';
                const target = parseInt(el.dataset.target);
                let current = 0;
                const duration = 2000;
                const step = target / (duration / 16);
                
                const update = () => {
                    current += step;
                    if (current < target) {
                        el.textContent = Math.floor(current).toLocaleString();
                        requestAnimationFrame(update);
                    } else {
                        if (target === 25000) el.textContent = '£25K';
                        else if (target === 95) el.textContent = '95%';
                        else if (target === 50) el.textContent = '50+';
                        else if (target === 500) el.textContent = '500+';
                        else el.textContent = target.toLocaleString();
                    }
                };
                update();
            }

            // Cleanup potential scroll bottlenecks
            document.getElementById('assessmentToolBtn')?.addEventListener('click', () => {
                window.location.href = '{{ route("register") }}';
            });

            // Hero Slider Logic
            const slides = document.querySelectorAll('.ath-hero-content');
            const dots = document.querySelectorAll('.ath-dot');
            let currentSlide = 0;
            let slideInterval;

            function goToSlide(n) {
                slides[currentSlide].classList.remove('active');
                dots[currentSlide].classList.remove('active');
                currentSlide = (n + slides.length) % slides.length;
                slides[currentSlide].classList.add('active');
                dots[currentSlide].classList.add('active');
            }

            function nextSlide() {
                goToSlide(currentSlide + 1);
            }

            function startSlideShow() {
                slideInterval = setInterval(nextSlide, 6000); // 6 seconds per slide
            }

            function stopSlideShow() {
                clearInterval(slideInterval);
            }

            dots.forEach(dot => {
                dot.addEventListener('click', () => {
                    stopSlideShow();
                    goToSlide(parseInt(dot.dataset.slide));
                    startSlideShow();
                });
            });

            // Start the slider
            startSlideShow();
        });
    </script>
    @endpush
@endsection
