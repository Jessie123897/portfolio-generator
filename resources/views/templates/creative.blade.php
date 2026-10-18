<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>{{ $portfolio->name }} - Creative Portfolio</title>

    <style>

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        :root {
            --purple-dark: #35184f;
            --purple: #69439a;
            --violet: #8d63bd;
            --pink: #d77ca8;
            --peach: #f0a582;

            --cream: #fff9f5;
            --white: #ffffff;

            --soft-purple: #f1e9f8;
            --soft-pink: #fae9f0;

            --text: #302739;
            --muted: #756b7e;

            --border: #eadfec;
        }

        body {
            font-family: Arial, Helvetica, sans-serif;
            background: var(--cream);
            color: var(--text);
            line-height: 1.6;
        }

        .creative-wrapper {
            max-width: 1180px;
            margin: 35px auto;
            padding: 0 25px;
        }


        /* =========================================
           BACK BUTTON
        ========================================= */

        .back-button {
            display: inline-flex;
            align-items: center;
            gap: 8px;

            margin-bottom: 18px;
            padding: 10px 18px;

            background: var(--white);
            color: var(--purple-dark);

            border: 1px solid var(--border);
            border-radius: 25px;

            text-decoration: none;

            font-size: 14px;
            font-weight: bold;

            box-shadow: 0 5px 15px rgba(53, 24, 79, 0.08);

            transition: 0.25s ease;
        }

        .back-button:hover {
            background: var(--purple-dark);
            color: white;

            transform: translateY(-2px);
        }


        /* =========================================
           LABEL
        ========================================= */

        .top-label {
            text-align: center;
            margin-bottom: 20px;
        }

        .top-label span {
            display: inline-block;

            padding: 7px 18px;

            background: var(--soft-purple);
            color: var(--purple-dark);

            border-radius: 30px;

            font-size: 12px;
            font-weight: bold;

            letter-spacing: 2px;
            text-transform: uppercase;
        }


        /* =========================================
           HERO
        ========================================= */

        .hero {
            position: relative;
            overflow: hidden;

            min-height: 390px;

            display: grid;
            grid-template-columns: 300px 1fr;
            align-items: center;

            gap: 65px;

            padding: 55px 60px;

            border-radius: 35px;

            background:
                linear-gradient(
                    135deg,
                    var(--purple-dark) 0%,
                    var(--purple) 48%,
                    var(--pink) 100%
                );

            color: white;

            box-shadow:
                0 22px 50px rgba(53, 24, 79, 0.20);
        }


        /* Decorative shapes */

        .shape-one {
            position: absolute;

            width: 270px;
            height: 270px;

            right: -100px;
            top: -100px;

            border-radius: 50%;

            background: rgba(255, 255, 255, 0.07);
        }

        .shape-two {
            position: absolute;

            width: 190px;
            height: 190px;

            right: 120px;
            bottom: -110px;

            border-radius: 45px;

            background: rgba(240, 165, 130, 0.18);

            transform: rotate(25deg);
        }

        .shape-three {
            position: absolute;

            width: 90px;
            height: 90px;

            left: 250px;
            top: 25px;

            border-radius: 50%;

            background: rgba(255, 255, 255, 0.06);
        }


        /* =========================================
           PROFILE IMAGE
        ========================================= */

        .profile-side {
            position: relative;
            z-index: 2;

            display: flex;
            justify-content: center;
        }

        .profile-frame {
            width: 235px;
            height: 275px;

            padding: 8px;

            background:
                linear-gradient(
                    145deg,
                    var(--peach),
                    #f7d4c5,
                    #c79ce5
                );

            border-radius: 28px 65px 28px 65px;

            transform: rotate(-3deg);

            box-shadow:
                0 18px 35px rgba(0, 0, 0, 0.22);
        }

        .profile-frame img {
            width: 100%;
            height: 100%;

            object-fit: cover;

            border-radius: 23px 60px 23px 60px;

            transform: rotate(3deg);
        }

        .profile-placeholder {
            width: 100%;
            height: 100%;

            display: flex;
            align-items: center;
            justify-content: center;

            background: var(--soft-purple);
            color: var(--purple-dark);

            font-size: 65px;

            border-radius: 23px 60px 23px 60px;

            transform: rotate(3deg);
        }


        /* =========================================
           HERO CONTENT
        ========================================= */

        .hero-content {
            position: relative;
            z-index: 2;
        }

        .hello-text {
            margin-bottom: 8px;

            color: #f8d8ca;

            font-size: 14px;
            font-weight: bold;

            letter-spacing: 3px;
            text-transform: uppercase;
        }

        .hero-content h1 {
            margin-bottom: 25px;

            font-size: clamp(42px, 6vw, 70px);
            line-height: 1;

            letter-spacing: -2px;
        }


        /* Phone */

        .hero-phone {
            display: flex;
            align-items: center;
            gap: 10px;

            width: fit-content;

            padding: 10px 17px;

            border-radius: 25px;

            background: rgba(255, 255, 255, 0.12);

            border: 1px solid rgba(255, 255, 255, 0.13);

            color: #fff5fb;

            font-size: 15px;
        }


        /* =========================================
           CONTENT GRID
        ========================================= */

        .section {
            margin-top: 25px;
        }


        /* =========================================
           CARD
        ========================================= */

        .card {
            background: var(--white);

            padding: 30px;

            border-radius: 25px;

            border: 1px solid var(--border);

            box-shadow:
                0 8px 25px rgba(53, 24, 79, 0.06);
        }


        /* =========================================
           CARD HEADER
        ========================================= */

        .card-title {
            display: flex;
            align-items: center;
            gap: 12px;

            margin-bottom: 20px;
        }

        .card-icon {
            width: 42px;
            height: 42px;

            display: flex;
            align-items: center;
            justify-content: center;

            flex-shrink: 0;

            border-radius: 13px;

            background:
                linear-gradient(
                    135deg,
                    var(--soft-purple),
                    var(--soft-pink)
                );

            font-size: 19px;
        }

        .card-title h2 {
            color: var(--purple-dark);

            font-size: 23px;
        }


        /* =========================================
           ABOUT ME
        ========================================= */

        .about-card {
            position: relative;

            overflow: hidden;

            background:
                linear-gradient(
                    135deg,
                    #f2eafb,
                    #fff0eb
                );

            border: none;
        }

        .about-card::after {
            content: "ABOUT";

            position: absolute;

            right: -15px;
            top: -45px;

            font-size: 100px;
            font-weight: bold;

            color: rgba(105, 67, 154, 0.06);
        }

        .about-text {
            position: relative;
            z-index: 2;

            font-size: 18px;
            line-height: 1.9;

            color: #554b60;

            white-space: pre-line;
        }


        /* =========================================
           TWO COLUMN ROW
        ========================================= */

        .two-column {
            display: grid;

            grid-template-columns: 1fr 1fr;

            gap: 25px;

            margin-top: 25px;
        }


        /* =========================================
           SKILLS
        ========================================= */

        .skills {
            display: flex;

            flex-wrap: wrap;

            gap: 10px;
        }

        .skill {
            display: inline-block;

            padding: 10px 16px;

            border-radius: 20px;

            background:
                linear-gradient(
                    135deg,
                    #eee5f8,
                    #fbe5ee
                );

            color: var(--purple-dark);

            font-size: 15px;
            font-weight: bold;
        }


        /* =========================================
           EXPERIENCE
        ========================================= */

        .timeline {
            position: relative;

            padding-left: 28px;
        }

        .timeline::before {
            content: "";

            position: absolute;

            left: 7px;
            top: 5px;
            bottom: 5px;

            width: 2px;

            background:
                linear-gradient(
                    var(--purple),
                    var(--pink)
                );
        }

        .timeline-item {
            position: relative;

            margin-bottom: 22px;
        }

        .timeline-item:last-child {
            margin-bottom: 0;
        }

        .timeline-item::before {
            content: "";

            position: absolute;

            left: -27px;
            top: 5px;

            width: 12px;
            height: 12px;

            border-radius: 50%;

            background: var(--pink);

            border: 3px solid #f8eafa;
        }

        .timeline-item h3 {
            margin-bottom: 5px;

            color: var(--purple-dark);

            font-size: 16px;
        }

        .timeline-item p {
            color: var(--muted);

            font-size: 14px;

            white-space: pre-line;
        }


        /* =========================================
           EDUCATION
        ========================================= */

        .education-item {
            padding: 15px 17px;

            margin-bottom: 12px;

            border-radius: 15px;

            background:
                linear-gradient(
                    135deg,
                    #faf6fd,
                    #fff5f1
                );

            border-left: 4px solid var(--violet);
        }

        .education-item:last-child {
            margin-bottom: 0;
        }

        .education-item p {
            color: var(--muted);

            font-size: 15px;

            white-space: pre-line;
        }


        /* =========================================
           PROJECTS
        ========================================= */

        .project-item {
            position: relative;

            padding: 17px;

            margin-bottom: 12px;

            border-radius: 16px;

            background:
                linear-gradient(
                    135deg,
                    #faf6fd,
                    #fff5f1
                );

            border-left: 4px solid var(--pink);
        }

        .project-item:last-child {
            margin-bottom: 0;
        }

        .project-number {
            margin-bottom: 4px;

            color: var(--pink);

            font-size: 11px;
            font-weight: bold;

            letter-spacing: 2px;
        }

        .project-item p {
            color: var(--muted);

            font-size: 15px;

            white-space: pre-line;
        }


        /* =========================================
           SOCIAL LINKS
        ========================================= */

        .social-list {
            display: flex;

            flex-direction: column;

            gap: 12px;
        }

        .social-link {
            display: flex;

            align-items: center;

            gap: 12px;

            padding: 13px 16px;

            border-radius: 15px;

            background:
                linear-gradient(
                    135deg,
                    #faf6fd,
                    #fff5f1
                );

            border: 1px solid #eee3f1;

            color: var(--purple-dark);

            text-decoration: none;

            font-size: 15px;
            font-weight: bold;

            transition: 0.2s ease;
        }

        .social-link:hover {
            transform: translateX(4px);

            border-color: var(--pink);
        }

        .social-icon {
            width: 30px;
            height: 30px;

            display: flex;
            align-items: center;
            justify-content: center;

            border-radius: 50%;

            background: var(--soft-purple);

            font-size: 14px;
        }


        /* =========================================
           EMAIL
        ========================================= */

        .email-box {
            display: flex;

            align-items: center;

            gap: 13px;

            padding: 18px;

            border-radius: 17px;

            background:
                linear-gradient(
                    135deg,
                    #faf6fd,
                    #fff5f1
                );

            border: 1px solid #eee3f1;
        }

        .email-icon {
            width: 43px;
            height: 43px;

            display: flex;
            align-items: center;
            justify-content: center;

            flex-shrink: 0;

            border-radius: 50%;

            background: var(--soft-purple);

            font-size: 18px;
        }

        .email-text {
            overflow-wrap: anywhere;

            color: var(--purple-dark);

            font-size: 15px;
            font-weight: bold;
        }


        /* =========================================
           FOOTER
        ========================================= */

        footer {
            margin-top: 40px;

            padding: 30px;

            text-align: center;

            color: var(--muted);

            font-size: 13px;
        }

        footer strong {
            color: var(--purple);
        }


        /* =========================================
           TABLET
        ========================================= */

        @media (max-width: 900px) {

            .hero {
                grid-template-columns: 240px 1fr;

                gap: 35px;

                padding: 45px 35px;
            }

            .profile-frame {
                width: 195px;
                height: 230px;
            }

        }


        /* =========================================
           MOBILE
        ========================================= */

        @media (max-width: 700px) {

            .creative-wrapper {
                margin: 20px auto;

                padding: 0 15px;
            }

            .hero {
                grid-template-columns: 1fr;

                gap: 30px;

                padding: 40px 25px;

                text-align: center;

                border-radius: 28px;
            }

            .profile-side {
                order: 1;
            }

            .hero-content {
                order: 2;
            }

            .profile-frame {
                width: 185px;
                height: 220px;
            }

            .hero-content h1 {
                font-size: 43px;

                letter-spacing: -1px;
            }

            .hero-phone {
                margin: auto;
            }

            .two-column {
                grid-template-columns: 1fr;
            }

            .about-text {
                font-size: 17px;
            }

        }


        /* =========================================
           SMALL MOBILE
        ========================================= */

        @media (max-width: 430px) {

            .hero {
                padding: 35px 18px;
            }

            .card {
                padding: 24px;
            }

            .hero-content h1 {
                font-size: 37px;
            }

            .about-text {
                font-size: 16px;
            }

            .back-button {
                font-size: 13px;
            }

        }

    </style>

