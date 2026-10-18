
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Folio — Portfolio Generator</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;600;700&family=Manrope:wght@400;500;600;700;800&display=swap"
          rel="stylesheet">

    <!-- Font Awesome Icons -->
    <link rel="stylesheet"
          href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        :root {
            --primary: #7065e8;
            --primary-dark: #5a4ed1;
            --background: #f7f5f0;
            --text: #222222;
            --muted: #737373;
            --border: #ece9e3;
            --white: #ffffff;
        }

        html {
            scroll-behavior: smooth;
        }

        body {
            font-family: 'DM Sans', sans-serif;
            background: var(--background);
            color: var(--text);
            min-height: 100vh;
            display: flex;
            flex-direction: column;
        }

        a {
            -webkit-tap-highlight-color: transparent;
        }

        /* NAVIGATION */

        nav {
            width: 100%;
            max-width: 1150px;
            margin: auto;
            padding: 25px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            gap: 20px;
        }

        .logo {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            font-family: 'Manrope', sans-serif;
            font-size: 30px;
            font-weight: 800;
            letter-spacing: -2px;
            color: var(--text);
            text-decoration: none;
            white-space: nowrap;
        }

        .logo i {
            color: var(--primary);
            font-size: 23px;
            letter-spacing: 0;
        }

        .logo span {
            color: var(--primary);
        }

        .nav-actions {
            display: flex;
            align-items: center;
            gap: 24px;
        }

        .nav-link {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            gap: 8px;
            text-decoration: none;
            color: #444444;
            font-size: 14px;
            font-weight: 600;
            transition: color 0.2s ease;
        }

        .nav-link i {
            color: var(--primary);
            font-size: 15px;
        }

        .nav-link:hover {
            color: var(--primary);
        }

        .nav-link:focus-visible,
        .primary-btn:focus-visible,
        .secondary-btn:focus-visible {
            outline: 3px solid #b8b1ff;
            outline-offset: 4px;
        }

        /* MAIN HERO */

        .hero {
            width: 100%;
            max-width: 1150px;
            margin: auto;
            padding: 65px 25px 80px;
            display: grid;
            grid-template-columns: 1fr 0.9fr;
            align-items: center;
            gap: 65px;
            flex: 1;
        }

        .eyebrow {
            display: inline-flex;
            align-items: center;
            gap: 9px;
            color: var(--primary);
            font-size: 12px;
            font-weight: 700;
            letter-spacing: 2px;
            margin-bottom: 22px;
        }

        .eyebrow i {
            font-size: 15px;
        }

        h1 {
            font-family: 'Manrope', sans-serif;
            font-size: clamp(46px, 6vw, 76px);
            font-weight: 800;
            line-height: 1.08;
            letter-spacing: -4px;
            margin-bottom: 22px;
        }

        h1 span {
            color: var(--primary);
        }

        .description {
            color: var(--muted);
            font-size: 16px;
            line-height: 1.8;
            max-width: 430px;
            margin-bottom: 32px;
        }

        /* BUTTONS */

        .buttons {
            display: flex;
            align-items: center;
            gap: 16px;
            flex-wrap: wrap;
        }

        .primary-btn {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            gap: 10px;
            padding: 15px 21px;
            border: 2px solid var(--primary);
            border-radius: 9px;
            background: var(--primary);
            color: white;
            font-size: 14px;
            font-weight: 600;
            text-decoration: none;
            transition: background 0.2s ease,
                        transform 0.2s ease,
                        box-shadow 0.2s ease;
        }

        .primary-btn:hover {
            background: var(--primary-dark);
            border-color: var(--primary-dark);
            transform: translateY(-2px);
            box-shadow: 0 8px 20px #7065e82b;
        }

        .primary-btn .button-arrow {
            margin-left: 3px;
            font-size: 12px;
        }

        .secondary-btn {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            gap: 9px;
            padding: 14px 4px;
            color: #444444;
            text-decoration: none;
            font-size: 14px;
            font-weight: 600;
            transition: color 0.2s ease;
        }

        .secondary-btn i {
            color: var(--primary);
        }

        .secondary-btn:hover {
            color: var(--primary);
        }

        /* TEMPLATE PREVIEW */

        .preview-area {
            position: relative;
            padding: 25px 10px;
        }

        .preview-label {
            display: inline-flex;
            align-items: center;
            gap: 9px;
            background: white;
            padding: 11px 16px;
            border-radius: 30px;
            box-shadow: 0 8px 25px #2222220a;
            font-size: 12px;
            font-weight: 600;
            margin-bottom: 18px;
        }

        .preview-label i {
            color: var(--primary);
        }

        .templates {
            display: grid;
            grid-template-columns: repeat(2, minmax(0, 1fr));
            gap: 15px;
        }

        .template-card {
            min-width: 0;
            background: white;
            border: 1px solid var(--border);
            padding: 14px;
            border-radius: 15px;
            transition: transform 0.25s ease,
                        box-shadow 0.25s ease;
        }

        .template-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 15px 35px #2222220c;
        }

        .mockup {
            min-height: 145px;
            padding: 13px;
            border-radius: 9px;
            overflow: hidden;
        }

        .simple {
            background: #f0eeff;
        }

        .modern {
            background: #e1f0e9;
        }

        .creative {
            background: #ffeadb;
            min-height: 115px;
        }

        .mock-line {
            height: 5px;
            width: 65%;
            border-radius: 5px;
            background: #c8c2f4;
            margin-bottom: 9px;
        }

        .mock-line.short {
            width: 38%;
            opacity: 0.65;
        }

        .mock-line.long {
            width: 85%;
            margin-top: 18px;
        }

        .modern .mock-line {
            background: #9ac9b8;
        }

        .creative .mock-line {
            background: #e8aa7e;
        }

        .mock-blocks {
            display: flex;
            gap: 6px;
            margin-top: 15px;
        }

        .mock-blocks span {
            height: 35px;
            flex: 1;
            border-radius: 5px;
            background: #c8c2f4;
        }

        .modern .mock-blocks span {
            background: #9ac9b8;
        }

        .creative .mock-blocks span {
            background: #e8aa7e;
        }

        .template-info {
            margin-top: 13px;
        }

        .template-name {
            display: flex;
            align-items: center;
            gap: 8px;
            font-family: 'Manrope', sans-serif;
            font-size: 15px;
            font-weight: 700;
        }

        .template-name i {
            color: var(--primary);
            font-size: 13px;
        }

        .template-note {
            color: #888888;
            font-size: 11px;
            line-height: 1.6;
            margin-top: 5px;
        }

        .template-card:last-child {
            grid-column: 1 / -1;
            display: grid;
            grid-template-columns: 0.8fr 1fr;
            align-items: center;
            gap: 15px;
        }

        .template-card:last-child .template-info {
            margin-top: 0;
        }

        .template-card:last-child .template-name {
            font-size: 19px;
        }

        /* FOOTER */

        footer {
            width: 100%;
            max-width: 1100px;
            margin: auto;
            padding: 22px 25px;
            border-top: 1px solid #e9e6df;
            display: flex;
            justify-content: space-between;
            gap: 12px;
            color: #92908b;
            font-size: 12px;
        }

        /* TABLET AND MOBILE */

        @media (max-width: 850px) {
            .hero {
                grid-template-columns: 1fr;
                padding-top: 45px;
                gap: 35px;
            }

            .hero > section:first-child {
                max-width: 650px;
            }

            .description {
                max-width: 500px;
            }

            .preview-area {
                width: 100%;
                max-width: 600px;
                margin: auto;
                padding: 10px 0;
            }
        }

        @media (max-width: 480px) {
            nav {
                padding: 20px;
                gap: 12px;
            }

            .logo {
                font-size: 25px;
                gap: 5px;
            }

            .logo i {
                font-size: 19px;
            }

            .nav-actions {
                gap: 12px;
            }

            .nav-link {
                font-size: 12px;
                gap: 5px;
            }

            .nav-link i {
                font-size: 13px;
            }

            .hero {
                padding: 45px 20px 55px;
                gap: 30px;
            }

            h1 {
                font-size: clamp(42px, 11vw, 52px);
                letter-spacing: -2.5px;
            }

            .eyebrow {
                font-size: 10px;
                letter-spacing: 1.5px;
                margin-bottom: 18px;
            }

            .description {
                font-size: 15px;
                margin-bottom: 25px;
            }

            .buttons {
                align-items: stretch;
                gap: 10px;
            }

            .primary-btn {
                width: 100%;
                padding: 15px;
            }

            .secondary-btn {
                padding: 12px 4px;
            }

            .preview-area {
                padding: 5px 0;
            }

            .templates {
                gap: 10px;
            }

            .template-card {
                padding: 10px;
                border-radius: 12px;
            }

            .mockup {
                min-height: 120px;
                padding: 10px;
            }

            .creative {
                min-height: 95px;
            }

            .template-name {
                font-size: 13px;
                gap: 5px;
            }

            .template-card:last-child .template-name {
                font-size: 16px;
            }

            .template-note {
                font-size: 10px;
            }

            footer {
                padding: 20px;
                flex-wrap: wrap;
            }
        }

        @media (max-width: 350px) {
            nav {
                align-items: flex-start;
                flex-direction: column;
            }

            .nav-actions {
                width: 100%;
                justify-content: space-between;
            }

            .template-card:last-child {
                grid-template-columns: 1fr;
            }

            .template-card:last-child .template-info {
                margin-top: 5px;
            }
        }

        /* REDUCED MOTION ACCESSIBILITY */

        @media (prefers-reduced-motion: reduce) {
            *,
            *::before,
            *::after {
                scroll-behavior: auto !important;
                transition-duration: 0.01ms !important;
                animation-duration: 0.01ms !important;
            }
        }
    </style>
