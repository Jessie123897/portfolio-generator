<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>{{ $portfolio->name }} - Portfolio</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f5f5f5;
            color: #333;
            margin: 0;
            padding: 40px 20px;
        }

        .simple-container {
            max-width: 900px;
            margin: auto;
            background: white;
            padding: 50px;
        }

        .simple-header {
            text-align: center;
            border-bottom: 1px solid #ddd;
            padding-bottom: 30px;
        }

        .simple-header img {
            width: 140px;
            height: 140px;
            object-fit: cover;
            border-radius: 50%;
            margin-bottom: 20px;
        }

        .simple-header h1 {
            margin: 10px 0;
            font-size: 36px;
        }

        .simple-header h2 {
            margin: 0;
            font-weight: normal;
            color: #666;
        }

        .simple-section {
            padding: 25px 0;
            border-bottom: 1px solid #eee;
        }

        .simple-section h3 {
            margin-bottom: 12px;
            font-size: 22px;
        }

        .simple-contact p {
            margin: 5px 0;
        }

        .simple-back {
            display: inline-block;
            margin-top: 25px;
            text-decoration: none;
            color: #333;
        }
    </style>
</head>

<body>

<div class="simple-container">

    <div class="simple-header">

        @if ($portfolio->profile_image)
            <img
                src="{{ $portfolio->profile_image }}"
                alt="{{ $portfolio->name }}"
            >
        @endif

        <h1>{{ $portfolio->name }}</h1>

        <h2>{{ $portfolio->title }}</h2>

    </div>

    <div class="simple-section">

        <h3>About Me</h3>

        <p>
            {!! nl2br(e($portfolio->about)) !!}
        </p>

    </div>

    <div class="simple-section">

        <h3>Education</h3>

        <p>
            {!! nl2br(e($portfolio->educational_background)) !!}
        </p>

    </div>

    <div class="simple-section">

        <h3>Skills</h3>

        <p>
            {!! nl2br(e($portfolio->skills)) !!}
        </p>

    </div>

    <div class="simple-section">

        <h3>Projects</h3>

        <p>
            {!! nl2br(e($portfolio->projects)) !!}
        </p>

    </div>

    <div class="simple-section">

        <h3>Work Experience</h3>

        <p>
            {!! nl2br(e($portfolio->work_experience)) !!}
        </p>

    </div>

    <div class="simple-section">

        <h3>Contact</h3>

        <div class="simple-contact">

            @if ($portfolio->email)
                <p><strong>Email:</strong> {{ $portfolio->email }}</p>
            @endif

            @if ($portfolio->phone)
                <p><strong>Phone:</strong> {{ $portfolio->phone }}</p>
            @endif

            @if ($portfolio->location)
                <p><strong>Address:</strong> {{ $portfolio->location }}</p>
            @endif

            @if ($portfolio->social_links)
                <p><strong>Links:</strong> {{ $portfolio->social_links }}</p>
            @endif

        </div>

    </div>

    <a class="simple-back" href="{{ route('portfolios.index') }}">
        ← Back to Portfolios
    </a>

</div>

</body>
</html>