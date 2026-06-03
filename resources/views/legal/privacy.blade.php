@extends('layouts.aethryna')

@section('title', 'SkillsCo-op | Privacy Policy')
@section('meta_description', 'SkillsCo-op privacy policy. How Aethryna Digital Skills Co-op CIC collects, uses and protects your personal data under UK GDPR.')
@section('og_title', 'Privacy Policy | SkillsCo-op')

@section('content')


    <section class="legal-hero">
        <div class="legal-container">
            <nav class="legal-breadcrumb"><a href="/">Home</a><span>/</span><a href="#">Legal</a><span>/</span><span class="current">Privacy Policy</span></nav>
            <h1>Privacy Policy</h1>
            <p class="legal-subtitle">How we collect, use, and protect your personal data. Operated under UK GDPR and the Data Protection Act 2018.</p>
            <div class="legal-meta">
                <span><i class="fas fa-calendar"></i> Last reviewed: June 2026</span>
                <span><i class="fas fa-tag"></i> Version 1.1</span>
                <span><i class="fas fa-building"></i> Aethryna Digital Skills Co-op CIC</span>
            </div>
        </div>
    </section>


    <style>
        :root {
            --teal: #038b89;
            --deep: #055860;
            --gold: #ee9d1d;
            --text: #404952;
            --muted: #6b7480;
            --bg-light: #f8fafb;
            --bg-teal: #eaf5f5;
            --border: #d4e8e8;
        }
        .legal-hero {
            background: linear-gradient(135deg, var(--deep) 0%, var(--teal) 100%);
            padding: 80px 0 60px;
            color: #fff;
        }
        .legal-container { max-width: 860px; margin: 0 auto; padding: 0 24px; }
        .legal-breadcrumb { display: flex; align-items: center; gap: 8px; font-size: 0.85rem; color: rgba(255,255,255,0.7); margin-bottom: 24px; flex-wrap: wrap; }
        .legal-breadcrumb a { color: rgba(255,255,255,0.7); text-decoration: none; }
        .legal-breadcrumb a:hover { color: var(--gold); }
        .legal-breadcrumb span { color: rgba(255,255,255,0.5); }
        .legal-breadcrumb .current { color: #fff; font-weight: 600; }
        .legal-hero h1 { font-size: 2.5rem; font-weight: 800; margin: 0 0 12px; color: #fff; }
        .legal-subtitle { font-size: 1.05rem; color: rgba(255,255,255,0.85); margin: 0 0 24px; }
        .legal-meta { display: flex; flex-wrap: wrap; gap: 20px; }
        .legal-meta span { font-size: 0.85rem; color: rgba(255,255,255,0.7); display: flex; align-items: center; gap: 6px; }
        .legal-section { padding: 52px 0 0; }
        .legal-section:last-of-type { padding-bottom: 80px; }
        .legal-badge { display: inline-block; background: var(--bg-teal); color: var(--deep); font-size: 0.75rem; font-weight: 700; letter-spacing: 0.08em; text-transform: uppercase; padding: 4px 12px; border-radius: 20px; margin-bottom: 12px; }
        .legal-section h2 { font-size: 1.5rem; font-weight: 700; color: var(--deep); margin: 0 0 16px; padding-bottom: 10px; border-bottom: 2px solid var(--border); }
        .legal-section h3 { font-size: 1.1rem; font-weight: 700; color: var(--teal); margin: 24px 0 10px; }
        .legal-section p { color: var(--text); line-height: 1.75; margin: 0 0 14px; }
        .legal-section ul, .legal-section ol { color: var(--text); line-height: 1.75; padding-left: 24px; margin: 0 0 14px; }
        .legal-section li { margin-bottom: 6px; }
        .legal-table-wrap { overflow-x: auto; margin: 16px 0 24px; border-radius: 8px; border: 1px solid var(--border); }
        .legal-table { width: 100%; border-collapse: collapse; font-size: 0.9rem; }
        .legal-table th { background: var(--deep); color: #fff; text-align: left; padding: 10px 14px; font-weight: 600; }
        .legal-table td { padding: 9px 14px; border-bottom: 1px solid var(--border); color: var(--text); vertical-align: top; }
        .legal-table tr:last-child td { border-bottom: none; }
        .legal-table tr:nth-child(even) td { background: var(--bg-light); }
        .legal-info-box { background: var(--bg-teal); border: 1px solid var(--border); border-radius: 8px; padding: 20px 24px; margin: 16px 0 24px; }
        .legal-info-row { display: flex; gap: 16px; padding: 6px 0; border-bottom: 1px solid var(--border); font-size: 0.9rem; }
        .legal-info-row:last-child { border-bottom: none; }
        .legal-info-label { font-weight: 700; color: var(--deep); min-width: 160px; }
        .legal-info-value { color: var(--text); }
        .legal-alert { background: #fff8e6; border-left: 4px solid var(--gold); border-radius: 0 6px 6px 0; padding: 14px 18px; margin: 16px 0; font-size: 0.9rem; color: var(--text); }
        .legal-cta { background: linear-gradient(135deg, var(--deep) 0%, var(--teal) 100%); color: #fff; padding: 48px 24px; text-align: center; margin-top: 60px; }
        .legal-cta h2 { color: #fff; font-size: 1.6rem; margin: 0 0 10px; }
        .legal-cta p { color: rgba(255,255,255,0.85); margin: 0 0 24px; }
        .legal-cta a { background: var(--gold); color: var(--deep); font-weight: 700; padding: 12px 28px; border-radius: 50px; text-decoration: none; display: inline-block; }
        .legal-nav { background: var(--bg-teal); border: 1px solid var(--border); border-radius: 8px; padding: 20px 24px; margin-bottom: 40px; }
        .legal-nav p { font-weight: 700; color: var(--deep); margin: 0 0 10px; font-size: 0.9rem; }
        .legal-nav ul { margin: 0; padding-left: 20px; }
        .legal-nav li { margin-bottom: 4px; }
        .legal-nav a { color: var(--teal); text-decoration: none; font-size: 0.9rem; }
        .legal-nav a:hover { color: var(--deep); text-decoration: underline; }
        @media (max-width: 600px) {
            .legal-hero h1 { font-size: 1.8rem; }
            .legal-info-row { flex-direction: column; gap: 2px; }
            .legal-info-label { min-width: unset; }
        }
    </style>

    <div style="max-width: 860px; margin: 0 auto; padding: 0 24px;">

        {-- Table of contents --}
        <div class="legal-nav" style="margin-top: 40px;">
            <p>Contents</p>
            <ul><li><a href="#who-we-are">1. Who We Are</a></li><li><a href="#what-we-collect">2. What Personal Data We Collect</a></li><li><a href="#lawful-basis">3. Lawful Basis for Processing</a></li><li><a href="#third-parties">4. Who We Share Your Data With</a></li><li><a href="#retention">5. How Long We Keep Your Data</a></li><li><a href="#your-rights">6. Your Rights</a></li><li><a href="#cookies">7. Cookies</a></li><li><a href="#children">8. Children and Young People</a></li><li><a href="#changes">9. Changes</a></li></ul>
        </div>


    <section class="legal-section" id="who-we-are"><div class="legal-container">
        <span class="legal-badge">Introduction</span><h2>1. Who We Are</h2>
        <p>SkillsCo-op is the public-facing brand of <strong>Aethryna Digital Skills Co-op CIC</strong>, a Community Interest Company registered in England and Wales. We provide free, funded digital skills programmes, career assessments, panel sessions, and mentoring to people facing barriers to employment, including NEET young people, justice-involved individuals, migrants, refugees, and career changers.</p>
        <p>For data protection purposes, Aethryna Digital Skills Co-op CIC is the <strong>data controller</strong> for all personal data collected through skillscoop.org.</p>
        <div class="legal-info-box">
            <div class="legal-info-row"><span class="legal-info-label">Data controller</span><span class="legal-info-value">Aethryna Digital Skills Co-op CIC (trading as SkillsCo-op)</span></div>
            <div class="legal-info-row"><span class="legal-info-label">Company number</span><span class="legal-info-value">[CIC company number]</span></div>
            <div class="legal-info-row"><span class="legal-info-label">Registered address</span><span class="legal-info-value">[Registered address], England</span></div>
            <div class="legal-info-row"><span class="legal-info-label">Contact</span><span class="legal-info-value">hello@skillscoop.org</span></div>
            <div class="legal-info-row"><span class="legal-info-label">Applicable law</span><span class="legal-info-value">UK GDPR and the Data Protection Act 2018</span></div>
        </div>
    </div></section>

    <section class="legal-section" id="what-we-collect"><div class="legal-container">
        <span class="legal-badge">Data We Collect</span><h2>2. What Personal Data We Collect</h2>
        <p>We collect only the data we need to deliver and improve our services.</p>
        <div class="legal-table-wrap"><table class="legal-table">
            <thead><tr><th>Category</th><th>What is collected</th><th>Why we collect it</th></tr></thead>
            <tbody>
                <tr><td><strong>Account registration</strong></td><td>Name, email address, hashed password, role</td><td>To create and manage your account</td></tr>
                <tr><td><strong>Session registration</strong></td><td>Name, email, interest type, referral source</td><td>To confirm your place and add you to our mailing list with your consent</td></tr>
                <tr><td><strong>Newsletter sign-up</strong></td><td>Email address</td><td>To send programme updates and panel announcements</td></tr>
                <tr><td><strong>Career assessment</strong></td><td>Your assessment responses, linked to your account</td><td>To recommend the most suitable learning track for your goals</td></tr>
                <tr><td><strong>Mentoring records</strong></td><td>Session date, duration, topics, action items, mentor notes</td><td>To track progress and provide consistent support (internal use only)</td></tr>
                <tr><td><strong>Technical data</strong></td><td>Session tokens, password reset tokens, cache data</td><td>To keep your account secure and the site functioning</td></tr>
            </tbody>
        </table></div>
    </div></section>

    <section class="legal-section" id="lawful-basis"><div class="legal-container">
        <span class="legal-badge">Legal Grounds</span><h2>3. Our Lawful Basis for Processing</h2>
        <div class="legal-table-wrap"><table class="legal-table">
            <thead><tr><th>Processing activity</th><th>Lawful basis (UK GDPR Article 6)</th></tr></thead>
            <tbody>
                <tr><td>Creating and managing your account</td><td>Contract (6(1)(b))</td></tr>
                <tr><td>Sending verification and password reset emails</td><td>Contract (6(1)(b))</td></tr>
                <tr><td>Adding you to the mailing list</td><td>Consent (6(1)(a))</td></tr>
                <tr><td>Career assessment and pathway results</td><td>Contract (6(1)(b))</td></tr>
                <tr><td>Mentoring session notes</td><td>Legitimate interests (6(1)(f))</td></tr>
                <tr><td>Security and fraud prevention</td><td>Legitimate interests (6(1)(f))</td></tr>
            </tbody>
        </table></div>
    </div></section>

    <section class="legal-section" id="third-parties"><div class="legal-container">
        <span class="legal-badge">Third Parties</span><h2>4. Who We Share Your Data With</h2>
        <p>We do not sell, rent, or trade personal data. We share data only with the service providers listed below.</p>
        <div class="legal-table-wrap"><table class="legal-table">
            <thead><tr><th>Provider</th><th>Data shared</th><th>Purpose</th></tr></thead>
            <tbody>
                <tr><td><strong>EmailOctopus</strong> (Sugarbox Ltd, UK)</td><td>Email address, first name where provided</td><td>Sending newsletters and panel announcements. Contacts are tagged by interest type.</td></tr>
                <tr><td><strong>Resend</strong> (Resend Inc., USA)</td><td>Email address</td><td>Sending transactional system emails: verification, password reset, welcome. Covered by Standard Contractual Clauses.</td></tr>
            </tbody>
        </table></div>
    </div></section>

    <section class="legal-section" id="retention"><div class="legal-container">
        <span class="legal-badge">Retention</span><h2>5. How Long We Keep Your Data</h2>
        <div class="legal-table-wrap"><table class="legal-table">
            <thead><tr><th>Data type</th><th>Retention period</th></tr></thead>
            <tbody>
                <tr><td>Account data (name, email, role)</td><td>Duration of account plus 12 months after deletion request</td></tr>
                <tr><td>Career assessment responses and results</td><td>Duration of account; deleted when account is deleted</td></tr>
                <tr><td>Session registration records</td><td>3 years from the date of the session</td></tr>
                <tr><td>Newsletter email address</td><td>Until you unsubscribe or withdraw consent</td></tr>
                <tr><td>Mentoring session notes</td><td>Duration of mentoring relationship plus 2 years</td></tr>
                <tr><td>Password reset tokens</td><td>1 hour (automatically deleted)</td></tr>
                <tr><td>Server and security logs</td><td>90 days</td></tr>
            </tbody>
        </table></div>
    </div></section>

    <section class="legal-section" id="your-rights"><div class="legal-container">
        <span class="legal-badge">Your Rights</span><h2>6. Your Rights Under UK GDPR</h2>
        <p>You have the right to access, correct, erase, restrict, or port your personal data, and to object to processing. To exercise any right, email <strong>hello@skillscoop.org</strong>. We will respond within one calendar month.</p>
        <p>Every marketing email includes an unsubscribe link. You can also withdraw consent at any time by contacting us.</p>
        <div class="legal-alert">If you are not satisfied with how we handle your data, you have the right to complain to the <strong>Information Commissioner's Office (ICO)</strong> at <strong>ico.org.uk</strong> or on <strong>0303 123 1113</strong>.</div>
    </div></section>

    <section class="legal-section" id="cookies"><div class="legal-container">
        <span class="legal-badge">Cookies</span><h2>7. Cookies</h2>
        <p>We use only strictly necessary cookies (session and CSRF protection) and one optional functional cookie (remember me). We do not use analytics, tracking, or advertising cookies. Full details are in our <a href="{{ route('cookies') }}">Cookie Policy</a>.</p>
    </div></section>

    <section class="legal-section" id="children"><div class="legal-container">
        <span class="legal-badge">Young People</span><h2>8. Children and Young People</h2>
        <p>Our programmes are designed for people aged 16 and over. We do not knowingly collect personal data from children under 13 without verifiable parental consent. Where we deliver programmes to young people aged 13 to 17, we apply enhanced data protection measures consistent with our Safeguarding and Learner Wellbeing Policy.</p>
    </div></section>

    <section class="legal-section" id="changes"><div class="legal-container">
        <span class="legal-badge">Updates</span><h2>9. Changes to This Policy</h2>
        <p>We review this policy at least annually. For significant changes, we will notify registered users by email at least 14 days before the change takes effect. The version number and effective date above will be updated accordingly.</p>
    </div></section>

    </div>

    {-- CTA --}
    <div class="legal-cta">
        <h2>Questions about your data?</h2>
        <p>Contact us at <strong>hello@skillscoop.org</strong> and we will respond within 10 working days.</p>
        <a href="mailto:hello@skillscoop.org">Contact Us</a>
    </div>

@endsection