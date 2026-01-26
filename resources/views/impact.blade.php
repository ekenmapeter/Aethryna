@extends('layouts.aethryna')

@section('title', 'Our Impact | Aethryna Foundation')

@section('content')

    <!-- Hero Section -->
    <section class="impact-hero">
        <div class="hero-content">
            <h1>Our Impact</h1>
            <p>Real numbers, real change, real futures transformed</p>
        </div>
        <div class="hero-stats">
            <div class="stat-card">
                <div class="stat-number">500+</div>
                <div class="stat-label">Youth Empowered</div>
            </div>
            <div class="stat-card">
                <div class="stat-number">95%</div>
                <div class="stat-label">Employment Rate</div>
            </div>
            <div class="stat-card">
                <div class="stat-number">£25K</div>
                <div class="stat-label">Average Starting Salary</div>
            </div>
        </div>
    </section>

    <!-- Impact Overview -->
    <section class="impact-overview">
        <div class="section-title">
            <h2>Measuring Success</h2>
            <p>Every number represents a life changed, a career launched, a future transformed</p>
        </div>
        <div class="overview-content">
            <div class="overview-text">
                <p>Since our founding, we've been committed to not just teaching skills, but creating lasting change. Our impact goes beyond numbers – it's about the confidence gained, the opportunities unlocked, and the communities strengthened.</p>
                <p>Through our comprehensive programs, we've helped hundreds of young people transition from uncertainty to successful careers in tech. But our work doesn't stop at graduation – we provide ongoing support to ensure long-term success.</p>
            </div>
            <div class="overview-metrics">
                <div class="metric">
                    <div class="metric-icon">
                        <i class="fas fa-users"></i>
                    </div>
                    <div class="metric-data">
                        <span class="metric-number">500+</span>
                        <span class="metric-label">Youth Served</span>
                    </div>
                </div>
                <div class="metric">
                    <div class="metric-icon">
                        <i class="fas fa-briefcase"></i>
                    </div>
                    <div class="metric-data">
                        <span class="metric-number">95%</span>
                        <span class="metric-label">Job Placement</span>
                    </div>
                </div>
                <div class="metric">
                    <div class="metric-icon">
                        <i class="fas fa-pound-sign"></i>
                    </div>
                    <div class="metric-data">
                        <span class="metric-number">£25K</span>
                        <span class="metric-label">Avg Salary</span>
                    </div>
                </div>
                <div class="metric">
                    <div class="metric-icon">
                        <i class="fas fa-building"></i>
                    </div>
                    <div class="metric-data">
                        <span class="metric-number">50+</span>
                        <span class="metric-label">Partner Companies</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Detailed Statistics -->
    <section class="detailed-stats">
        <div class="stats-container">
            <div class="stat-group">
                <h3>Program Completion & Success</h3>
                <div class="stat-bars">
                    <div class="stat-bar">
                        <div class="bar-label">Program Completion Rate</div>
                        <div class="bar-container">
                            <div class="bar-fill" style="width: 92%"></div>
                            <div class="bar-value">92%</div>
                        </div>
                    </div>
                    <div class="stat-bar">
                        <div class="bar-label">Job Placement Within 6 Months</div>
                        <div class="bar-container">
                            <div class="bar-fill" style="width: 95%"></div>
                            <div class="bar-value">95%</div>
                        </div>
                    </div>
                    <div class="stat-bar">
                        <div class="bar-label">Career Advancement (Promotions)</div>
                        <div class="bar-container">
                            <div class="bar-fill" style="width: 78%"></div>
                            <div class="bar-value">78%</div>
                        </div>
                    </div>
                    <div class="stat-bar">
                        <div class="bar-label">Alumni Still Employed</div>
                        <div class="bar-container">
                            <div class="bar-fill" style="width: 89%"></div>
                            <div class="bar-value">89%</div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="stat-group">
                <h3>Economic Impact</h3>
                <div class="economic-stats">
                    <div class="economic-stat">
                        <div class="stat-icon">
                            <i class="fas fa-chart-line"></i>
                        </div>
                        <div class="stat-info">
                            <div class="stat-value">£12.5M</div>
                            <div class="stat-desc">Total lifetime earnings increase for graduates</div>
                        </div>
                    </div>
                    <div class="economic-stat">
                        <div class="stat-icon">
                            <i class="fas fa-home"></i>
                        </div>
                        <div class="stat-info">
                            <div class="stat-value">£8.5K</div>
                            <div class="stat-desc">Average annual tax contribution per graduate</div>
                        </div>
                    </div>
                    <div class="economic-stat">
                        <div class="stat-icon">
                            <i class="fas fa-users-cog"></i>
                        </div>
                        <div class="stat-info">
                            <div class="stat-value">375</div>
                            <div class="stat-desc">Jobs created through our partner companies</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Track Performance -->
    <section class="track-performance">
        <div class="section-title">
            <h2>Track-by-Track Success</h2>
            <p>Detailed outcomes for each of our specialized programs</p>
        </div>
        <div class="tracks-grid">
            <div class="track-performance-card">
                <div class="track-header">
                    <div class="track-icon">
                        <i class="fas fa-code"></i>
                    </div>
                    <h3>Web Development</h3>
                </div>
                <div class="track-stats">
                    <div class="track-stat">
                        <span class="stat-value">96%</span>
                        <span class="stat-label">Employment Rate</span>
                    </div>
                    <div class="track-stat">
                        <span class="stat-value">£28K</span>
                        <span class="stat-label">Avg Salary</span>
                    </div>
                    <div class="track-stat">
                        <span class="stat-value">4.2</span>
                        <span class="stat-label">Months to Job</span>
                    </div>
                </div>
                <div class="track-jobs">
                    <h4>Top Job Titles:</h4>
                    <ul>
                        <li>Junior Web Developer</li>
                        <li>Frontend Developer</li>
                        <li>Full-Stack Developer</li>
                        <li>UI Developer</li>
                    </ul>
                </div>
            </div>

            <div class="track-performance-card">
                <div class="track-header">
                    <div class="track-icon">
                        <i class="fas fa-palette"></i>
                    </div>
                    <h3>Digital Design</h3>
                </div>
                <div class="track-stats">
                    <div class="track-stat">
                        <span class="stat-value">94%</span>
                        <span class="stat-label">Employment Rate</span>
                    </div>
                    <div class="track-stat">
                        <span class="stat-value">£26K</span>
                        <span class="stat-label">Avg Salary</span>
                    </div>
                    <div class="track-stat">
                        <span class="stat-value">3.8</span>
                        <span class="stat-label">Months to Job</span>
                    </div>
                </div>
                <div class="track-jobs">
                    <h4>Top Job Titles:</h4>
                    <ul>
                        <li>UX Designer</li>
                        <li>UI Designer</li>
                        <li>Product Designer</li>
                        <li>Digital Designer</li>
                    </ul>
                </div>
            </div>

            <div class="track-performance-card">
                <div class="track-header">
                    <div class="track-icon">
                        <i class="fas fa-tools"></i>
                    </div>
                    <h3>IT Support</h3>
                </div>
                <div class="track-stats">
                    <div class="track-stat">
                        <span class="stat-value">97%</span>
                        <span class="stat-label">Employment Rate</span>
                    </div>
                    <div class="track-stat">
                        <span class="stat-value">£24K</span>
                        <span class="stat-label">Avg Salary</span>
                    </div>
                    <div class="track-stat">
                        <span class="stat-value">2.5</span>
                        <span class="stat-label">Months to Job</span>
                    </div>
                </div>
                <div class="track-jobs">
                    <h4>Top Job Titles:</h4>
                    <ul>
                        <li>IT Support Specialist</li>
                        <li>Help Desk Technician</li>
                        <li>Technical Support</li>
                        <li>Desktop Support</li>
                    </ul>
                </div>
            </div>

            <div class="track-performance-card">
                <div class="track-header">
                    <div class="track-icon">
                        <i class="fas fa-chart-line"></i>
                    </div>
                    <h3>Digital Sales</h3>
                </div>
                <div class="track-stats">
                    <div class="track-stat">
                        <span class="stat-value">93%</span>
                        <span class="stat-label">Employment Rate</span>
                    </div>
                    <div class="track-stat">
                        <span class="stat-value">£25K</span>
                        <span class="stat-label">Avg Salary</span>
                    </div>
                    <div class="track-stat">
                        <span class="stat-value">3.2</span>
                        <span class="stat-label">Months to Job</span>
                    </div>
                </div>
                <div class="track-jobs">
                    <h4>Top Job Titles:</h4>
                    <ul>
                        <li>Digital Marketing Specialist</li>
                        <li>Social Media Manager</li>
                        <li>Sales Development Rep</li>
                        <li>Marketing Coordinator</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- Testimonials -->
    <section class="impact-testimonials">
        <div class="section-title">
            <h2>Stories of Transformation</h2>
            <p>Hear directly from our graduates about how Aethryna changed their lives</p>
        </div>
        <div class="testimonials-grid">
            <div class="testimonial-card">
                <div class="testimonial-content">
                    <p>"Before Aethryna, I was working minimum wage jobs with no future. Now I'm a web developer earning £32k a year. The program didn't just teach me coding – it taught me to believe in myself."</p>
                </div>
                <div class="testimonial-author">
                    <div class="author-avatar">
                        <img src="https://images.unsplash.com/photo-1494790108755-2616b612b786?ixlib=rb-4.0.3&auto=format&fit=crop&w=387&q=80" alt="Sarah Johnson">
                    </div>
                    <div class="author-info">
                        <h4>Sarah Johnson</h4>
                        <p>Web Developer at TechCorp</p>
                        <p class="author-track">Web Development Track</p>
                    </div>
                </div>
            </div>

            <div class="testimonial-card">
                <div class="testimonial-content">
                    <p>"I came to Aethryna with no design experience. Six months later, I landed a UX designer role paying £28k. The mentors were incredible and the portfolio I built got me noticed by employers."</p>
                </div>
                <div class="testimonial-author">
                    <div class="author-avatar">
                        <img src="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?ixlib=rb-4.0.3&auto=format&fit=crop&w=387&q=80" alt="James Liu">
                    </div>
                    <div class="author-info">
                        <h4>James Liu</h4>
                        <p>UX Designer at DesignStudio</p>
                        <p class="author-track">Digital Design Track</p>
                    </div>
                </div>
            </div>

            <div class="testimonial-card">
                <div class="testimonial-content">
                    <p>"The IT Support program gave me stability and growth potential. I started at £22k and got promoted to IT Manager within 18 months. Aethryna opened doors I never knew existed."</p>
                </div>
                <div class="testimonial-author">
                    <div class="author-avatar">
                        <img src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-4.0.3&auto=format&fit=crop&w=1170&q=80" alt="David Chen">
                    </div>
                    <div class="author-info">
                        <h4>David Chen</h4>
                        <p>IT Manager at GlobalTech</p>
                        <p class="author-track">IT Support Track</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Community Impact -->
    <section class="community-impact">
        <div class="section-title">
            <h2>Community Impact</h2>
            <p>How our work strengthens communities and creates opportunities</p>
        </div>
        <div class="community-content">
            <div class="community-stats">
                <div class="community-stat">
                    <div class="stat-icon">
                        <i class="fas fa-map-marker-alt"></i>
                    </div>
                    <div class="stat-details">
                        <h3>3 Cities</h3>
                        <p>Serving communities across London, Manchester, and Birmingham</p>
                    </div>
                </div>
                <div class="community-stat">
                    <div class="stat-icon">
                        <i class="fas fa-handshake"></i>
                    </div>
                    <div class="stat-details">
                        <h3>50+ Partners</h3>
                        <p>Collaborating with leading companies and organizations</p>
                    </div>
                </div>
                <div class="community-stat">
                    <div class="stat-icon">
                        <i class="fas fa-graduation-cap"></i>
                    </div>
                    <div class="stat-details">
                        <h3>Alumni Network</h3>
                        <p>400+ graduates supporting each other and giving back</p>
                    </div>
                </div>
                <div class="community-stat">
                    <div class="stat-icon">
                        <i class="fas fa-heart"></i>
                    </div>
                    <div class="stat-details">
                        <h3>Volunteer Hours</h3>
                        <p>2,500+ hours of community service by our graduates</p>
                    </div>
                </div>
            </div>
            <div class="community-story">
                <h3>Creating Ripple Effects</h3>
                <p>Our impact extends beyond individual success stories. When one person transforms their life through our programs, they become a positive force in their community. Our graduates go on to mentor others, volunteer in their neighborhoods, and contribute to local economic growth.</p>
                <p>Through partnerships with local organizations, we've created a network of support that helps sustain long-term change. Our alumni often return as mentors, creating a beautiful cycle of empowerment that strengthens entire communities.</p>
            </div>
        </div>
    </section>

    <!-- Future Goals -->
    <section class="future-goals">
        <div class="section-title">
            <h2>Looking Ahead</h2>
            <p>Our vision for expanding impact and reaching more young people</p>
        </div>
        <div class="goals-content">
            <div class="goals-text">
                <h3>Scaling for Greater Impact</h3>
                <p>As we grow, our commitment to quality and accessibility remains unwavering. We're expanding our reach while maintaining the personalized support that makes our programs successful.</p>
                <div class="goals-list">
                    <div class="goal">
                        <h4>2024 Goals:</h4>
                        <ul>
                            <li>Serve 800+ youth across our programs</li>
                            <li>Expand to 2 additional cities</li>
                            <li>Launch advanced specialization tracks</li>
                            <li>Strengthen employer partnerships</li>
                        </ul>
                    </div>
                    <div class="goal">
                        <h4>2025 Vision:</h4>
                        <ul>
                            <li>Establish Aethryna Academy for continuous learning</li>
                            <li>Create international partnership programs</li>
                            <li>Develop entrepreneurship support tracks</li>
                            <li>Build comprehensive alumni success network</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="goals-visual">
                <div class="growth-chart">
                    <div class="chart-bar">
                        <div class="bar" style="height: 40%"></div>
                        <span class="chart-label">2022</span>
                    </div>
                    <div class="chart-bar">
                        <div class="bar" style="height: 65%"></div>
                        <span class="chart-label">2023</span>
                    </div>
                    <div class="chart-bar">
                        <div class="bar" style="height: 85%"></div>
                        <span class="chart-label">2024</span>
                    </div>
                    <div class="chart-bar">
                        <div class="bar" style="height: 100%"></div>
                        <span class="chart-label">2025</span>
                    </div>
                </div>
                <p class="chart-caption">Projected growth in youth served</p>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="impact-cta">
        <div class="cta-content">
            <h2>Be Part of the Impact</h2>
            <p>Join hundreds of young people who have transformed their futures through Aethryna. Your journey starts here.</p>
            <div class="cta-buttons">
                <a href="{{ route('register') }}" class="btn btn-primary">Start Your Journey</a>
                <a href="{{ route('about') }}" class="btn btn-outline">Learn About Us</a>
            </div>
        </div>
    </section>

    @push('styles')
    <style>
        :root {
            --teal: #038b89;
            --gold: #ee9d1d;
            --black: #055860;
            --light: #F5F5F5;
            --dark-gray: #404952;
            --transition: all 0.6s cubic-bezier(0.23, 1, 0.320, 1);
            --radius: 20px;
            --shadow: 0 25px 50px rgba(0, 0, 0, 0.08);
            --shadow-hover: 0 40px 80px rgba(0, 0, 0, 0.12);
        }

        /* Impact Hero */
        .impact-hero {
            height: 70vh;
            background: linear-gradient(135deg, var(--black), var(--teal));
            background-size: cover;
            background-position: center;
            display: flex;
            align-items: center;
            position: relative;
            overflow: hidden;
        }

        .impact-hero .hero-content {
            flex: 1;
            padding: 0 5%;
            color: white;
            text-align: center;
        }

        .impact-hero h1 {
            font-size: 3.5rem;
            font-weight: 800;
            margin-bottom: 1.5rem;
            text-shadow: 2px 2px 10px rgba(0, 0, 0, 0.3);
        }

        .impact-hero p {
            font-size: 1.3rem;
            max-width: 600px;
            margin: 0 auto;
        }

        .hero-stats {
            flex: 1;
            display: flex;
            flex-direction: column;
            gap: 2rem;
            padding: 0 5%;
        }

        .stat-card {
            background: rgba(255, 255, 255, 0.1);
            backdrop-filter: blur(20px);
            border: 1px solid rgba(255, 255, 255, 0.2);
            padding: 2rem;
            border-radius: var(--radius);
            text-align: center;
            color: white;
            transition: var(--transition);
        }

        .stat-card:hover {
            transform: translateY(-5px);
            background: rgba(255, 255, 255, 0.15);
        }

        .stat-card .stat-number {
            font-size: 3rem;
            font-weight: 800;
            display: block;
            margin-bottom: 0.5rem;
        }

        .stat-card .stat-label {
            font-size: 1.1rem;
            opacity: 0.9;
        }

        /* Impact Overview */
        .impact-overview {
            padding: 6rem 5%;
            background: var(--light);
        }

        .overview-content {
            max-width: 1200px;
            margin: 0 auto;
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 4rem;
            align-items: center;
        }

        .overview-text p {
            font-size: 1.1rem;
            line-height: 1.8;
            color: var(--dark-gray);
            margin-bottom: 1.5rem;
        }

        .overview-metrics {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 2rem;
        }

        .metric {
            display: flex;
            align-items: center;
            gap: 1.5rem;
            padding: 2rem;
            background: white;
            border-radius: var(--radius);
            box-shadow: var(--shadow);
            transition: var(--transition);
        }

        .metric:hover {
            transform: translateY(-5px);
            box-shadow: var(--shadow-hover);
        }

        .metric-icon {
            width: 60px;
            height: 60px;
            background: linear-gradient(135deg, var(--teal), var(--gold));
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-size: 1.5rem;
        }

        .metric-data .metric-number {
            font-size: 2rem;
            font-weight: 800;
            color: var(--teal);
            display: block;
        }

        .metric-data .metric-label {
            font-size: 0.9rem;
            color: var(--dark-gray);
        }

        /* Detailed Statistics */
        .detailed-stats {
            padding: 8rem 5%;
            background: white;
        }

        .stats-container {
            max-width: 1200px;
            margin: 0 auto;
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 4rem;
        }

        .stat-group h3 {
            color: var(--teal);
            margin-bottom: 2rem;
            font-size: 1.8rem;
        }

        .stat-bars {
            display: flex;
            flex-direction: column;
            gap: 1.5rem;
        }

        .stat-bar {
            display: flex;
            align-items: center;
            gap: 1rem;
        }

        .bar-label {
            flex: 1;
            font-weight: 600;
            color: var(--dark-gray);
        }

        .bar-container {
            flex: 2;
            height: 30px;
            background: #f0f0f0;
            border-radius: 15px;
            position: relative;
            overflow: hidden;
        }

        .bar-fill {
            height: 100%;
            background: linear-gradient(90deg, var(--teal), var(--gold));
            border-radius: 15px;
            transition: width 2s ease;
        }

        .bar-value {
            position: absolute;
            right: 10px;
            top: 50%;
            transform: translateY(-50%);
            color: white;
            font-weight: 600;
            font-size: 0.9rem;
        }

        .economic-stats {
            display: flex;
            flex-direction: column;
            gap: 2rem;
        }

        .economic-stat {
            display: flex;
            align-items: center;
            gap: 1.5rem;
            padding: 2rem;
            background: var(--light);
            border-radius: var(--radius);
            transition: var(--transition);
        }

        .economic-stat:hover {
            transform: translateY(-5px);
            box-shadow: var(--shadow);
        }

        .economic-stat .stat-icon {
            width: 50px;
            height: 50px;
            background: var(--teal);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-size: 1.2rem;
        }

        .economic-stat .stat-info .stat-value {
            font-size: 1.8rem;
            font-weight: 800;
            color: var(--teal);
            display: block;
        }

        .economic-stat .stat-info .stat-desc {
            font-size: 0.9rem;
            color: var(--dark-gray);
            margin-top: 0.5rem;
        }

        /* Track Performance */
        .track-performance {
            padding: 8rem 5%;
            background: linear-gradient(135deg, #f8f9fa, #e9ecef);
        }

        .tracks-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 3rem;
            max-width: 1200px;
            margin: 0 auto;
        }

        .track-performance-card {
            background: white;
            border-radius: var(--radius);
            padding: 2.5rem;
            box-shadow: var(--shadow);
            transition: var(--transition);
        }

        .track-performance-card:hover {
            transform: translateY(-10px);
            box-shadow: var(--shadow-hover);
        }

        .track-header {
            display: flex;
            align-items: center;
            gap: 1rem;
            margin-bottom: 2rem;
        }

        .track-header .track-icon {
            width: 50px;
            height: 50px;
            background: linear-gradient(135deg, var(--teal), var(--gold));
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-size: 1.2rem;
        }

        .track-header h3 {
            color: var(--teal);
            margin: 0;
        }

        .track-stats {
            display: flex;
            justify-content: space-between;
            margin-bottom: 2rem;
        }

        .track-stat {
            text-align: center;
        }

        .track-stat .stat-value {
            font-size: 1.8rem;
            font-weight: 800;
            color: var(--teal);
            display: block;
        }

        .track-stat .stat-label {
            font-size: 0.9rem;
            color: var(--dark-gray);
        }

        .track-jobs h4 {
            color: var(--teal);
            margin-bottom: 1rem;
        }

        .track-jobs ul {
            list-style: none;
            padding: 0;
        }

        .track-jobs li {
            padding: 0.3rem 0;
            color: var(--dark-gray);
            font-size: 0.9rem;
        }

        /* Testimonials */
        .impact-testimonials {
            padding: 8rem 5%;
            background: white;
        }

        .testimonials-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(350px, 1fr));
            gap: 3rem;
            max-width: 1200px;
            margin: 0 auto;
        }

        .testimonial-card {
            background: var(--light);
            border-radius: var(--radius);
            padding: 2.5rem;
            box-shadow: var(--shadow);
            transition: var(--transition);
        }

        .testimonial-card:hover {
            transform: translateY(-5px);
            box-shadow: var(--shadow-hover);
        }

        .testimonial-content p {
            font-size: 1.1rem;
            line-height: 1.7;
            color: var(--dark-gray);
            font-style: italic;
            margin-bottom: 2rem;
        }

        .testimonial-author {
            display: flex;
            align-items: center;
            gap: 1.5rem;
        }

        .author-avatar {
            width: 60px;
            height: 60px;
            border-radius: 50%;
            overflow: hidden;
            border: 3px solid var(--gold);
        }

        .author-avatar img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .author-info h4 {
            color: var(--teal);
            margin-bottom: 0.3rem;
        }

        .author-info p {
            color: var(--dark-gray);
            font-size: 0.9rem;
            margin-bottom: 0.2rem;
        }

        .author-track {
            color: var(--gold);
            font-weight: 600;
            font-size: 0.8rem;
        }

        /* Community Impact */
        .community-impact {
            padding: 8rem 5%;
            background: linear-gradient(135deg, #f8f9fa, #e9ecef);
        }

        .community-content {
            max-width: 1200px;
            margin: 0 auto;
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 4rem;
            align-items: center;
        }

        .community-stats {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 2rem;
        }

        .community-stat {
            display: flex;
            align-items: center;
            gap: 1.5rem;
            padding: 2rem;
            background: white;
            border-radius: var(--radius);
            box-shadow: var(--shadow);
            transition: var(--transition);
        }

        .community-stat:hover {
            transform: translateY(-5px);
            box-shadow: var(--shadow-hover);
        }

        .community-stat .stat-icon {
            width: 50px;
            height: 50px;
            background: var(--teal);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-size: 1.2rem;
        }

        .community-stat .stat-details h3 {
            color: var(--teal);
            margin-bottom: 0.5rem;
        }

        .community-stat .stat-details p {
            color: var(--dark-gray);
            font-size: 0.9rem;
        }

        .community-story h3 {
            color: var(--teal);
            margin-bottom: 1.5rem;
        }

        .community-story p {
            color: var(--dark-gray);
            line-height: 1.7;
            margin-bottom: 1.5rem;
        }

        /* Future Goals */
        .future-goals {
            padding: 8rem 5%;
            background: white;
        }

        .goals-content {
            max-width: 1200px;
            margin: 0 auto;
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 4rem;
            align-items: center;
        }

        .goals-text h3 {
            color: var(--teal);
            margin-bottom: 2rem;
        }

        .goals-text p {
            color: var(--dark-gray);
            line-height: 1.7;
            margin-bottom: 2rem;
        }

        .goals-list {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 2rem;
        }

        .goal h4 {
            color: var(--teal);
            margin-bottom: 1rem;
        }

        .goal ul {
            list-style: none;
            padding: 0;
        }

        .goal li {
            padding: 0.5rem 0;
            padding-left: 1.5rem;
            position: relative;
            color: var(--dark-gray);
        }

        .goal li::before {
            content: '→';
            position: absolute;
            left: 0;
            color: var(--gold);
        }

        .goals-visual {
            text-align: center;
        }

        .growth-chart {
            display: flex;
            align-items: end;
            justify-content: center;
            gap: 2rem;
            height: 200px;
            margin-bottom: 2rem;
        }

        .chart-bar {
            display: flex;
            flex-direction: column;
            align-items: center;
            gap: 1rem;
        }

        .bar {
            width: 60px;
            background: linear-gradient(to top, var(--teal), var(--gold));
            border-radius: 30px 30px 0 0;
            transition: height 2s ease;
        }

        .chart-label {
            font-weight: 600;
            color: var(--dark-gray);
        }

        .chart-caption {
            color: var(--dark-gray);
            font-style: italic;
        }

        /* CTA Section */
        .impact-cta {
            background: linear-gradient(135deg, var(--teal), #1a4a5a);
            color: white;
            text-align: center;
            padding: 8rem 2rem;
            position: relative;
            overflow: hidden;
        }

        .impact-cta .cta-content {
            max-width: 800px;
            margin: 0 auto;
            position: relative;
            z-index: 2;
        }

        .impact-cta h2 {
            font-size: 3.5rem;
            margin-bottom: 2rem;
        }

        .impact-cta p {
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
            .impact-hero {
                flex-direction: column;
                text-align: center;
                height: auto;
                padding: 6rem 0;
            }

            .hero-stats {
                margin-top: 3rem;
                flex-direction: row;
                justify-content: center;
                gap: 2rem;
            }

            .overview-content {
                grid-template-columns: 1fr;
                gap: 3rem;
            }

            .overview-metrics {
                grid-template-columns: 1fr;
            }

            .stats-container {
                grid-template-columns: 1fr;
                gap: 3rem;
            }

            .tracks-grid {
                grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            }

            .testimonials-grid {
                grid-template-columns: 1fr;
            }

            .community-content {
                grid-template-columns: 1fr;
                gap: 3rem;
            }

            .community-stats {
                grid-template-columns: 1fr;
            }

            .goals-content {
                grid-template-columns: 1fr;
                gap: 3rem;
            }

            .goals-list {
                grid-template-columns: 1fr;
            }

            .growth-chart {
                flex-direction: column;
                height: auto;
                gap: 1rem;
            }

            .chart-bar {
                flex-direction: row;
                width: 100%;
                justify-content: space-between;
            }

            .bar {
                width: 40px;
                height: 40px;
                border-radius: 20px;
            }
        }

        @media (max-width: 768px) {
            .impact-hero h1 {
                font-size: 2.8rem;
            }

            .hero-stats {
                flex-direction: column;
                gap: 1rem;
            }

            .hero-stats .stat-card {
                padding: 1.5rem;
            }

            .track-stats {
                flex-direction: column;
                gap: 1rem;
            }

            .cta-buttons {
                flex-direction: column;
                align-items: center;
            }
        }

        @media (max-width: 576px) {
            .impact-hero h1 {
                font-size: 2.2rem;
            }

            .stat-card .stat-number {
                font-size: 2.5rem;
            }

            .metric-data .metric-number {
                font-size: 1.5rem;
            }

            .impact-cta h2 {
                font-size: 2.5rem;
            }

            .track-performance-card {
                padding: 2rem;
            }

            .testimonial-card {
                padding: 2rem;
            }
        }
    </style>
    @endpush

    @push('scripts')
    <script>
        // Animate progress bars on scroll
        const observerOptions = {
            threshold: 0.5,
            rootMargin: '0px 0px -100px 0px'
        };

        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    const bars = entry.target.querySelectorAll('.bar-fill');
                    bars.forEach(bar => {
                        bar.style.width = bar.style.width || '0%';
                    });
                }
            });
        }, observerOptions);

        // Observe stat groups
        document.querySelectorAll('.stat-group').forEach(group => {
            observer.observe(group);
        });

        // Observe growth chart
        const growthObserver = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    const bars = entry.target.querySelectorAll('.bar');
                    bars.forEach((bar, index) => {
                        setTimeout(() => {
                            bar.style.height = bar.style.height;
                        }, index * 200);
                    });
                }
            });
        }, observerOptions);

        document.querySelectorAll('.growth-chart').forEach(chart => {
            growthObserver.observe(chart);
        });
    </script>
    @endpush
@endsection
