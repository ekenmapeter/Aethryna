<x-aethryna-layout>
    <x-slot name="title">Dashboard | Aethryna Foundation</x-slot>

    <!-- Dashboard Header -->
    <section class="dashboard-header">
        <div class="header-content">
            <div class="welcome-message">
                <h1>Welcome back, {{ Auth::user()->name }}!</h1>
                <p>Continue your journey towards digital transformation</p>
            </div>
            <div class="user-avatar">
                <div class="avatar-circle">
                    <span>{{ strtoupper(substr(Auth::user()->name, 0, 1)) }}</span>
                </div>
                <div class="user-info">
                    <h3>{{ Auth::user()->name }}</h3>
                    <p>{{ Auth::user()->email }}</p>
                    <span class="user-role">{{ Auth::user()->role === 'admin' ? 'Administrator' : 'Student' }}</span>
                </div>
            </div>
        </div>
    </section>

    <!-- Quick Stats -->
    <section class="quick-stats">
        <div class="stats-grid">
            <div class="stat-card">
                <div class="stat-icon">
                    <i class="fas fa-book-open"></i>
                </div>
                <div class="stat-content">
                    <h3>Current Progress</h3>
                    <div class="progress-bar">
                        <div class="progress-fill" style="width: 65%"></div>
                    </div>
                    <p>65% Complete</p>
                </div>
            </div>
            <div class="stat-card">
                <div class="stat-icon">
                    <i class="fas fa-clock"></i>
                </div>
                <div class="stat-content">
                    <h3>Study Time</h3>
                    <p class="stat-number">24h 30m</p>
                    <p>This week</p>
                </div>
            </div>
            <div class="stat-card">
                <div class="stat-icon">
                    <i class="fas fa-trophy"></i>
                </div>
                <div class="stat-content">
                    <h3>Achievements</h3>
                    <p class="stat-number">12</p>
                    <p>Unlocked</p>
                </div>
            </div>
            <div class="stat-card">
                <div class="stat-icon">
                    <i class="fas fa-users"></i>
                </div>
                <div class="stat-content">
                    <h3>Community Rank</h3>
                    <p class="stat-number">#47</p>
                    <p>Top Learners</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Main Dashboard Content -->
    <section class="dashboard-content">
        <div class="content-grid">
            <!-- Continue Learning -->
            <div class="dashboard-section">
                <div class="section-header">
                    <h2>Continue Learning</h2>
                    <a href="#" class="view-all">View All Courses</a>
                </div>
                <div class="course-cards">
                    <div class="course-card active">
                        <div class="course-image">
                            <img src="https://images.unsplash.com/photo-1461749280684-dccba630e2f6?ixlib=rb-4.0.3&auto=format&fit=crop&w=2069&q=80" alt="Web Development">
                            <div class="course-progress">
                                <span>65%</span>
                            </div>
                        </div>
                        <div class="course-content">
                            <h3>Web Development Fundamentals</h3>
                            <p>Learn HTML, CSS, and JavaScript basics</p>
                            <div class="course-meta">
                                <span><i class="fas fa-clock"></i> 2h 30m left</span>
                                <span><i class="fas fa-star"></i> 4.8</span>
                            </div>
                            <a href="#" class="btn btn-primary btn-sm">Continue</a>
                        </div>
                    </div>
                    <div class="course-card">
                        <div class="course-image">
                            <img src="https://images.unsplash.com/photo-1555949963-aa79dcee981c?ixlib=rb-4.0.3&auto=format&fit=crop&w=2070&q=80" alt="UI/UX Design">
                        </div>
                        <div class="course-content">
                            <h3>UI/UX Design Principles</h3>
                            <p>Master the art of user-centered design</p>
                            <div class="course-meta">
                                <span><i class="fas fa-clock"></i> 8h total</span>
                                <span><i class="fas fa-star"></i> 4.9</span>
                            </div>
                            <a href="#" class="btn btn-outline btn-sm">Start</a>
                        </div>
                    </div>
                    <div class="course-card">
                        <div class="course-image">
                            <img src="https://images.unsplash.com/photo-1558494949-ef010cbdcc31?ixlib=rb-4.0.3&auto=format&fit=crop&w=2070&q=80" alt="Digital Marketing">
                        </div>
                        <div class="course-content">
                            <h3>Digital Marketing Essentials</h3>
                            <p>Build skills for the digital economy</p>
                            <div class="course-meta">
                                <span><i class="fas fa-clock"></i> 6h total</span>
                                <span><i class="fas fa-star"></i> 4.7</span>
                            </div>
                            <a href="#" class="btn btn-outline btn-sm">Start</a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Learning Path -->
            <div class="dashboard-section">
                <div class="section-header">
                    <h2>Your Learning Path</h2>
                    <a href="{{ route('pathway') }}" class="view-all">View Full Path</a>
                </div>
                <div class="pathway-overview">
                    <div class="pathway-stage completed">
                        <div class="stage-icon">
                            <i class="fas fa-seedling"></i>
                        </div>
                        <div class="stage-content">
                            <h4>Foundation</h4>
                            <p>Basic digital skills</p>
                            <span class="stage-status">Completed</span>
                        </div>
                    </div>
                    <div class="pathway-connector completed"></div>
                    <div class="pathway-stage active">
                        <div class="stage-icon">
                            <i class="fas fa-code"></i>
                        </div>
                        <div class="stage-content">
                            <h4>Specialization</h4>
                            <p>Choose your track</p>
                            <span class="stage-status">In Progress</span>
                        </div>
                    </div>
                    <div class="pathway-connector"></div>
                    <div class="pathway-stage">
                        <div class="stage-icon">
                            <i class="fas fa-rocket"></i>
                        </div>
                        <div class="stage-content">
                            <h4>Launch</h4>
                            <p>Career preparation</p>
                            <span class="stage-status">Upcoming</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Recent Activity -->
            <div class="dashboard-section">
                <div class="section-header">
                    <h2>Recent Activity</h2>
                </div>
                <div class="activity-feed">
                    <div class="activity-item">
                        <div class="activity-icon">
                            <i class="fas fa-play-circle"></i>
                        </div>
                        <div class="activity-content">
                            <p>Completed "CSS Grid Layout" lesson</p>
                            <span class="activity-time">2 hours ago</span>
                        </div>
                    </div>
                    <div class="activity-item">
                        <div class="activity-icon">
                            <i class="fas fa-trophy"></i>
                        </div>
                        <div class="activity-content">
                            <p>Earned "HTML Master" achievement</p>
                            <span class="activity-time">1 day ago</span>
                        </div>
                    </div>
                    <div class="activity-item">
                        <div class="activity-icon">
                            <i class="fas fa-users"></i>
                        </div>
                        <div class="activity-content">
                            <p>Joined Web Development Study Group</p>
                            <span class="activity-time">2 days ago</span>
                        </div>
                    </div>
                    <div class="activity-item">
                        <div class="activity-icon">
                            <i class="fas fa-calendar-check"></i>
                        </div>
                        <div class="activity-content">
                            <p>Attended "Career Planning" webinar</p>
                            <span class="activity-time">3 days ago</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Upcoming Events -->
            <div class="dashboard-section">
                <div class="section-header">
                    <h2>Upcoming Events</h2>
                    <a href="#" class="view-all">View Calendar</a>
                </div>
                <div class="events-list">
                    <div class="event-card">
                        <div class="event-date">
                            <span class="day">15</span>
                            <span class="month">Dec</span>
                        </div>
                        <div class="event-content">
                            <h4>Portfolio Review Session</h4>
                            <p>Get feedback on your projects</p>
                            <span class="event-time">2:00 PM - 4:00 PM</span>
                        </div>
                        <a href="#" class="btn btn-outline btn-sm">RSVP</a>
                    </div>
                    <div class="event-card">
                        <div class="event-date">
                            <span class="day">18</span>
                            <span class="month">Dec</span>
                        </div>
                        <div class="event-content">
                            <h4>Industry Networking Event</h4>
                            <p>Connect with tech professionals</p>
                            <span class="event-time">6:00 PM - 8:00 PM</span>
                        </div>
                        <a href="#" class="btn btn-outline btn-sm">RSVP</a>
                    </div>
                    <div class="event-card">
                        <div class="event-date">
                            <span class="day">22</span>
                            <span class="month">Dec</span>
                        </div>
                        <div class="event-content">
                            <h4>Career Workshop</h4>
                            <p>Resume building and interview prep</p>
                            <span class="event-time">10:00 AM - 12:00 PM</span>
                        </div>
                        <a href="#" class="btn btn-outline btn-sm">RSVP</a>
                    </div>
                </div>
            </div>

            <!-- Achievements -->
            <div class="dashboard-section">
                <div class="section-header">
                    <h2>Recent Achievements</h2>
                    <a href="#" class="view-all">View All</a>
                </div>
                <div class="achievements-grid">
                    <div class="achievement-card unlocked">
                        <div class="achievement-icon">
                            <i class="fas fa-code"></i>
                        </div>
                        <div class="achievement-content">
                            <h4>Code Warrior</h4>
                            <p>Complete 10 coding challenges</p>
                        </div>
                    </div>
                    <div class="achievement-card unlocked">
                        <div class="achievement-icon">
                            <i class="fas fa-brain"></i>
                        </div>
                        <div class="achievement-content">
                            <h4>Quick Learner</h4>
                            <p>Finish a course in record time</p>
                        </div>
                    </div>
                    <div class="achievement-card unlocked">
                        <div class="achievement-icon">
                            <i class="fas fa-users"></i>
                        </div>
                        <div class="achievement-content">
                            <h4>Team Player</h4>
                            <p>Help 5 fellow learners</p>
                        </div>
                    </div>
                    <div class="achievement-card">
                        <div class="achievement-icon locked">
                            <i class="fas fa-graduation-cap"></i>
                        </div>
                        <div class="achievement-content">
                            <h4>Graduate</h4>
                            <p>Complete your first full program</p>
                        </div>
                    </div>
                    <div class="achievement-card">
                        <div class="achievement-icon locked">
                            <i class="fas fa-briefcase"></i>
                        </div>
                        <div class="achievement-content">
                            <h4>Job Seeker</h4>
                            <p>Land your first tech job</p>
                        </div>
                    </div>
                    <div class="achievement-card">
                        <div class="achievement-icon locked">
                            <i class="fas fa-star"></i>
                        </div>
                        <div class="achievement-content">
                            <h4>Top Performer</h4>
                            <p>Rank in top 10% of learners</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Study Groups -->
            <div class="dashboard-section">
                <div class="section-header">
                    <h2>Study Groups</h2>
                    <a href="#" class="view-all">Find Groups</a>
                </div>
                <div class="study-groups">
                    <div class="group-card active">
                        <div class="group-header">
                            <div class="group-avatar">
                                <span>WD</span>
                            </div>
                            <div class="group-info">
                                <h4>Web Dev Warriors</h4>
                                <p>Weekly coding challenges & discussions</p>
                            </div>
                        </div>
                        <div class="group-stats">
                            <span><i class="fas fa-users"></i> 24 members</span>
                            <span><i class="fas fa-calendar"></i> Next: Dec 16</span>
                        </div>
                    </div>
                    <div class="group-card">
                        <div class="group-header">
                            <div class="group-avatar">
                                <span>UX</span>
                            </div>
                            <div class="group-info">
                                <h4>UX/UI Designers</h4>
                                <p>Design critiques and portfolio reviews</p>
                            </div>
                        </div>
                        <div class="group-stats">
                            <span><i class="fas fa-users"></i> 18 members</span>
                            <span><i class="fas fa-calendar"></i> Next: Dec 20</span>
                        </div>
                    </div>
                    <div class="group-card">
                        <div class="group-header">
                            <div class="group-avatar">
                                <span>JS</span>
                            </div>
                            <div class="group-info">
                                <h4>JavaScript Masters</h4>
                                <p>Advanced JS concepts and frameworks</p>
                            </div>
                        </div>
                        <div class="group-stats">
                            <span><i class="fas fa-users"></i> 31 members</span>
                            <span><i class="fas fa-calendar"></i> Next: Dec 18</span>
                        </div>
                    </div>
                </div>
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

        /* Dashboard Header */
        .dashboard-header {
            background: linear-gradient(135deg, var(--teal), #1a4a5a);
            color: white;
            padding: 4rem 5%;
            position: relative;
            overflow: hidden;
        }

        .dashboard-header::before {
            content: '';
            position: absolute;
            top: 0;
            right: 0;
            width: 300px;
            height: 300px;
            background: rgba(232, 182, 71, 0.1);
            border-radius: 50%;
            transform: translate(50%, -50%);
        }

        .header-content {
            max-width: 1200px;
            margin: 0 auto;
            display: flex;
            justify-content: space-between;
            align-items: center;
            position: relative;
            z-index: 2;
        }

        .welcome-message h1 {
            font-size: 2.5rem;
            margin-bottom: 0.5rem;
        }

        .welcome-message p {
            font-size: 1.1rem;
            opacity: 0.9;
        }

        .user-avatar {
            display: flex;
            align-items: center;
            gap: 1rem;
        }

        .avatar-circle {
            width: 60px;
            height: 60px;
            background: var(--gold);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.5rem;
            font-weight: 800;
            color: var(--black);
        }

        .user-info h3 {
            color: white;
            margin-bottom: 0.2rem;
        }

        .user-info p {
            color: rgba(255, 255, 255, 0.8);
            font-size: 0.9rem;
            margin-bottom: 0.3rem;
        }

        .user-role {
            background: var(--gold);
            color: var(--black);
            padding: 0.2rem 0.8rem;
            border-radius: 15px;
            font-size: 0.8rem;
            font-weight: 600;
        }

        /* Quick Stats */
        .quick-stats {
            padding: 4rem 5%;
            background: white;
        }

        .stats-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 2rem;
            max-width: 1200px;
            margin: 0 auto;
        }

        .stat-card {
            background: var(--light);
            padding: 2rem;
            border-radius: var(--radius);
            display: flex;
            align-items: center;
            gap: 1.5rem;
            box-shadow: var(--shadow);
            transition: var(--transition);
        }

        .stat-card:hover {
            transform: translateY(-5px);
            box-shadow: var(--shadow-hover);
        }

        .stat-icon {
            width: 60px;
            height: 60px;
            background: var(--teal);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-size: 1.5rem;
        }

        .stat-content h3 {
            color: var(--teal);
            margin-bottom: 0.5rem;
        }

        .progress-bar {
            width: 100%;
            height: 8px;
            background: rgba(47, 110, 127, 0.2);
            border-radius: 4px;
            overflow: hidden;
            margin-bottom: 0.5rem;
        }

        .progress-fill {
            height: 100%;
            background: var(--teal);
            border-radius: 4px;
            transition: width 1s ease;
        }

        .stat-number {
            font-size: 1.8rem;
            font-weight: 800;
            color: var(--teal);
            margin-bottom: 0.2rem;
        }

        /* Dashboard Content */
        .dashboard-content {
            padding: 4rem 5%;
            background: var(--light);
        }

        .content-grid {
            display: grid;
            grid-template-columns: 2fr 1fr;
            gap: 3rem;
            max-width: 1200px;
            margin: 0 auto;
        }

        .dashboard-section {
            background: white;
            border-radius: var(--radius);
            padding: 2rem;
            box-shadow: var(--shadow);
            margin-bottom: 2rem;
        }

        .section-header {
            display: flex;
            justify-content: between;
            align-items: center;
            margin-bottom: 2rem;
        }

        .section-header h2 {
            color: var(--teal);
            margin: 0;
        }

        .view-all {
            color: var(--gold);
            text-decoration: none;
            font-weight: 600;
            font-size: 0.9rem;
        }

        .view-all:hover {
            text-decoration: underline;
        }

        /* Course Cards */
        .course-cards {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 2rem;
        }

        .course-card {
            border: 2px solid transparent;
            border-radius: var(--radius);
            overflow: hidden;
            transition: var(--transition);
            position: relative;
        }

        .course-card.active {
            border-color: var(--gold);
            box-shadow: 0 0 0 3px rgba(232, 182, 71, 0.2);
        }

        .course-card:hover {
            transform: translateY(-5px);
            box-shadow: var(--shadow-hover);
        }

        .course-image {
            height: 150px;
            overflow: hidden;
            position: relative;
        }

        .course-image img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: var(--transition);
        }

        .course-card:hover .course-image img {
            transform: scale(1.05);
        }

        .course-progress {
            position: absolute;
            top: 10px;
            right: 10px;
            background: var(--gold);
            color: var(--black);
            padding: 0.3rem 0.8rem;
            border-radius: 15px;
            font-size: 0.8rem;
            font-weight: 600;
        }

        .course-content {
            padding: 1.5rem;
        }

        .course-content h3 {
            color: var(--teal);
            margin-bottom: 0.5rem;
        }

        .course-content p {
            color: var(--dark-gray);
            font-size: 0.9rem;
            margin-bottom: 1rem;
        }

        .course-meta {
            display: flex;
            justify-content: space-between;
            margin-bottom: 1rem;
            font-size: 0.8rem;
            color: var(--dark-gray);
        }

        /* Learning Path */
        .pathway-overview {
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 2rem 0;
        }

        .pathway-stage {
            display: flex;
            flex-direction: column;
            align-items: center;
            text-align: center;
            position: relative;
            flex: 1;
        }

        .stage-icon {
            width: 60px;
            height: 60px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.5rem;
            margin-bottom: 1rem;
            transition: var(--transition);
        }

        .pathway-stage.completed .stage-icon {
            background: var(--gold);
            color: var(--black);
        }

        .pathway-stage.active .stage-icon {
            background: var(--teal);
            color: white;
            box-shadow: 0 0 0 4px rgba(47, 110, 127, 0.2);
        }

        .pathway-stage:not(.completed):not(.active) .stage-icon {
            background: rgba(47, 110, 127, 0.2);
            color: var(--teal);
        }

        .stage-content h4 {
            color: var(--teal);
            margin-bottom: 0.3rem;
        }

        .stage-content p {
            color: var(--dark-gray);
            font-size: 0.9rem;
            margin-bottom: 0.5rem;
        }

        .stage-status {
            font-size: 0.8rem;
            font-weight: 600;
            padding: 0.2rem 0.8rem;
            border-radius: 15px;
        }

        .pathway-stage.completed .stage-status {
            background: var(--gold);
            color: var(--black);
        }

        .pathway-stage.active .stage-status {
            background: var(--teal);
            color: white;
        }

        .pathway-stage:not(.completed):not(.active) .stage-status {
            background: rgba(47, 110, 127, 0.2);
            color: var(--teal);
        }

        .pathway-connector {
            height: 2px;
            background: rgba(47, 110, 127, 0.2);
            flex: 0 0 100px;
            position: relative;
        }

        .pathway-connector.completed {
            background: var(--gold);
        }

        .pathway-connector::after {
            content: '';
            position: absolute;
            right: -4px;
            top: -4px;
            width: 10px;
            height: 10px;
            background: var(--teal);
            border-radius: 50%;
            opacity: 0;
        }

        .pathway-connector.completed::after {
            opacity: 1;
        }

        /* Activity Feed */
        .activity-feed {
            display: flex;
            flex-direction: column;
            gap: 1rem;
        }

        .activity-item {
            display: flex;
            align-items: center;
            gap: 1rem;
            padding: 1rem;
            background: var(--light);
            border-radius: var(--radius);
        }

        .activity-icon {
            width: 40px;
            height: 40px;
            background: var(--teal);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
        }

        .activity-content p {
            color: var(--teal);
            margin: 0;
            font-weight: 500;
        }

        .activity-time {
            color: var(--dark-gray);
            font-size: 0.8rem;
        }

        /* Events */
        .events-list {
            display: flex;
            flex-direction: column;
            gap: 1rem;
        }

        .event-card {
            display: flex;
            align-items: center;
            gap: 1.5rem;
            padding: 1.5rem;
            background: var(--light);
            border-radius: var(--radius);
            transition: var(--transition);
        }

        .event-card:hover {
            background: white;
            box-shadow: var(--shadow);
        }

        .event-date {
            display: flex;
            flex-direction: column;
            align-items: center;
            background: var(--teal);
            color: white;
            padding: 1rem;
            border-radius: var(--radius);
            min-width: 70px;
            text-align: center;
        }

        .event-date .day {
            font-size: 1.5rem;
            font-weight: 800;
        }

        .event-date .month {
            font-size: 0.8rem;
            text-transform: uppercase;
        }

        .event-content h4 {
            color: var(--teal);
            margin-bottom: 0.3rem;
        }

        .event-content p {
            color: var(--dark-gray);
            font-size: 0.9rem;
            margin-bottom: 0.3rem;
        }

        .event-time {
            color: var(--dark-gray);
            font-size: 0.8rem;
        }

        /* Achievements */
        .achievements-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 1rem;
        }

        .achievement-card {
            display: flex;
            align-items: center;
            gap: 1rem;
            padding: 1rem;
            background: var(--light);
            border-radius: var(--radius);
            transition: var(--transition);
        }

        .achievement-card:hover {
            background: white;
            box-shadow: var(--shadow);
        }

        .achievement-card.unlocked {
            border-left: 4px solid var(--gold);
        }

        .achievement-icon {
            width: 50px;
            height: 50px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.2rem;
        }

        .achievement-card.unlocked .achievement-icon {
            background: var(--gold);
            color: var(--black);
        }

        .achievement-card:not(.unlocked) .achievement-icon.locked {
            background: rgba(47, 110, 127, 0.2);
            color: var(--teal);
        }

        .achievement-content h4 {
            color: var(--teal);
            margin-bottom: 0.2rem;
        }

        .achievement-content p {
            color: var(--dark-gray);
            font-size: 0.8rem;
        }

        /* Study Groups */
        .study-groups {
            display: flex;
            flex-direction: column;
            gap: 1rem;
        }

        .group-card {
            padding: 1.5rem;
            background: var(--light);
            border-radius: var(--radius);
            transition: var(--transition);
            border: 2px solid transparent;
        }

        .group-card.active {
            border-color: var(--gold);
            background: rgba(232, 182, 71, 0.05);
        }

        .group-card:hover {
            background: white;
            box-shadow: var(--shadow);
        }

        .group-header {
            display: flex;
            align-items: center;
            gap: 1rem;
        }

        .group-avatar {
            width: 50px;
            height: 50px;
            background: var(--teal);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-weight: 800;
        }

        .group-info h4 {
            color: var(--teal);
            margin-bottom: 0.2rem;
        }

        .group-info p {
            color: var(--dark-gray);
            font-size: 0.9rem;
        }

        .group-stats {
            display: flex;
            gap: 1rem;
            font-size: 0.8rem;
            color: var(--dark-gray);
            margin-top: 1rem;
        }

        /* Buttons */
        .btn {
            display: inline-block;
            padding: 0.75rem 1.5rem;
            border-radius: 25px;
            text-decoration: none;
            font-weight: 600;
            text-align: center;
            transition: var(--transition);
            border: none;
            cursor: pointer;
        }

        .btn-primary {
            background: var(--teal);
            color: white;
        }

        .btn-primary:hover {
            background: #245a68;
            transform: translateY(-2px);
        }

        .btn-outline {
            background: transparent;
            color: var(--teal);
            border: 2px solid var(--teal);
        }

        .btn-outline:hover {
            background: var(--teal);
            color: white;
        }

        .btn-sm {
            padding: 0.5rem 1rem;
            font-size: 0.9rem;
        }

        /* Mobile Responsive */
        @media (max-width: 992px) {
            .header-content {
                flex-direction: column;
                gap: 2rem;
                text-align: center;
            }

            .content-grid {
                grid-template-columns: 1fr;
            }

            .stats-grid {
                grid-template-columns: repeat(2, 1fr);
            }

            .pathway-overview {
                flex-direction: column;
                gap: 2rem;
            }

            .pathway-connector {
                width: 2px;
                height: 50px;
                flex: none;
            }

            .course-cards {
                grid-template-columns: 1fr;
            }
        }

        @media (max-width: 768px) {
            .dashboard-header {
                padding: 3rem 5%;
            }

            .welcome-message h1 {
                font-size: 2rem;
            }

            .stats-grid {
                grid-template-columns: 1fr;
            }

            .stat-card {
                flex-direction: column;
                text-align: center;
            }

            .event-card {
                flex-direction: column;
                text-align: center;
            }

            .achievement-card {
                flex-direction: column;
                text-align: center;
            }
        }

        @media (max-width: 576px) {
            .dashboard-header {
                padding: 2rem 5%;
            }

            .welcome-message h1 {
                font-size: 1.8rem;
            }

            .user-avatar {
                flex-direction: column;
                gap: 0.5rem;
            }

            .course-cards {
                gap: 1rem;
            }

            .achievements-grid {
                grid-template-columns: 1fr;
            }
        }
    </style>
    @endpush

    @push('scripts')
    <script>
        // Animate progress bars on load
        document.addEventListener('DOMContentLoaded', function() {
            const progressBars = document.querySelectorAll('.progress-fill');
            progressBars.forEach(bar => {
                const width = bar.style.width;
                bar.style.width = '0%';
                setTimeout(() => {
                    bar.style.width = width;
                }, 500);
            });
        });

        // Add hover effects to achievement cards
        const achievementCards = document.querySelectorAll('.achievement-card');
        achievementCards.forEach(card => {
            card.addEventListener('mouseenter', function() {
                if (this.classList.contains('unlocked')) {
                    this.style.transform = 'scale(1.02)';
                }
            });

            card.addEventListener('mouseleave', function() {
                this.style.transform = 'scale(1)';
            });
        });
    </script>
    @endpush
</x-aethryna-layout>
