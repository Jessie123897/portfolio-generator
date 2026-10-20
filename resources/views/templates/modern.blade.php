<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>{{ $portfolio->name }} - Modern Portfolio</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;600;700&family=Manrope:wght@400;500;600;700;800&display=swap" rel="stylesheet">

    <link rel="stylesheet"
          href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">

    <style>
        :root {
            --navy: #17213b;
            --navy-light: #253253;
            --purple: #7765e8;
            --purple-light: #f0edff;
            --background: #f5f6fb;
            --white: #ffffff;
            --text: #283047;
            --muted: #737c91;
            --border: #e8eaf2;
        }

        * {
            box-sizing: border-box;
        }

        html {
            scroll-behavior: smooth;
        }

        body {
            margin: 0;
            font-family: 'DM Sans', sans-serif;
            background: var(--background);
            color: var(--text);
            line-height: 1.7;
        }

        a {
            overflow-wrap: anywhere;
        }

        .page-container {
            width: min(1120px, calc(100% - 40px));
            margin: auto;
        }

        /* Top navigation */
        .topbar {
            background: var(--white);
            border-bottom: 1px solid var(--border);
        }

        .topbar-inner {
            min-height: 70px;
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 20px;
        }

        .brand {
            color: var(--navy);
            font-family: 'Manrope', sans-serif;
            font-size: 20px;
            font-weight: 800;
            text-decoration: none;
            letter-spacing: -0.7px;
        }

        .brand span {
            color: var(--purple);
        }

        .nav-label {
            color: var(--muted);
            font-size: 13px;
            font-weight: 600;
        }

        /* Profile hero */
        .hero {
            position: relative;
            overflow: hidden;
            background: linear-gradient(125deg, var(--navy), var(--navy-light));
            color: white;
        }

        .hero::before {
            content: "";
            position: absolute;
            width: 330px;
            height: 330px;
            border: 1px solid rgba(255,255,255,0.10);
            border-radius: 50%;
            right: -90px;
            top: -150px;
            box-shadow: 0 0 0 35px rgba(255,255,255,0.025),
                        0 0 0 70px rgba(255,255,255,0.02);
        }

        .hero-inner {
            position: relative;
            display: flex;
            align-items: center;
            gap: 32px;
            padding-top: 62px;
            padding-bottom: 62px;
        }

        .profile-picture {
            width: 154px;
            height: 154px;
            flex: 0 0 154px;
            object-fit: cover;
            border-radius: 25px;
            border: 4px solid rgba(255,255,255,0.85);
            box-shadow: 0 12px 30px rgba(0,0,0,0.20);
        }

        .profile-placeholder {
            width: 154px;
            height: 154px;
            flex: 0 0 154px;
            display: grid;
            place-items: center;
            border-radius: 25px;
            background: var(--purple);
            color: white;
            font-family: 'Manrope', sans-serif;
            font-size: 54px;
            font-weight: 800;
        }

        .hero-label {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            margin-bottom: 12px;
            color: #d5d0ff;
            font-size: 12px;
            font-weight: 700;
            text-transform: uppercase;
            letter-spacing: 2px;
        }

        .hero h1 {
            margin: 0;
            font-family: 'Manrope', sans-serif;
            font-size: clamp(30px, 4.5vw, 46px);
            line-height: 1.2;
            letter-spacing: -1.5px;
            overflow-wrap: anywhere;
        }

        .hero h2 {
            margin: 12px 0 0;
            color: #d4d9e7;
            font-size: 18px;
            font-weight: 500;
            overflow-wrap: anywhere;
        }

        .hero-location {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            margin-top: 18px;
            color: #c6cde0;
            font-size: 14px;
        }

        /* Main layout */
        .main-content {
            padding-top: 38px;
            padding-bottom: 25px;
        }

        .section-heading {
            margin: 0 0 20px;
            font-family: 'Manrope', sans-serif;
            font-size: 23px;
            font-weight: 800;
            letter-spacing: -0.6px;
        }

        .section-heading i {
            margin-right: 9px;
            color: var(--purple);
            font-size: 20px;
        }

        .content-grid {
            display: grid;
            grid-template-columns: repeat(2, minmax(0, 1fr));
            gap: 22px;
        }

        .card {
            min-width: 0;
            padding: 27px;
            background: var(--white);
            border: 1px solid var(--border);
            border-radius: 18px;
            box-shadow: 0 7px 25px rgba(28, 39, 70, 0.035);
            overflow-wrap: anywhere;
        }

        .card-heading {
            display: flex;
            align-items: center;
            gap: 13px;
            margin: 0 0 17px;
            font-family: 'Manrope', sans-serif;
            font-size: 18px;
            font-weight: 800;
        }

        .icon-box {
            width: 42px;
            height: 42px;
            flex: 0 0 42px;
            display: grid;
            place-items: center;
            border-radius: 12px;
            background: var(--purple-light);
            color: var(--purple);
            font-size: 17px;
        }

        .card p {
            margin: 0;
            color: #606a80;
            font-size: 14px;
            line-height: 1.9;
            overflow-wrap: anywhere;
        }

        .preserve-lines {
            white-space: pre-wrap;
        }

        /* Skill tags */
        .skill-list {
            display: flex;
            flex-wrap: wrap;
            gap: 9px;
        }

        .skill-tag {
            display: inline-block;
            max-width: 100%;
            padding: 7px 12px;
            border: 1px solid #e5e0ff;
            border-radius: 9px;
            background: #f5f3ff;
            color: #5e50c4;
            font-size: 13px;
            font-weight: 600;
            overflow-wrap: anywhere;
        }

        /* Project and experience content */
        .detail-list {
            display: grid;
            gap: 14px;
        }

        .detail-item {
            padding: 14px 16px;
            border-left: 3px solid var(--purple);
            border-radius: 0 10px 10px 0;
            background: #f8f8fd;
        }

        .detail-item p {
            white-space: pre-wrap;
        }

        /* Contact cards */
        .contact-section {
            margin-top: 36px;
        }

        .contact-grid {
            display: grid;
            grid-template-columns: repeat(3, minmax(0, 1fr));
            gap: 16px;
        }

        .contact-card {
            min-width: 0;
            display: flex;
            align-items: flex-start;
            gap: 13px;
            padding: 20px;
            background: white;
            border: 1px solid var(--border);
            border-radius: 15px;
            overflow-wrap: anywhere;
        }

        .contact-icon {
            width: 40px;
            height: 40px;
            flex: 0 0 40px;
            display: grid;
            place-items: center;
            border-radius: 12px;
            background: var(--purple-light);
            color: var(--purple);
        }

        .contact-label {
            margin: 0 0 4px;
            color: var(--muted);
            font-size: 12px;
            font-weight: 700;
            text-transform: uppercase;
            letter-spacing: 0.7px;
        }

        .contact-value {
            margin: 0;
            color: var(--text);
            font-size: 14px;
            font-weight: 600;
            overflow-wrap: anywhere;
        }

        .contact-value a,
        .social-link a {
            color: #5f50ce;
            text-decoration: none;
        }

        .contact-value a:hover,
        .social-link a:hover {
            text-decoration: underline;
        }

        /* Social links */
        .social-card {
            margin-top: 22px;
        }

        .social-list {
            display: grid;
            gap: 12px;
        }

        .social-link {
            display: flex;
            align-items: flex-start;
            gap: 12px;
            padding: 12px 14px;
            border: 1px solid var(--border);
            border-radius: 10px;
            background: #fcfcff;
            font-size: 14px;
            overflow-wrap: anywhere;
        }

        .social-link i {
            margin-top: 5px;
            color: var(--purple);
        }

        .social-link a {
            overflow-wrap: anywhere;
        }

        /* Footer and navigation */
        .page-footer {
            margin-top: 38px;
            padding: 25px 0;
            border-top: 1px solid var(--border);
            color: var(--muted);
            text-align: center;
            font-size: 13px;
        }

        .back-button {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            gap: 9px;
            margin-top: 28px;
            padding: 12px 17px;
            border: 1px solid var(--border);
            border-radius: 10px;
            background: white;
            color: var(--navy);
            font-size: 14px;
            font-weight: 700;
            text-decoration: none;
            transition: 0.2s ease;
        }

        .back-button:hover {
            border-color: var(--purple);
            color: var(--purple);
            transform: translateY(-2px);
        }

        @media (max-width: 760px) {
            .hero-inner {
                flex-direction: column;
                align-items: flex-start;
                gap: 23px;
                padding-top: 42px;
                padding-bottom: 42px;
            }

            .profile-picture,
            .profile-placeholder {
                width: 125px;
                height: 125px;
                flex-basis: 125px;
                border-radius: 20px;
            }

            .profile-placeholder {
                font-size: 42px;
            }

            .content-grid,
            .contact-grid {
                grid-template-columns: 1fr;
            }

            .card {
                padding: 22px;
            }
        }

        @media (max-width: 420px) {
            .page-container {
                width: calc(100% - 26px);
            }

            .hero h1 {
                font-size: 29px;
            }

            .hero h2 {
                font-size: 16px;
            }

            .section-heading {
                font-size: 21px;
            }
        }
    </style>
