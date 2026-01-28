@extends('layouts.aethryna')

@section('title', 'Our Impact | Aethryna Foundation')

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
    --ath-radius: 32px;
}

.ath-container {
    max-width: 1250px;
    margin: 0 auto;
    padding: 0 5%;
}

/* Impact Dashboard Hero */
.impact-dashboard-hero {
    padding: 160px 0 100px;
    background: var(--ath-deep);
    color: #fff;
    position: relative;
    overflow: hidden;
}

.hero-split {
    display: grid;
    grid-template-columns: 1.2fr 0.8fr;
    gap: 60px;
    align-items: center;
}

.impact-badge {
    display: inline-flex;
    align-items: center;
    gap: 8px;
    padding: 8px 16px;
    background: rgba(255, 255, 255, 0.1);
    border-radius: 100px;
    font-size: 0.8rem;
    font-weight: 800;
    margin-bottom: 25px;
}

.hero-visual {
    position: relative;
}

.data-ring {
    width: 350px; height: 350px;
    border: 20px solid rgba(255, 255, 255, 0.05);
    border-top-color: var(--ath-gold);
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    position: relative;
    animation: spin 30s linear infinite;
}

.ring-center {
    text-align: center;
    animation: counter-spin 30s linear infinite;
}

.ring-num { font-size: 4rem; font-weight: 800; display: block; }
.ring-label { text-transform: uppercase; letter-spacing: 2px; font-size: 0.9rem; color: var(--ath-gold); }

@keyframes spin { from { transform: rotate(0deg); } to { transform: rotate(360deg); } }
@keyframes counter-spin { from { transform: rotate(0deg); } to { transform: rotate(-360deg); } }

.floating-metric {
    position: absolute;
    background: #fff;
    color: var(--ath-deep);
    padding: 20px 30px;
    border-radius: 24px;
    box-shadow: 0 20px 40px rgba(0,0,0,0.2);
    text-align: center;
    z-index: 10;
}

.fm-1 { top: 0; right: -20px; }
.fm-2 { bottom: 0; left: -20px; }
.fm-val { display: block; font-size: 1.8rem; font-weight: 800; color: var(--ath-teal); }
.fm-sub { font-size: 0.75rem; font-weight: 700; text-transform: uppercase; }

/* Sticky Nav */
.impact-nav-sticky {
    position: sticky;
    top: 70px;
    z-index: 90;
    background: rgba(255, 255, 255, 0.9);
    backdrop-filter: blur(10px);
    border-bottom: 1px solid rgba(0,0,0,0.05);
    padding: 15px 0;
}

.i-nav {
    display: flex;
    justify-content: center;
    gap: 40px;
}

.i-nav a {
    color: var(--ath-muted);
    font-weight: 700;
    text-decoration: none;
    font-size: 0.95rem;
    transition: var(--ath-trans);
}

.i-nav a:hover, .i-nav a.active { color: var(--ath-teal); }

/* Sections */
.impact-board-section { padding: 120px 0; border-bottom: 1px solid rgba(0,0,0,0.03); }

.board-grid {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 100px;
    align-items: center;
}

.impact-checklist { display: grid; gap: 25px; margin-top: 40px; }
.i-check { display: flex; gap: 20px; }
.i-check i { color: var(--ath-teal); font-size: 1.5rem; }
.i-check strong { display: block; color: var(--ath-deep); font-size: 1.1rem; margin-bottom: 4px; }
.i-check span { color: var(--ath-muted); }

