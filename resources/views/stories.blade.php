<x-aethryna-layout>
    <x-slot name="title">Success Stories | Aethryna Foundation</x-slot>

    <!-- Hero Section -->
    <section class="stories-hero">
        <div class="hero-content">
            <h1>Success Stories</h1>
            <p>Inspiring journeys from our community members</p>
            <div class="hero-stats">
                <div class="stat">
                    <span class="stat-number">500+</span>
                    <span class="stat-label">Lives Transformed</span>
                </div>
                <div class="stat">
                    <span class="stat-number">95%</span>
                    <span class="stat-label">Success Rate</span>
                </div>
                <div class="stat">
                    <span class="stat-number">£25K</span>
                    <span class="stat-label">Avg Salary Increase</span>
                </div>
            </div>
        </div>
        <div class="hero-visual">
            <div class="floating-elements">
                <div class="element"></div>
                <div class="element"></div>
                <div class="element"></div>
            </div>
        </div>
    </section>

    <!-- Featured Story -->
    <section class="featured-story">
        <div class="story-container">
            <div class="story-content">
                <div class="story-badge">Featured Story</div>
                <h2>From Uncertainty to Tech Leadership</h2>
                <p class="story-intro">Meet Sarah, who went from working multiple minimum-wage jobs to becoming a senior developer and now leads a team of developers at a Fortune 500 company.</p>
                <div class="story-quote">
                    <blockquote>
                        "I never imagined I'd be in tech. I was working three jobs just to pay rent when I heard about Aethryna. The program didn't just teach me to code – it taught me to dream bigger. Today, I'm a senior full-stack developer earning £45k, and I lead a team of 8 developers. But more importantly, I mentor others just like Aethryna mentored me."
                    </blockquote>
                </div>
                <div class="story-details">
                    <div class="detail">
                        <h4>Background</h4>
                        <p>Sarah grew up in a low-income neighborhood with limited access to technology education. She worked multiple service jobs while trying to support her family.</p>
                    </div>
                    <div class="detail">
                        <h4>The Journey</h4>
                        <p>Started with our Web Development track, completed the program in 8 months, landed her first job within 2 weeks of graduation, and was promoted twice in 18 months.</p>
                    </div>
                    <div class="detail">
                        <h4>Current Role</h4>
                        <p>Senior Full-Stack Developer at TechCorp, leading a team of 8 developers on enterprise-level applications.</p>
                    </div>
                </div>
            </div>
            <div class="story-media">
                <div class="story-image">
                    <img src="https://images.unsplash.com/photo-1494790108755-2616b612b786?ixlib=rb-4.0.3&auto=format&fit=crop&w=387&q=80" alt="Sarah's success story">
                </div>
                <div class="story-metrics">
                    <div class="metric">
                        <span class="metric-value">8</span>
                        <span class="metric-label">Months in Program</span>
                    </div>
                    <div class="metric">
                        <span class="metric-value">£45K</span>
                        <span class="metric-label">Current Salary</span>
                    </div>
                    <div class="metric">
                        <span class="metric-value">2</span>
                        <span class="metric-label">Promotions</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Stories Gallery -->
    <section class="stories-gallery">
        <div class="section-title">
            <h2>More Success Stories</h2>
            <p>Real people, real transformations, real results</p>
        </div>
        <div class="gallery-filters">
            <button class="filter-btn active" data-filter="all">All Stories</button>
            <button class="filter-btn" data-filter="web-dev">Web Development</button>
            <button class="filter-btn" data-filter="design">Digital Design</button>
            <button class="filter-btn" data-filter="it-support">IT Support</button>
            <button class="filter-btn" data-filter="sales">Digital Sales</button>
        </div>
        <div class="stories-grid">
            <!-- Web Development Stories -->
            <div class="story-card" data-category="web-dev">
                <div class="story-header">
                    <div class="story-avatar">
                        <img src="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?ixlib=rb-4.0.3&auto=format&fit=crop&w=387&q=80" alt="James Liu">
                    </div>
                    <div class="story-meta">
                        <h3>James Liu</h3>
                        <p class="story-role">Frontend Developer at StartupXYZ</p>
                        <span class="story-track">Web Development</span>
                    </div>
                </div>
                <div class="story-content">
                    <p>"I was completely new to coding when I started. The mentors at Aethryna broke everything down into manageable pieces. Now I'm building user interfaces for a growing startup and loving every minute of it."</p>
                </div>
                <div class="story-stats">
                    <span class="stat">£32K salary</span>
                    <span class="stat">6 months to job</span>
                    <span class="stat">Remote work</span>
                </div>
            </div>

            <div class="story-card" data-category="web-dev">
                <div class="story-header">
                    <div class="story-avatar">
                        <img src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-4.0.3&auto=format&fit=crop&w=1170&q=80" alt="Maria Rodriguez">
                    </div>
                    <div class="story-meta">
                        <h3>Maria Rodriguez</h3>
                        <p class="story-role">Full-Stack Developer at TechCorp</p>
                        <span class="story-track">Web Development</span>
                    </div>
                </div>
                <div class="story-content">
                    <p>"Aethryna gave me the foundation I needed. I went from knowing nothing about programming to building complex web applications. The portfolio I created during the program got me interviews at top companies."</p>
                </div>
                <div class="story-stats">
                    <span class="stat">£38K salary</span>
                    <span class="stat">4 months to job</span>
                    <span class="stat">Multiple offers</span>
                </div>
            </div>

            <!-- Design Stories -->
            <div class="story-card" data-category="design">
                <div class="story-header">
                    <div class="story-avatar">
                        <img src="https://images.unsplash.com/photo-1494790108755-2616b612b786?ixlib=rb-4.0.3&auto=format&fit=crop&w=387&q=80" alt="Amara Johnson">
                    </div>
                    <div class="story-meta">
                        <h3>Amara Johnson</h3>
                        <p class="story-role">UX Designer at DesignStudio</p>
                        <span class="story-track">Digital Design</span>
                    </div>
                </div>
                <div class="story-content">
                    <p>"I always loved art but never thought I could turn it into a career. Aethryna taught me design thinking, user research, and professional tools. Now I design experiences that millions of users interact with daily."</p>
                </div>
                <div class="story-stats">
                    <span class="stat">£31K salary</span>
                    <span class="stat">5 months to job</span>
                    <span class="stat">Creative freedom</span>
                </div>
            </div>

            <div class="story-card" data-category="design">
                <div class="story-header">
                    <div class="story-avatar">
                        <img src="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?ixlib=rb-4.0.3&auto=format&fit=crop&w=387&q=80" alt="David Kim">
                    </div>
                    <div class="story-meta">
                        <h3>David Kim</h3>
                        <p class="story-role">Product Designer at InnovateCo</p>
                        <span class="story-track">Digital Design</span>
                    </div>
                </div>
                <div class="story-content">
                    <p>"The design track opened my eyes to how design impacts business. I learned to create user-centered solutions that drive real results. My portfolio work led to offers from top design agencies."</p>
                </div>
                <div class="story-stats">
                    <span class="stat">£35K salary</span>
                    <span class="stat">3 months to job</span>
                    <span class="stat">Agency offers</span>
                </div>
            </div>

            <!-- IT Support Stories -->
            <div class="story-card" data-category="it-support">
                <div class="story-header">
                    <div class="story-avatar">
                        <img src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-4.0.3&auto=format&fit=crop&w=1170&q=80" alt="Carlos Mendoza">
                    </div>
                    <div class="story-meta">
                        <h3>Carlos Mendoza</h3>
                        <p class="story-role">IT Support Specialist at GlobalTech</p>
                        <span class="story-track">IT Support</span>
                    </div>
                </div>
                <div class="story-content">
                    <p>"I needed stability and growth potential. Aethryna's IT Support program gave me both. I went from basic computer skills to troubleshooting complex enterprise systems. The certifications opened many doors."</p>
                </div>
                <div class="story-stats">
                    <span class="stat">£28K salary</span>
                    <span class="stat">2 months to job</span>
                    <span class="stat">Certifications</span>
                </div>
            </div>

            <div class="story-card" data-category="it-support">
                <div class="story-header">
                    <div class="story-avatar">
                        <img src="https://images.unsplash.com/photo-1494790108755-2616b612b786?ixlib=rb-4.0.3&auto=format&fit=crop&w=387&q=80" alt="Lisa Thompson">
                    </div>
                    <div class="story-meta">
                        <h3>Lisa Thompson</h3>
                        <p class="story-role">Desktop Support Lead at TechSolutions</p>
                        <span class="story-track">IT Support</span>
                    </div>
                </div>
                <div class="story-content">
                    <p>"The IT Support track was perfect for me. I learned practical skills that employers need immediately. Within 6 months of graduation, I was leading a support team and mentoring junior technicians."</p>
                </div>
                <div class="story-stats">
                    <span class="stat">£30K salary</span>
                    <span class="stat">1 month to job</span>
                    <span class="stat">Leadership role</span>
                </div>
            </div>

            <!-- Digital Sales Stories -->
            <div class="story-card" data-category="sales">
                <div class="story-header">
                    <div class="story-avatar">
                        <img src="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?ixlib=rb-4.0.3&auto=format&fit=crop&w=387&q=80" alt="Rachel Green">
                    </div>
                    <div class="story-meta">
                        <h3>Rachel Green</h3>
                        <p class="story-role">Digital Marketing Specialist at GrowthCo</p>
                        <span class="story-track">Digital Sales</span>
                    </div>
                </div>
                <div class="story-content">
                    <p>"I was great with people but struggled with traditional sales. Aethryna taught me digital marketing, social media strategy, and conversion optimization. Now I run successful campaigns that drive real business results."</p>
                </div>
                <div class="story-stats">
                    <span class="stat">£29K salary</span>
                    <span class="stat">4 months to job</span>
                    <span class="stat">Performance bonuses</span>
                </div>
            </div>

            <div class="story-card" data-category="sales">
                <div class="story-header">
                    <div class="story-avatar">
                        <img src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-4.0.3&auto=format&fit=crop&w=1170&q=80" alt="Michael Brown">
                    </div>
                    <div class="story-meta">
                        <h3>Michael Brown</h3>
                        <p class="story-role">Sales Development Rep at SaaS Company</p>
                        <span class="story-track">Digital Sales</span>
                    </div>
                </div>
                <div class="story-content">
                    <p>"The digital sales track transformed how I approach business development. I learned to use data and digital tools to find and convert leads. My income has more than doubled since completing the program."</p>
                </div>
                <div class="story-stats">
                    <span class="stat">£32K salary</span>
                    <span class="stat">3 months to job</span>
                    <span class="stat">Commission based</span>
                </div>
            </div>
        </div>
    </section>

    <!-- Video Testimonials -->
    <section class="video-testimonials">
        <div class="section-title">
            <h2>Hear It From Them</h2>
            <p>Watch real graduates share their Aethryna experience</p>
        </div>
        <div class="video-grid">
            <div class="video-card">
                <div class="video-thumbnail">
                    <img src="https://images.unsplash.com/photo-1522202176988-66273c2fd55f?ixlib=rb-4.0.3&auto=format&fit=crop&w=2070&q=80" alt="Video testimonial">
                    <div class="play-button">
                        <i class="fas fa-play"></i>
                    </div>
                </div>
                <div class="video-info">
                    <h3>From Zero to Developer</h3>
                    <p>Alex's journey from retail worker to software developer</p>
                    <div class="video-meta">
                        <span>2:34</span>
                        <span>Web Development</span>
                    </div>
                </div>
            </div>
            <div class="video-card">
                <div class="video-thumbnail">
                    <img src="https://images.unsplash.com/photo-1552664730-d307ca884978?ixlib=rb-4.0.3&auto=format&fit=crop&w=2070&q=80" alt="Video testimonial">
                    <div class="play-button">
                        <i class="fas fa-play"></i>
                    </div>
                </div>
                <div class="video-info">
                    <h3>Design Career Launch</h3>
                    <p>How Fatima discovered her passion for UX design</p>
                    <div class="video-meta">
                        <span>3:12</span>
                        <span>Digital Design</span>
                    </div>
                </div>
            </div>
            <div class="video-card">
                <div class="video-thumbnail">
                    <img src="https://images.unsplash.com/photo-1559136555-9303baea8ebd?ixlib=rb-4.0.3&auto=format&fit=crop&w=2070&q=80" alt="Video testimonial">
                    <div class="play-button">
                        <i class="fas fa-play"></i>
                    </div>
                </div>
                <div class="video-info">
                    <h3>Tech Support Success</h3>
                    <p>Building a stable career in IT support</p>
                    <div class="video-meta">
                        <span>2:58</span>
                        <span>IT Support</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Impact Numbers -->
    <section class="impact-numbers">
        <div class="numbers-container">
            <div class="number-card">
                <div class="number">500+</div>
                <div class="label">Success Stories</div>
            </div>
            <div class="number-card">
                <div class="number">95%</div>
                <div class="label">Employment Rate</div>
            </div>
            <div class="number-card">
                <div class="number">£25K</div>
                <div class="label">Average Salary</div>
            </div>
            <div class="number-card">
                <div class="number">8.5</div>
                <div class="label">Months to Job</div>
            </div>
        </div>
    </section>

    <!-- Alumni Spotlight -->
    <section class="alumni-spotlight">
        <div class="section-title">
            <h2>Alumni Making an Impact</h2>
            <p>Our graduates are not just succeeding – they're giving back</p>
        </div>
        <div class="alumni-grid">
            <div class="alumni-card">
                <div class="alumni-image">
                    <img src="https://images.unsplash.com/photo-1494790108755-2616b612b786?ixlib=rb-4.0.3&auto=format&fit=crop&w=387&q=80" alt="Alumni">
                </div>
                <div class="alumni-content">
                    <h3>Mentor & Leader</h3>
                    <p>Sarah now mentors 5 Aethryna students while leading development teams at TechCorp. She's created a scholarship fund for underrepresented groups in tech.</p>
                    <div class="alumni-stats">
                        <span>Mentors 5 students</span>
                        <span>Leads 12-person team</span>
                        <span>Created scholarship fund</span>
                    </div>
                </div>
            </div>
            <div class="alumni-card">
                <div class="alumni-image">
                    <img src="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?ixlib=rb-4.0.3&auto=format&fit=crop&w=387&q=80" alt="Alumni">
                </div>
                <div class="alumni-content">
                    <h3>Community Builder</h3>
                    <p>James founded a local coding club that serves 200+ youth annually. He volunteers his weekends teaching basic programming to underprivileged kids.</p>
                    <div class="alumni-stats">
                        <span>Founded coding club</span>
                        <span>200+ youth served</span>
                        <span>Weekly volunteer</span>
                    </div>
                </div>
            </div>
            <div class="alumni-card">
                <div class="alumni-image">
                    <img src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-4.0.3&auto=format&fit=crop&w=1170&q=80" alt="Alumni">
                </div>
                <div class="alumni-content">
                    <h3>Industry Advocate</h3>
                    <p>Maria speaks at tech conferences about diversity in tech and works with companies to improve their hiring practices for underrepresented groups.</p>
                    <div class="alumni-stats">
                        <span>Speaks at conferences</span>
                        <span>Diversity advocate</span>
                        <span>Industry consultant</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Share Your Story -->
    <section class="share-story">
        <div class="share-content">
            <h2>Share Your Story</h2>
            <p>Have you been impacted by Aethryna? We'd love to hear your story and potentially feature it on our website.</p>
            <div class="share-options">
                <a href="mailto:stories@aethryna.org" class="share-btn">
                    <i class="fas fa-envelope"></i>
                    Email Your Story
                </a>
                <a href="#social-share" class="share-btn">
                    <i class="fas fa-share"></i>
                    Share on Social
                </a>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="stories-cta">
        <div class="cta-content">
            <h2>Your Success Story Starts Here</h2>
            <p>Join the hundreds of young people who have transformed their lives through Aethryna's programs.</p>
            <a href="{{ route('register') }}" class="btn btn-primary">Start Your Journey</a>
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
        }

        /* Stories Hero */
        .stories-hero {
            height: 70vh;
            background: linear-gradient(rgba(26, 26, 26, 0.8), rgba(47, 110, 127, 0.4)), url('https://images.unsplash.com/photo-1522202176988-66273c2fd55f?ixlib=rb-4.0.3&auto=format&fit=crop&w=2070&q=80');
            background-size: cover;
            background-position: center;
            display: flex;
            align-items: center;
            position: relative;
            overflow: hidden;
        }

        .stories-hero .hero-content {
            flex: 1;
            padding: 0 5%;
            color: white;
            text-align: center;
        }

        .stories-hero h1 {
            font-size: 3.5rem;
            font-weight: 800;
            margin-bottom: 1.5rem;
            text-shadow: 2px 2px 10px rgba(0, 0, 0, 0.3);
        }

        .stories-hero p {
            font-size: 1.3rem;
            margin-bottom: 2.5rem;
            max-width: 600px;
            margin-left: auto;
            margin-right: auto;
        }

        .hero-stats {
            display: flex;
            gap: 2rem;
            justify-content: center;
        }

        .hero-stats .stat {
            background: rgba(255, 255, 255, 0.1);
            backdrop-filter: blur(20px);
            border: 1px solid rgba(255, 255, 255, 0.2);
            padding: 1.5rem;
            border-radius: var(--radius);
            text-align: center;
            color: white;
        }

        .hero-stats .stat-number {
            font-size: 2rem;
            font-weight: 800;
            display: block;
            margin-bottom: 0.5rem;
        }

        .hero-stats .stat-label {
            font-size: 0.9rem;
            opacity: 0.9;
        }

        .hero-visual {
            flex: 1;
            position: relative;
        }

        .floating-elements {
            position: absolute;
            width: 100%;
            height: 100%;
            top: 0;
            left: 0;
        }

        .floating-elements .element {
            position: absolute;
            width: 100px;
            height: 100px;
            background: linear-gradient(135deg, var(--gold), transparent);
            border-radius: 50%;
            filter: blur(30px);
            opacity: 0.3;
            animation: floatElements 8s ease-in-out infinite;
        }

        .floating-elements .element:nth-child(1) {
            top: 20%;
            right: 10%;
            animation-delay: 0s;
        }

        .floating-elements .element:nth-child(2) {
            top: 60%;
            right: 30%;
            animation-delay: 3s;
        }

        .floating-elements .element:nth-child(3) {
            bottom: 20%;
            right: 20%;
            animation-delay: 6s;
        }

        @keyframes floatElements {
            0%, 100% {
                transform: translateY(0px) scale(1);
            }
            50% {
                transform: translateY(-20px) scale(1.1);
            }
        }

        /* Featured Story */
        .featured-story {
            padding: 8rem 5%;
            background: var(--light);
        }

        .story-container {
            max-width: 1200px;
            margin: 0 auto;
            display: grid;
            grid-template-columns: 2fr 1fr;
            gap: 4rem;
            align-items: start;
        }

        .story-content {
            position: relative;
        }

        .story-badge {
            display: inline-block;
            background: var(--gold);
            color: var(--black);
            padding: 0.5rem 1rem;
            border-radius: 20px;
            font-weight: 600;
            margin-bottom: 1rem;
        }

        .story-content h2 {
            font-size: 2.5rem;
            color: var(--teal);
            margin-bottom: 1rem;
        }

        .story-intro {
            font-size: 1.1rem;
            color: var(--dark-gray);
            line-height: 1.6;
            margin-bottom: 2rem;
        }

        .story-quote blockquote {
            font-size: 1.3rem;
            font-style: italic;
            line-height: 1.6;
            color: var(--black);
            border-left: 4px solid var(--gold);
            padding-left: 2rem;
            margin-bottom: 2rem;
        }

        .story-details {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 2rem;
            margin-top: 2rem;
        }

        .detail h4 {
            color: var(--teal);
            margin-bottom: 0.5rem;
        }

        .detail p {
            color: var(--dark-gray);
            font-size: 0.95rem;
            line-height: 1.5;
        }

        .story-media {
            position: sticky;
            top: 2rem;
        }

        .story-image img {
            width: 100%;
            border-radius: var(--radius);
            box-shadow: var(--shadow);
        }

        .story-metrics {
            display: grid;
            grid-template-columns: 1fr;
            gap: 1rem;
            margin-top: 2rem;
        }

        .metric {
            background: white;
            padding: 1rem;
            border-radius: var(--radius);
            text-align: center;
            box-shadow: var(--shadow);
        }

        .metric-value {
            font-size: 1.5rem;
            font-weight: 800;
            color: var(--teal);
            display: block;
        }

        .metric-label {
            font-size: 0.9rem;
            color: var(--dark-gray);
        }

        /* Stories Gallery */
        .stories-gallery {
            padding: 8rem 5%;
            background: white;
        }

        .gallery-filters {
            display: flex;
            justify-content: center;
            gap: 1rem;
            margin-bottom: 3rem;
            flex-wrap: wrap;
        }

        .filter-btn {
            padding: 0.75rem 1.5rem;
            border: 2px solid var(--teal);
            background: transparent;
            color: var(--teal);
            border-radius: 25px;
            cursor: pointer;
            transition: var(--transition);
            font-weight: 600;
        }

        .filter-btn.active,
        .filter-btn:hover {
            background: var(--teal);
            color: white;
        }

        .stories-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(350px, 1fr));
            gap: 3rem;
            max-width: 1200px;
            margin: 0 auto;
        }

        .story-card {
            background: var(--light);
            border-radius: var(--radius);
            padding: 2rem;
            box-shadow: var(--shadow);
            transition: var(--transition);
            opacity: 0;
            transform: translateY(30px);
        }

        .story-card.visible {
            opacity: 1;
            transform: translateY(0);
        }

        .story-card:hover {
            transform: translateY(-10px);
            box-shadow: var(--shadow-hover);
        }

        .story-header {
            display: flex;
            align-items: center;
            gap: 1rem;
            margin-bottom: 1.5rem;
        }

        .story-avatar {
            width: 60px;
            height: 60px;
            border-radius: 50%;
            overflow: hidden;
            border: 3px solid var(--gold);
        }

        .story-avatar img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .story-meta h3 {
            color: var(--teal);
            margin-bottom: 0.3rem;
        }

        .story-role {
            color: var(--dark-gray);
            font-size: 0.9rem;
            margin-bottom: 0.5rem;
        }

        .story-track {
            background: var(--gold);
            color: var(--black);
            padding: 0.3rem 0.8rem;
            border-radius: 15px;
            font-size: 0.8rem;
            font-weight: 600;
        }

        .story-content p {
            color: var(--dark-gray);
            line-height: 1.6;
            margin-bottom: 1.5rem;
        }

        .story-stats {
            display: flex;
            gap: 1rem;
            flex-wrap: wrap;
        }

        .story-stats .stat {
            background: white;
            padding: 0.5rem 1rem;
            border-radius: 20px;
            font-size: 0.85rem;
            font-weight: 600;
            color: var(--teal);
            border: 1px solid var(--gold);
        }

        /* Video Testimonials */
        .video-testimonials {
            padding: 8rem 5%;
            background: linear-gradient(135deg, #f8f9fa, #e9ecef);
        }

        .video-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 3rem;
            max-width: 1200px;
            margin: 0 auto;
        }

        .video-card {
            background: white;
            border-radius: var(--radius);
            overflow: hidden;
            box-shadow: var(--shadow);
            transition: var(--transition);
        }

        .video-card:hover {
            transform: translateY(-10px);
            box-shadow: var(--shadow-hover);
        }

        .video-thumbnail {
            position: relative;
            height: 200px;
            overflow: hidden;
        }

        .video-thumbnail img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: var(--transition);
        }

        .video-card:hover .video-thumbnail img {
            transform: scale(1.05);
        }

        .play-button {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            width: 60px;
            height: 60px;
            background: var(--gold);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            color: var(--black);
            font-size: 1.2rem;
            transition: var(--transition);
        }

        .video-card:hover .play-button {
            transform: translate(-50%, -50%) scale(1.1);
        }

        .video-info {
            padding: 1.5rem;
        }

        .video-info h3 {
            color: var(--teal);
            margin-bottom: 0.5rem;
        }

        .video-info p {
            color: var(--dark-gray);
            font-size: 0.9rem;
            margin-bottom: 1rem;
        }

        .video-meta {
            display: flex;
            gap: 1rem;
            font-size: 0.8rem;
            color: var(--dark-gray);
        }

        /* Impact Numbers */
        .impact-numbers {
            padding: 6rem 5%;
            background: linear-gradient(135deg, var(--teal), #1a4a5a);
            color: white;
        }

        .numbers-container {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 3rem;
            max-width: 1000px;
            margin: 0 auto;
            text-align: center;
        }

        .number-card {
            padding: 2rem;
            background: rgba(255, 255, 255, 0.1);
            backdrop-filter: blur(20px);
            border-radius: var(--radius);
            border: 1px solid rgba(255, 255, 255, 0.2);
        }

        .number-card .number {
            font-size: 3rem;
            font-weight: 800;
            margin-bottom: 0.5rem;
        }

        .number-card .label {
            font-size: 1.1rem;
            opacity: 0.9;
        }

        /* Alumni Spotlight */
        .alumni-spotlight {
            padding: 8rem 5%;
            background: white;
        }

        .alumni-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(350px, 1fr));
            gap: 3rem;
            max-width: 1200px;
            margin: 0 auto;
        }

        .alumni-card {
            background: var(--light);
            border-radius: var(--radius);
            overflow: hidden;
            box-shadow: var(--shadow);
            transition: var(--transition);
        }

        .alumni-card:hover {
            transform: translateY(-10px);
            box-shadow: var(--shadow-hover);
        }

        .alumni-image {
            height: 200px;
            overflow: hidden;
        }

        .alumni-image img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: var(--transition);
        }

        .alumni-card:hover .alumni-image img {
            transform: scale(1.05);
        }

        .alumni-content {
            padding: 2rem;
        }

        .alumni-content h3 {
            color: var(--teal);
            margin-bottom: 1rem;
        }

        .alumni-content p {
            color: var(--dark-gray);
            line-height: 1.6;
            margin-bottom: 1.5rem;
        }

        .alumni-stats {
            display: flex;
            gap: 1rem;
            flex-wrap: wrap;
        }

        .alumni-stats span {
            background: var(--gold);
            color: var(--black);
            padding: 0.3rem 0.8rem;
            border-radius: 15px;
            font-size: 0.8rem;
            font-weight: 600;
        }

        /* Share Story */
        .share-story {
            padding: 6rem 5%;
            background: linear-gradient(135deg, #f8f9fa, #e9ecef);
        }

        .share-content {
            max-width: 800px;
            margin: 0 auto;
            text-align: center;
        }

        .share-content h2 {
            color: var(--teal);
            margin-bottom: 1rem;
        }

        .share-content p {
            color: var(--dark-gray);
            margin-bottom: 2rem;
            line-height: 1.6;
        }

        .share-options {
            display: flex;
            gap: 2rem;
            justify-content: center;
        }

        .share-btn {
            display: flex;
            align-items: center;
            gap: 0.5rem;
            padding: 1rem 2rem;
            background: var(--teal);
            color: white;
            text-decoration: none;
            border-radius: 25px;
            transition: var(--transition);
        }

        .share-btn:hover {
            background: var(--gold);
            color: var(--black);
        }

        /* CTA Section */
        .stories-cta {
            background: linear-gradient(135deg, var(--teal), #1a4a5a);
            color: white;
            text-align: center;
            padding: 8rem 2rem;
            position: relative;
            overflow: hidden;
        }

        .stories-cta .cta-content {
            max-width: 800px;
            margin: 0 auto;
            position: relative;
            z-index: 2;
        }

        .stories-cta h2 {
            font-size: 3.5rem;
            margin-bottom: 2rem;
        }

        .stories-cta p {
            font-size: 1.4rem;
            margin-bottom: 3rem;
            opacity: 0.9;
        }

        /* Mobile Responsive */
        @media (max-width: 992px) {
            .stories-hero {
                flex-direction: column;
                text-align: center;
                height: auto;
                padding: 6rem 0;
            }

            .hero-stats {
                margin-top: 3rem;
                flex-direction: column;
                gap: 1rem;
            }

            .story-container {
                grid-template-columns: 1fr;
                gap: 3rem;
            }

            .story-details {
                grid-template-columns: 1fr;
                gap: 1.5rem;
            }

            .stories-grid {
                grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            }

            .video-grid {
                grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            }

            .numbers-container {
                grid-template-columns: repeat(2, 1fr);
            }

            .alumni-grid {
                grid-template-columns: 1fr;
            }

            .share-options {
                flex-direction: column;
                align-items: center;
            }
        }

        @media (max-width: 768px) {
            .stories-hero h1 {
                font-size: 2.8rem;
            }

            .story-content h2 {
                font-size: 2rem;
            }

            .stories-grid {
                grid-template-columns: 1fr;
            }

            .video-grid {
                grid-template-columns: 1fr;
            }

            .numbers-container {
                grid-template-columns: 1fr;
            }

            .gallery-filters {
                justify-content: center;
            }

            .filter-btn {
                padding: 0.5rem 1rem;
                font-size: 0.9rem;
            }
        }

        @media (max-width: 576px) {
            .stories-hero h1 {
                font-size: 2.2rem;
            }

            .hero-stats .stat {
                padding: 1rem;
            }

            .story-content h2 {
                font-size: 1.8rem;
            }

            .story-quote blockquote {
                font-size: 1.1rem;
            }

            .stories-cta h2 {
                font-size: 2.5rem;
            }

            .share-content h2 {
                font-size: 2rem;
            }
        }
    </style>
    @endpush

    @push('scripts')
    <script>
        // Story filtering
        const filterButtons = document.querySelectorAll('.filter-btn');
        const storyCards = document.querySelectorAll('.story-card');

        filterButtons.forEach(button => {
            button.addEventListener('click', () => {
                // Remove active class from all buttons
                filterButtons.forEach(btn => btn.classList.remove('active'));
                // Add active class to clicked button
                button.classList.add('active');

                const filterValue = button.getAttribute('data-filter');

                storyCards.forEach(card => {
                    if (filterValue === 'all' || card.getAttribute('data-category') === filterValue) {
                        card.style.display = 'block';
                        setTimeout(() => card.classList.add('visible'), 100);
                    } else {
                        card.classList.remove('visible');
                        setTimeout(() => card.style.display = 'none', 300);
                    }
                });
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

        // Observe story cards
        storyCards.forEach(card => {
            observer.observe(card);
        });

        // Observe video cards
        document.querySelectorAll('.video-card').forEach(card => {
            observer.observe(card);
        });

        // Observe alumni cards
        document.querySelectorAll('.alumni-card').forEach(card => {
            observer.observe(card);
        });
    </script>
    @endpush
</x-aethryna-layout>