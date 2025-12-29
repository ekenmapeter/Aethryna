<x-aethryna-layout>
    <x-slot name="title">Aethryna | Empowering Youth Through Digital Skills & Mentorship</x-slot>

    <!-- Hero Section -->
    <section class="hero">
        <div class="floating-shapes">
            <div class="shape"></div>
            <div class="shape"></div>
            <div class="shape"></div>
        </div>
        <div class="sunrise-animation"></div>
        <div class="hero-content">
            <h1>Rise. Learn. Become.</h1>
            <p>Empowering young people to unlock their potential through mentorship, learning, and leadership.</p>
            <div class="hero-buttons">
                <a href="{{ route('login') }}" class="btn btn-primary">Start Your Journey</a>
                <a href="{{ route('about') }}" class="btn btn-outline">Learn More</a>
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section class="about" id="about">
        <div class="section-title">
            <h2>About Aethryna</h2>
            <p>Our mission is to empower the next generation through meaningful connections and transformative experiences.</p>
        </div>
        <div class="about-content">
            <div class="about-text">
                <h3>Building Futures Together</h3>
                <p>Aethryna Foundation is a modern youth empowerment nonprofit dedicated to creating pathways to success for young people from all backgrounds. Through our innovative mentorship programs, we connect aspiring youth with experienced professionals who guide them toward achieving their personal and professional goals.</p>
                <p>Our approach combines personalized mentorship with skill-building workshops, leadership development, and community engagement opportunities that prepare youth for the challenges of tomorrow.</p>
            </div>
            <div class="about-icons">
                <div class="icon-box">
                    <i class="fas fa-hands-helping"></i>
                    <h4>Mentorship</h4>
                    <p>Personalized guidance from industry professionals</p>
                </div>
                <div class="icon-box">
                    <i class="fas fa-graduation-cap"></i>
                    <h4>Leadership</h4>
                    <p>Developing the next generation of change-makers</p>
                </div>
                <div class="icon-box">
                    <i class="fas fa-rocket"></i>
                    <h4>Empowerment</h4>
                    <p>Building confidence and skills for success</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Interactive Assessment Tool -->
    <section class="about">
        <div class="assessment-tool">
            <h3>Discover Your Digital Future</h3>
            <p>Take our 2-minute assessment to match with the perfect tech career path and mentorship program.</p>
            <button class="btn btn-primary" id="assessmentToolBtn">Start Free Assessment</button>
        </div>
    </section>

    <!-- Digital Pathway Section -->
    <section class="pathway" id="pathway">
        <div class="section-title">
            <h2>The Digital Transformation Pathway</h2>
            <p>Our proven three-phase approach turns potential into professional success</p>
        </div>
        <div class="pathway-steps">
            <div class="pathway-step">
                <div class="step-number">01</div>
                <h3>Digital Foundations</h3>
                <p>3-6 months of building confidence, basic digital literacy, and growth mindset. Perfect for beginners with limited tech exposure.</p>
            </div>
            <div class="pathway-step">
                <div class="step-number">02</div>
                <h3>Skill Specialization</h3>
                <p>Choose your track: Web Development, Digital Design, IT Support, or Digital Sales. 6-12 months of project-based learning.</p>
            </div>
            <div class="pathway-step">
                <div class="step-number">03</div>
                <h3>Economic Independence</h3>
                <p>Start earning through freelance projects (£50-£200) and job placement. Ongoing mentorship and career advancement support.</p>
            </div>
        </div>
    </section>

    <!-- Transition Banner -->
    <div class="transition-banner">
        <div class="transition-banner-shapes">
            <div class="transition-shape"></div>
            <div class="transition-shape"></div>
            <div class="transition-shape"></div>
        </div>
        <div class="transition-pattern"></div>
        <div class="transition-banner-content">
            <h2>Empowering Tomorrow's Tech Leaders Today</h2>
            <p>Join a community where potential meets opportunity, and every aspiring professional finds their path to success in the digital world.</p>
        </div>
    </div>

    <!-- Skills Pathway Section -->
    <section class="programs" id="programs">
        <div class="section-title">
            <h2>Our Skills Pathway</h2>
            <p>Structured learning paths designed for real-world success</p>
        </div>
        <div class="program-cards">
            <div class="program-card">
                <div class="card-content">
                    <h3>Web Development Track</h3>
                    <p>Master HTML, CSS, JavaScript and build real websites. Perfect for creative problem-solvers who want to build the digital world.</p>
                    <a href="#" class="card-link">Explore Track <i class="fas fa-arrow-right"></i></a>
                </div>
            </div>
            <div class="program-card">
                <div class="card-content">
                    <h3>Digital Design Track</h3>
                    <p>Learn UI/UX design, branding, and visual communication. Create stunning digital experiences that users love.</p>
                    <a href="#" class="card-link">Explore Track <i class="fas fa-arrow-right"></i></a>
                </div>
            </div>
            <div class="program-card">
                <div class="card-content">
                    <h3>IT Support Track</h3>
                    <p>Develop troubleshooting skills, customer service, and technical support expertise. High-demand roles with clear career paths.</p>
                    <a href="#" class="card-link">Explore Track <i class="fas fa-arrow-right"></i></a>
                </div>
            </div>
        </div>
    </section>

    <!-- Impact Section -->
    <section class="impact" id="impact">
        <div class="section-title">
            <h2>Our Impact</h2>
            <p>Real numbers, real change, real futures transformed</p>
        </div>
        <div class="stats-container">
            <div class="stat-box">
                <div class="stat-number">500+</div>
                <div class="stat-label">Youth Empowered</div>
            </div>
            <div class="stat-box">
                <div class="stat-number">95%</div>
                <div class="stat-label">Employment Rate</div>
            </div>
            <div class="stat-box">
                <div class="stat-number">£25K</div>
                <div class="stat-label">Average Starting Salary</div>
            </div>
            <div class="stat-box">
                <div class="stat-number">50+</div>
                <div class="stat-label">Partner Companies</div>
            </div>
        </div>
    </section>

    <!-- Stories Section -->
    <section class="stories" id="stories">
        <div class="section-title">
            <h2>Success Stories</h2>
            <p>Inspiring journeys from our community members</p>
        </div>
        <div class="testimonial-container">
            <div class="testimonial active">
                <p class="testimonial-text">"Aethryna didn't just teach me coding – they taught me to believe in myself. Today, I'm a full-stack developer earning £35k, and I mentor others just like they mentored me."</p>
                <div class="testimonial-author">
                    <div class="author-avatar">
                        <img src="https://images.unsplash.com/photo-1494790108755-2616b612b786?ixlib=rb-4.0.3&auto=format&fit=crop&w=387&q=80" alt="Sarah Johnson">
                    </div>
                    <div class="author-info">
                        <h4>Sarah Johnson</h4>
                        <p>Full-Stack Developer at TechCorp</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="testimonial-nav">
            <div class="testimonial-dot active"></div>
            <div class="testimonial-dot"></div>
            <div class="testimonial-dot"></div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="cta">
        <div class="cta-content">
            <h2>Ready to Transform Your Future?</h2>
            <p>Join thousands of young people who have discovered their potential and built successful careers in tech.</p>
            <a href="{{ route('register') }}" class="cta-button">Start Your Journey Today</a>
        </div>
    </section>

    @push('styles')
    <style>
        :root {
            --teal: #2F6E7F;
            --gold: #E8B647;
            --black: #0C0C0C;
            --light: #F5F5F5;
            --dark-gray: #1a1a1a;
            --transition: all 0.6s cubic-bezier(0.23, 1, 0.320, 1);
            --radius: 20px;
            --shadow: 0 25px 50px rgba(0, 0, 0, 0.08);
            --shadow-hover: 0 40px 80px rgba(0, 0, 0, 0.12);
            --glass: rgba(255, 255, 255, 0.08);
            --glass-border: rgba(255, 255, 255, 0.12);
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        html {
            scroll-behavior: smooth;
        }

        body {
            font-family: 'Inter', sans-serif;
            background-color: var(--light);
            color: var(--black);
            line-height: 1.6;
            overflow-x: hidden;
            -webkit-font-smoothing: antialiased;
        }

        /* Premium Hero Section */
        .hero {
            height: 100vh;
            background: linear-gradient(rgba(26, 26, 26, 0.9), rgba(47, 110, 127, 0.3)), url('https://images.unsplash.com/photo-1522202176988-66273c2fd55f?ixlib=rb-4.0.3&auto=format&fit=crop&w=2070&q=80');
            background-size: cover;
            background-position: center;
            background-attachment: fixed;
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
            color: white;
            position: relative;
            overflow: hidden;
        }

        .hero-content {
            max-width: 900px;
            padding: 0 2rem;
            z-index: 2;
        }

        .hero h1 {
            font-size: 4.5rem;
            font-weight: 800;
            margin-bottom: 1.5rem;
            line-height: 1.1;
            text-shadow: 2px 2px 10px rgba(0, 0, 0, 0.3);
            opacity: 0;
            transform: translateY(50px);
            animation: fadeInUp 1.2s ease 1s forwards;
        }

        .hero p {
            font-size: 1.4rem;
            margin-bottom: 2.5rem;
            max-width: 700px;
            margin-left: auto;
            margin-right: auto;
            opacity: 0;
            transform: translateY(30px);
            animation: fadeInUp 1.2s ease 1.3s forwards;
        }

        .hero-buttons {
            display: flex;
            gap: 1.5rem;
            justify-content: center;
            margin-top: 3rem;
            opacity: 0;
            transform: translateY(30px);
            animation: fadeInUp 1.2s ease 1.6s forwards;
        }

        /* Advanced Prox-style Animations */
        .floating-shapes {
            position: absolute;
            width: 100%;
            height: 100%;
            top: 0;
            left: 0;
            pointer-events: none;
        }

        .shape {
            position: absolute;
            background: linear-gradient(135deg, var(--teal), transparent);
            border-radius: 50%;
            filter: blur(40px);
            opacity: 0.3;
            animation: float 8s ease-in-out infinite;
        }

        .shape:nth-child(1) {
            width: 300px;
            height: 300px;
            top: 10%;
            left: 5%;
            animation-delay: 0s;
        }

        .shape:nth-child(2) {
            width: 200px;
            height: 200px;
            top: 60%;
            right: 10%;
            animation-delay: 2s;
            background: linear-gradient(135deg, var(--gold), transparent);
        }

        .shape:nth-child(3) {
            width: 150px;
            height: 150px;
            bottom: 20%;
            left: 20%;
            animation-delay: 4s;
            background: linear-gradient(135deg, var(--teal), transparent);
        }

        @keyframes float {
            0%, 100% {
                transform: translateY(0px) rotate(0deg) scale(1);
            }
            50% {
                transform: translateY(-40px) rotate(180deg) scale(1.1);
            }
        }

        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(50px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        /* Premium Section Styles */
        section {
            padding: 8rem 5%;
            opacity: 0;
            transform: translateY(50px);
            transition: all 1s cubic-bezier(0.23, 1, 0.320, 1);
        }

        section.visible {
            opacity: 1;
            transform: translateY(0);
        }

        .section-title {
            text-align: center;
            margin-bottom: 5rem;
        }

        .section-title h2 {
            font-size: 3rem;
            font-weight: 800;
            color: var(--teal);
            margin-bottom: 1.5rem;
            position: relative;
            display: inline-block;
        }

        .section-title h2::after {
            content: '';
            position: absolute;
            bottom: -15px;
            left: 50%;
            transform: translateX(-50%);
            width: 100px;
            height: 4px;
            background: linear-gradient(90deg, var(--teal), var(--gold));
            border-radius: 2px;
        }

        .section-title p {
            max-width: 700px;
            margin: 0 auto;
            color: var(--dark-gray);
            font-size: 1.2rem;
        }

        /* Interactive Assessment Tool */
        .assessment-tool {
            background: linear-gradient(135deg, var(--teal), #1a4a5a);
            color: white;
            border-radius: var(--radius);
            padding: 4rem;
            margin: 4rem auto;
            max-width: 800px;
            text-align: center;
            position: relative;
            overflow: hidden;
        }

        .assessment-tool::before {
            content: '';
            position: absolute;
            top: -50%;
            left: -50%;
            width: 200%;
            height: 200%;
            background: linear-gradient(45deg, transparent, rgba(255,255,255,0.1), transparent);
            animation: shine 3s infinite;
        }

        @keyframes shine {
            0% { transform: translateX(-100%) translateY(-100%) rotate(45deg); }
            100% { transform: translateX(100%) translateY(100%) rotate(45deg); }
        }

        .assessment-tool h3 {
            font-size: 2.2rem;
            margin-bottom: 1.5rem;
        }

        .assessment-tool p {
            margin-bottom: 2.5rem;
            opacity: 0.9;
        }

        /* Digital Pathway Section */
        .pathway {
            background: var(--light);
        }

        .pathway-steps {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 2rem;
            max-width: 1200px;
            margin: 0 auto;
        }

        .pathway-step {
            background: white;
            padding: 3rem 2rem;
            border-radius: var(--radius);
            text-align: center;
            box-shadow: var(--shadow);
            transition: var(--transition);
            position: relative;
            overflow: hidden;
        }

        .pathway-step::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 5px;
            background: linear-gradient(90deg, var(--teal), var(--gold));
        }

        .pathway-step:hover {
            transform: translateY(-10px);
            box-shadow: var(--shadow-hover);
        }

        .step-number {
            font-size: 3rem;
            font-weight: 800;
            color: var(--teal);
            margin-bottom: 1rem;
            opacity: 0.7;
        }

        .pathway-step h3 {
            font-size: 1.5rem;
            margin-bottom: 1rem;
            color: var(--black);
        }

        .pathway-step p {
            color: var(--dark-gray);
            line-height: 1.7;
        }

        /* Transition Banner */
        .transition-banner {
            position: relative;
            padding: 6rem 5%;
            background: linear-gradient(135deg, var(--teal), var(--dark-gray));
            overflow: hidden;
            z-index: 1;
        }

        .transition-banner-content {
            max-width: 1000px;
            margin: 0 auto;
            text-align: center;
            position: relative;
            z-index: 2;
            color: white;
        }

        .transition-banner h2 {
            font-size: 2.5rem;
            font-weight: 800;
            margin-bottom: 1.5rem;
            background: linear-gradient(135deg, var(--gold), #fff);
            background-clip: text;
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }

        .transition-banner p {
            font-size: 1.3rem;
            margin-bottom: 2rem;
            opacity: 0.95;
            line-height: 1.8;
        }

        .transition-banner-shapes {
            position: absolute;
            width: 100%;
            height: 100%;
            top: 0;
            left: 0;
            pointer-events: none;
            overflow: hidden;
        }

        .transition-shape {
            position: absolute;
            border-radius: 50%;
            filter: blur(60px);
            opacity: 0.2;
            animation: transitionFloat 12s ease-in-out infinite;
        }

        .transition-shape:nth-child(1) {
            width: 400px;
            height: 400px;
            background: var(--gold);
            top: -10%;
            left: -5%;
            animation-delay: 0s;
        }

        .transition-shape:nth-child(2) {
            width: 300px;
            height: 300px;
            background: var(--teal);
            bottom: -10%;
            right: -5%;
            animation-delay: 2s;
        }

        .transition-shape:nth-child(3) {
            width: 250px;
            height: 250px;
            background: rgba(232, 182, 71, 0.5);
            top: 50%;
            left: 50%;
            animation-delay: 4s;
        }

        @keyframes transitionFloat {
            0%, 100% {
                transform: translateY(0px) translateX(0px) scale(1);
            }
            33% {
                transform: translateY(-30px) translateX(20px) scale(1.1);
            }
            66% {
                transform: translateY(30px) translateX(-20px) scale(0.9);
            }
        }

        .transition-pattern {
            position: absolute;
            width: 100%;
            height: 100%;
            top: 0;
            left: 0;
            background-image:
                linear-gradient(45deg, rgba(255,255,255,0.03) 25%, transparent 25%),
                linear-gradient(-45deg, rgba(255,255,255,0.03) 25%, transparent 25%),
                linear-gradient(45deg, transparent 75%, rgba(255,255,255,0.03) 75%),
                linear-gradient(-45deg, transparent 75%, rgba(255,255,255,0.03) 75%);
            background-size: 40px 40px;
            background-position: 0 0, 0 20px, 20px -20px, -20px 0px;
            animation: patternMove 30s linear infinite;
        }

        @keyframes patternMove {
            0% {
                background-position: 0 0, 0 20px, 20px -20px, -20px 0px;
            }
            100% {
                background-position: 40px 0, 40px 20px, 60px -20px, 20px 0px;
            }
        }

        /* Programs Section */
        .programs {
            background: linear-gradient(135deg, #f5f5f5, #e9ecef);
        }

        .program-cards {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(350px, 1fr));
            gap: 3rem;
            max-width: 1200px;
            margin: 0 auto;
        }

        .program-card {
            background: white;
            border-radius: var(--radius);
            overflow: hidden;
            box-shadow: var(--shadow);
            transition: var(--transition);
            position: relative;
            opacity: 0;
            transform: translateY(50px);
        }

        .program-card.visible {
            opacity: 1;
            transform: translateY(0);
        }

        .program-card:hover {
            transform: translateY(-15px) scale(1.02);
            box-shadow: var(--shadow-hover);
        }

        .program-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 5px;
            background: linear-gradient(90deg, var(--teal), var(--gold));
        }

        .card-content {
            padding: 3rem 2.5rem;
        }

        .program-card h3 {
            font-size: 1.8rem;
            margin-bottom: 1.5rem;
            color: var(--teal);
        }

        .program-card p {
            margin-bottom: 2rem;
            color: var(--dark-gray);
            line-height: 1.8;
        }

        .card-link {
            display: inline-flex;
            align-items: center;
            color: var(--teal);
            font-weight: 600;
            text-decoration: none;
            transition: var(--transition);
            position: relative;
        }

        .card-link::after {
            content: '';
            position: absolute;
            bottom: -2px;
            left: 0;
            width: 0;
            height: 2px;
            background: var(--gold);
            transition: var(--transition);
        }

        .card-link:hover::after {
            width: 100%;
        }

        .card-link i {
            margin-left: 0.5rem;
            transition: var(--transition);
        }

        .card-link:hover i {
            transform: translateX(8px);
        }

        /* Impact Section */
        .impact {
            background: linear-gradient(135deg, var(--teal), #1a4a5a);
            color: white;
            text-align: center;
        }

        .impact .section-title h2 {
            color: white;
        }

        .impact .section-title p {
            color: rgba(255, 255, 255, 0.8);
        }

        .stats-container {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 3rem;
            max-width: 1200px;
            margin: 0 auto;
        }

        .stat-box {
            padding: 3rem 2rem;
            border-radius: var(--radius);
            background: var(--glass);
            backdrop-filter: blur(20px);
            border: 1px solid var(--glass-border);
            transition: var(--transition);
            opacity: 0;
            transform: translateY(50px);
        }

        .stat-box.visible {
            opacity: 1;
            transform: translateY(0);
        }

        .stat-box:hover {
            transform: translateY(-10px);
            background: rgba(255, 255, 255, 0.15);
        }

        .stat-number {
            font-size: 4rem;
            font-weight: 800;
            margin-bottom: 1rem;
            color: var(--gold);
            text-shadow: 2px 2px 10px rgba(0, 0, 0, 0.3);
        }

        .stat-label {
            font-size: 1.3rem;
            font-weight: 600;
        }

        /* Stories Section */
        .stories {
            background: linear-gradient(135deg, var(--teal), var(--gold));
            color: white;
            position: relative;
            overflow: hidden;
        }

        .stories .section-title h2 {
            color: white;
        }

        .testimonial-container {
            max-width: 900px;
            margin: 0 auto;
            position: relative;
        }

        .testimonial {
            background: var(--glass);
            backdrop-filter: blur(20px);
            border: 1px solid var(--glass-border);
            padding: 4rem 3rem;
            border-radius: var(--radius);
            text-align: center;
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.1);
            opacity: 0;
            transform: translateX(100px);
            transition: all 0.8s cubic-bezier(0.23, 1, 0.320, 1);
        }

        .testimonial.active {
            opacity: 1;
            transform: translateX(0);
        }

        .testimonial-text {
            font-size: 1.3rem;
            font-style: italic;
            margin-bottom: 2.5rem;
            line-height: 1.8;
        }

        .testimonial-author {
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 1.5rem;
        }

        .author-avatar {
            width: 80px;
            height: 80px;
            border-radius: 50%;
            overflow: hidden;
            border: 3px solid var(--gold);
            transition: var(--transition);
        }

        .testimonial:hover .author-avatar {
            transform: scale(1.1);
        }

        .author-avatar img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .author-info h4 {
            font-size: 1.4rem;
            margin-bottom: 0.5rem;
        }

        .author-info p {
            font-size: 1rem;
            opacity: 0.9;
        }

        .testimonial-nav {
            display: flex;
            justify-content: center;
            gap: 1rem;
            margin-top: 3rem;
        }

        .testimonial-dot {
            width: 14px;
            height: 14px;
            border-radius: 50%;
            background: rgba(255, 255, 255, 0.3);
            cursor: pointer;
            transition: var(--transition);
        }

        .testimonial-dot.active {
            background: white;
            transform: scale(1.3);
        }

        /* CTA Section */
        .cta {
            background: linear-gradient(135deg, var(--teal), #1a4a5a);
            color: white;
            text-align: center;
            padding: 8rem 2rem;
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
            opacity: 0;
            animation: fadeInUp 1s ease 0.2s forwards;
        }

        .cta p {
            font-size: 1.4rem;
            margin-bottom: 3rem;
            opacity: 0.9;
            opacity: 0;
            animation: fadeInUp 1s ease 0.4s forwards;
        }

        .cta-button {
            display: inline-block;
            padding: 1.2rem 3rem;
            background: linear-gradient(135deg, var(--gold), #d4a123);
            color: var(--dark-gray);
            font-weight: 700;
            border-radius: 50px;
            text-decoration: none;
            font-size: 1.2rem;
            transition: var(--transition);
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.2);
            opacity: 0;
            animation: fadeInUp 1s ease 0.6s forwards;
            position: relative;
            overflow: hidden;
        }

        .cta-button::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(255,255,255,0.4), transparent);
            transition: var(--transition);
        }

        .cta-button:hover::before {
            left: 100%;
        }

        .cta-button:hover {
            transform: translateY(-5px) scale(1.05);
            box-shadow: 0 25px 50px rgba(0, 0, 0, 0.3);
        }

        /* About Section */
        .about {
            background-color: var(--light);
        }

        .about-content {
            max-width: 1200px;
            margin: 0 auto;
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 5rem;
            align-items: center;
        }

        .about-text h3 {
            font-size: 2.5rem;
            margin-bottom: 2rem;
            color: var(--teal);
            line-height: 1.2;
        }

        .about-text p {
            font-size: 1.1rem;
            margin-bottom: 2rem;
            color: var(--dark-gray);
        }

        .about-icons {
            display: grid;
            grid-template-columns: repeat(1, 1fr);
            gap: 2rem;
            width: 100%;
        }

        .icon-box {
            text-align: center;
            padding: 2.5rem 1.5rem;
            border-radius: var(--radius);
            transition: var(--transition);
            background: white;
            box-shadow: var(--shadow);
            position: relative;
            overflow: hidden;
        }

        .icon-box::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(232, 182, 71, 0.1), transparent);
            transition: var(--transition);
        }

        .icon-box:hover::before {
            left: 100%;
        }

        .icon-box:hover {
            transform: translateY(-10px);
            box-shadow: var(--shadow-hover);
        }

        .icon-box i {
            font-size: 3rem;
            color: var(--teal);
            margin-bottom: 1.5rem;
            transition: var(--transition);
        }

        .icon-box:hover i {
            color: var(--gold);
            transform: scale(1.1);
        }

        .icon-box h4 {
            font-size: 1.3rem;
            margin-bottom: 1rem;
            color: var(--black);
        }

        .icon-box p {
            color: var(--dark-gray);
            font-size: 0.95rem;
        }

        /* Mobile Responsive */
        @media (max-width: 1200px) {
            .hero h1 {
                font-size: 4rem;
            }

            .about-content {
                gap: 4rem;
            }
        }

        @media (max-width: 992px) {
            .hero h1 {
                font-size: 3.5rem;
            }

            .about-content {
                grid-template-columns: 1fr;
                gap: 3rem;
            }

            .about-icons {
                grid-template-columns: repeat(2, 1fr);
            }

            .pathway-steps {
                grid-template-columns: 1fr;
            }

            .program-cards {
                grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
                gap: 2rem;
            }

            .section-title h2 {
                font-size: 2.5rem;
            }

            .stats-container {
                gap: 2rem;
            }
        }

        @media (max-width: 768px) {
            .hero h1 {
                font-size: 2.8rem;
            }

            .hero p {
                font-size: 1.2rem;
            }

            .hero-buttons {
                flex-direction: column;
                align-items: center;
                gap: 1rem;
            }

            .btn {
                width: 250px;
            }

            .section-title h2 {
                font-size: 2.2rem;
            }

            .program-cards {
                grid-template-columns: 1fr;
            }

            .about-icons {
                grid-template-columns: 1fr;
            }

            .stats-container {
                grid-template-columns: repeat(2, 1fr);
            }

            .section-title h2 {
                font-size: 2.2rem;
            }
        }

        @media (max-width: 576px) {
            .hero h1 {
                font-size: 2.2rem;
            }

            .hero p {
                font-size: 1rem;
            }

            section {
                padding: 6rem 5%;
            }

            .section-title h2 {
                font-size: 2rem;
            }

            .card-content {
                padding: 2rem 1.5rem;
            }

            .stat-box {
                padding: 2rem 1rem;
            }

            .stat-number {
                font-size: 3rem;
            }

            .testimonial {
                padding: 2.5rem 1.5rem;
            }

            .testimonial-text {
                font-size: 1.1rem;
            }

            .cta h2 {
                font-size: 2.5rem;
            }

            .cta p {
                font-size: 1.2rem;
            }

            .cta-button {
                padding: 1rem 2rem;
                font-size: 1rem;
            }

            .about-text h3 {
                font-size: 2rem;
            }

            .about-text p {
                font-size: 1rem;
            }

            .icon-box {
                padding: 2rem 1.5rem;
            }

            .icon-box i {
                font-size: 2.5rem;
            }

            .icon-box h4 {
                font-size: 1.2rem;
            }

            .pathway-step {
                padding: 2rem 1.5rem;
            }

            .step-number {
                font-size: 2.5rem;
            }

            .pathway-step h3 {
                font-size: 1.3rem;
            }

            .program-card h3 {
                font-size: 1.5rem;
            }

            .stat-number {
                font-size: 2.5rem;
            }

            .stat-label {
                font-size: 1rem;
            }

            .testimonial-text {
                font-size: 1rem;
            }

            .author-info h4 {
                font-size: 1.2rem;
            }
        }

        @media (max-width: 480px) {
            .hero h1 {
                font-size: 1.8rem;
            }

            .hero p {
                font-size: 0.95rem;
            }

            section {
                padding: 4rem 5%;
            }

            .section-title {
                margin-bottom: 3rem;
            }

            .section-title h2 {
                font-size: 1.8rem;
            }

            .section-title p {
                font-size: 1rem;
            }

            .about-text h3 {
                font-size: 1.6rem;
            }

            .about-text p {
                font-size: 0.95rem;
            }

            .icon-box {
                padding: 1.5rem 1rem;
            }

            .icon-box i {
                font-size: 2rem;
            }

            .pathway-step {
                padding: 1.5rem 1rem;
            }

            .step-number {
                font-size: 2.5rem;
            }

            .pathway-step h3 {
                font-size: 1.3rem;
            }

            .program-card h3 {
                font-size: 1.5rem;
            }

            .stat-number {
                font-size: 2.5rem;
            }

            .stat-label {
                font-size: 1rem;
            }

            .testimonial {
                padding: 2rem 1.5rem;
            }

            .testimonial-text {
                font-size: 1rem;
            }

            .cta h2 {
                font-size: 2rem;
            }

            .cta p {
                font-size: 1rem;
            }

            .cta-button {
                padding: 1rem 2rem;
                font-size: 1rem;
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

        // Observe program cards
        document.querySelectorAll('.program-card').forEach(card => {
            observer.observe(card);
        });

        // Observe stat boxes
        document.querySelectorAll('.stat-box').forEach(box => {
            observer.observe(box);
        });

        // Testimonial navigation
        let currentTestimonial = 0;
        const testimonials = document.querySelectorAll('.testimonial');
        const dots = document.querySelectorAll('.testimonial-dot');

        function showTestimonial(index) {
            testimonials.forEach(testimonial => testimonial.classList.remove('active'));
            dots.forEach(dot => dot.classList.remove('active'));

            testimonials[index].classList.add('active');
            dots[index].classList.add('active');
            currentTestimonial = index;
        }

        dots.forEach((dot, index) => {
            dot.addEventListener('click', () => showTestimonial(index));
        });

        // Auto-rotate testimonials
        setInterval(() => {
            currentTestimonial = (currentTestimonial + 1) % testimonials.length;
            showTestimonial(currentTestimonial);
        }, 5000);

        // Navbar scroll effect
        window.addEventListener('scroll', () => {
            const navbar = document.getElementById('navbar');
            const logo = document.getElementById('siteLogo');

            if (window.scrollY > 100) {
                navbar.classList.add('scrolled');
                logo.querySelector('.default-logo').style.display = 'none';
                logo.querySelector('.scrolled-logo').style.display = 'block';
            } else {
                navbar.classList.remove('scrolled');
                logo.querySelector('.default-logo').style.display = 'block';
                logo.querySelector('.scrolled-logo').style.display = 'none';
            }
        });

        // Mobile menu toggle
        document.getElementById('mobileMenu').addEventListener('click', () => {
            document.getElementById('mobileNav').classList.add('active');
        });

        document.getElementById('closeMobileMenu').addEventListener('click', () => {
            document.getElementById('mobileNav').classList.remove('active');
        });

        // Assessment modal
        document.getElementById('openAssessment').addEventListener('click', () => {
            document.getElementById('assessmentModal').classList.add('active');
        });

        document.getElementById('assessmentToolBtn').addEventListener('click', () => {
            document.getElementById('assessmentModal').classList.add('active');
        });

        document.getElementById('closeModal').addEventListener('click', () => {
            document.getElementById('assessmentModal').classList.remove('active');
        });

        // Smart CTA visibility
        window.addEventListener('scroll', () => {
            const cta = document.getElementById('smartCTA');
            if (window.scrollY > 500) {
                cta.classList.add('visible');
            } else {
                cta.classList.remove('visible');
            }
        });

        // Loading screen
        window.addEventListener('load', () => {
            setTimeout(() => {
                document.getElementById('loadingScreen').style.display = 'none';
            }, 2000);
        });
    </script>
    @endpush
</x-aethryna-layout>