.board-cards { display: grid; grid-template-columns: 1fr 1fr; gap: 20px; }
.metric-widget { padding: 40px; border-radius: 32px; color: #fff; text-align: center; }
.w-teal { background: var(--ath-teal); }
.w-gold { background: var(--ath-gold); }
.m-val { display: block; font-size: 3rem; font-weight: 800; margin: 15px 0; }

/* Stats Journal */
.stats-journal { background: var(--ath-light); }
.journal-header { text-align: center; margin-bottom: 60px; }
.journal-header h2 { font-size: clamp(2rem, 5vw, 3rem); color: var(--ath-deep); margin-bottom: 15px; font-weight: 800; font-family: 'Outfit', sans-serif; }

.stats-grid-dashboard { display: grid; grid-template-columns: 1.5fr 1fr; gap: 40px; }
.main-stat-journal { background: #fff; padding: 50px; border-radius: 32px; box-shadow: 0 20px 60px rgba(0,0,0,0.03); }
.growth-list { display: grid; gap: 30px; margin-top: 40px; }
.g-label { display: flex; justify-content: space-between; margin-bottom: 12px; font-weight: 800; color: var(--ath-deep); }
.g-bar { height: 12px; background: rgba(0,0,0,0.05); border-radius: 100px; overflow: hidden; }
.g-fill { height: 0%; background: var(--ath-teal); border-radius: 100px; transition: width 1.5s ease-out; }

.economic-insights { display: grid; gap: 20px; }
.e-card { background: var(--ath-deep); color: #fff; padding: 40px; border-radius: 32px; text-align: center; transition: var(--ath-trans); }
.e-card:hover { transform: translateY(-5px); background: var(--ath-teal); }
.e-icon { font-size: 2rem; color: var(--ath-gold); margin-bottom: 15px; }
.e-card h4 { font-size: 2.5rem; font-weight: 800; margin-bottom: 10px; }

/* Track Analysis */
.analysis-header { text-align: left; margin-bottom: 50px; }
.analysis-header h2 { font-size: clamp(2rem, 5vw, 2.5rem); color: var(--ath-deep); font-weight: 800; font-family: 'Outfit', sans-serif; }
.analysis-grid { display: grid; grid-template-columns: repeat(3, 1fr); gap: 30px; }
.analysis-card { background: #fff; padding: 40px; border-radius: 32px; border: 1px solid rgba(0,0,0,0.05); transition: var(--ath-trans); }
.analysis-card:hover { transform: translateY(-10px); box-shadow: 0 40px 80px rgba(0,0,0,0.1); border-color: var(--ath-teal); }
.a-track-head { display: flex; align-items: center; gap: 15px; margin-bottom: 30px; }
.a-track-head i { width: 50px; height: 50px; background: rgba(3, 139, 137, 0.1); border-radius: 12px; display: flex; align-items: center; justify-content: center; color: var(--ath-teal); font-size: 1.2rem; }
.a-track-head h3 { color: var(--ath-deep); font-weight: 800; margin: 0; }
.a-metric { display: flex; justify-content: space-between; padding: 15px 0; border-top: 1px solid rgba(0,0,0,0.05); }
.a-label { color: var(--ath-muted); font-weight: 600; }
.a-val { color: var(--ath-deep); font-weight: 800; }
.a-track-footer { margin-top: 20px; font-size: 0.85rem; font-weight: 700; color: var(--ath-gold); text-transform: uppercase; }

/* Regional Split */
.regional-split { display: grid; grid-template-columns: 1fr 1fr; gap: 80px; align-items: center; }
.r-hub { display: inline-block; padding: 12px 24px; background: #fff; border: 1px solid rgba(0,0,0,0.05); border-radius: 100px; margin: 0 10px 10px 0; font-weight: 600; color: var(--ath-deep); }
.r-stats { background: var(--ath-gold); padding: 80px; border-radius: 40px; color: #fff; text-align: center; }
.r-stat-big span { display: block; font-size: 1.1rem; text-transform: uppercase; letter-spacing: 2px; }
.r-stat-big strong { font-size: clamp(3rem, 8vw, 4.5rem); font-weight: 800; }

/* Board CTA */
.cta-impact-board { padding: 100px 0; }
.cta-board-inner { background: var(--ath-deep); padding: 80px; border-radius: 40px; text-align: center; color: #fff; box-shadow: 0 40px 100px rgba(5, 88, 96, 0.15); }
.cta-board-inner h2 { font-size: clamp(2rem, 5vw, 3.5rem); margin-bottom: 20px; font-weight: 800; font-family: 'Outfit', sans-serif; }
.cta-btns { display: flex; justify-content: center; gap: 20px; margin-top: 40px; }
.btn-outline-white { border: 2px solid #fff; color: #fff; padding: 15px 35px; border-radius: 100px; text-decoration: none; font-weight: 800; transition: var(--ath-trans); }
.btn-outline-white:hover { background: #fff; color: var(--ath-deep); }

@media (max-width: 992px) {
    .hero-split, .board-grid, .stats-grid-dashboard, .regional-split { grid-template-columns: 1fr; gap: 60px; }
    .analysis-grid { grid-template-columns: 1fr 1fr; }
    .hero-visual { display: flex; justify-content: center; margin-top: 40px; }
}

@media (max-width: 768px) {
    .impact-nav-sticky { top: 70px; }
    .i-nav { gap: 20px; overflow-x: auto; justify-content: flex-start; padding-left: 5%; }
    .analysis-grid { grid-template-columns: 1fr; }
    .board-cards { grid-template-columns: 1fr; }
    .cta-board-inner { padding: 60px 30px; }
    .cta-btns { flex-direction: column; }
}
</style>
@endpush

@section('content')
<!-- Impact Dashboard Hero -->
<section class="impact-dashboard-hero">
    <div class="ath-container">
        <div class="hero-split">
            <div class="hero-primary">
                <div class="impact-badge"><i class="fas fa-chart-line"></i> Annual Impact Report</div>
                <h1 class="ath-title">Numbers that tell a <span class="ath-gradient-text">Story.</span></h1>
                <p>Our data mirrors the progress of our community. We track every milestone to ensure we're delivering more than just education—we're delivering careers.</p>
                <div class="hero-actions">
                    <a href="#success-metrics" class="btn btn-primary">View Full Metrics</a>
                    <a href="{{ route('stories') }}" class="btn btn-outline">Read Human Stories</a>
                </div>
            </div>
            <div class="hero-visual">
                <div class="data-ring">
                    <div class="ring-center">
                        <span class="ring-num">95%</span>
                        <span class="ring-label">Placement</span>
                    </div>
                </div>
                <div class="floating-metric fm-1">
                    <span class="fm-val">500+</span>
                    <span class="fm-sub">Graduates</span>
                </div>
                <div class="floating-metric fm-2">
                    <span class="fm-val">£30k</span>
                    <span class="fm-sub">Avg Salary</span>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Impact Dashboard Navigation -->
<div class="impact-nav-sticky">
    <div class="ath-container">
        <nav class="i-nav">
            <a href="#success-metrics" class="active">Success Metrics</a>
            <a href="#track-data">Track Analysis</a>
            <a href="#regional">Regional Map</a>
            <a href="#overview">Our Foundation</a>
        </nav>
    </div>
</div>

<!-- Detailed Statistics (Journalistic Style) -->
<section id="success-metrics" class="impact-board-section stats-journal">
    <div class="ath-container">
        <div class="journal-header">
            <h2>Program Performance <span class="ath-gradient-text">Insight</span></h2>
            <p>A statistical breakdown of how our methodology translates to market-ready excellence.</p>
        </div>
        <div class="stats-grid-dashboard">
            <div class="main-stat-journal">
                <h3>Completion & Market Readiness</h3>
                <div class="growth-list">
                    <div class="g-item">
                        <div class="g-label">
                            <span>Completion Rate</span>
                            <strong>92%</strong>
                        </div>
                        <div class="g-bar"><div class="g-fill" data-width="92%"></div></div>
                    </div>
                    <div class="g-item">
                        <div class="g-label">
                            <span>Job Placement</span>
                            <strong>95%</strong>
                        </div>
                        <div class="g-bar"><div class="g-fill" data-width="95%"></div></div>
                    </div>
                    <div class="g-item">
                        <div class="g-label">
                            <span>Career Advancement</span>
                            <strong>78%</strong>
                        </div>
                        <div class="g-bar"><div class="g-fill" data-width="78%"></div></div>
                    </div>
                </div>
            </div>
            <div class="economic-insights">
                <div class="e-card">
                    <div class="e-icon"><i class="fas fa-chart-line"></i></div>
                    <h4>£12.5M</h4>
                    <p>Total lifetime earnings generated for our graduates.</p>
                </div>
                <div class="e-card">
                    <div class="e-icon"><i class="fas fa-building-columns"></i></div>
                    <h4>£8.5K</h4>
                    <p>Average annual tax contribution per individual.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Track Analysis (Alternate Grid) -->
<section id="track-data" class="impact-board-section track-analysis">
    <div class="ath-container">
        <div class="analysis-header">
            <span class="ath-sub">Track Record</span>
            <h2>Data by Specialization</h2>
        </div>
        <div class="analysis-grid">
            <!-- Web Dev -->
            <div class="analysis-card">
                <div class="a-track-head">
                    <i class="fas fa-code"></i>
                    <h3>Web Development</h3>
                </div>
                <div class="a-track-body">
                    <div class="a-metric">
                        <span class="a-label">Placement</span>
                        <span class="a-val">96%</span>
                    </div>
                    <div class="a-metric">
                        <span class="a-label">Avg Salary</span>
                        <span class="a-val">£28K</span>
                    </div>
                </div>
                <div class="a-track-footer">
                    <span>Top Hire: Frontend Developer</span>
                </div>
            </div>
            <!-- Design -->
            <div class="analysis-card">
                <div class="a-track-head">
                    <i class="fas fa-palette"></i>
                    <h3>Digital Design</h3>
                </div>
                <div class="a-track-body">
                    <div class="a-metric">
                        <span class="a-label">Placement</span>
                        <span class="a-val">94%</span>
                    </div>
                    <div class="a-metric">
                        <span class="a-label">Avg Salary</span>
                        <span class="a-val">£26K</span>
                    </div>
                </div>
                <div class="a-track-footer">
                    <span>Top Hire: UI/UX Designer</span>
                </div>
            </div>
            <!-- IT -->
            <div class="analysis-card">
                <div class="a-track-head">
                    <i class="fas fa-tools"></i>
                    <h3>IT Support</h3>
                </div>
                <div class="a-track-body">
                    <div class="a-metric">
                        <span class="a-label">Placement</span>
                        <span class="a-val">98%</span>
                    </div>
                    <div class="a-metric">
                        <span class="a-label">Avg Salary</span>
                        <span class="a-val">£24K</span>
                    </div>
                </div>
                <div class="a-track-footer">
                    <span>Top Hire: Security Analyst</span>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Regional Focus -->
<section id="regional" class="impact-board-section regional-focus">
    <div class="ath-container">
            <div class="regional-split">
            <div class="r-text">
                <span class="ath-sub">Northwest Presence</span>
                <h2>Geographic Impact</h2>
                <p>Concentrating our efforts in regions with high potential but historically limited access to digital career pipelines.</p>
                <div class="r-hubs">
                    <div class="r-hub"><strong>Liverpool</strong> Hub</div>
                    <div class="r-hub"><strong>Wirral</strong> Network</div>
                    <div class="r-hub"><strong>Cheshire</strong> Outreach</div>
                </div>
            </div>
            <div class="r-stats">
                <div class="r-stat-big">
                    <span>Regional Influence</span>
                    <strong>3 Counties</strong>
                </div>
            </div>
            </div>
    </div>
</section>

<!-- Overview Section (Split Layout) -->
<section id="overview" class="impact-board-section">
    <div class="ath-container">
        <div class="board-grid">
            <div class="board-text">
                <span class="ath-sub">Outcome Driven</span>
                <h2>The Foundation of Growth</h2>
                <p>Since our founding, we've transitioned from a vision to a precision-engineered career accelerator. Every youth served represents a strategic investment in the digital economy of the Northwest.</p>
                <div class="impact-checklist">
                    <div class="i-check">
                        <i class="fas fa-check-circle"></i>
                        <div>
                            <strong>Skill Specialization</strong>
                            <span>Tailored paths for Web, Design, and Support.</span>
                        </div>
                    </div>
                    <div class="i-check">
                        <i class="fas fa-check-circle"></i>
                        <div>
                            <strong>Economic Mobility</strong>
                            <span>Closing the wealth gap through tech literacy.</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="board-cards">
                <div class="metric-widget w-teal">
                    <i class="fas fa-briefcase"></i>
                    <span class="m-val">95%</span>
                    <p>Job placement within 6 months of graduation.</p>
                </div>
                <div class="metric-widget w-gold">
                    <i class="fas fa-users"></i>
                    <span class="m-val">£12.5M</span>
                    <p>Total lifetime earnings increase for graduates.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="cta-impact-board">
    <div class="ath-container">
        <div class="cta-board-inner">
            <h2>Join a movement built on <span class="ath-gradient-text">Proven Results.</span></h2>
            <p>Support our mission or start your journey—be part of the data that defines the next decade.</p>
            <div class="cta-btns">
                <a href="{{ route('register') }}" class="btn btn-primary">Start Transformation</a>
                <a href="{{ route('about') }}" class="btn btn-outline-white">Our Story</a>
            </div>
        </div>
    </div>
</section>

@push('scripts')
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const fills = document.querySelectorAll('.g-fill');
        
        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    const fill = entry.target;
                    const width = fill.getAttribute('data-width');
                    fill.style.width = width;
                }
            });
        }, { threshold: 0.5 });

        fills.forEach(fill => observer.observe(fill));
    });
</script>
@endpush

@endsection
