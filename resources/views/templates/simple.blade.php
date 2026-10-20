
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>{{ $portfolio->name }} | Portfolio</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;600;700&family=Manrope:wght@400;500;600;700;800&display=swap" rel="stylesheet">

    <link rel="stylesheet"
          href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">

    <style>
        :root {
            --background: #f7f7fb;
            --white: #ffffff;
            --text: #252331;
            --muted: #777486;
            --accent: #7565d9;
            --accent-light: #f0edff;
            --border: #e9e7f1;
        }

        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        html {
            scroll-behavior: smooth;
        }

        body {
            font-family: 'DM Sans', sans-serif;
            background: var(--background);
            color: var(--text);
            line-height: 1.7;
        }

        a {
            color: inherit;
            text-decoration: none;
        }

        .topbar {
            background: rgba(255, 255, 255, 0.95);
            border-bottom: 1px solid var(--border);
        }

        .nav-inner {
            max-width: 1050px;
            margin: auto;
            padding: 17px 25px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            gap: 15px;
        }

        .brand {
            font-family: 'Manrope', sans-serif;
            font-weight: 800;
            font-size: 23px;
            letter-spacing: -1px;
        }

        .brand i {
            color: var(--accent);
            margin-right: 5px;
        }

        .brand span {
            color: var(--accent);
        }

        .nav-back {
            display: inline-flex;
            align-items: center;
            gap: 9px;
            padding: 9px 14px;
            border: 1px solid var(--border);
            border-radius: 9px;
            color: var(--text);
            font-size: 12px;
            font-weight: 700;
            transition: 0.2s;
        }

        .nav-back:hover {
            color: var(--accent);
            border-color: var(--accent);
            background: var(--accent-light);
        }

        .portfolio {
            max-width: 900px;
            margin: 38px auto;
            padding: 0 22px;
        }

        /* PROFILE INTRODUCTION */

        .hero {
            position: relative;
            overflow: hidden;
            padding: 48px 35px;
            background: var(--white);
            border: 1px solid var(--border);
            border-radius: 20px;
            text-align: center;
            box-shadow: 0 8px 30px rgba(42, 34, 83, 0.04);
        }

        .hero::before {
            content: "";
            position: absolute;
            width: 220px;
            height: 220px;
            border-radius: 50%;
            background: #f0edff;
            top: -145px;
            right: -75px;
        }

        .hero::after {
            content: "";
            position: absolute;
            width: 150px;
            height: 150px;
            border-radius: 50%;
            background: #f6f3ff;
            bottom: -105px;
            left: -65px;
        }

        .profile-image {
            position: relative;
            z-index: 1;
            width: 132px;
            height: 132px;
            margin: 0 auto 19px;
            border-radius: 50%;
            object-fit: cover;
            border: 5px solid var(--white);
            outline: 2px solid #ded7ff;
            box-shadow: 0 8px 24px rgba(60, 47, 120, 0.12);
        }

        .profile-placeholder {
            position: relative;
            z-index: 1;
            width: 132px;
            height: 132px;
            margin: 0 auto 19px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            background: var(--accent-light);
            border: 2px solid #ded7ff;
            color: var(--accent);
            font-size: 43px;
        }

        .hero-label {
            display: inline-flex;
            align-items: center;
            gap: 7px;
            padding: 6px 12px;
            margin-bottom: 13px;
            background: var(--accent-light);
            color: var(--accent);
            border-radius: 30px;
            font-size: 10px;
            font-weight: 800;
            letter-spacing: 1.3px;
            text-transform: uppercase;
        }

        .hero h1 {
            position: relative;
            z-index: 1;
            font-family: 'Manrope', sans-serif;
            font-size: clamp(29px, 5vw, 42px);
            line-height: 1.25;
            letter-spacing: -1.5px;
            overflow-wrap: anywhere;
            margin-bottom: 8px;
        }

        .hero h2 {
            position: relative;
            z-index: 1;
            color: var(--accent);
            font-size: 16px;
            font-weight: 600;
            overflow-wrap: anywhere;
        }

        .hero-contact {
            position: relative;
            z-index: 1;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-wrap: wrap;
            gap: 10px;
            margin-top: 21px;
        }

        .hero-contact a,
        .hero-contact span {
            display: inline-flex;
            align-items: center;
            gap: 7px;
            padding: 7px 11px;
            background: #faf9ff;
            border: 1px solid var(--border);
            border-radius: 8px;
            color: var(--muted);
            font-size: 11px;
            overflow-wrap: anywhere;
        }

        .hero-contact i {
            color: var(--accent);
        }

        /* PORTFOLIO SECTIONS */

        .section {
            margin-top: 20px;
            padding: 28px 30px;
            background: var(--white);
            border: 1px solid var(--border);
            border-radius: 16px;
            box-shadow: 0 5px 20px rgba(42, 34, 83, 0.025);
        }

        .section-heading {
            display: flex;
            align-items: center;
            gap: 13px;
            margin-bottom: 19px;
        }

        .section-icon {
            width: 43px;
            height: 43px;
            flex-shrink: 0;
            display: flex;
            align-items: center;
            justify-content: center;
            background: var(--accent-light);
            color: var(--accent);
            border-radius: 12px;
            font-size: 16px;
        }

        .section-heading h3 {
            font-family: 'Manrope', sans-serif;
            font-size: 16px;
            font-weight: 800;
        }

        .section-heading p {
            color: var(--muted);
            font-size: 11px;
            margin-top: 1px;
        }

        .section-content {
            color: #555263;
            font-size: 13px;
            line-height: 1.9;
            overflow-wrap: anywhere;
        }

        .empty-content {
            color: #9995a6;
            font-size: 12px;
            font-style: italic;
        }

        .section-content a {
            color: var(--accent);
            text-decoration: none;
        }

        .section-content a:hover {
            text-decoration: underline;
        }

        /* SKILLS */

        .skills-content {
            display: flex;
            flex-wrap: wrap;
            gap: 9px;
        }

        .skill-item {
            display: inline-flex;
            align-items: center;
            gap: 7px;
            padding: 7px 12px;
            border: 1px solid #e5e0ff;
            background: #f7f5ff;
            color: #5d50b5;
            border-radius: 8px;
            font-size: 12px;
            overflow-wrap: anywhere;
        }

        .skill-item i {
            font-size: 10px;
        }

        /* CONTACT */

        .contact-list {
            display: grid;
            grid-template-columns: repeat(2, minmax(0, 1fr));
            gap: 12px;
        }

        .contact-item {
            min-width: 0;
            display: flex;
            align-items: flex-start;
            gap: 12px;
            padding: 14px;
            border: 1px solid var(--border);
            border-radius: 11px;
            background: #fdfcff;
        }

        .contact-icon {
            width: 35px;
            height: 35px;
            flex-shrink: 0;
            display: flex;
            align-items: center;
            justify-content: center;
            border-radius: 9px;
            background: var(--accent-light);
            color: var(--accent);
        }

        .contact-item > div {
            min-width: 0;
        }

        .contact-label {
            display: block;
            color: var(--muted);
            font-size: 10px;
            margin-bottom: 3px;
        }

        .contact-value {
            display: block;
            color: var(--text);
            font-size: 12px;
            font-weight: 600;
            overflow-wrap: anywhere;
        }

        .contact-value a:hover {
            color: var(--accent);
        }

        .social-links {
            white-space: pre-line;
            overflow-wrap: anywhere;
        }

        .social-links a {
            color: var(--accent);
            text-decoration: underline;
            text-underline-offset: 3px;
        }

        /* FOOTER */

        .portfolio-footer {
            padding: 30px 10px 10px;
            text-align: center;
            color: var(--muted);
            font-size: 11px;
        }

        .portfolio-footer i {
            color: var(--accent);
            margin-right: 5px;
        }

        .footer-back {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            gap: 9px;
            margin-top: 15px;
            padding: 11px 17px;
            background: var(--accent);
            color: white;
            border-radius: 9px;
            font-size: 12px;
            font-weight: 700;
            transition: 0.2s;
        }

        .footer-back:hover {
            background: #6252c5;
            transform: translateY(-1px);
        }

        @media (max-width: 600px) {
            .nav-inner {
                padding: 14px 17px;
            }

            .brand {
                font-size: 20px;
            }

            .nav-back {
                padding: 8px 10px;
                font-size: 11px;
            }

            .portfolio {
                margin: 22px auto;
                padding: 0 13px;
            }

            .hero {
                padding: 35px 18px;
                border-radius: 15px;
            }

            .profile-image,
            .profile-placeholder {
                width: 108px;
                height: 108px;
            }

            .profile-placeholder {
                font-size: 35px;
            }

            .hero h2 {
                font-size: 14px;
            }

            .hero-contact {
                flex-direction: column;
            }

            .hero-contact a,
            .hero-contact span {
                max-width: 100%;
            }

            .section {
                padding: 23px 18px;
                margin-top: 14px;
            }

            .contact-list {
                grid-template-columns: 1fr;
            }
        }

        @media print {
            body {
                background: white;
            }

            .topbar,
            .footer-back {
                display: none;
            }

            .portfolio {
                margin: 0 auto;
                max-width: 100%;
            }

            .hero,
            .section {
                box-shadow: none;
                break-inside: avoid;
            }
        }
    </style>
