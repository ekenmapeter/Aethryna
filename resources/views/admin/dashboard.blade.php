<x-aethryna-layout>
    <x-slot name="title">Admin Dashboard | Aethryna Foundation</x-slot>

    <!-- Admin Header -->
    <section class="admin-header">
        <div class="header-content">
            <div class="welcome-message">
                <h1>Admin Dashboard</h1>
                <p>Manage users, content, and monitor platform performance</p>
            </div>
            <div class="admin-actions">
                <a href="{{ route('register') }}" class="btn btn-primary">
                    <i class="fas fa-user-plus"></i> Add User
                </a>
                <a href="#" class="btn btn-outline">
                    <i class="fas fa-cog"></i> Settings
                </a>
            </div>
        </div>
    </section>

    <!-- Admin Stats -->
    <section class="admin-stats">
        <div class="stats-grid">
            <div class="stat-card">
                <div class="stat-icon">
                    <i class="fas fa-users"></i>
                </div>
                <div class="stat-content">
                    <h3>Total Users</h3>
                    <p class="stat-number">1,247</p>
                    <span class="stat-change positive">+12% this month</span>
                </div>
            </div>
            <div class="stat-card">
                <div class="stat-icon">
                    <i class="fas fa-graduation-cap"></i>
                </div>
                <div class="stat-content">
                    <h3>Active Learners</h3>
                    <p class="stat-number">892</p>
                    <span class="stat-change positive">+8% this month</span>
                </div>
            </div>
            <div class="stat-card">
                <div class="stat-icon">
                    <i class="fas fa-briefcase"></i>
                </div>
                <div class="stat-content">
                    <h3>Job Placements</h3>
                    <p class="stat-number">156</p>
                    <span class="stat-change positive">+23% this month</span>
                </div>
            </div>
            <div class="stat-card">
                <div class="stat-icon">
                    <i class="fas fa-chart-line"></i>
                </div>
                <div class="stat-content">
                    <h3>Course Completion</h3>
                    <p class="stat-number">73%</p>
                    <span class="stat-change positive">+5% this month</span>
                </div>
            </div>
        </div>
    </section>

    <!-- Admin Dashboard Content -->
    <section class="admin-content">
        <div class="content-grid">
            <!-- User Management -->
            <div class="admin-section">
                <div class="section-header">
                    <h2>User Management</h2>
                    <div class="section-actions">
                        <input type="text" placeholder="Search users..." class="search-input">
                        <select class="filter-select">
                            <option value="all">All Users</option>
                            <option value="active">Active</option>
                            <option value="inactive">Inactive</option>
                            <option value="admin">Admins</option>
                        </select>
                    </div>
                </div>
                <div class="users-table">
                    <div class="table-header">
                        <div class="col">Name</div>
                        <div class="col">Email</div>
                        <div class="col">Role</div>
                        <div class="col">Status</div>
                        <div class="col">Joined</div>
                        <div class="col">Actions</div>
                    </div>
                    <div class="table-body">
                        <div class="table-row">
                            <div class="col">
                                <div class="user-info">
                                    <div class="user-avatar">JD</div>
                                    <span>John Doe</span>
                                </div>
                            </div>
                            <div class="col">john.doe@email.com</div>
                            <div class="col">
                                <span class="role-badge user">User</span>
                            </div>
                            <div class="col">
                                <span class="status-badge active">Active</span>
                            </div>
                            <div class="col">Dec 1, 2024</div>
                            <div class="col">
                                <div class="action-buttons">
                                    <button class="btn-icon" title="Edit">
                                        <i class="fas fa-edit"></i>
                                    </button>
                                    <button class="btn-icon" title="Suspend">
                                        <i class="fas fa-ban"></i>
                                    </button>
                                    <button class="btn-icon danger" title="Delete">
                                        <i class="fas fa-trash"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="table-row">
                            <div class="col">
                                <div class="user-info">
                                    <div class="user-avatar">SM</div>
                                    <span>Sarah Mitchell</span>
                                </div>
                            </div>
                            <div class="col">sarah.mitchell@email.com</div>
                            <div class="col">
                                <span class="role-badge admin">Admin</span>
                            </div>
                            <div class="col">
                                <span class="status-badge active">Active</span>
                            </div>
                            <div class="col">Nov 15, 2024</div>
                            <div class="col">
                                <div class="action-buttons">
                                    <button class="btn-icon" title="Edit">
                                        <i class="fas fa-edit"></i>
                                    </button>
                                    <button class="btn-icon" title="Suspend">
                                        <i class="fas fa-ban"></i>
                                    </button>
                                    <button class="btn-icon danger" title="Delete">
                                        <i class="fas fa-trash"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="table-row">
                            <div class="col">
                                <div class="user-info">
                                    <div class="user-avatar">MK</div>
                                    <span>Mike Johnson</span>
                                </div>
                            </div>
                            <div class="col">mike.johnson@email.com</div>
                            <div class="col">
                                <span class="role-badge user">User</span>
                            </div>
                            <div class="col">
                                <span class="status-badge inactive">Inactive</span>
                            </div>
                            <div class="col">Oct 28, 2024</div>
                            <div class="col">
                                <div class="action-buttons">
                                    <button class="btn-icon" title="Edit">
                                        <i class="fas fa-edit"></i>
                                    </button>
                                    <button class="btn-icon" title="Activate">
                                        <i class="fas fa-check"></i>
                                    </button>
                                    <button class="btn-icon danger" title="Delete">
                                        <i class="fas fa-trash"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="table-row">
                            <div class="col">
                                <div class="user-info">
                                    <div class="user-avatar">AL</div>
                                    <span>Alex Lee</span>
                                </div>
                            </div>
                            <div class="col">alex.lee@email.com</div>
                            <div class="col">
                                <span class="role-badge user">User</span>
                            </div>
                            <div class="col">
                                <span class="status-badge active">Active</span>
                            </div>
                            <div class="col">Dec 5, 2024</div>
                            <div class="col">
                                <div class="action-buttons">
                                    <button class="btn-icon" title="Edit">
                                        <i class="fas fa-edit"></i>
                                    </button>
                                    <button class="btn-icon" title="Suspend">
                                        <i class="fas fa-ban"></i>
                                    </button>
                                    <button class="btn-icon danger" title="Delete">
                                        <i class="fas fa-trash"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="table-pagination">
                    <span>Showing 1-4 of 1,247 users</span>
                    <div class="pagination">
                        <button class="page-btn disabled"><i class="fas fa-chevron-left"></i></button>
                        <button class="page-btn active">1</button>
                        <button class="page-btn">2</button>
                        <button class="page-btn">3</button>
                        <span>...</span>
                        <button class="page-btn">125</button>
                        <button class="page-btn"><i class="fas fa-chevron-right"></i></button>
                    </div>
                </div>
            </div>

            <!-- Platform Analytics -->
            <div class="admin-section">
                <div class="section-header">
                    <h2>Platform Analytics</h2>
                    <select class="time-select">
                        <option value="7d">Last 7 days</option>
                        <option value="30d">Last 30 days</option>
                        <option value="90d">Last 90 days</option>
                        <option value="1y">Last year</option>
                    </select>
                </div>
                <div class="analytics-charts">
                    <div class="chart-container">
                        <h4>User Registrations</h4>
                        <div class="chart-placeholder">
                            <div class="chart-bar" style="height: 40%"></div>
                            <div class="chart-bar" style="height: 60%"></div>
                            <div class="chart-bar" style="height: 80%"></div>
                            <div class="chart-bar" style="height: 55%"></div>
                            <div class="chart-bar" style="height: 70%"></div>
                            <div class="chart-bar" style="height: 90%"></div>
                            <div class="chart-bar" style="height: 75%"></div>
                        </div>
                        <div class="chart-labels">
                            <span>Mon</span>
                            <span>Tue</span>
                            <span>Wed</span>
                            <span>Thu</span>
                            <span>Fri</span>
                            <span>Sat</span>
                            <span>Sun</span>
                        </div>
                    </div>
                    <div class="analytics-metrics">
                        <div class="metric">
                            <h4>Avg. Session Time</h4>
                            <p class="metric-value">24m 32s</p>
                            <span class="metric-change positive">+12%</span>
                        </div>
                        <div class="metric">
                            <h4>Page Views</h4>
                            <p class="metric-value">45,231</p>
                            <span class="metric-change positive">+8%</span>
                        </div>
                        <div class="metric">
                            <h4>Bounce Rate</h4>
                            <p class="metric-value">32%</p>
                            <span class="metric-change negative">-5%</span>
                        </div>
                        <div class="metric">
                            <h4>Conversion Rate</h4>
                            <p class="metric-value">4.2%</p>
                            <span class="metric-change positive">+15%</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Content Management -->
            <div class="admin-section">
                <div class="section-header">
                    <h2>Content Management</h2>
                    <a href="#" class="btn btn-primary btn-sm">Add Content</a>
                </div>
                <div class="content-grid">
                    <div class="content-card">
                        <div class="content-header">
                            <h4>Web Development Course</h4>
                            <span class="content-status published">Published</span>
                        </div>
                        <p>Complete guide to modern web development</p>
                        <div class="content-meta">
                            <span><i class="fas fa-users"></i> 234 enrolled</span>
                            <span><i class="fas fa-clock"></i> 8 weeks</span>
                            <span><i class="fas fa-star"></i> 4.8</span>
                        </div>
                        <div class="content-actions">
                            <button class="btn btn-outline btn-xs">Edit</button>
                            <button class="btn btn-outline btn-xs">View</button>
                            <button class="btn btn-outline btn-xs danger">Archive</button>
                        </div>
                    </div>
                    <div class="content-card">
                        <div class="content-header">
                            <h4>UI/UX Design Fundamentals</h4>
                            <span class="content-status draft">Draft</span>
                        </div>
                        <p>Learn design thinking and user-centered design</p>
                        <div class="content-meta">
                            <span><i class="fas fa-users"></i> 0 enrolled</span>
                            <span><i class="fas fa-clock"></i> 6 weeks</span>
                            <span><i class="fas fa-star"></i> N/A</span>
                        </div>
                        <div class="content-actions">
                            <button class="btn btn-primary btn-xs">Publish</button>
                            <button class="btn btn-outline btn-xs">Edit</button>
                            <button class="btn btn-outline btn-xs danger">Delete</button>
                        </div>
                    </div>
                    <div class="content-card">
                        <div class="content-header">
                            <h4>Digital Marketing Bootcamp</h4>
                            <span class="content-status published">Published</span>
                        </div>
                        <p>Master digital marketing strategies</p>
                        <div class="content-meta">
                            <span><i class="fas fa-users"></i> 156 enrolled</span>
                            <span><i class="fas fa-clock"></i> 4 weeks</span>
                            <span><i class="fas fa-star"></i> 4.6</span>
                        </div>
                        <div class="content-actions">
                            <button class="btn btn-outline btn-xs">Edit</button>
                            <button class="btn btn-outline btn-xs">View</button>
                            <button class="btn btn-outline btn-xs danger">Archive</button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- System Health & Recent Activity -->
            <div class="admin-section">
                <div class="section-header">
                    <h2>System Health</h2>
                </div>
                <div class="system-health">
                    <div class="health-metric">
                        <div class="metric-header">
                            <h4>Server Status</h4>
                            <span class="status-indicator online"></span>
                        </div>
                        <p>All systems operational</p>
                    </div>
                    <div class="health-metric">
                        <div class="metric-header">
                            <h4>Database</h4>
                            <span class="status-indicator online"></span>
                        </div>
                        <p>Response time: 45ms</p>
                    </div>
                    <div class="health-metric">
                        <div class="metric-header">
                            <h4>Storage</h4>
                            <span class="status-indicator warning"></span>
                        </div>
                        <p>78% used (1.2TB / 1.5TB)</p>
                    </div>
                    <div class="health-metric">
                        <div class="metric-header">
                            <h4>Backup</h4>
                            <span class="status-indicator online"></span>
                        </div>
                        <p>Last backup: 2 hours ago</p>
                    </div>
                </div>
            </div>

            <div class="admin-section">
                <div class="section-header">
                    <h2>Recent Activity</h2>
                </div>
                <div class="activity-log">
                    <div class="activity-item">
                        <div class="activity-icon">
                            <i class="fas fa-user-plus"></i>
                        </div>
                        <div class="activity-content">
                            <p><strong>Sarah Mitchell</strong> registered as a new user</p>
                            <span class="activity-time">5 minutes ago</span>
                        </div>
                    </div>
                    <div class="activity-item">
                        <div class="activity-icon">
                            <i class="fas fa-graduation-cap"></i>
                        </div>
                        <div class="activity-content">
                            <p><strong>John Doe</strong> completed "CSS Grid Layout" module</p>
                            <span class="activity-time">12 minutes ago</span>
                        </div>
                    </div>
                    <div class="activity-item">
                        <div class="activity-icon">
                            <i class="fas fa-edit"></i>
                        </div>
                        <div class="activity-content">
                            <p>Admin updated course content for "Web Development"</p>
                            <span class="activity-time">1 hour ago</span>
                        </div>
                    </div>
                    <div class="activity-item">
                        <div class="activity-icon">
                            <i class="fas fa-flag"></i>
                        </div>
                        <div class="activity-content">
                            <p>New support ticket from <strong>Mike Johnson</strong></p>
                            <span class="activity-time">2 hours ago</span>
                        </div>
                    </div>
                    <div class="activity-item">
                        <div class="activity-icon">
                            <i class="fas fa-download"></i>
                        </div>
                        <div class="activity-content">
                            <p>System backup completed successfully</p>
                            <span class="activity-time">2 hours ago</span>
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

        /* Admin Header */
        .admin-header {
            background: linear-gradient(135deg, var(--teal), #1a4a5a);
            color: white;
            padding: 4rem 5%;
            position: relative;
            overflow: hidden;
        }

        .admin-header::before {
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

        .admin-actions {
            display: flex;
            gap: 1rem;
        }

        /* Admin Stats */
        .admin-stats {
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

        .stat-number {
            font-size: 1.8rem;
            font-weight: 800;
            color: var(--teal);
            margin-bottom: 0.2rem;
        }

        .stat-change {
            font-size: 0.8rem;
            font-weight: 600;
        }

        .stat-change.positive {
            color: #28a745;
        }

        .stat-change.negative {
            color: #dc3545;
        }

        /* Admin Content */
        .admin-content {
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

        .admin-section {
            background: white;
            border-radius: var(--radius);
            padding: 2rem;
            box-shadow: var(--shadow);
            margin-bottom: 2rem;
        }

        .section-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 2rem;
        }

        .section-header h2 {
            color: var(--teal);
            margin: 0;
        }

        .section-actions {
            display: flex;
            gap: 1rem;
            align-items: center;
        }

        .search-input {
            padding: 0.5rem 1rem;
            border: 2px solid #e9ecef;
            border-radius: 25px;
            font-size: 0.9rem;
            width: 200px;
        }

        .search-input:focus {
            outline: none;
            border-color: var(--teal);
        }

        .filter-select, .time-select {
            padding: 0.5rem 1rem;
            border: 2px solid #e9ecef;
            border-radius: 10px;
            font-size: 0.9rem;
            background: white;
        }

        /* Users Table */
        .users-table {
            margin-bottom: 2rem;
        }

        .table-header, .table-row {
            display: grid;
            grid-template-columns: 2fr 2fr 1fr 1fr 1fr 1.5fr;
            gap: 1rem;
            padding: 1rem;
            align-items: center;
        }

        .table-header {
            background: var(--light);
            border-radius: var(--radius);
            font-weight: 600;
            color: var(--teal);
            margin-bottom: 0.5rem;
        }

        .table-row {
            border-bottom: 1px solid #e9ecef;
            transition: var(--transition);
        }

        .table-row:hover {
            background: var(--light);
        }

        .table-row:last-child {
            border-bottom: none;
        }

        .user-info {
            display: flex;
            align-items: center;
            gap: 1rem;
        }

        .user-avatar {
            width: 40px;
            height: 40px;
            background: var(--teal);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-weight: 600;
        }

        .role-badge, .status-badge {
            padding: 0.3rem 0.8rem;
            border-radius: 15px;
            font-size: 0.8rem;
            font-weight: 600;
        }

        .role-badge.user {
            background: var(--gold);
            color: var(--black);
        }

        .role-badge.admin {
            background: var(--teal);
            color: white;
        }

        .status-badge.active {
            background: #28a745;
            color: white;
        }

        .status-badge.inactive {
            background: #6c757d;
            color: white;
        }

        .action-buttons {
            display: flex;
            gap: 0.5rem;
        }

        .btn-icon {
            width: 32px;
            height: 32px;
            border: none;
            border-radius: 50%;
            background: transparent;
            color: var(--teal);
            cursor: pointer;
            transition: var(--transition);
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .btn-icon:hover {
            background: var(--teal);
            color: white;
        }

        .btn-icon.danger:hover {
            background: #dc3545;
            color: white;
        }

        .table-pagination {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding-top: 1rem;
            border-top: 1px solid #e9ecef;
        }

        .pagination {
            display: flex;
            gap: 0.5rem;
            align-items: center;
        }

        .page-btn {
            width: 32px;
            height: 32px;
            border: 2px solid #e9ecef;
            background: white;
            border-radius: 6px;
            cursor: pointer;
            transition: var(--transition);
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 0.9rem;
        }

        .page-btn:hover, .page-btn.active {
            background: var(--teal);
            color: white;
            border-color: var(--teal);
        }

        .page-btn.disabled {
            opacity: 0.5;
            cursor: not-allowed;
        }

        /* Analytics */
        .analytics-charts {
            display: grid;
            grid-template-columns: 2fr 1fr;
            gap: 2rem;
        }

        .chart-container h4 {
            color: var(--teal);
            margin-bottom: 1rem;
        }

        .chart-placeholder {
            height: 200px;
            background: var(--light);
            border-radius: var(--radius);
            padding: 1rem;
            display: flex;
            align-items: end;
            justify-content: space-between;
            gap: 0.5rem;
        }

        .chart-bar {
            background: var(--teal);
            border-radius: 4px 4px 0 0;
            width: 100%;
            transition: height 1s ease;
        }

        .chart-labels {
            display: flex;
            justify-content: space-between;
            margin-top: 1rem;
            font-size: 0.8rem;
            color: var(--dark-gray);
        }

        .analytics-metrics {
            display: grid;
            grid-template-columns: 1fr;
            gap: 1rem;
        }

        .metric {
            background: var(--light);
            padding: 1rem;
            border-radius: var(--radius);
        }

        .metric h4 {
            color: var(--teal);
            margin-bottom: 0.5rem;
            font-size: 0.9rem;
        }

        .metric-value {
            font-size: 1.2rem;
            font-weight: 800;
            color: var(--teal);
            margin-bottom: 0.3rem;
        }

        .metric-change {
            font-size: 0.8rem;
            font-weight: 600;
        }

        /* Content Management */
        .content-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 1.5rem;
        }

        .content-card {
            background: var(--light);
            border-radius: var(--radius);
            padding: 1.5rem;
            transition: var(--transition);
        }

        .content-card:hover {
            box-shadow: var(--shadow);
            transform: translateY(-2px);
        }

        .content-header {
            display: flex;
            justify-content: space-between;
            align-items: start;
            margin-bottom: 1rem;
        }

        .content-header h4 {
            color: var(--teal);
            margin: 0;
            flex: 1;
        }

        .content-status {
            padding: 0.3rem 0.8rem;
            border-radius: 15px;
            font-size: 0.8rem;
            font-weight: 600;
        }

        .content-status.published {
            background: #28a745;
            color: white;
        }

        .content-status.draft {
            background: #ffc107;
            color: var(--black);
        }

        .content-card p {
            color: var(--dark-gray);
            margin-bottom: 1rem;
            font-size: 0.9rem;
        }

        .content-meta {
            display: flex;
            gap: 1rem;
            margin-bottom: 1rem;
            font-size: 0.8rem;
            color: var(--dark-gray);
        }

        .content-actions {
            display: flex;
            gap: 0.5rem;
        }

        /* System Health */
        .system-health {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 1rem;
        }

        .health-metric {
            background: var(--light);
            padding: 1rem;
            border-radius: var(--radius);
        }

        .metric-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 0.5rem;
        }

        .metric-header h4 {
            color: var(--teal);
            margin: 0;
        }

        .status-indicator {
            width: 12px;
            height: 12px;
            border-radius: 50%;
        }

        .status-indicator.online {
            background: #28a745;
        }

        .status-indicator.warning {
            background: #ffc107;
        }

        .health-metric p {
            color: var(--dark-gray);
            font-size: 0.9rem;
            margin: 0;
        }

        /* Activity Log */
        .activity-log {
            display: flex;
            flex-direction: column;
            gap: 1rem;
        }

        .activity-item {
            display: flex;
            align-items: flex-start;
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
            flex-shrink: 0;
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

        /* Buttons */
        .btn {
            display: inline-flex;
            align-items: center;
            gap: 0.5rem;
            padding: 0.75rem 1.5rem;
            border-radius: 25px;
            text-decoration: none;
            font-weight: 600;
            text-align: center;
            transition: var(--transition);
            border: none;
            cursor: pointer;
            font-size: 0.9rem;
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

        .btn-xs {
            padding: 0.4rem 0.8rem;
            font-size: 0.8rem;
        }

        .btn-sm {
            padding: 0.6rem 1.2rem;
            font-size: 0.85rem;
        }

        .btn.danger {
            background: #dc3545;
            color: white;
        }

        .btn.danger:hover {
            background: #c82333;
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

            .analytics-charts {
                grid-template-columns: 1fr;
            }

            .table-header, .table-row {
                grid-template-columns: 1fr;
                gap: 0.5rem;
            }

            .table-row {
                padding: 1rem 0;
            }

            .col:not(:first-child) {
                display: flex;
                justify-content: space-between;
                width: 100%;
            }

            .col:not(:first-child)::before {
                content: attr(data-label);
                font-weight: 600;
                color: var(--teal);
            }
        }

        @media (max-width: 768px) {
            .admin-header {
                padding: 3rem 5%;
            }

            .welcome-message h1 {
                font-size: 2rem;
            }

            .stats-grid {
                grid-template-columns: 1fr;
            }

            .section-actions {
                flex-direction: column;
                align-items: stretch;
            }

            .search-input {
                width: 100%;
            }

            .content-grid {
                grid-template-columns: 1fr;
            }

            .system-health {
                grid-template-columns: 1fr;
            }
        }

        @media (max-width: 576px) {
            .admin-header {
                padding: 2rem 5%;
            }

            .welcome-message h1 {
                font-size: 1.8rem;
            }

            .admin-actions {
                flex-direction: column;
                width: 100%;
            }

            .admin-actions .btn {
                justify-content: center;
            }

            .table-pagination {
                flex-direction: column;
                gap: 1rem;
                text-align: center;
            }

            .pagination {
                justify-content: center;
            }
        }
    </style>
    @endpush

    @push('scripts')
    <script>
        // Table search functionality
        const searchInput = document.querySelector('.search-input');
        const tableRows = document.querySelectorAll('.table-row');

        searchInput.addEventListener('input', function() {
            const searchTerm = this.value.toLowerCase();

            tableRows.forEach(row => {
                const text = row.textContent.toLowerCase();
                if (text.includes(searchTerm)) {
                    row.style.display = '';
                } else {
                    row.style.display = 'none';
                }
            });
        });

        // Filter functionality
        const filterSelect = document.querySelector('.filter-select');

        filterSelect.addEventListener('change', function() {
            const filterValue = this.value;

            tableRows.forEach(row => {
                const roleBadge = row.querySelector('.role-badge');
                const statusBadge = row.querySelector('.status-badge');

                let show = false;

                if (filterValue === 'all') {
                    show = true;
                } else if (filterValue === 'active' && statusBadge.classList.contains('active')) {
                    show = true;
                } else if (filterValue === 'inactive' && statusBadge.classList.contains('inactive')) {
                    show = true;
                } else if (filterValue === 'admin' && roleBadge.classList.contains('admin')) {
                    show = true;
                }

                row.style.display = show ? '' : 'none';
            });
        });

        // Animate chart bars on load
        document.addEventListener('DOMContentLoaded', function() {
            const chartBars = document.querySelectorAll('.chart-bar');
            chartBars.forEach((bar, index) => {
                setTimeout(() => {
                    bar.style.height = bar.style.height;
                }, index * 100);
            });
        });

        // Action button tooltips
        const actionButtons = document.querySelectorAll('.btn-icon');
        actionButtons.forEach(button => {
            button.addEventListener('mouseenter', function() {
                this.style.transform = 'scale(1.1)';
            });

            button.addEventListener('mouseleave', function() {
                this.style.transform = 'scale(1)';
            });
        });
    </script>
    @endpush
</x-aethryna-layout>