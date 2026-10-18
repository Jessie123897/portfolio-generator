<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>My Portfolios</title>

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: Arial, sans-serif;
        }

        body {
            background: #f4f7fb;
            color: #1f2937;
        }

        /* Navigation */

        nav {
            background: white;
            padding: 18px 7%;
            display: flex;
            justify-content: space-between;
            align-items: center;
            border-bottom: 1px solid #e5e7eb;
        }

        .logo {
            font-size: 22px;
            font-weight: bold;
            color: #2563eb;
        }

        .home-link {
            text-decoration: none;
            color: #374151;
            font-weight: 500;
        }

        .home-link:hover {
            color: #2563eb;
        }

        /* Main */

        .container {
            width: 86%;
            max-width: 1200px;
            margin: 50px auto;
        }

        .page-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 35px;
            gap: 20px;
        }

        .page-header h1 {
            font-size: 36px;
            margin-bottom: 8px;
        }

        .page-header p {
            color: #6b7280;
        }

        .create-btn {
            background: #2563eb;
            color: white;
            text-decoration: none;
            padding: 13px 20px;
            border-radius: 8px;
            font-weight: bold;
            white-space: nowrap;
        }

        .create-btn:hover {
            background: #1d4ed8;
        }

        /* Success Message */

        .success-message {
            background: #dcfce7;
            color: #166534;
            padding: 14px 18px;
            border-radius: 8px;
            margin-bottom: 25px;
            border: 1px solid #bbf7d0;
        }

        /* Portfolio Grid */

        .portfolio-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 25px;
        }

        /* Portfolio Card */

        .portfolio-card {
            background: white;
            border-radius: 16px;
            overflow: hidden;
            border: 1px solid #e5e7eb;
            box-shadow: 0 5px 20px rgba(0, 0, 0, 0.05);
            transition: 0.25s;
        }

        .portfolio-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 12px 30px rgba(0, 0, 0, 0.10);
        }

        /* Card Top */

        .card-top {
            height: 120px;
            background: linear-gradient(
                135deg,
                #2563eb,
                #60a5fa
            );
            position: relative;
        }

        /* Profile Picture */

        .profile-picture {
            width: 95px;
            height: 95px;
            border-radius: 50%;
            object-fit: cover;
            border: 5px solid white;
            position: absolute;
            left: 25px;
            bottom: -45px;
            background: #e5e7eb;
        }

        .default-profile {
            width: 95px;
            height: 95px;
            border-radius: 50%;
            border: 5px solid white;
            position: absolute;
            left: 25px;
            bottom: -45px;
            background: #dbeafe;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 38px;
        }

        /* Card Body */

        .card-body {
            padding: 60px 25px 25px;
        }

        .card-body h2 {
            font-size: 23px;
            margin-bottom: 6px;
        }

        .title {
            color: #2563eb;
            font-weight: 600;
            margin-bottom: 15px;
        }

        .location {
            color: #6b7280;
            font-size: 14px;
            margin-bottom: 18px;
        }

        /* Template Badge */

        .template-badge {
            display: inline-block;
            padding: 6px 12px;
            border-radius: 20px;
            font-size: 12px;
            font-weight: bold;
            text-transform: capitalize;
            margin-bottom: 20px;
        }

        .template-simple {
            background: #f3f4f6;
            color: #374151;
        }

        .template-modern {
            background: #dbeafe;
            color: #1d4ed8;
        }

        .template-creative {
            background: #fef3c7;
            color: #92400e;
        }

        /* Buttons */

        .card-actions {
            display: flex;
            gap: 8px;
            flex-wrap: wrap;
        }

        .action-btn {
            text-decoration: none;
            padding: 9px 13px;
            border-radius: 7px;
            font-size: 13px;
            font-weight: bold;
            border: none;
            cursor: pointer;
        }

        .view-btn {
            background: #2563eb;
            color: white;
        }

        .edit-btn {
            background: #f3f4f6;
            color: #374151;
        }

        .delete-btn {
            background: #fee2e2;
            color: #dc2626;
        }

        .action-btn:hover {
            opacity: 0.85;
        }

        /* Empty State */

        .empty-state {
            background: white;
            border: 2px dashed #d1d5db;
            border-radius: 16px;
            padding: 70px 30px;
            text-align: center;
        }

        .empty-icon {
            font-size: 55px;
            margin-bottom: 20px;
        }

        .empty-state h2 {
            margin-bottom: 10px;
        }

        .empty-state p {
            color: #6b7280;
            margin-bottom: 25px;
        }

        /* Footer */

        footer {
            text-align: center;
            padding: 30px;
            margin-top: 60px;
            color: #6b7280;
            font-size: 14px;
        }

        /* Responsive */

        @media (max-width: 950px) {

            .portfolio-grid {
                grid-template-columns: repeat(2, 1fr);
            }
        }

        @media (max-width: 650px) {

            .container {
                width: 92%;
                margin-top: 30px;
            }

            .page-header {
                flex-direction: column;
                align-items: flex-start;
            }

            .portfolio-grid {
                grid-template-columns: 1fr;
            }

            .page-header h1 {
                font-size: 30px;
            }

            nav {
                padding: 18px 5%;
            }
        }
    </style>
