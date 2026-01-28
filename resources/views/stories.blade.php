@extends('layouts.aethryna')

@section('title', 'Voices of Change - Aethryna Foundation')

@section('description', 'Authentic narratives of growth, resilience, and digital transformation from the Aethryna community.')

@section('content')
<!-- Stories Immersive Hero -->
<section class="stories-hero">
    <div class="ath-container">
        <div class="hero-narrative">
            <div class="narrative-content reveal-fade-up">
                <span class="ath-badge">Real Narratives</span>
                <h1 class="ath-title">Voices of <span class="ath-gradient-text">Transformation.</span></h1>
                <p>Behind every statistic is a human journey of resilience. These are the stories of individuals who redrew their horizons with us.</p>
                <div class="hero-scroll-invite">
                    <span>Explore the Journal</span>
                    <div class="scroll-dot"></div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Story Journal -->
<main class="story-journal">
    <div class="ath-container">
        <!-- Story Entry 1 -->
        <article class="journal-entry">
            <div class="entry-visual">
                <img src="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" alt="Jamie Wilson">
                <div class="v-overlay"></div>
            </div>
            <div class="entry-story">
                <span class="entry-num">01</span>
                <span class="ath-sub">Web Development Track</span>
                <h2>Redefining the Future</h2>
                <div class="story-text">
                    <p>"I went from being excluded from school to earning £25k as a junior web developer in 18 months. Aethryna didn't just teach me code - they taught me how to believe in myself."</p>
                </div>
                <div class="story-author">
                    <strong>Jamie Wilson</strong>
                    <span>Junior Developer, TechStart</span>
                </div>
            </div>
        </article>

        <!-- Story Entry 2 -->
        <article class="journal-entry entry-reverse">
            <div class="entry-visual">
                <img src="https://images.unsplash.com/photo-1494790108755-2616b612b786?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" alt="Maria Rodriguez">
                <div class="v-overlay"></div>
            </div>
            <div class="entry-story">
                <span class="entry-num">02</span>
                <span class="ath-sub">Digital Support Pathway</span>
                <h2>Navigating New Horizons</h2>
                <div class="story-text">
                    <p>"The mentorship I received completely changed my career trajectory. My mentor helped me navigate professional landscapes that once felt like a foreign language."</p>
                </div>
                <div class="story-author">
                    <strong>Maria Rodriguez</strong>
                    <span>Software Engineer, TechCorp</span>
                </div>
            </div>
        </article>

        <!-- Story Entry 3 -->
        <article class="journal-entry">
            <div class="entry-visual">
                <img src="https://images.unsplash.com/photo-1500648767791-00dcc994a43e?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" alt="Alex Thompson">
                <div class="v-overlay"></div>
            </div>
            <div class="entry-story">
                <span class="entry-num">03</span>
                <span class="ath-sub">Digital Design Track</span>
                <h2>Art in Architecture</h2>
                <div class="story-text">
                    <p>"Starting with zero technical knowledge, I now design digital ecosystems for local businesses. Aethryna's creative community gave me the tools to carve my own path."</p>
                </div>
                <div class="story-author">
                    <strong>Alex Thompson</strong>
                    <span>Freelance Web Designer</span>
                </div>
            </div>
        </article>
    </div>
</main>

<!-- Voices Grid (Shorter Stories) -->
<section class="voices-grid-section">
    <div class="ath-container">
        <div class="section-title">
            <span class="ath-sub">Collective Growth</span>
            <h2>More Perspective</h2>
        </div>
        <div class="voices-grid">
            <div class="v-card">
                <i class="fas fa-quote-left"></i>
                <p>Aethryna gave me the technical backbone I needed to launch my freelance career. Essential for any local creative.</p>
                <div class="v-author">
                    <img src="https://images.unsplash.com/photo-1438761681033-6461ffad8d80?ixlib=rb-4.0.3&auto=format&fit=crop&w=100&q=80" alt="Sarah Johnson">
                    <div>
                        <strong>Sarah Johnson</strong>
                        <span>UI/UX Designer</span>
                    </div>
                </div>
            </div>
            <div class="v-card">
                <i class="fas fa-quote-left"></i>
                <p>The program bridge the gap between curiosity and career. I'm now leading a team of 15 in IT Support.</p>
                <div class="v-author">
                    <img src="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?ixlib=rb-4.0.3&auto=format&fit=crop&w=100&q=80" alt="Marcus Williams">
                    <div>
                        <strong>Marcus Williams</strong>
                        <span>IT Project Lead</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Stories Footer CTA -->
<section class="stories-footer-cta">
    <div class="ath-container">
        <div class="cta-card">
            <h2>Your story is waiting to be <span class="ath-gradient-text">written.</span></h2>
            <p>Ready to start your own transformation journey or empower others as a mentor?</p>
            <div class="cta-actions">
                <a href="{{ route('register') }}" class="btn btn-primary">Join the Program</a>
                <a href="{{ route('assessment.index') }}" class="btn btn-outline-white">Free Career Assessment</a>
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
    --ath-radius: 40px;
}

.ath-container {
    max-width: 1250px;
    margin: 0 auto;
    padding: 0 5%;
}

/* Stories Hero */
.stories-hero {
    height: 80vh;
    min-height: 600px;
    background: var(--ath-deep);
    display: flex;
    align-items: center;
    position: relative;
    overflow: hidden;
    color: #fff;
    margin-bottom: -100px;
}