</head>

<body>

@php
    $skillItems = preg_split(
        '/[,;\r\n]+/',
        trim($portfolio->skills ?? ''),
        -1,
        PREG_SPLIT_NO_EMPTY
    );

    $projectItems = preg_split(
        '/\r\n|\r|\n/',
        trim($portfolio->projects ?? ''),
        -1,
        PREG_SPLIT_NO_EMPTY
    );

    $experienceItems = preg_split(
        '/\r\n|\r|\n/',
        trim($portfolio->work_experience ?? ''),
        -1,
        PREG_SPLIT_NO_EMPTY
    );

    $socialItems = preg_split(
        '/\r\n|\r|\n/',
        trim($portfolio->social_links ?? ''),
        -1,
        PREG_SPLIT_NO_EMPTY
    );
@endphp

<!-- Navigation -->
<nav class="topbar">
    <div class="page-container topbar-inner">
        <a class="brand" href="{{ route('portfolios.index') }}">
            F<span>.</span>Porfs<span>.</span>
        </a>

        <span class="nav-label">
            <i class="fa-solid fa-circle-check"></i>
            Personal Portfolio
        </span>
    </div>
</nav>

<!-- Profile Header -->
<header class="hero">
    <div class="page-container hero-inner">

        @if ($portfolio->profile_image)
            <img
                class="profile-picture"
                src="{{ $portfolio->profile_image }}"
                alt="Profile picture of {{ $portfolio->name }}"
            >
        @else
            <div class="profile-placeholder" aria-label="Profile image placeholder">
                {{ strtoupper(substr($portfolio->name ?: 'P', 0, 1)) }}
            </div>
        @endif

        <div class="hero-info">
            <div class="hero-label">
                <i class="fa-solid fa-sparkles"></i>
                Personal Portfolio
            </div>

            <h1>{{ $portfolio->name }}</h1>

            @if (filled($portfolio->title))
                <h2>{{ $portfolio->title }}</h2>
            @endif

            @if (filled($portfolio->location))
                <div class="hero-location">
                    <i class="fa-solid fa-location-dot"></i>
                    {{ $portfolio->location }}
                </div>
            @endif
        </div>

    </div>