</head>

<body>

    <!-- Navigation -->

    <nav>

        <div class="logo">
            Portfolio Generator
        </div>

        <a
            href="{{ url('/') }}"
            class="home-link"
        >
            ← Home
        </a>

    </nav>


    <!-- Main Content -->

    <main class="container">

        <!-- Page Header -->

        <div class="page-header">

            <div>
                <h1>My Portfolios</h1>

                <p>
                    Manage and view your created portfolios.
                </p>
            </div>

            <a
                href="{{ route('portfolios.create') }}"
                class="create-btn"
            >
                + Create New Portfolio
            </a>

        </div>


        <!-- Success Message -->

        @if (session('success'))

            <div class="success-message">
                {{ session('success') }}
            </div>

        @endif


        <!-- Portfolio List -->

        @if ($portfolios->count() > 0)

            <div class="portfolio-grid">

                @foreach ($portfolios as $portfolio)

                    <div class="portfolio-card">

                        <!-- Card Header -->

                        <div class="card-top">

                            @if ($portfolio->profile_image)

                                <img
                                    src="{{ $portfolio->profile_image }}"
                                    alt="{{ $portfolio->name }}"
                                    class="profile-picture"
                                >

                            @else

                                <div class="default-profile">
                                    👤
                                </div>

                            @endif

                        </div>


                        <!-- Card Content -->

                        <div class="card-body">

                            <h2>
                                {{ $portfolio->name }}
                            </h2>

                            <div class="title">
                                {{ $portfolio->title }}
                            </div>


                            @if ($portfolio->location)

                                <div class="location">
                                    📍 {{ $portfolio->location }}
                                </div>

                            @endif


                            <!-- Template -->

                            @if ($portfolio->template === 'simple')

                                <span class="template-badge template-simple">
                                    📄 Simple Template
                                </span>

                            @elseif ($portfolio->template === 'modern')

                                <span class="template-badge template-modern">
                                    💼 Modern Template
                                </span>

                            @elseif ($portfolio->template === 'creative')

                                <span class="template-badge template-creative">
                                    🎨 Creative Template
                                </span>

                            @endif


                            <!-- Actions -->

                            <div class="card-actions">

                                <a
                                    href="{{ route('portfolios.show', $portfolio) }}"
                                    class="action-btn view-btn"
                                >
                                    View
                                </a>

                                <a
                                    href="{{ route('portfolios.edit', $portfolio) }}"
                                    class="action-btn edit-btn"
                                >
                                    Edit
                                </a>

                                <form
                                    action="{{ route('portfolios.destroy', $portfolio) }}"
                                    method="POST"
                                    onsubmit="return confirm('Are you sure you want to delete this portfolio?');"
                                >

                                    @csrf
                                    @method('DELETE')

                                    <button
                                        type="submit"
                                        class="action-btn delete-btn"
                                    >
                                        Delete
                                    </button>

                                </form>

                            </div>

                        </div>

                    </div>

                @endforeach

            </div>

        @else

            <!-- Empty State -->

            <div class="empty-state">

                <div class="empty-icon">
                    📁
                </div>

                <h2>
                    No Portfolios Yet
                </h2>

                <p>
                    You haven't created a portfolio yet.
                    Start creating your professional portfolio today.
                </p>

                <a
                    href="{{ route('portfolios.create') }}"
                    class="create-btn"
                >
                    Create My First Portfolio
                </a>

            </div>

        @endif

    </main>


    <!-- Footer -->

    <footer>

        Online Portfolio Template Generator
    </footer>

</body>
</html>