</head>

<body>

<header class="topbar">
    <nav class="nav-inner">
        <a href="{{ url('/') }}" class="brand">
            <i class="fa-solid fa-layer-group"></i> F.Porfs<span>.</span>
        </a>

        <a href="{{ route('portfolios.index') }}" class="nav-back">
            <i class="fa-solid fa-arrow-left"></i>
            My Portfolios
        </a>
    </nav>
</header>

<main class="portfolio">

    <!-- PROFILE INTRODUCTION -->
    <section class="hero">

        @if ($portfolio->profile_image)
            <img
                class="profile-image"
                src="{{ $portfolio->profile_image }}"
                alt="{{ $portfolio->name }} profile picture"
            >
        @else
            <div class="profile-placeholder" aria-label="Default profile icon">
                <i class="fa-solid fa-user"></i>
            </div>
        @endif

        <div>
            <span class="hero-label">
                <i class="fa-solid fa-circle-check"></i>
                Personal Portfolio
            </span>
        </div>

        <h1>{{ $portfolio->name }}</h1>
        <h2>{{ $portfolio->title }}</h2>

        <div class="hero-contact">
            @if ($portfolio->location)
                <span>
                    <i class="fa-solid fa-location-dot"></i>
                    {{ $portfolio->location }}
                </span>
            @endif

            @if ($portfolio->email)
                <a href="mailto:{{ $portfolio->email }}">
                    <i class="fa-solid fa-envelope"></i>
                    {{ $portfolio->email }}
                </a>
            @endif
        </div>

    </section>

    <!-- ABOUT ME -->
    <section class="section">
        <div class="section-heading">
            <div class="section-icon">
                <i class="fa-solid fa-user"></i>
            </div>
            <div>
                <h3>About Me</h3>
                <p>A little introduction about myself</p>
            </div>
        </div>

        @if (filled($portfolio->about))
            <div class="section-content">
                {!! nl2br(e($portfolio->about)) !!}
            </div>
        @else
            <p class="empty-content">No introduction has been added yet.</p>
        @endif
    </section>

    <!-- EDUCATION -->
    <section class="section">
        <div class="section-heading">
            <div class="section-icon">
                <i class="fa-solid fa-graduation-cap"></i>
            </div>
            <div>
                <h3>Education</h3>
                <p>Academic background and learning</p>
            </div>
        </div>

        @if (filled($portfolio->educational_background))
            <div class="section-content">
                {!! nl2br(e($portfolio->educational_background)) !!}
            </div>
        @else
            <p class="empty-content">No education details have been added yet.</p>
        @endif
    </section>

    <!-- SKILLS -->
    <section class="section">
        <div class="section-heading">
            <div class="section-icon">
                <i class="fa-solid fa-lightbulb"></i>
            </div>
            <div>
                <h3>Skills</h3>
                <p>Knowledge and abilities</p>
            </div>
        </div>

        @if (filled($portfolio->skills))
            <div class="skills-content">
                @foreach (preg_split('/[\r\n,]+/', $portfolio->skills, -1, PREG_SPLIT_NO_EMPTY) as $skill)
                    @if (trim($skill) !== '')
                        <span class="skill-item">
                            <i class="fa-solid fa-check"></i>
                            {{ trim($skill) }}
                        </span>
                    @endif
                @endforeach
            </div>
        @else
            <p class="empty-content">No skills have been added yet.</p>
        @endif
    </section>

    <!-- PROJECTS -->
    <section class="section">
        <div class="section-heading">
            <div class="section-icon">
                <i class="fa-solid fa-folder-open"></i>
            </div>
            <div>
                <h3>Projects</h3>
                <p>Work and projects I have completed</p>
            </div>
        </div>

        @if (filled($portfolio->projects))
            <div class="section-content">
                {!! nl2br(e($portfolio->projects)) !!}
            </div>
        @else
            <p class="empty-content">No projects have been added yet.</p>
        @endif
    </section>

    <!-- WORK EXPERIENCE -->
    <section class="section">
        <div class="section-heading">
            <div class="section-icon">
                <i class="fa-solid fa-briefcase"></i>
            </div>
            <div>
                <h3>Work Experience</h3>
                <p>Professional and practical experience</p>
            </div>
        </div>

        @if (filled($portfolio->work_experience))
            <div class="section-content">
                {!! nl2br(e($portfolio->work_experience)) !!}
            </div>
        @else
            <p class="empty-content">No work experience has been added yet.</p>
        @endif
    </section>

    <!-- CONTACT INFORMATION -->
    @if ($portfolio->email || $portfolio->phone || $portfolio->location || $portfolio->social_links)
        <section class="section">
            <div class="section-heading">
                <div class="section-icon">
                    <i class="fa-solid fa-address-card"></i>
                </div>
                <div>
                    <h3>Contact Information</h3>
                    <p>Ways to get in touch or find my work</p>
                </div>
            </div>

            <div class="contact-list">

                @if ($portfolio->email)
                    <div class="contact-item">
                        <div class="contact-icon">
                            <i class="fa-solid fa-envelope"></i>
                        </div>
                        <div>
                            <span class="contact-label">Email Address</span>
                            <span class="contact-value">
                                <a href="mailto:{{ $portfolio->email }}">
                                    {{ $portfolio->email }}
                                </a>
                            </span>
                        </div>
                    </div>
                @endif

                @if ($portfolio->phone)
                    <div class="contact-item">
                        <div class="contact-icon">
                            <i class="fa-solid fa-phone"></i>
                        </div>
                        <div>
                            <span class="contact-label">Contact Number</span>
                            <span class="contact-value">
                                {{ $portfolio->phone }}
                            </span>
                        </div>
                    </div>
                @endif

                @if ($portfolio->location)
                    <div class="contact-item">
                        <div class="contact-icon">
                            <i class="fa-solid fa-location-dot"></i>
                        </div>
                        <div>
                            <span class="contact-label">Location</span>
                            <span class="contact-value">
                                {{ $portfolio->location }}
                            </span>
                        </div>
                    </div>
                @endif

                @if ($portfolio->social_links)
                    <div class="contact-item">
                        <div class="contact-icon">
                            <i class="fa-solid fa-link"></i>
                        </div>
                        <div>
                            <span class="contact-label">Social Media & Websites</span>
                            <span class="contact-value social-links">{!! e($portfolio->social_links) !!}</span>
                        </div>
                    </div>
                @endif

            </div>
        </section>
    @endif

    <footer class="portfolio-footer">
        <p>
            <i class="fa-solid fa-layer-group"></i>
            Portfolio created with F.Porfs.
        </p>

        <a href="{{ route('portfolios.index') }}" class="footer-back">
            <i class="fa-solid fa-arrow-left"></i>
            Back to My Portfolios
        </a>
    </footer>

</main>

</body>
</html>
