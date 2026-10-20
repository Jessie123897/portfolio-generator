<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>F.Porfs. — Portfolio Generator</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;600;700&family=Playfair+Display:wght@500;600;700&display=swap"
          rel="stylesheet">

    <link rel="stylesheet"
          href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        :root {
            --background: #171719;
            --panel: #202023;
            --panel-hover: #29292e;
            --accent: #a99bea;
            --text: #f2f0ed;
            --muted: #aaa7b2;
            --border: #39383f;
        }

        body {
            font-family: 'DM Sans', sans-serif;
            background: var(--background);
            color: var(--text);
            min-height: 100vh;
            display: flex;
            flex-direction: column;
        }

        nav {
            width: 100%;
            max-width: 1200px;
            margin: 0 auto;
            padding: 28px 30px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .logo {
            font-family: 'DM Sans', sans-serif;
            font-size: 27px;
            font-weight: 700;
            letter-spacing: -1.5px;
            color: var(--text);
            text-decoration: none;
        }

        .logo span {
            color: var(--accent);
        }

        .nav-label {
            color: var(--muted);
            font-size: 12px;
            letter-spacing: 1.5px;
            text-transform: uppercase;
        }

        main {
            flex: 1;
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 50px 24px 80px;
        }

        .welcome {
            width: 100%;
            max-width: 1100px;
            display: grid;
            grid-template-columns: 1fr 0.85fr;
            align-items: center;
            gap: 80px;
        }

        .hero {
            max-width: 580px;
        }

        .eyebrow {
            display: inline-flex;
            align-items: center;
            gap: 10px;
            color: var(--accent);
            font-size: 12px;
            font-weight: 700;
            letter-spacing: 2.5px;
            text-transform: uppercase;
            margin-bottom: 27px;
        }

        .eyebrow::before {
            content: "";
            width: 30px;
            height: 1px;
            background: var(--accent);
        }

        h1 {
            font-family: 'Playfair Display', serif;
            font-size: clamp(46px, 6vw, 76px);
            line-height: 1.12;
            letter-spacing: -1.5px;
            font-weight: 600;
        }

        h1 span {
            display: block;
            color: var(--accent);
            font-style: italic;
        }

        .description {
            max-width: 430px;
            margin: 27px 0 0;
            color: var(--muted);
            font-size: 15px;
            line-height: 1.9;
        }

        .hero-line {
            width: 60px;
            height: 3px;
            margin-top: 35px;
            background: var(--accent);
            border-radius: 5px;
        }

        /* Login and Sign Up panel */
        .auth-panel {
            width: 100%;
            max-width: 450px;
            justify-self: end;
            padding: 32px;
            background: var(--panel);
            border: 1px solid var(--border);
            border-radius: 22px;
            box-shadow: 0 25px 70px rgba(0, 0, 0, 0.2);
        }

        .panel-title {
            font-family: 'Playfair Display', serif;
            font-size: 29px;
            font-weight: 600;
        }

        .panel-description {
            margin: 10px 0 28px;
            color: var(--muted);
            font-size: 13px;
            line-height: 1.8;
        }

        .actions {
            display: flex;
            flex-direction: column;
            gap: 14px;
        }

        .btn {
            width: 100%;
            min-height: 105px;
            display: flex;
            align-items: center;
            gap: 17px;
            padding: 22px;
            background: #262629;
            border: 1px solid var(--border);
            border-radius: 15px;
            color: var(--text);
            text-align: left;
            text-decoration: none;
            cursor: pointer;
            transition: background 0.2s ease,
                        border-color 0.2s ease,
                        transform 0.2s ease;
        }

        .btn:hover {
            background: var(--panel-hover);
            border-color: var(--accent);
            transform: translateY(-2px);
        }

        .btn:focus-visible {
            outline: 3px solid var(--accent);
            outline-offset: 4px;
        }

        .btn-icon {
            width: 50px;
            height: 50px;
            flex: 0 0 50px;
            display: flex;
            align-items: center;
            justify-content: center;
            background: rgba(169, 155, 234, 0.13);
            color: var(--accent);
            border-radius: 13px;
            font-size: 20px;
        }

        .btn-text {
            flex: 1;
            min-width: 0;
        }

        .btn-title {
            display: block;
            font-size: 17px;
            font-weight: 700;
        }

        .btn-description {
            display: block;
            margin-top: 5px;
            color: var(--muted);
            font-size: 12px;
            line-height: 1.6;
        }

        .btn-arrow {
            flex: 0 0 auto;
            color: var(--accent);
            transition: transform 0.2s ease;
        }

        .btn:hover .btn-arrow {
            transform: translateX(4px);
        }

        .panel-note {
            margin-top: 23px;
            text-align: center;
            color: #817d8c;
            font-size: 12px;
        }

        footer {
            width: 100%;
            max-width: 1200px;
            margin: 0 auto;
            padding: 23px 30px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            gap: 15px;
            border-top: 1px solid rgba(255, 255, 255, 0.08);
            color: #817d8c;
            font-size: 12px;
        }

        .footer-logo {
            color: var(--text);
            font-weight: 700;
        }

        .footer-logo span {
            color: var(--accent);
        }

        @media (max-width: 850px) {
            .welcome {
                grid-template-columns: 1fr;
                gap: 42px;
            }

            .hero {
                max-width: 650px;
            }

            .auth-panel {
                max-width: 600px;
                justify-self: stretch;
            }

            h1 {
                font-size: clamp(45px, 9vw, 65px);
            }
        }

        @media (max-width: 480px) {
            nav {
                padding: 22px 20px;
            }

            .logo {
                font-size: 24px;
            }

            .nav-label {
                font-size: 10px;
                letter-spacing: 0.8px;
            }

            main {
                padding: 35px 18px 50px;
            }

            .welcome {
                gap: 35px;
            }

            h1 {
                font-size: 45px;
                letter-spacing: -1px;
            }

            .description {
                font-size: 14px;
            }

            .auth-panel {
                padding: 22px;
                border-radius: 18px;
            }

            .panel-title {
                font-size: 26px;
            }

            .btn {
                min-height: 95px;
                padding: 16px;
                gap: 12px;
            }

            .btn-icon {
                width: 44px;
                height: 44px;
                flex-basis: 44px;
                font-size: 18px;
            }

            .btn-title {
                font-size: 15px;
            }

            .btn-description {
                font-size: 11px;
            }

            footer {
                padding: 20px;
                flex-wrap: wrap;
            }
        }
    </style>
</head>

<body>

    <!-- Navigation -->
    <nav>
        <a href="{{ url('/') }}" class="logo">
            F<span>.</span>Porfs<span>.</span>
        </a>

        <div class="nav-label">Portfolio Generator</div>
    </nav>

    <!-- Welcome Section -->
    <main>
        <section class="welcome">

            <div class="hero">
                <div class="eyebrow">Your creative space</div>

                <h1>
                    Your work.
                    <span>Your story.</span>
                </h1>

                <p class="description">
                    Create your personal portfolio, showcase your skills,
                    and share your work with the world. Your journey,
                    your achievements, your own style.
                </p>

                <div class="hero-line"></div>
            </div>

            <!-- Authentication links -->
            <div class="auth-panel">
                <h2 class="panel-title">Welcome to F.Porfs.</h2>

                <p class="panel-description">
                    Choose an option to begin your portfolio journey.
                </p>

                <div class="actions">

                    <!-- LOG IN: opens the login page -->
                    <a href="{{ url('/login') }}" class="btn">
                        <span class="btn-icon">
                            <i class="fa-solid fa-arrow-right-to-bracket"
                               aria-hidden="true"></i>
                        </span>

                        <span class="btn-text">
                            <span class="btn-title">Log In</span>
                            <span class="btn-description">
                                Welcome back. Continue to your account.
                            </span>
                        </span>

                        <i class="fa-solid fa-arrow-right btn-arrow"
                           aria-hidden="true"></i>
                    </a>

                    <!-- SIGN UP: opens the registration page -->
                    <a href="{{ url('/register') }}" class="btn">
                        <span class="btn-icon">
                            <i class="fa-solid fa-user-plus"
                               aria-hidden="true"></i>
                        </span>

                        <span class="btn-text">
                            <span class="btn-title">Sign Up</span>
                            <span class="btn-description">
                                Create an account and build your portfolio.
                            </span>
                        </span>

                        <i class="fa-solid fa-arrow-right btn-arrow"
                           aria-hidden="true"></i>
                    </a>

                </div>

                <p class="panel-note">
                    Your portfolio. Your information. Your story.
                </p>
            </div>

        </section>
    </main>

    <!-- Footer -->
    <footer>
        <span class="footer-logo">F<span>.</span>Porfs<span>.</span></span>
        <span>&copy; {{ date('Y') }} — Made to showcase you.</span>
    </footer>

</body>
</html>
