<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>{{ $portfolio->name }} - Modern Portfolio</title>

    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background: #eef2f7;
            color: #222;
        }

        .modern-header {
            background: #1f2937;
            color: white;
            padding: 60px 20px;
        }

        .modern-header-content {
            max-width: 1100px;
            margin: auto;
            display: flex;
            align-items: center;
            gap: 30px;
        }

        .modern-header img {
            width: 150px;
            height: 150px;
            object-fit: cover;
            border-radius: 20px;
        }

        .modern-header h1 {
            font-size: 42px;
            margin: 0 0 10px;
        }

        .modern-header h2 {
            font-weight: normal;
            margin: 0;
            color: #d1d5db;
        }

        .modern-container {
            max-width: 1100px;
            margin: 40px auto;
            padding: 0 20px;
        }

        .modern-grid {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 25px;
        }

        .modern-card {
            background: white;
            padding: 30px;
            border-radius: 15px;
            box-shadow: 0 5px 20px rgba(0, 0, 0, 0.08);
        }

        .modern-card h3 {
            margin-top: 0;
            font-size: 22px;
        }

        .modern-contact {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 20px;
            margin-top: 25px;
        }

        .modern-contact div {
            background: white;
            padding: 20px;
            border-radius: 12px;
        }

        .modern-back {
            display: inline-block;
            margin: 30px 0;
            text-decoration: none;
            color: #1f2937;
            font-weight: bold;
        }

        @media (max-width: 700px) {

            .modern-header-content {
                flex-direction: column;
                text-align: center;
            }

            .modern-grid {
                grid-template-columns: 1fr;
            }

            .modern-contact {
                grid-template-columns: 1fr;
            }

        }
    </style>
</head>

<body>

<header class="modern-header">

    <div class="modern-header-content">

        @if ($portfolio->profile_image)
            <img
                src="{{ $portfolio->profile_image }}"
                alt="{{ $portfolio->name }}"
            >
        @endif

        <div>
            <h1>{{ $portfolio->name }}</h1>
            <h2>{{ $portfolio->title }}</h2>
        </div>

    </div>

</header>

<main class="modern-container">

    <div class="modern-grid">

        <div class="modern-card">
            <h3>About Me</h3>
            <p>{!! nl2br(e($portfolio->about)) !!}</p>
        </div>

        <div class="modern-card">
            <h3>Education</h3>
            <p>{!! nl2br(e($portfolio->educational_background)) !!}</p>
        </div>

        <div class="modern-card">
            <h3>Skills</h3>
            <p>{!! nl2br(e($portfolio->skills)) !!}</p>
        </div>

        <div class="modern-card">
            <h3>Projects</h3>
            <p>{!! nl2br(e($portfolio->projects)) !!}</p>
        </div>

        <div class="modern-card">
            <h3>Work Experience</h3>
            <p>{!! nl2br(e($portfolio->work_experience)) !!}</p>
        </div>

        <div class="modern-card">
            <h3>Social Links</h3>
            <p>{!! nl2br(e($portfolio->social_links)) !!}</p>
        </div>

    </div>

    <div class="modern-contact">

        @if ($portfolio->email)
            <div>
                <strong>Email</strong>
                <p>{{ $portfolio->email }}</p>
            </div>
        @endif

        @if ($portfolio->phone)
            <div>
                <strong>Phone</strong>
                <p>{{ $portfolio->phone }}</p>
            </div>
        @endif

        @if ($portfolio->location)
            <div>
                <strong>Address</strong>
                <p>{{ $portfolio->location }}</p>
            </div>
        @endif

    </div>

    <a class="modern-back" href="{{ route('portfolios.index') }}">
        ← Back to Portfolios
    </a>

</main>

</body>
</html>