</header>

<main class="page-container main-content">

    <!-- About Me -->
    @if (filled($portfolio->about))
        <section>
            <h2 class="section-heading">
                <i class="fa-solid fa-user"></i>
                About Me
            </h2>

            <div class="card">
                <p class="preserve-lines">{{ $portfolio->about }}</p>
            </div>
        </section>
    @endif

    <!-- Education, Skills, Projects and Experience -->
    <div class="content-grid" style="margin-top: 25px;">

        @if (filled($portfolio->educational_background))
            <section class="card">
                <h2 class="card-heading">
                    <span class="icon-box">
                        <i class="fa-solid fa-graduation-cap"></i>
                    </span>
                    Education
                </h2>

                <p class="preserve-lines">{{ $portfolio->educational_background }}</p>
            </section>
        @endif

        @if (count($skillItems) > 0)
            <section class="card">
                <h2 class="card-heading">
                    <span class="icon-box">
                        <i class="fa-solid fa-code"></i>
                    </span>
                    Skills
                </h2>

                <div class="skill-list">
                    @foreach ($skillItems as $skill)
                        <span class="skill-tag">{{ trim($skill) }}</span>
                    @endforeach
                </div>
            </section>
        @endif

        @if (count($projectItems) > 0)
            <section class="card">
                <h2 class="card-heading">
                    <span class="icon-box">
                        <i class="fa-solid fa-folder-open"></i>
                    </span>
                    Projects
                </h2>

                <div class="detail-list">
                    @foreach ($projectItems as $project)
                        @if (filled(trim($project)))
                            <div class="detail-item">
                                <p>{{ trim($project) }}</p>
                            </div>
                        @endif
                    @endforeach
                </div>
            </section>
        @endif

        @if (count($experienceItems) > 0)
            <section class="card">
                <h2 class="card-heading">
                    <span class="icon-box">
                        <i class="fa-solid fa-briefcase"></i>
                    </span>
                    Work Experience
                </h2>

                <div class="detail-list">
                    @foreach ($experienceItems as $experience)
                        @if (filled(trim($experience)))
                            <div class="detail-item">
                                <p>{{ trim($experience) }}</p>
                            </div>
                        @endif
                    @endforeach
                </div>
            </section>
        @endif

    </div>

    <!-- Contact Information -->
    @if (filled($portfolio->email) || filled($portfolio->phone) || filled($portfolio->location))
        <section class="contact-section">
            <h2 class="section-heading">
                <i class="fa-solid fa-address-card"></i>
                Contact Information
            </h2>

            <div class="contact-grid">

                @if (filled($portfolio->email))
                    <div class="contact-card">
                        <span class="contact-icon">
                            <i class="fa-solid fa-envelope"></i>
                        </span>

                        <div>
                            <p class="contact-label">Email</p>
                            <p class="contact-value">
                                <a href="mailto:{{ $portfolio->email }}">
                                    {{ $portfolio->email }}
                                </a>
                            </p>
                        </div>
                    </div>
                @endif

                @if (filled($portfolio->phone))
                    <div class="contact-card">
                        <span class="contact-icon">
                            <i class="fa-solid fa-phone"></i>
                        </span>

                        <div>
                            <p class="contact-label">Contact Number</p>
                            <p class="contact-value">{{ $portfolio->phone }}</p>
                        </div>
                    </div>
                @endif

                @if (filled($portfolio->location))
                    <div class="contact-card">
                        <span class="contact-icon">
                            <i class="fa-solid fa-location-dot"></i>
                        </span>

                        <div>
                            <p class="contact-label">Address</p>
                            <p class="contact-value">{{ $portfolio->location }}</p>
                        </div>
                    </div>
                @endif

            </div>
        </section>
    @endif

    <!-- Social Media and Website Links -->
    @if (count($socialItems) > 0)
        <section class="card social-card">
            <h2 class="card-heading">
                <span class="icon-box">
                    <i class="fa-solid fa-share-nodes"></i>
                </span>
                Social Media & Website Links
            </h2>

            <div class="social-list">
                @foreach ($socialItems as $social)
                    @php
                        $social = trim($social);
                        $url = null;

                        if (preg_match('~https?://[^\s]+|www\.[^\s]+~i', $social, $matches)) {
                            $url = rtrim($matches[0], ".,;)");
                            $href = str_starts_with(strtolower($url), 'www.')
                                ? 'https://' . $url
                                : $url;
                        }
                    @endphp

                    <div class="social-link">
                        <i class="fa-solid fa-arrow-up-right-from-square"></i>

                        <div>
                            @if ($url)
                                <a href="{{ $href }}" target="_blank" rel="noopener noreferrer">
                                    {{ $social }}
                                </a>
                            @else
                                {{ $social }}
                            @endif
                        </div>
                    </div>
                @endforeach
            </div>
        </section>
    @endif

    <!-- Back to Dashboard -->
    <a class="back-button" href="{{ route('portfolios.index') }}">
        <i class="fa-solid fa-arrow-left"></i>
        Back to Portfolios
    </a>

</main>

<footer class="page-footer">
    <div class="page-container">
        Created with F.Porfs. · Modern Portfolio Template
    </div>
</footer>

</body>
</html>