</head>

<body>

    <!-- NAVIGATION -->
    <nav>
        <a href="{{ url('/') }}" class="logo" aria-label="Folio home">
            <i class="fa-solid fa-layer-group" aria-hidden="true"></i>
            folio<span>.</span>
        </a>

        <div class="nav-actions">
            <a href="{{ url('/') }}" class="nav-link" aria-current="page">
                <i class="fa-solid fa-house" aria-hidden="true"></i>
                Home
            </a>

            <a href="{{ route('portfolios.index') }}" class="nav-link">
                <i class="fa-solid fa-folder-open" aria-hidden="true"></i>
                My Portfolios
            </a>
        </div>
    </nav>

    <!-- MAIN CONTENT -->
    <main class="hero">

        <section>
            <p class="eyebrow">
                <i class="fa-solid fa-wand-magic-sparkles" aria-hidden="true"></i>
                YOUR PORTFOLIO, YOUR WAY
            </p>

            <h1>
                Make your work
                <span>stand out.</span>
            </h1>

            <p class="description">
                Create a portfolio that feels like you.
                Showcase your skills, education, and projects
                in a style that matches your personality.
            </p>

            <div class="buttons">
                <a href="{{ route('portfolios.create') }}" class="primary-btn">
                    <i class="fa-solid fa-circle-plus" aria-hidden="true"></i>
                    Create Your Portfolio
                    <i class="fa-solid fa-arrow-right button-arrow" aria-hidden="true"></i>
                </a>

                <a href="{{ route('portfolios.index') }}" class="secondary-btn">
                    <i class="fa-solid fa-eye" aria-hidden="true"></i>
                    Explore Portfolios
                </a>
            </div>
        </section>

        <!-- TEMPLATE PREVIEW -->
        <section class="preview-area" aria-label="Portfolio template examples">

            <div class="preview-label">
                <i class="fa-solid fa-palette" aria-hidden="true"></i>
                Find your style
            </div>

            <div class="templates">

                <!-- SIMPLE TEMPLATE -->
                <article class="template-card">
                    <div class="mockup simple" aria-hidden="true">
                        <div class="mock-line short"></div>
                        <div class="mock-line long"></div>
                        <div class="mock-line"></div>
                        <div class="mock-line short"></div>
                    </div>

                    <div class="template-info">
                        <p class="template-name">
                            <i class="fa-solid fa-file-lines" aria-hidden="true"></i>
                            01. Simple
                        </p>
                        <p class="template-note">
                            Clean and professional
                        </p>
                    </div>
                </article>

                <!-- MODERN TEMPLATE -->
                <article class="template-card">
                    <div class="mockup modern" aria-hidden="true">
                        <div class="mock-line short"></div>
                        <div class="mock-line long"></div>

                        <div class="mock-blocks">
                            <span></span>
                            <span></span>
                        </div>
                    </div>

                    <div class="template-info">
                        <p class="template-name">
                            <i class="fa-solid fa-table-cells-large" aria-hidden="true"></i>
                            02. Modern
                        </p>
                        <p class="template-note">
                            Fresh and organized
                        </p>
                    </div>
                </article>

                <!-- CREATIVE TEMPLATE -->
                <article class="template-card">
                    <div class="mockup creative" aria-hidden="true">
                        <div class="mock-line short"></div>
                        <div class="mock-line long"></div>

                        <div class="mock-blocks">
                            <span></span>
                            <span></span>
                            <span></span>
                        </div>
                    </div>

                    <div class="template-info">
                        <p class="template-name">
                            <i class="fa-solid fa-paintbrush" aria-hidden="true"></i>
                            03. Creative
                        </p>
                        <p class="template-note">
                            Bold and expressive
                        </p>
                    </div>
                </article>

            </div>
        </section>

    </main>

    <!-- FOOTER -->
    <footer>
        <span>
            &copy; {{ date('Y') }} Folio.
        </span>

        <span>
            Made to showcase you.
        </span>
    </footer>

</body>
</html>
