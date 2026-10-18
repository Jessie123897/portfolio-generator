
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Folio — Portfolio Generator</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;600;700&family=Manrope:wght@400;500;600;700;800&display=swap" rel="stylesheet">

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'DM Sans', sans-serif;
            background: #f7f5f0;
            color: #222222;
            min-height: 100vh;
        }

        nav {
            max-width: 1150px;
            margin: auto;
            padding: 28px 25px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .logo {
            font-family: 'Manrope', sans-serif;
            font-size: 30px;
            font-weight: 800;
            letter-spacing: -2px;
            color: #222222;
            text-decoration: none;
        }

        .logo span {
            color: #7065e8;
        }

        .nav-link {
            text-decoration: none;
            color: #444444;
            font-size: 14px;
            font-weight: 600;
        }

        .nav-link:hover {
            color: #7065e8;
        }

        .hero {
            max-width: 1150px;
            margin: auto;
            padding: 75px 25px 85px;
            display: grid;
            grid-template-columns: 1fr 0.9fr;
            align-items: center;
            gap: 65px;
        }

        .eyebrow {
            color: #7065e8;
            font-size: 12px;
            font-weight: 700;
            letter-spacing: 2px;
            margin-bottom: 22px;
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
            color: #7065e8;
        }

        .description {
            color: #737373;
            font-size: 16px;
            line-height: 1.8;
            margin-bottom: 32px;
        }

        .buttons {
            display: flex;
            align-items: center;
            gap: 22px;
            flex-wrap: wrap;
        }

        .primary-btn {
            display: inline-block;
            padding: 15px 23px;
            border-radius: 9px;
            background: #7065e8;
            color: white;
            font-size: 14px;
            font-weight: 600;
            text-decoration: none;
            transition: 0.2s;
        }

        .primary-btn:hover {
            background: #5a4ed1;
            transform: translateY(-2px);
        }

        .secondary-btn {
            color: #444444;
            text-decoration: none;
            font-size: 14px;
            font-weight: 600;
        }

        .secondary-btn:hover {
            color: #7065e8;
        }

        .preview-area {
            position: relative;
            padding: 30px 15px;
        }

        .preview-label {
            display: inline-block;
            background: white;
            padding: 10px 15px;
            border-radius: 30px;
            box-shadow: 0 8px 25px #2222220a;
            font-size: 12px;
            font-weight: 600;
            margin-bottom: 18px;
        }

        .templates {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 15px;
        }

        .template-card {
            background: white;
            border: 1px solid #ece9e3;
            padding: 14px;
            border-radius: 15px;
            transition: 0.25s;
        }

        .template-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 15px 35px #2222220c;
        }

        .template-card:last-child {
            grid-column: 1 / -1;
            display: grid;
            grid-template-columns: 0.8fr 1fr;
            align-items: center;
            gap: 15px;
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

        .template-name {
            font-family: 'Manrope', sans-serif;
            font-size: 15px;
            font-weight: 700;
            margin-top: 13px;
        }

        .template-card:last-child .template-name {
            margin-top: 0;
            font-size: 19px;
        }

        .template-note {
            color: #888888;
            font-size: 11px;
            margin-top: 5px;
        }

        footer {
            max-width: 1100px;
            margin: auto;
            padding: 22px 25px;
            border-top: 1px solid #e9e6df;
            display: flex;
            justify-content: space-between;
            color: #92908b;
            font-size: 12px;
        }

        @media (max-width: 760px) {
            nav {
                padding: 22px;
            }

            .hero {
                grid-template-columns: 1fr;
                padding: 55px 22px;
                gap: 35px;
            }

            h1 {
                font-size: 52px;
                letter-spacing: -2.5px;
            }

            .preview-area {
                padding: 10px 0;
            }

            footer {
                gap: 10px;
                flex-wrap: wrap;
                padding: 20px 22px;
            }
        }

        @media (max-width: 380px) {
            h1 {
                font-size: 43px;
            }

            .template-card {
                padding: 10px;
            }
        }
    </style>
</head>

<body>

    <nav>
        <a href="{{ url('/') }}" class="logo">folio<span>.</span></a>

        <a href="{{ route('portfolios.index') }}" class="nav-link">
            My Portfolios ↗
        </a>
    </nav>

    <main class="hero">

        <section>
            <p class="eyebrow">YOUR PORTFOLIO, YOUR WAY</p>

            <h1>
                Make your work
                <span>stand out.</span>
            </h1>

            <p class="description">
                Create a portfolio that feels like you.
            </p>

            <div class="buttons">
                <a href="{{ route('portfolios.create') }}" class="primary-btn">
                    Create Your Portfolio ↗
                </a>

                <a href="{{ route('portfolios.index') }}" class="secondary-btn">
                    Explore Portfolios
                </a>
            </div>
        </section>

        <section class="preview-area">
            <div class="preview-label">
                ✦ &nbsp; Find your style
            </div>

            <div class="templates">

                <div class="template-card">
                    <div class="mockup simple">
                        <div class="mock-line short"></div>
                        <div class="mock-line long"></div>
                        <div class="mock-line"></div>
                        <div class="mock-line short"></div>
                    </div>
                    <p class="template-name">01. Simple</p>
                    <p class="template-note">Clean & professional</p>
                </div>

                <div class="template-card">
                    <div class="mockup modern">
                        <div class="mock-line short"></div>
                        <div class="mock-line long"></div>
                        <div class="mock-blocks">
                            <span></span>
                            <span></span>
                        </div>
                    </div>
                    <p class="template-name">02. Modern</p>
                    <p class="template-note">Fresh & organized</p>
                </div>

                <div class="template-card">
                    <div class="mockup creative">
                        <div class="mock-line short"></div>
                        <div class="mock-line long"></div>
                        <div class="mock-blocks">
                            <span></span>
                            <span></span>
                            <span></span>
                        </div>
                    </div>
                    <div>
                        <p class="template-name">03. Creative</p>
                        <p class="template-note">Bold & expressive</p>
                    </div>
                </div>

            </div>
        </section>

    </main>

    <footer>
        <span>© {{ date('Y') }} Folio.</span>
        <span>Made to showcase you.</span>
    </footer>

</body>
</html>
