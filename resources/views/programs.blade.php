@extends('layouts.aethryna')

@section('title', 'Skills Pathway Programs | Aethryna Foundation')

@section('content')

    <!-- Hero Section -->
    <section class="programs-hero">
        <div class="hero-content">
            <h1>Our Skills Pathway</h1>
            <p>Structured learning paths designed for real-world success</p>
            <a href="#program-tracks" class="btn btn-primary">Explore Programs</a>
        </div>
        <div class="hero-stats">
            <div class="stat">
                <span class="stat-number">4</span>
                <span class="stat-label">Specialized Tracks</span>
            </div>
            <div class="stat">
                <span class="stat-number">95%</span>
                <span class="stat-label">Job Placement</span>
            </div>
            <div class="stat">
                <span class="stat-number">£25K</span>
                <span class="stat-label">Avg Starting Salary</span>
            </div>
        </div>
    </section>

    <!-- Program Overview -->
    <section class="program-overview">
        <div class="section-title">
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
        <div class="tracks-container">
            <!-- Web Development Track -->
            <div class="track-card web-dev">
                <div class="track-header">
                    <div class="track-icon">
                        <i class="fas fa-code"></i>
                    </div>
                    <div class="track-info">
                        <h3>Web Development Track</h3>
                        <p>Master HTML, CSS, JavaScript and build real websites</p>
                        <div class="track-meta">
                            <span class="duration"><i class="fas fa-clock"></i> 6-9 months</span>
                            <span class="level">Beginner to Intermediate</span>
                        </div>
                    </div>
                </div>
                <div class="track-content">
                    <div class="track-description">
                        <h4>Perfect for creative problem-solvers</h4>
                        <p>Learn to build modern, responsive websites and web applications. From basic HTML/CSS to advanced JavaScript frameworks, you'll create portfolio-worthy projects that demonstrate your skills to employers.</p>
                    </div>
                    <div class="track-curriculum">
                        <h4>Core Curriculum:</h4>
                        <div class="curriculum-modules">
                            <div class="module">
                                <h5>Frontend Fundamentals</h5>
                                <p>HTML5, CSS3, Responsive Design, Flexbox & Grid</p>
                            </div>
                            <div class="module">
                                <h5>JavaScript & Frameworks</h5>
                                <p>ES6+, React, Vue.js, State Management</p>
                            </div>
                            <div class="module">
                                <h5>Backend Development</h5>
                                <p>Node.js, Express, REST APIs, Databases</p>
                            </div>
                            <div class="module">
                                <h5>Tools & Deployment</h5>
                                <p>Git, Webpack, CI/CD, Cloud Hosting</p>
                            </div>
                        </div>
                    </div>
                    <div class="track-projects">
                        <h4>Featured Projects:</h4>
                        <ul>
                            <li>E-commerce website with payment integration</li>
                            <li>Interactive dashboard for data visualization</li>
                            <li>Social media platform clone</li>
                            <li>Portfolio website with CMS</li>
                        </ul>
                    </div>
                    <div class="track-careers">
                        <h4>Career Opportunities:</h4>
                        <div class="career-tags">
                            <span>Frontend Developer</span>
                            <span>Full-Stack Developer</span>
                            <span>UI Developer</span>
                            <span>Web Application Developer</span>
                        </div>
                    </div>
                </div>
                <div class="track-footer">
                    <div class="salary-info">
                        <span class="salary">£25K - £35K</span>
                        <span class="salary-label">Starting Salary Range</span>
                    </div>
                    <a href="#apply" class="btn btn-outline">Learn More</a>
                </div>
            </div>

            <!-- Digital Design Track -->
            <div class="track-card digital-design">
                <div class="track-header">
                    <div class="track-icon">
                        <i class="fas fa-palette"></i>
                    </div>
                    <div class="track-info">
                        <h3>Digital Design Track</h3>
                        <p>Create stunning digital experiences that users love</p>
                        <div class="track-meta">
                            <span class="duration"><i class="fas fa-clock"></i> 6-9 months</span>
                            <span class="level">Beginner to Intermediate</span>
                        </div>
                    </div>
                </div>
                <div class="track-content">
                    <div class="track-description">
                        <h4>Perfect for creative and visually-minded individuals</h4>
                        <p>Master the art and science of digital design. Learn UI/UX principles, branding, and visual communication using industry-standard tools. Create designs that not only look beautiful but solve real user problems.</p>
                    </div>
                    <div class="track-curriculum">
                        <h4>Core Curriculum:</h4>
                        <div class="curriculum-modules">
                            <div class="module">
                                <h5>Design Fundamentals</h5>
                                <p>Color Theory, Typography, Layout, Composition</p>
                            </div>
                            <div class="module">
                                <h5>UI/UX Design</h5>
                                <p>User Research, Wireframing, Prototyping, Usability Testing</p>
                            </div>
                            <div class="module">
                                <h5>Design Tools</h5>
                                <p>Figma, Adobe XD, Photoshop, Illustrator</p>
                            </div>
                            <div class="module">
                                <h5>Branding & Motion</h5>
                                <p>Brand Identity, After Effects, Micro-interactions</p>
                            </div>
                        </div>
                    </div>
                    <div class="track-projects">
                        <h4>Featured Projects:</h4>
                        <ul>
                            <li>Mobile app redesign for a local business</li>
                            <li>Complete brand identity for a startup</li>
                            <li>E-commerce website UI/UX design</li>
                            <li>Interactive prototype for a SaaS product</li>
                        </ul>
                    </div>
                    <div class="track-careers">
                        <h4>Career Opportunities:</h4>
                        <div class="career-tags">
                            <span>UX Designer</span>
                            <span>UI Designer</span>
                            <span>Product Designer</span>
                            <span>Brand Designer</span>
                        </div>
                    </div>
                </div>
                <div class="track-footer">
                    <div class="salary-info">
                        <span class="salary">£24K - £32K</span>
                        <span class="salary-label">Starting Salary Range</span>
                    </div>
                    <a href="#apply" class="btn btn-outline">Learn More</a>
                </div>
            </div>

            <!-- IT Support Track -->
            <div class="track-card it-support">
                <div class="track-header">
                    <div class="track-icon">
                        <i class="fas fa-tools"></i>
                    </div>
                    <div class="track-info">
                        <h3>IT Support Track</h3>
                        <p>High-demand roles with clear career progression paths</p>
                        <div class="track-meta">
                            <span class="duration"><i class="fas fa-clock"></i> 4-6 months</span>
                            <span class="level">Beginner Friendly</span>
                        </div>
                    </div>
                </div>
                <div class="track-content">
                    <div class="track-description">
                        <h4>Perfect for analytical thinkers who enjoy problem-solving</h4>
                        <p>Develop essential IT support skills and customer service expertise. Learn to troubleshoot hardware/software issues, manage networks, and provide excellent technical support. This track offers one of the clearest paths to stable, well-paying employment.</p>
                    </div>
                    <div class="track-curriculum">
                        <h4>Core Curriculum:</h4>
                        <div class="curriculum-modules">
                            <div class="module">
                                <h5>Hardware & Software</h5>
                                <p>Computer Hardware, Operating Systems, Software Installation</p>
                            </div>
                            <div class="module">
                                <h5>Networking Basics</h5>
                                <p>TCP/IP, Wireless Networks, Network Security</p>
                            </div>
                            <div class="module">
                                <h5>Help Desk Skills</h5>
                                <p>Troubleshooting, Customer Service, Ticketing Systems</p>
                            </div>
                            <div class="module">
                                <h5>IT Certifications</h5>
                                <p>CompTIA A+, Microsoft Certifications, ITIL Foundation</p>
                            </div>
                        </div>
                    </div>
                    <div class="track-projects">
                        <h4>Featured Projects:</h4>
                        <ul>
                            <li>Complete PC build and configuration</li>
                            <li>Network setup for small business</li>
                            <li>Help desk simulation and management</li>
                            <li>IT security audit and recommendations</li>
                        </ul>
                    </div>
                    <div class="track-careers">
                        <h4>Career Opportunities:</h4>
                        <div class="career-tags">
                            <span>IT Support Specialist</span>
                            <span>Help Desk Technician</span>
                            <span>Technical Support</span>
                            <span>Desktop Support</span>
                        </div>
                    </div>
                </div>
                <div class="track-footer">
                    <div class="salary-info">
                        <span class="salary">£22K - £28K</span>
                        <span class="salary-label">Starting Salary Range</span>
                    </div>
                    <a href="#apply" class="btn btn-outline">Learn More</a>
                </div>
            </div>

            <!-- Digital Sales Track -->
            <div class="track-card digital-sales">
                <div class="track-header">
                    <div class="track-icon">
                        <i class="fas fa-chart-line"></i>
                    </div>
                    <div class="track-info">
                        <h3>Digital Sales Track</h3>
                        <p>Learn digital marketing and sales for online businesses</p>
                        <div class="track-meta">
                            <span class="duration"><i class="fas fa-clock"></i> 5-7 months</span>
                            <span class="level">Beginner to Intermediate</span>
                        </div>
                    </div>
                </div>
                <div class="track-content">
                    <div class="track-description">
                        <h4>Perfect for communicative and goal-oriented individuals</h4>
                        <p>Master digital marketing, social media management, and online sales techniques. Learn to drive traffic, convert leads, and grow online businesses. This track combines marketing skills with sales expertise for maximum career flexibility.</p>
                    </div>
                    <div class="track-curriculum">
                        <h4>Core Curriculum:</h4>
                        <div class="curriculum-modules">
                            <div class="module">
                                <h5>Digital Marketing</h5>
                                <p>SEO, SEM, Social Media Marketing, Email Marketing</p>
                            </div>
                            <div class="module">
                                <h5>Sales Techniques</h5>
                                <p>Lead Generation, CRM, Sales Funnels, Conversion Optimization</p>
                            </div>
                            <div class="module">
                                <h5>Analytics & Tools</h5>
                                <p>Google Analytics, Facebook Ads, LinkedIn Sales, HubSpot</p>
                            </div>
                            <div class="module">
                                <h5>Content & Strategy</h5>
                                <p>Content Marketing, Social Media Strategy, Campaign Management</p>
                            </div>
                        </div>
                    </div>
                    <div class="track-projects">
                        <h4>Featured Projects:</h4>
                        <ul>
                            <li>Complete social media marketing campaign</li>
                            <li>E-commerce sales funnel optimization</li>
                            <li>Lead generation and nurturing strategy</li>
                            <li>Digital marketing audit and recommendations</li>
                        </ul>
                    </div>
                    <div class="track-careers">
                        <h4>Career Opportunities:</h4>
                        <div class="career-tags">
                            <span>Digital Marketing Specialist</span>
                            <span>Social Media Manager</span>
                            <span>Sales Development Rep</span>
                            <span>Marketing Coordinator</span>
                        </div>
                    </div>
                </div>
                <div class="track-footer">
                    <div class="salary-info">
                        <span class="salary">£23K - £30K</span>
                        <span class="salary-label">Starting Salary Range</span>
                    </div>
                    <a href="#apply" class="btn btn-outline">Learn More</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Application Process -->
    <section id="apply" class="application-process">
        <div class="section-title">
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
        <div class="section-title">
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

        /* Programs Hero */
        .programs-hero {
            height: 70vh;
            background: linear-gradient(135deg, var(--teal), var(--deep));
            background-size: cover;
            background-position: center;
            display: flex;
            align-items: center;
            position: relative;
            overflow: hidden;
        }

        .programs-hero .hero-content {
            flex: 1;
            padding: 0 5%;
            color: white;
        }

        .programs-hero h1 {
            font-size: 3.5rem;
            font-weight: 800;
            margin-bottom: 1.5rem;
            text-shadow: 2px 2px 10px rgba(0, 0, 0, 0.3);
        }

        .programs-hero p {
            font-size: 1.3rem;
            margin-bottom: 2.5rem;
            max-width: 600px;
        }

        .hero-stats {
            flex: 1;
            display: flex;
            flex-direction: column;
            gap: 2rem;
            padding: 0 5%;
        }

        .hero-stats .stat {
            background: rgba(255, 255, 255, 0.1);
            backdrop-filter: blur(20px);
            border: 1px solid rgba(255, 255, 255, 0.2);
            padding: 2rem;
            border-radius: var(--radius);
            text-align: center;
            color: white;
        }

        .hero-stats .stat-number {
            font-size: 3rem;
            font-weight: 800;
            display: block;
            margin-bottom: 0.5rem;
        }

        .hero-stats .stat-label {
            font-size: 1.1rem;
            opacity: 0.9;
        }

        /* Program Overview */
        .program-overview {
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

        .overview-features {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 2rem;
        }

        .feature {
            text-align: center;
            padding: 2rem;
            background: white;
            border-radius: var(--radius);
            box-shadow: var(--shadow);
            transition: var(--transition);
        }

        .feature:hover {
            transform: translateY(-5px);
            box-shadow: var(--shadow-hover);
        }

        .feature i {
            font-size: 2.5rem;
            color: var(--teal);
            margin-bottom: 1rem;
        }

        .feature h4 {
            color: var(--teal);
            margin-bottom: 0.5rem;
        }

        .feature p {
            color: var(--dark-gray);
            font-size: 0.95rem;
        }

        /* Program Tracks */
        .program-tracks {
            padding: 8rem 5%;
            background: white;
        }

        .tracks-container {
            max-width: 1200px;
            margin: 0 auto;
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(500px, 1fr));
            gap: 3rem;
        }

        .track-card {
            background: var(--light);
            border-radius: var(--radius);
            overflow: hidden;
            box-shadow: var(--shadow);
            transition: var(--transition);
            position: relative;
        }

        .track-card:hover {
            transform: translateY(-10px);
            box-shadow: var(--shadow-hover);
        }

        .track-header {
            background: linear-gradient(135deg, var(--teal), #055860);
            color: white;
            padding: 2.5rem;
            display: flex;
            align-items: center;
            gap: 2rem;
        }

        .track-icon {
            width: 80px;
            height: 80px;
            background: var(--gold);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 2rem;
            flex-shrink: 0;
        }

        .track-info h3 {
            font-size: 1.8rem;
            margin-bottom: 0.5rem;
        }

        .track-info p {
            opacity: 0.9;
            margin-bottom: 1rem;
        }

        .track-meta {
            display: flex;
            gap: 1rem;
            font-size: 0.9rem;
        }

        .track-meta span {
            display: flex;
            align-items: center;
            gap: 0.5rem;
        }

        .track-content {
            padding: 2.5rem;
        }

        .track-description h4 {
            color: var(--teal);
            margin-bottom: 1rem;
        }

        .track-description p {
            color: var(--dark-gray);
            line-height: 1.7;
            margin-bottom: 2rem;
        }

        .curriculum-modules {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 1.5rem;
            margin: 1.5rem 0;
        }

        .module {
            background: white;
            padding: 1.5rem;
            border-radius: var(--radius);
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.05);
        }

        .module h5 {
            color: var(--teal);
            margin-bottom: 0.5rem;
            font-size: 1rem;
        }

        .module p {
            color: var(--dark-gray);
            font-size: 0.9rem;
            line-height: 1.5;
        }

        .track-projects h4,
        .track-careers h4 {
            color: var(--teal);
            margin: 2rem 0 1rem;
        }

        .track-projects ul {
            list-style: none;
            padding: 0;
        }

        .track-projects li {
            padding: 0.5rem 0;
            padding-left: 1.5rem;
            position: relative;
            color: var(--dark-gray);
        }

        .track-projects li::before {
            content: '→';
            position: absolute;
            left: 0;
            color: var(--gold);
        }

        .career-tags {
            display: flex;
            flex-wrap: wrap;
            gap: 0.5rem;
        }

        .career-tags span {
            background: var(--gold);
            color: var(--black);
            padding: 0.3rem 0.8rem;
            border-radius: 20px;
            font-size: 0.85rem;
            font-weight: 500;
        }

        .track-footer {
            background: white;
            padding: 2rem 2.5rem;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .salary-info .salary {
            font-size: 1.5rem;
            font-weight: 800;
            color: var(--teal);
            display: block;
        }

        .salary-info .salary-label {
            font-size: 0.9rem;
            color: var(--dark-gray);
        }

        /* Application Process */
        .application-process {
            padding: 8rem 5%;
            background: linear-gradient(135deg, #f8f9fa, #e9ecef);
        }

        .process-steps {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 3rem;
            max-width: 1200px;
            margin: 0 auto 4rem;
        }

        .process-step {
            text-align: center;
            background: white;
            padding: 3rem 2rem;
            border-radius: var(--radius);
            box-shadow: var(--shadow);
            position: relative;
            transition: var(--transition);
        }

        .process-step:hover {
            transform: translateY(-5px);
            box-shadow: var(--shadow-hover);
        }

        .process-step::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 5px;
            background: linear-gradient(90deg, var(--teal), var(--gold));
        }

        .step-number {
            width: 60px;
            height: 60px;
            background: var(--teal);
            color: white;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.5rem;
            font-weight: 800;
            margin: 0 auto 1.5rem;
        }

        .process-step h3 {
            color: var(--teal);
            margin-bottom: 1rem;
        }

        .process-step p {
            color: var(--dark-gray);
            line-height: 1.6;
        }

        .application-cta {
            max-width: 800px;
            margin: 0 auto;
            text-align: center;
            background: white;
            padding: 3rem;
            border-radius: var(--radius);
            box-shadow: var(--shadow);
        }

        .application-cta h3 {
            color: var(--teal);
            margin-bottom: 1rem;
        }

        .application-cta p {
            color: var(--dark-gray);
            margin-bottom: 2rem;
            line-height: 1.6;
        }

        /* FAQ Section */
        .faq {
            padding: 8rem 5%;
            background: white;
        }

        .faq-container {
            max-width: 800px;
            margin: 0 auto;
        }

        .faq-item {
            border-bottom: 1px solid #eee;
            margin-bottom: 1rem;
        }

        .faq-question {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 1.5rem 0;
            cursor: pointer;
            transition: var(--transition);
        }

        .faq-question:hover {
            color: var(--teal);
        }

        .faq-question h4 {
            margin: 0;
            font-size: 1.1rem;
            font-weight: 600;
        }

        .faq-toggle {
            font-size: 1.5rem;
            font-weight: bold;
            color: var(--teal);
            transition: var(--transition);
        }

        .faq-item.active .faq-toggle {
            transform: rotate(45deg);
        }

        .faq-answer {
            max-height: 0;
            overflow: hidden;
            transition: max-height 0.3s ease;
            padding-bottom: 0;
        }

        .faq-item.active .faq-answer {
            max-height: 200px;
            padding-bottom: 1.5rem;
        }

        .faq-answer p {
            color: var(--dark-gray);
            line-height: 1.6;
            margin: 0;
        }

        /* Mobile Responsive */
        @media (max-width: 992px) {
            .programs-hero {
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

            .overview-features {
                grid-template-columns: 1fr;
            }

            .tracks-container {
                grid-template-columns: 1fr;
            }

            .track-header {
                flex-direction: column;
                text-align: center;
                gap: 1.5rem;
            }

            .track-content {
                padding: 2rem;
            }

            .curriculum-modules {
                grid-template-columns: 1fr;
            }

            .track-footer {
                flex-direction: column;
                gap: 1rem;
                text-align: center;
            }

            .process-steps {
                grid-template-columns: repeat(2, 1fr);
            }
        }

        @media (max-width: 768px) {
            .programs-hero h1 {
                font-size: 2.8rem;
            }

            .hero-stats {
                flex-direction: column;
                gap: 1rem;
            }

            .hero-stats .stat {
                padding: 1.5rem;
            }

            .track-info h3 {
                font-size: 1.5rem;
            }

            .process-steps {
                grid-template-columns: 1fr;
            }

            .application-cta {
                padding: 2rem;
            }
        }

        @media (max-width: 576px) {
            .programs-hero h1 {
                font-size: 2.2rem;
            }

            .track-header {
                padding: 2rem;
            }

            .track-content {
                padding: 1.5rem;
            }

            .track-info h3 {
                font-size: 1.3rem;
            }

            .faq-question h4 {
                font-size: 1rem;
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