.stories-hero::after {
    content: '';
    position: absolute;
    bottom: 0; left: 0; width: 100%; height: 150px;
    background: linear-gradient(to top, #fff, transparent);
}

.hero-narrative {
    max-width: 800px;
    z-index: 5;
}

.ath-badge {
    display: inline-block;
    padding: 10px 20px;
    background: rgba(255,255,255,0.1);
    border-radius: 100px;
    font-size: 0.9rem;
    font-weight: 800;
    margin-bottom: 30px;
    letter-spacing: 2px;
    text-transform: uppercase;
}

.stories-hero h1 {
    font-size: clamp(3rem, 8vw, 5rem);
    font-weight: 800;
    line-height: 1;
    margin-bottom: 30px;
    font-family: 'Outfit', sans-serif;
}

.stories-hero p {
    font-size: 1.4rem;
    opacity: 0.9;
    max-width: 600px;
}

.hero-scroll-invite {
    margin-top: 50px;
    display: flex;
    align-items: center;
    gap: 15px;
}

.scroll-dot {
    width: 10px; height: 10px;
    background: var(--ath-gold);
    border-radius: 50%;
    animation: bounce-y 2s infinite;
}

@keyframes bounce-y { 0%, 100% { transform: translateY(0); } 50% { transform: translateY(10px); } }

/* Story Journal Entry */
.story-journal { padding: 100px 0; background: #fff; }

.journal-entry {
    display: grid;
    grid-template-columns: 1fr 1.2fr;
    gap: 80px;
    align-items: center;
    margin-bottom: 150px;
}

.entry-reverse { grid-template-columns: 1.2fr 1fr; }
.entry-reverse .entry-visual { order: 2; }
.entry-reverse .entry-story { order: 1; text-align: right; }

.entry-visual {
    position: relative;
    border-radius: var(--ath-radius);
    overflow: hidden;
    aspect-ratio: 4/5;
}

.entry-visual img { width: 100%; height: 100%; object-fit: cover; transition: transform 0.8s; }
.entry-visual:hover img { transform: scale(1.05); }

.v-overlay {
    position: absolute;
    top: 0; left: 0; width: 100%; height: 100%;
    background: linear-gradient(to top, rgba(5, 88, 96, 0.4), transparent);
}

.entry-story { position: relative; }
.entry-num {
    position: absolute;
    top: -50px; left: 0;
    font-size: 8rem;
    font-weight: 900;
    color: rgba(3,139,137,0.05);
    line-height: 1;
    z-index: -1;
    font-family: 'Outfit', sans-serif;
}

.entry-reverse .entry-num { left: auto; right: 0; }

.entry-story h2 {
    font-size: 3rem;
    color: var(--ath-deep);
    margin: 15px 0 30px;
    font-weight: 800;
}

.story-text {
    font-size: 1.5rem;
    line-height: 1.6;
    color: var(--ath-text);
    font-style: italic;
    margin-bottom: 40px;
    font-family: 'Outfit', sans-serif;
}

.story-author strong { display: block; font-size: 1.2rem; color: var(--ath-deep); }
.story-author span { color: var(--ath-gold); font-weight: 700; text-transform: uppercase; font-size: 0.9rem; }

/* Voices Grid */
.voices-grid-section { padding: 100px 0; background: var(--ath-light); }
.voices-grid { display: grid; grid-template-columns: 1fr 1fr; gap: 40px; }

.v-card {
    background: #fff;
    padding: 50px;
    border-radius: 32px;
    box-shadow: 0 10px 40px rgba(0,0,0,0.03);
}

.v-card i { font-size: 2rem; color: var(--ath-gold); opacity: 0.5; margin-bottom: 30px; display: block; }
.v-card p { font-size: 1.2rem; line-height: 1.6; font-style: italic; margin-bottom: 30px; }

.v-author { display: flex; align-items: center; gap: 20px; }
.v-author img { width: 60px; height: 60px; border-radius: 50%; border: 2px solid var(--ath-gold); }
.v-author strong { display: block; color: var(--ath-deep); font-weight: 800; }
.v-author span { font-size: 0.8rem; color: var(--ath-muted); text-transform: uppercase; font-weight: 700; }

/* Stories Footer CTA */
.stories-footer-cta { padding: 100px 0; }
.cta-card {
    background: var(--ath-deep);
    padding: 80px;
    border-radius: var(--ath-radius);
    text-align: center;
    color: #fff;
}

.cta-card h2 { font-size: clamp(2rem, 5vw, 3.5rem); font-weight: 800; margin-bottom: 20px; }
.cta-card p { font-size: 1.2rem; margin-bottom: 40px; opacity: 0.9; }
.cta-actions { display: flex; justify-content: center; gap: 20px; }

.btn-outline-white {
    border: 2px solid #fff;
    color: #fff;
    padding: 15px 35px;
    border-radius: 100px;
    text-decoration: none;
    font-weight: 800;
    transition: var(--ath-trans);
}

.btn-outline-white:hover { background: #fff; color: var(--ath-deep); }

@media (max-width: 992px) {
    .journal-entry { grid-template-columns: 1fr; gap: 50px; }
    .entry-reverse .entry-visual { order: 1; }
    .entry-reverse .entry-story { order: 2; text-align: left; }
    .entry-reverse .entry-num { left: 0; right: auto; }
}

@media (max-width: 768px) {
    .voices-grid { grid-template-columns: 1fr; }
    .cta-card { padding: 60px 30px; }
    .cta-actions { flex-direction: column; }
}
</style>
@endpush
@endsection
