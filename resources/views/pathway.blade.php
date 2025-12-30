@extends('layouts.guest')

@section('title', 'Digital Transformation Pathway | Aethryna Foundation')

@section('content')

    <!-- Hero Section -->
    <section class="pathway-hero">
        <div class="hero-content">
            <h1>The Digital Transformation Pathway</h1>
            <p>Our proven three-phase approach turns potential into professional success</p>
            <a href="#pathway-details" class="btn btn-primary">Explore the Pathway</a>
        </div>
        <div class="hero-visual">
            <div class="pathway-diagram">
                <div class="phase phase-1">
                    <div class="phase-icon">🌱</div>
                    <div class="phase-title">Phase 1</div>
                </div>
                <div class="phase-connector">→</div>
                <div class="phase phase-2">
                    <div class="phase-icon">🚀</div>
                    <div class="phase-title">Phase 2</div>
                </div>
                <div class="phase-connector">→</div>
                <div class="phase phase-3">
                    <div class="phase-icon">💼</div>
                    <div class="phase-title">Phase 3</div>
                </div>
            </div>
        </div>
    </section>

    <!-- Pathway Overview -->
    <section id="pathway-details" class="pathway-overview">
        <div class="section-title">
            <h2>How It Works</h2>
            <p>A structured journey from beginner to professional</p>
        </div>
        <div class="overview-content">
            <div class="overview-text">
                <p>Our Digital Transformation Pathway is designed to take you from having little to no digital experience to becoming a confident professional in the tech industry. Through our comprehensive three-phase program, you'll gain practical skills, build a portfolio, and secure your first job in tech.</p>
                <p>Each phase builds upon the previous one, ensuring you have a solid foundation before moving to more advanced topics. Our experienced mentors and industry partners guide you every step of the way.</p>
            </div>
            <div class="overview-stats">
                <div class="stat">
                    <span class="stat-number">12-18</span>
                    <span class="stat-label">Months Total</span>
                </div>
                <div class="stat">
                    <span class="stat-number">95%</span>
                    <span class="stat-label">Completion Rate</span>
                </div>
                <div class="stat">
                    <span class="stat-number">£25K+</span>
                    <span class="stat-label">Average Salary</span>
                </div>
            </div>
        </div>
    </section>

    <!-- Phase 1: Digital Foundations -->
    <section class="phase-section phase-1-bg">
        <div class="phase-container">
            <div class="phase-header">
                <div class="phase-badge">Phase 1</div>
                <h2>Digital Foundations</h2>
                <p>3-6 months of building confidence, basic digital literacy, and growth mindset</p>
            </div>
            <div class="phase-content">
                <div class="phase-description">
                    <h3>Perfect for beginners with limited tech exposure</h3>
                    <p>This foundational phase is designed for individuals who are new to technology or want to build their confidence in digital environments. You'll learn the basics of computer usage, internet navigation, and develop the digital literacy skills needed for modern work.</p>
                    <div class="phase-objectives">
                        <h4>Key Objectives:</h4>
                        <ul>
                            <li>Master basic computer operations and file management</li>
                            <li>Learn safe internet practices and digital communication</li>
                            <li>Develop problem-solving and critical thinking skills</li>
                            <li>Build confidence in using digital tools and platforms</li>
                            <li>Understand online safety and privacy best practices</li>
                        </ul>
                    </div>
                    <div class="phase-duration">
                        <strong>Duration:</strong> 3-6 months (part-time)
                    </div>
                </div>
                <div class="phase-skills">
                    <h4>Skills You'll Learn:</h4>
                    <div class="skills-grid">
                        <div class="skill-item">
                            <i class="fas fa-computer"></i>
                            <span>Computer Basics</span>
                        </div>
                        <div class="skill-item">
                            <i class="fas fa-globe"></i>
                            <span>Internet Navigation</span>
                        </div>
                        <div class="skill-item">
                            <i class="fas fa-envelope"></i>
                            <span>Email & Communication</span>
                        </div>
                        <div class="skill-item">
                            <i class="fas fa-file-alt"></i>
                            <span>Document Creation</span>
                        </div>
                        <div class="skill-item">
                            <i class="fas fa-search"></i>
                            <span>Online Research</span>
                        </div>
                        <div class="skill-item">
                            <i class="fas fa-shield-alt"></i>
                            <span>Digital Safety</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Phase 2: Skill Specialization -->
    <section class="phase-section phase-2-bg">
        <div class="phase-container">
            <div class="phase-header">
                <div class="phase-badge">Phase 2</div>
                <h2>Skill Specialization</h2>
                <p>6-12 months of project-based learning in your chosen track</p>
            </div>
            <div class="phase-content">
                <div class="phase-description">
                    <h3>Choose your track: Web Development, Digital Design, IT Support, or Digital Sales</h3>
                    <p>In this phase, you'll dive deep into your chosen specialization. Working with industry mentors, you'll complete real-world projects, build a professional portfolio, and gain hands-on experience that employers value.</p>
                    <div class="phase-tracks">
                        <div class="track">
                            <h4>Web Development Track</h4>
                            <p>Learn HTML, CSS, JavaScript, and modern frameworks to build websites and web applications.</p>
                            <div class="track-skills">
                                <span>HTML/CSS</span>
                                <span>JavaScript</span>
                                <span>React/Vue</span>
                                <span>Node.js</span>
                            </div>
                        </div>
                        <div class="track">
                            <h4>Digital Design Track</h4>
                            <p>Master UI/UX design, graphic design, and visual communication using industry-standard tools.</p>
                            <div class="track-skills">
                                <span>Figma</span>
                                <span>Adobe XD</span>
                                <span>Photoshop</span>
                                <span>Illustrator</span>
                            </div>
                        </div>
                        <div class="track">
                            <h4>IT Support Track</h4>
                            <p>Develop technical support skills, troubleshooting, and customer service expertise.</p>
                            <div class="track-skills">
                                <span>Hardware</span>
                                <span>Networking</span>
                                <span>Windows/Linux</span>
                                <span>Help Desk</span>
                            </div>
                        </div>
                        <div class="track">
                            <h4>Digital Sales Track</h4>
                            <p>Learn digital marketing, social media management, and sales techniques for online businesses.</p>
                            <div class="track-skills">
                                <span>Social Media</span>
                                <span>SEO</span>
                                <span>Analytics</span>
                                <span>CRM Tools</span>
                            </div>
                        </div>
                    </div>
                    <div class="phase-duration">
                        <strong>Duration:</strong> 6-12 months (full-time equivalent)
                    </div>
                </div>
                <div class="phase-projects">
                    <h4>Real-World Projects:</h4>
                    <div class="projects-grid">
                        <div class="project-item">
                            <h5>Portfolio Website</h5>
                            <p>Build a personal portfolio showcasing your skills and projects</p>
                        </div>
                        <div class="project-item">
                            <h5>Client Project</h5>
                            <p>Work on real projects for local businesses and organizations</p>
                        </div>
                        <div class="project-item">
                            <h5>Capstone Project</h5>
                            <p>Create a comprehensive project demonstrating your full skill set</p>
                        </div>
                        <div class="project-item">
                            <h5>Internship</h5>
                            <p>Gain practical experience through our partner company internships</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Phase 3: Economic Independence -->
    <section class="phase-section phase-3-bg">
        <div class="phase-container">
            <div class="phase-header">
                <div class="phase-badge">Phase 3</div>
                <h2>Economic Independence</h2>
                <p>Start earning through freelance projects and job placement</p>
            </div>
            <div class="phase-content">
                <div class="phase-description">
                    <h3>Ongoing mentorship and career advancement support</h3>
                    <p>The final phase focuses on transitioning to professional employment. You'll learn job search strategies, interview skills, and begin earning through freelance work while receiving continued mentorship and career guidance.</p>
                    <div class="phase-objectives">
                        <h4>Key Objectives:</h4>
                        <ul>
                            <li>Develop job search and interview skills</li>
                            <li>Build a professional network and online presence</li>
                            <li>Gain freelance experience and build income</li>
                            <li>Secure full-time employment in your field</li>
                            <li>Continue professional development and growth</li>
                        </ul>
                    </div>
                    <div class="phase-duration">
                        <strong>Duration:</strong> 3-6 months (with ongoing support)
                    </div>
                </div>
                <div class="phase-career">
                    <h4>Career Support Services:</h4>
                    <div class="career-services">
                        <div class="service-item">
                            <i class="fas fa-search"></i>
                            <div class="service-content">
                                <h5>Job Placement</h5>
                                <p>Direct connections with our partner companies and personalized job matching</p>
                            </div>
                        </div>
                        <div class="service-item">
                            <i class="fas fa-briefcase"></i>
                            <div class="service-content">
                                <h5>Freelance Platform</h5>
                                <p>Access to our curated freelance opportunities starting at £50-£200 per project</p>
                            </div>
                        </div>
                        <div class="service-item">
                            <i class="fas fa-graduation-cap"></i>
                            <div class="service-content">
                                <h5>Interview Coaching</h5>
                            <p>Mock interviews, resume reviews, and professional development workshops</p>
                            </div>
                        </div>
                        <div class="service-item">
                            <i class="fas fa-users"></i>
                            <div class="service-content">
                                <h5>Alumni Network</h5>
                                <p>Join our community of successful graduates for ongoing support and networking</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Success Stories -->
    <section class="success-stories">
        <div class="section-title">
            <h2>Pathway Success Stories</h2>
            <p>Real journeys from our program graduates</p>
        </div>
        <div class="stories-grid">
            <div class="story-card">
                <div class="story-image">
                    <img src="https://images.unsplash.com/photo-1494790108755-2616b612b786?ixlib=rb-4.0.3&auto=format&fit=crop&w=387&q=80" alt="Success story">
                </div>
                <div class="story-content">
                    <h3>From Beginner to Web Developer</h3>
                    <p>"I started with zero computer skills. After completing the pathway, I landed a £28k job as a junior web developer. The mentors were incredible!"</p>
                    <div class="story-author">
                        <strong>Maria G.</strong> - Web Developer at TechStart
                    </div>
                </div>
            </div>
            <div class="story-card">
                <div class="story-image">
                    <img src="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?ixlib=rb-4.0.3&auto=format&fit=crop&w=387&q=80" alt="Success story">
                </div>
                <div class="story-content">
                    <h3>Digital Design Career Launch</h3>
                    <p>"The design track gave me the skills and confidence to pursue my passion. Now I'm a UX designer earning £32k and loving every day!"</p>
                    <div class="story-author">
                        <strong>James L.</strong> - UX Designer at CreativeCo
                    </div>
                </div>
            </div>
            <div class="story-card">
                <div class="story-image">
                    <img src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-4.0.3&auto=format&fit=crop&w=1170&q=80" alt="Success story">
                </div>
                <div class="story-content">
                    <h3>IT Support to IT Management</h3>
                    <p>"Started in IT support and now manage a team of 8. The pathway taught me not just technical skills, but leadership and problem-solving."</p>
                    <div class="story-author">
                        <strong>David K.</strong> - IT Manager at GlobalTech
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="pathway-cta">
        <div class="cta-content">
            <h2>Ready to Start Your Journey?</h2>
            <p>Take our 2-minute assessment to discover which track is right for you and begin your transformation today.</p>
            <div class="cta-buttons">
                <button class="btn btn-primary" id="startAssessment">Take Assessment</button>
                <a href="{{ route('register') }}" class="btn btn-outline">Apply Now</a>
            </div>
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

        /* Pathway Hero */
        .pathway-hero {
            height: 70vh;
            background: linear-gradient(rgba(26, 26, 26, 0.8), rgba(47, 110, 127, 0.4)), url('hhttps://plus.unsplash.com/premium_photo-1681494370365-6bc631f820e9?q=80&w=870&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D');
            background-size: cover;
            background-position: center;
            display: flex;
            align-items: center;
            position: relative;
            overflow: hidden;
        }

        .pathway-hero .hero-content {
            flex: 1;
            padding: 0 5%;
            color: white;
            text-align: center;
        }

        .pathway-hero h1 {
            font-size: 3.5rem;
            font-weight: 800;
            margin-bottom: 1.5rem;
            text-shadow: 2px 2px 10px rgba(0, 0, 0, 0.3);
        }

        .pathway-hero p {
            font-size: 1.3rem;
            margin-bottom: 2.5rem;
            max-width: 600px;
            margin-left: auto;
            margin-right: auto;
        }

        .hero-visual {
            flex: 1;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 0 5%;
        }

        .pathway-diagram {
            display: flex;
            align-items: center;
            gap: 2rem;
            background: rgba(255, 255, 255, 0.1);
            backdrop-filter: blur(20px);
            border-radius: var(--radius);
            padding: 2rem;
            border: 1px solid rgba(255, 255, 255, 0.2);
        }

        .phase {
            text-align: center;
            color: white;
        }

        .phase-icon {
            font-size: 3rem;
            margin-bottom: 0.5rem;
        }

        .phase-title {
            font-weight: 600;
            font-size: 1.1rem;
        }

        .phase-connector {
            font-size: 2rem;
            color: var(--gold);
            font-weight: bold;
        }

        /* Overview Section */
        .pathway-overview {
            padding: 6rem 5%;
            background: var(--light);
        }

        .overview-content {
            max-width: 1200px;
            margin: 0 auto;
            display: grid;
            grid-template-columns: 2fr 1fr;
            gap: 4rem;
            align-items: center;
        }

        .overview-text p {
            font-size: 1.1rem;
            line-height: 1.8;
            color: var(--dark-gray);
            margin-bottom: 1.5rem;
        }

        .overview-stats {
            display: flex;
            flex-direction: column;
            gap: 2rem;
        }

        .overview-stats .stat {
            text-align: center;
            padding: 2rem;
            background: white;
            border-radius: var(--radius);
            box-shadow: var(--shadow);
        }

        .overview-stats .stat-number {
            font-size: 2.5rem;
            font-weight: 800;
            color: var(--teal);
            display: block;
        }

        .overview-stats .stat-label {
            font-size: 1rem;
            color: var(--dark-gray);
            margin-top: 0.5rem;
        }

        /* Phase Sections */
        .phase-section {
            padding: 8rem 5%;
            position: relative;
            overflow: hidden;
        }

        .phase-1-bg {
            background: linear-gradient(135deg, #f8f9fa, #e9ecef);
        }

        .phase-2-bg {
            background: linear-gradient(135deg, #e3f2fd, #bbdefb);
        }

        .phase-3-bg {
            background: linear-gradient(135deg, #f3e5f5, #ce93d8);
        }

        .phase-container {
            max-width: 1200px;
            margin: 0 auto;
        }

        .phase-header {
            text-align: center;
            margin-bottom: 4rem;
        }

        .phase-badge {
            display: inline-block;
            background: var(--teal);
            color: white;
            padding: 0.5rem 1.5rem;
            border-radius: 50px;
            font-weight: 600;
            margin-bottom: 1rem;
        }

        .phase-header h2 {
            font-size: 3rem;
            color: var(--teal);
            margin-bottom: 1rem;
        }

        .phase-header p {
            font-size: 1.2rem;
            color: var(--dark-gray);
            max-width: 600px;
            margin: 0 auto;
        }

        .phase-content {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 4rem;
            align-items: start;
        }

        .phase-description h3 {
            font-size: 1.8rem;
            color: var(--black);
            margin-bottom: 1.5rem;
        }

        .phase-description p {
            color: var(--dark-gray);
            line-height: 1.7;
            margin-bottom: 2rem;
        }

        .phase-objectives h4 {
            color: var(--teal);
            margin-bottom: 1rem;
            font-size: 1.1rem;
        }

        .phase-objectives ul {
            list-style: none;
            padding: 0;
        }

        .phase-objectives li {
            padding: 0.5rem 0;
            padding-left: 1.5rem;
            position: relative;
            color: var(--dark-gray);
        }

        .phase-objectives li::before {
            content: '✓';
            position: absolute;
            left: 0;
            color: var(--gold);
            font-weight: bold;
        }

        .phase-duration {
            margin-top: 2rem;
            padding: 1rem;
            background: white;
            border-radius: var(--radius);
            text-align: center;
            box-shadow: var(--shadow);
        }

        .phase-duration strong {
            color: var(--teal);
        }

        /* Skills Grid */
        .skills-grid {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 1rem;
            margin-top: 1.5rem;
        }

        .skill-item {
            display: flex;
            align-items: center;
            gap: 1rem;
            padding: 1rem;
            background: white;
            border-radius: var(--radius);
            box-shadow: var(--shadow);
            transition: var(--transition);
        }

        .skill-item:hover {
            transform: translateY(-5px);
            box-shadow: var(--shadow-hover);
        }

        .skill-item i {
            color: var(--teal);
            font-size: 1.5rem;
        }

        .skill-item span {
            font-weight: 600;
            color: var(--black);
        }

        /* Phase Tracks */
        .phase-tracks {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 2rem;
            margin: 2rem 0;
        }

        .track {
            background: white;
            padding: 2rem;
            border-radius: var(--radius);
            box-shadow: var(--shadow);
            transition: var(--transition);
        }

        .track:hover {
            transform: translateY(-5px);
            box-shadow: var(--shadow-hover);
        }

        .track h4 {
            color: var(--teal);
            margin-bottom: 1rem;
        }

        .track p {
            color: var(--dark-gray);
            margin-bottom: 1.5rem;
            line-height: 1.6;
        }

        .track-skills {
            display: flex;
            flex-wrap: wrap;
            gap: 0.5rem;
        }

        .track-skills span {
            background: var(--gold);
            color: var(--black);
            padding: 0.3rem 0.8rem;
            border-radius: 20px;
            font-size: 0.9rem;
            font-weight: 500;
        }

        /* Projects Grid */
        .projects-grid {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 1.5rem;
            margin-top: 1.5rem;
        }

        .project-item {
            background: white;
            padding: 1.5rem;
            border-radius: var(--radius);
            box-shadow: var(--shadow);
            transition: var(--transition);
        }

        .project-item:hover {
            transform: translateY(-5px);
            box-shadow: var(--shadow-hover);
        }

        .project-item h5 {
            color: var(--teal);
            margin-bottom: 0.5rem;
        }

        .project-item p {
            color: var(--dark-gray);
            font-size: 0.95rem;
            line-height: 1.5;
        }

        /* Career Services */
        .career-services {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 1.5rem;
            margin-top: 1.5rem;
        }

        .service-item {
            display: flex;
            align-items: center;
            gap: 1.5rem;
            background: white;
            padding: 1.5rem;
            border-radius: var(--radius);
            box-shadow: var(--shadow);
            transition: var(--transition);
        }

        .service-item:hover {
            transform: translateY(-5px);
            box-shadow: var(--shadow-hover);
        }

        .service-item i {
            color: var(--teal);
            font-size: 2rem;
            flex-shrink: 0;
        }

        .service-content h5 {
            color: var(--teal);
            margin-bottom: 0.5rem;
        }

        .service-content p {
            color: var(--dark-gray);
            font-size: 0.95rem;
            line-height: 1.5;
        }

        /* Success Stories */
        .success-stories {
            padding: 8rem 5%;
            background: white;
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
            overflow: hidden;
            box-shadow: var(--shadow);
            transition: var(--transition);
        }

        .story-card:hover {
            transform: translateY(-10px);
            box-shadow: var(--shadow-hover);
        }

        .story-image {
            height: 200px;
            overflow: hidden;
        }

        .story-image img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: var(--transition);
        }

        .story-card:hover .story-image img {
            transform: scale(1.05);
        }

        .story-content {
            padding: 2rem;
        }

        .story-content h3 {
            color: var(--teal);
            margin-bottom: 1rem;
        }

        .story-content p {
            color: var(--dark-gray);
            line-height: 1.6;
            margin-bottom: 1.5rem;
        }

        .story-author {
            font-style: italic;
            color: var(--black);
        }

        /* CTA Section */
        .pathway-cta {
            background: linear-gradient(135deg, var(--teal), #1a4a5a);
            color: white;
            text-align: center;
            padding: 8rem 2rem;
            position: relative;
            overflow: hidden;
        }

        .pathway-cta .cta-content {
            max-width: 800px;
            margin: 0 auto;
            position: relative;
            z-index: 2;
        }

        .pathway-cta h2 {
            font-size: 3.5rem;
            margin-bottom: 2rem;
        }

        .pathway-cta p {
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
            .pathway-hero {
                flex-direction: column;
                text-align: center;
                height: auto;
                padding: 6rem 0;
            }

            .hero-visual {
                margin-top: 3rem;
            }

            .pathway-diagram {
                flex-direction: column;
                gap: 1rem;
            }

            .phase-connector {
                transform: rotate(90deg);
            }

            .overview-content {
                grid-template-columns: 1fr;
                gap: 3rem;
            }

            .phase-content {
                grid-template-columns: 1fr;
                gap: 3rem;
            }

            .phase-tracks {
                grid-template-columns: 1fr;
            }

            .projects-grid,
            .career-services {
                grid-template-columns: 1fr;
            }

            .skills-grid {
                grid-template-columns: 1fr;
            }
        }

        @media (max-width: 768px) {
            .pathway-hero h1 {
                font-size: 2.8rem;
            }

            .phase-header h2 {
                font-size: 2.5rem;
            }

            .stories-grid {
                grid-template-columns: 1fr;
            }

            .cta-buttons {
                flex-direction: column;
                align-items: center;
            }
        }

        @media (max-width: 576px) {
            .pathway-hero h1 {
                font-size: 2.2rem;
            }

            .phase-header h2 {
                font-size: 2rem;
            }

            .pathway-cta h2 {
                font-size: 2.5rem;
            }

            .overview-stats {
                flex-direction: column;
                gap: 1rem;
            }

            .overview-stats .stat {
                padding: 1.5rem;
            }

            .phase-section {
                padding: 6rem 5%;
            }
        }
    </style>
    @endpush

    @push('scripts')
    <script>
        // Assessment modal trigger
        document.getElementById('startAssessment').addEventListener('click', () => {
            // This would open the assessment modal - for now just redirect to register
            window.location.href = '{{ route("register") }}';
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

        // Observe all sections
        document.querySelectorAll('section').forEach(section => {
            observer.observe(section);
        });

        // Observe story cards
        document.querySelectorAll('.story-card').forEach(card => {
            observer.observe(card);
        });

        // Observe track cards
        document.querySelectorAll('.track').forEach(track => {
            observer.observe(track);
        });
    </script>
    @endpush
@endsection