</head>


<body>

<div class="creative-wrapper">


    <!-- BACK BUTTON -->

    <a
        href="{{ route('portfolios.index') }}"
        class="back-button"
    >
        ← Back to Portfolios
    </a>


    <!-- LABEL -->

    <div class="top-label">

        <span>
            Creative Portfolio
        </span>

    </div>


    <!-- =====================================
         HERO
    ====================================== -->

    <section class="hero">

        <!-- Decorative shapes -->

        <div class="shape-one"></div>

        <div class="shape-two"></div>

        <div class="shape-three"></div>


        <!-- IMAGE -->

        <div class="profile-side">

            <div class="profile-frame">

                @if ($portfolio->profile_image)

                    <img
                        src="{{ $portfolio->profile_image }}"
                        alt="{{ $portfolio->name }}"
                    >

                @else

                    <div class="profile-placeholder">
                        👤
                    </div>

                @endif

            </div>

        </div>


        <!-- NAME + PHONE -->

        <div class="hero-content">

            <div class="hello-text">
                Hello, I'm
            </div>

            <h1>
                {{ $portfolio->name }}
            </h1>


            @if ($portfolio->phone)

                <div class="hero-phone">

                    <span>
                        ☎
                    </span>

                    <span>
                        {{ $portfolio->phone }}
                    </span>

                </div>

            @endif

        </div>

    </section>


    <!-- =====================================
         ABOUT ME
    ====================================== -->

    <section class="card about-card section">

        <div class="card-title">

            <div class="card-icon">
                ✦
            </div>

            <h2>
                About Me
            </h2>

        </div>


        <p class="about-text">

            @if ($portfolio->about)

                {{ $portfolio->about }}

            @else

                Welcome to my portfolio.

            @endif

        </p>

    </section>


    <!-- =====================================
         SKILLS + EXPERIENCE
    ====================================== -->

    <div class="two-column">


        <!-- SKILLS -->

        <section class="card">

            <div class="card-title">

                <div class="card-icon">
                    ✨
                </div>

                <h2>
                    Skills
                </h2>

            </div>


            @if ($portfolio->skills)

                <div class="skills">

                    @foreach (
                        preg_split(
                            '/\r\n|\r|\n|,/',
                            $portfolio->skills
                        )
                        as $skill
                    )

                        @if (trim($skill))

                            <span class="skill">
                                {{ trim($skill) }}
                            </span>

                        @endif

                    @endforeach

                </div>

            @else

                <p>
                    No skills added yet.
                </p>

            @endif

        </section>


        <!-- EXPERIENCE -->

        <section class="card">

            <div class="card-title">

                <div class="card-icon">
                    💼
                </div>

                <h2>
                    Experience
                </h2>

            </div>


            @if ($portfolio->work_experience)

                <div class="timeline">

                    @foreach (
                        preg_split(
                            '/\r\n|\r|\n/',
                            $portfolio->work_experience
                        )
                        as $experience
                    )

                        @if (trim($experience))

                            <div class="timeline-item">

                                <h3>
                                    Experience
                                </h3>

                                <p>
                                    {{ trim($experience) }}
                                </p>

                            </div>

                        @endif

                    @endforeach

                </div>

            @else

                <p>
                    No work experience added yet.
                </p>

            @endif

        </section>

    </div>


    <!-- =====================================
         EDUCATION + PROJECTS
    ====================================== -->

    <div class="two-column">


        <!-- EDUCATION -->

        <section class="card">

            <div class="card-title">

                <div class="card-icon">
                    🎓
                </div>

                <h2>
                    Education
                </h2>

            </div>


            @if ($portfolio->educational_background)

                @foreach (
                    preg_split(
                        '/\r\n|\r|\n/',
                        $portfolio->educational_background
                    )
                    as $education
                )

                    @if (trim($education))

                        <div class="education-item">

                            <p>
                                {{ trim($education) }}
                            </p>

                        </div>

                    @endif

                @endforeach

            @else

                <p>
                    No educational background added yet.
                </p>

            @endif

        </section>


        <!-- PROJECTS -->

        <section class="card">

            <div class="card-title">

                <div class="card-icon">
                    🚀
                </div>

                <h2>
                    Projects
                </h2>

            </div>


            @if ($portfolio->projects)

                @php

                    $projects = preg_split(
                        '/\r\n|\r|\n/',
                        $portfolio->projects
                    );

                    $projectNumber = 1;

                @endphp


                @foreach ($projects as $project)

                    @if (trim($project))

                        <div class="project-item">

                            <div class="project-number">

                                PROJECT
                                {{ str_pad(
                                    $projectNumber,
                                    2,
                                    '0',
                                    STR_PAD_LEFT
                                ) }}

                            </div>

                            <p>
                                {{ trim($project) }}
                            </p>

                        </div>


                        @php
                            $projectNumber++;
                        @endphp

                    @endif

                @endforeach

            @else

                <p>
                    No projects added yet.
                </p>

            @endif

        </section>

    </div>


    <!-- =====================================
         SOCIAL LINKS + EMAIL
    ====================================== -->

    <div class="two-column">


        <!-- SOCIAL LINKS -->

        <section class="card">

            <div class="card-title">

                <div class="card-icon">
                    🔗
                </div>

                <h2>
                    Social Links
                </h2>

            </div>


            @if ($portfolio->social_links)

                <div class="social-list">

                    @foreach (
                        preg_split(
                            '/\r\n|\r|\n/',
                            $portfolio->social_links
                        )
                        as $link
                    )

                        @if (trim($link))

                            @php

                                $parts = explode(
                                    '|',
                                    $link,
                                    2
                                );

                                $label = trim($parts[0]);

                                $url = isset($parts[1])
                                    ? trim($parts[1])
                                    : trim($parts[0]);

                            @endphp


                            <a
                                href="{{ $url }}"
                                target="_blank"
                                rel="noopener noreferrer"
                                class="social-link"
                            >

                                <span class="social-icon">
                                    🔗
                                </span>

                                <span>
                                    {{ $label }}
                                </span>

                            </a>

                        @endif

                    @endforeach

                </div>

            @else

                <p>
                    No social links added yet.
                </p>

            @endif

        </section>


        <!-- EMAIL -->

        <section class="card">

            <div class="card-title">

                <div class="card-icon">
                    ✉️
                </div>

                <h2>
                    Email
                </h2>

            </div>


            @if ($portfolio->email)

                <div class="email-box">

                    <div class="email-icon">
                        ✉
                    </div>

                    <div class="email-text">

                        {{ $portfolio->email }}

                    </div>

                </div>

            @else

                <p>
                    No email added yet.
                </p>

            @endif

        </section>

    </div>


    <!-- =====================================
         FOOTER
    ====================================== -->

    <footer>

        Created with

        <strong>
            Online Portfolio Template Generator
        </strong>

    </footer>


</div>

</body>

</html>