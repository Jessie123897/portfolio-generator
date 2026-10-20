<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>My Portfolios | F.Porfs.</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;600;700&family=Playfair+Display:wght@500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">

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
            --danger: #f08b95;
        }

        body {
            min-height: 100vh;
            display: flex;
            flex-direction: column;
            background: var(--background);
            color: var(--text);
            font-family: 'DM Sans', sans-serif;
        }

        a {
            color: inherit;
        }

        button, a {
            -webkit-tap-highlight-color: transparent;
        }

        button, input {
            font: inherit;
        }

        /* Navigation */

        .navbar {
            position: sticky;
            top: 0;
            z-index: 10;
            width: 100%;
            background: rgba(23, 23, 25, 0.94);
            backdrop-filter: blur(16px);
            border-bottom: 1px solid var(--border);
        }

        .nav-inner {
            max-width: 1240px;
            min-height: 82px;
            padding: 18px 30px;
            margin: auto;
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 20px;
        }

        .logo {
            flex-shrink: 0;
            text-decoration: none;
            font-size: 27px;
            font-weight: 700;
            letter-spacing: -1.5px;
        }

        .logo span {
            color: var(--accent);
        }

        .nav-right {
            display: flex;
            align-items: center;
            gap: 18px;
        }

        /* Current account panel */

        .user-info {
            display: flex;
            align-items: center;
            gap: 12px;
            padding: 8px 14px 8px 8px;
            border: 1px solid var(--border);
            border-radius: 14px;
            background: var(--panel);
        }

        .avatar {
            width: 46px;
            height: 46px;
            display: grid;
            place-items: center;
            flex-shrink: 0;
            border: 1px solid #74669f;
            border-radius: 13px;
            background: #302943;
            color: var(--accent);
            font-size: 20px;
            font-weight: 700;
        }

        .user-details {
            display: flex;
            flex-direction: column;
            gap: 4px;
            min-width: 0;
        }

        .user-label {
            color: var(--muted);
            font-size: 10px;
            font-weight: 700;
            letter-spacing: 1.2px;
            text-transform: uppercase;
        }

        .user-name {
            max-width: 190px;
            overflow: hidden;
            color: var(--text);
            font-size: 14px;
            font-weight: 700;
            text-overflow: ellipsis;
            white-space: nowrap;
        }

        .user-status {
            display: inline-flex;
            align-items: center;
            gap: 5px;
            color: #a8d8b7;
            font-size: 11px;
        }

        .user-status i {
            font-size: 7px;
        }

        .nav-link {
            color: var(--muted);
            text-decoration: none;
            font-size: 13px;
            white-space: nowrap;
            transition: color .2s;
        }

        .nav-link:hover {
            color: var(--accent);
        }

        .logout-btn {
            padding: 10px 15px;
            border: 1px solid var(--border);
            border-radius: 9px;
            background: transparent;
            color: var(--text);
            cursor: pointer;
            white-space: nowrap;
            transition: .2s;
        }

        .logout-btn:hover {
            background: #38262b;
            border-color: #70404a;
            color: var(--danger);
        }

        /* Main content */

        .container {
            width: 100%;
            max-width: 1240px;
            padding: 55px 30px 75px;
            margin: 0 auto;
            flex: 1;
        }

        .eyebrow {
            display: flex;
            align-items: center;
            gap: 9px;
            margin-bottom: 17px;
            color: var(--accent);
            font-size: 11px;
            font-weight: 700;
            letter-spacing: 2px;
            text-transform: uppercase;
        }

        .eyebrow::before {
            content: "";
            width: 25px;
            height: 1px;
            background: var(--accent);
        }

        .page-header {
            display: flex;
            align-items: flex-end;
            justify-content: space-between;
            gap: 25px;
            margin-bottom: 36px;
        }

        h1 {
            font-family: 'Playfair Display', serif;
            font-size: clamp(35px, 4vw, 49px);
            font-weight: 600;
            letter-spacing: -1px;
            line-height: 1.2;
        }

        .heading-accent {
            color: var(--accent);
            font-style: italic;
        }

        .subtitle {
            margin-top: 12px;
            color: var(--muted);
            font-size: 14px;
            line-height: 1.8;
        }

        .create-btn {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            gap: 10px;
            padding: 14px 19px;
            border: 1px solid var(--accent);
            border-radius: 10px;
            background: var(--accent);
            color: #201b30;
            text-decoration: none;
            font-size: 13px;
            font-weight: 700;
            white-space: nowrap;
            transition: .2s;
        }

        .create-btn:hover {
            background: #bdb1f3;
            border-color: #bdb1f3;
            transform: translateY(-2px);
        }

        /* Success message */

        .success-message {
            display: flex;
            align-items: center;
            gap: 12px;
            padding: 15px 18px;
            margin-bottom: 28px;
            border: 1px solid #416c57;
            border-radius: 11px;
            background: #1d3027;
            color: #b8e5c9;
            font-size: 14px;
        }

        /* Section heading */

        .section-heading {
            display: flex;
            justify-content: space-between;
            align-items: center;
            gap: 15px;
            margin-bottom: 20px;
        }

        .section-heading h2 {
            font-size: 17px;
            font-weight: 600;
        }

        .portfolio-count {
            padding: 5px 10px;
            border: 1px solid var(--border);
            border-radius: 20px;
            color: var(--muted);
            font-size: 12px;
        }

        /* Portfolio grid */

        .portfolio-grid {
            display: grid;
            grid-template-columns: repeat(3, minmax(0, 1fr));
            gap: 23px;
        }

        .portfolio-card {
            min-width: 0;
            overflow: hidden;
            border: 1px solid var(--border);
            border-radius: 17px;
            background: var(--panel);
            transition: transform .25s, border-color .25s, box-shadow .25s;
        }

        .portfolio-card:hover {
            transform: translateY(-5px);
            border-color: #615681;
            box-shadow: 0 18px 40px rgba(0, 0, 0, .2);
        }

        .card-top {
            position: relative;
            height: 145px;
            background:
                radial-gradient(circle at 85% 15%, rgba(169,155,234,.35), transparent 35%),
                linear-gradient(135deg, #302943, #242329 65%, #393047);
            border-bottom: 1px solid var(--border);
        }

        .card-top::after {
            content: "F.PORFS.";
            position: absolute;
            top: 23px;
            right: 22px;
            color: rgba(242,240,237,.35);
            font-size: 11px;
            font-weight: 700;
            letter-spacing: 2px;
        }

        .profile-picture,
        .default-profile {
            position: absolute;
            bottom: -39px;
            left: 22px;
            width: 82px;
            height: 82px;
            border: 4px solid var(--panel);
            border-radius: 50%;
            background: #302943;
        }

        .profile-picture {
            object-fit: cover;
        }

        .default-profile {
            display: grid;
            place-items: center;
            color: var(--accent);
            font-size: 29px;
        }

        .card-body {
            padding: 53px 22px 22px;
        }

        .portfolio-name {
            overflow-wrap: anywhere;
            font-size: 20px;
            font-weight: 700;
            line-height: 1.4;
        }

        .portfolio-title {
            margin-top: 6px;
            color: var(--accent);
            font-size: 13px;
            line-height: 1.7;
            overflow-wrap: anywhere;
        }

        .location {
            display: flex;
            align-items: flex-start;
            gap: 8px;
            margin-top: 13px;
            color: var(--muted);
            font-size: 12px;
            line-height: 1.6;
        }

        .location i {
            margin-top: 3px;
            color: var(--accent);
        }

        .card-divider {
            height: 1px;
            margin: 21px 0 17px;
            background: var(--border);
        }

        .card-meta {
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 10px;
            margin-bottom: 17px;
        }

        .meta-label {
            color: var(--muted);
            font-size: 11px;
        }

        .template-badge {
            display: inline-flex;
            align-items: center;
            gap: 7px;
            padding: 7px 10px;
            border: 1px solid #51476d;
            border-radius: 7px;
            background: #302943;
            color: #d5cbff;
            font-size: 11px;
            font-weight: 600;
            text-transform: capitalize;
        }

        .template-simple {
            border-color: #46464d;
            background: #2a2a2e;
            color: #d2d0d9;
        }

        .template-modern {
            border-color: #454e70;
            background: #252b40;
            color: #b8c5ff;
        }

        .template-creative {
            border-color: #6b4d67;
            background: #38283a;
            color: #efc0ed;
        }

        /* View, edit and delete buttons */

        .card-actions {
            display: grid;
            grid-template-columns: 1fr 1fr 1fr;
            gap: 8px;
        }

        .action-btn {
            min-width: 0;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            gap: 7px;
            padding: 10px 7px;
            border: 1px solid var(--border);
            border-radius: 8px;
            background: transparent;
            color: var(--text);
            text-align: center;
            text-decoration: none;
            font-size: 12px;
            font-weight: 600;
            cursor: pointer;
            transition: .2s;
        }

        .action-btn:hover {
            transform: translateY(-1px);
        }

        .view-btn {
            border-color: #625487;
            background: #302943;
            color: #d5cbff;
        }

        .view-btn:hover {
            background: #403557;
        }

        .edit-btn:hover {
            border-color: var(--accent);
            color: var(--accent);
        }

        .delete-btn {
            color: var(--danger);
        }

        .delete-btn:hover {
            border-color: #70404a;
            background: #38262b;
        }

        .delete-form {
            min-width: 0;
        }

        .delete-form button {
            width: 100%;
        }

        /* Empty state */

        .empty-state {
            padding: 70px 25px;
            border: 1px dashed #514a60;
            border-radius: 18px;
            background:
                radial-gradient(circle at 50% 0%, rgba(169,155,234,.08), transparent 45%),
                var(--panel);
            text-align: center;
        }

        .empty-icon {
            width: 76px;
            height: 76px;
            display: grid;
            place-items: center;
            margin: 0 auto 24px;
            border: 1px solid #51476d;
            border-radius: 22px;
            background: #302943;
            color: var(--accent);
            font-size: 28px;
        }

        .empty-state h2 {
            font-family: 'Playfair Display', serif;
            font-size: 29px;
            font-weight: 600;
        }

        .empty-state p {
            max-width: 420px;
            margin: 13px auto 25px;
            color: var(--muted);
            font-size: 14px;
            line-height: 1.9;
        }

        /* Footer */

        footer {
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 15px;
            padding: 24px 30px;
            border-top: 1px solid var(--border);
            color: #817d8c;
            font-size: 12px;
        }

        .footer-inner {
            width: 100%;
            max-width: 1180px;
            display: flex;
            justify-content: space-between;
            gap: 15px;
            margin: auto;
        }

        .footer-logo {
            color: var(--text);
            font-weight: 700;
        }

        .footer-logo span {
            color: var(--accent);
        }

        /* Responsive layout */

        @media (max-width: 1000px) {
            .portfolio-grid {
                grid-template-columns: repeat(2, minmax(0, 1fr));
            }

            .nav-inner {
                gap: 14px;
            }

            .nav-right {
                gap: 12px;
            }
        }

        @media (max-width: 650px) {
            .nav-inner {
                align-items: flex-start;
                padding: 18px 20px;
            }

            .nav-right {
                justify-content: flex-end;
                gap: 12px;
                flex-wrap: wrap;
            }

            .user-info {
                width: 100%;
                justify-content: flex-start;
            }

            .user-name {
                max-width: 220px;
            }

            .home-link {
                display: none;
            }

            .container {
                padding: 38px 20px 55px;
            }

            .page-header {
                align-items: stretch;
                flex-direction: column;
                gap: 20px;
            }

            .create-btn {
                align-self: flex-start;
            }

            .portfolio-grid {
                grid-template-columns: 1fr;
            }

            .portfolio-card {
                max-width: 480px;
                width: 100%;
                margin: auto;
            }

            footer {
                padding: 22px 20px;
            }

            .footer-inner {
                flex-direction: column;
                align-items: center;
                text-align: center;
            }
        }

        @media (max-width: 390px) {
            .nav-inner {
                flex-direction: column;
                gap: 14px;
            }

            .nav-right {
                width: 100%;
                justify-content: space-between;
            }

            .user-info {
                width: auto;
                max-width: 100%;
            }

            .user-name {
                max-width: 180px;
            }

            .card-body {
                padding-right: 16px;
                padding-left: 16px;
            }

            .card-actions {
                gap: 6px;
            }

            .action-btn {
                gap: 4px;
                padding: 10px 4px;
                font-size: 11px;
            }
        }
    </style>
</head>

<body>

    <!-- Navigation -->
    <header class="navbar">
        <nav class="nav-inner">

            <a href="{{ url('/') }}" class="logo">
                F<span>.</span>Porfs<span>.</span>
            </a>

            <div class="nav-right">

                <!-- Current logged-in account -->
                <div class="user-info">
                    <div class="avatar">
                        {{ strtoupper(substr(Auth::user()->name, 0, 1)) }}
                    </div>

                    <div class="user-details">
                        <span class="user-label">
                            <i class="fa-solid fa-shield-halved"></i>
                            Current account
                        </span>

                        <span class="user-name">
                            {{ Auth::user()->name }}
                        </span>

                        <span class="user-status">
                            <i class="fa-solid fa-circle"></i>
                            Logged in
                        </span>
                    </div>
                </div>

                <a href="{{ url('/') }}" class="nav-link home-link">
                    <i class="fa-solid fa-arrow-left"></i>
                    Home
                </a>

                <form action="{{ route('logout') }}" method="POST">
                    @csrf

                    <button type="submit" class="logout-btn">
                        <i class="fa-solid fa-arrow-right-from-bracket"></i>
                        Logout
                    </button>
                </form>

            </div>
        </nav>
    </header>

    <!-- Main content -->
    <main class="container">

        <div class="page-header">
            <div>
                <div class="eyebrow">Your creative workspace</div>

                <h1>
                    My <span class="heading-accent">Portfolios.</span>
                </h1>

                <p class="subtitle">
                    Your work, your journey, all in one place.
                    Manage your portfolios and keep building your story.
                </p>
            </div>

            <a href="{{ route('portfolios.create') }}" class="create-btn">
                <i class="fa-solid fa-plus"></i>
                Create New Portfolio
            </a>
        </div>

        <!-- Success message -->
        @if (session('success'))
            <div class="success-message">
                <i class="fa-solid fa-circle-check"></i>
                {{ session('success') }}
            </div>
        @endif

        <!-- Portfolio collection -->
        @if ($portfolios->count() > 0)

            <div class="section-heading">
                <h2>
                    <i class="fa-regular fa-folder-open"
                       style="color: var(--accent); margin-right: 8px;"></i>
                    Your collection
                </h2>

                <span class="portfolio-count">
                    {{ $portfolios->count() }}
                    {{ $portfolios->count() === 1 ? 'portfolio' : 'portfolios' }}
                </span>
            </div>

            <div class="portfolio-grid">

                @foreach ($portfolios as $portfolio)

                    <article class="portfolio-card">

                        <div class="card-top">

                            @if ($portfolio->profile_image)
                                <img
                                    src="{{ $portfolio->profile_image }}"
                                    alt="Profile picture of {{ $portfolio->name }}"
                                    class="profile-picture"
                                    loading="lazy"
                                >
                            @else
                                <div class="default-profile">
                                    <i class="fa-solid fa-user"></i>
                                </div>
                            @endif

                        </div>

                        <div class="card-body">

                            <h2 class="portfolio-name">
                                {{ $portfolio->name }}
                            </h2>

                            @if ($portfolio->title)
                                <p class="portfolio-title">
                                    {{ $portfolio->title }}
                                </p>
                            @endif

                            @if ($portfolio->location)
                                <div class="location">
                                    <i class="fa-solid fa-location-dot"></i>
                                    <span>{{ $portfolio->location }}</span>
                                </div>
                            @endif

                            <div class="card-divider"></div>

                            <div class="card-meta">
                                <span class="meta-label">DESIGN TEMPLATE</span>

                                @if ($portfolio->template === 'simple')
                                    <span class="template-badge template-simple">
                                        <i class="fa-regular fa-file-lines"></i>
                                        Simple
                                    </span>

                                @elseif ($portfolio->template === 'modern')
                                    <span class="template-badge template-modern">
                                        <i class="fa-solid fa-layer-group"></i>
                                        Modern
                                    </span>

                                @elseif ($portfolio->template === 'creative')
                                    <span class="template-badge template-creative">
                                        <i class="fa-solid fa-wand-magic-sparkles"></i>
                                        Creative
                                    </span>

                                @else
                                    <span class="template-badge">
                                        {{ ucfirst($portfolio->template ?? 'Simple') }}
                                    </span>
                                @endif
                            </div>

                            <!-- Portfolio actions -->
                            <div class="card-actions">

                                <a
                                    href="{{ route('portfolios.show', $portfolio) }}"
                                    class="action-btn view-btn"
                                >
                                    <i class="fa-regular fa-eye"></i>
                                    View
                                </a>

                                <a
                                    href="{{ route('portfolios.edit', $portfolio) }}"
                                    class="action-btn edit-btn"
                                >
                                    <i class="fa-regular fa-pen-to-square"></i>
                                    Edit
                                </a>

                                <form
                                    action="{{ route('portfolios.destroy', $portfolio) }}"
                                    method="POST"
                                    class="delete-form"
                                    onsubmit="return confirm('Are you sure you want to delete this portfolio? This action cannot be undone.');"
                                >
                                    @csrf
                                    @method('DELETE')

                                    <button type="submit" class="action-btn delete-btn">
                                        <i class="fa-regular fa-trash-can"></i>
                                        Delete
                                    </button>
                                </form>

                            </div>
                        </div>

                    </article>

                @endforeach

            </div>

        @else

            <!-- Display when the user has no portfolios -->
            <section class="empty-state">

                <div class="empty-icon">
                    <i class="fa-solid fa-folder-open"></i>
                </div>

                <h2>Your story starts here.</h2>

                <p>
                    You haven't created a portfolio yet.
                    Bring your skills, projects, and achievements together
                    in a portfolio that feels like you.
                </p>

                <a href="{{ route('portfolios.create') }}" class="create-btn">
                    <i class="fa-solid fa-plus"></i>
                    Create Your First Portfolio
                </a>

            </section>

        @endif

    </main>

    <!-- Footer -->
    <footer>
        <div class="footer-inner">
            <span class="footer-logo">
                F<span>.</span>Porfs<span>.</span>
            </span>

            <span>
                &copy; {{ date('Y') }} — Made to showcase you.
            </span>
        </div>
    </footer>

</body>
</html>