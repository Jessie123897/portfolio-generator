```html
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>{{ $portfolio->name }} - Modern Portfolio</title>

    <!-- Font Awesome Icons -->
    <link rel="stylesheet"
          href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">

    <style>
        * {
            box-sizing: border-box;
        }

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
            grid-template-columns: repeat(2, minmax(0, 1fr));
            gap: 25px;
        }

        .modern-card {
            background: white;
            padding: 30px;
            border-radius: 15px;
            box-shadow: 0 5px 20px rgba(0, 0, 0, 0.08);
            overflow-wrap: anywhere;
        }

        .modern-card h3 {
            margin-top: 0;
            font-size: 22px;
            display: flex;
            align-items: center;
            gap: 12px;
        }

        .modern-card h3 i {
            color: #7065e8;
            width: 25px;
            text-align: center;
        }

        .modern-card p {
            line-height: 1.7;
            white-space: normal;
        }

        .modern-contact {
            display: grid;
            grid-template-columns: repeat(3, minmax(0, 1fr));
            gap: 20px;
            margin-top: 25px;
        }

        .modern-contact div {
            background: white;
            padding: 22px;
            border-radius: 12px;
            overflow-wrap: anywhere;
            box-shadow: 0 5px 20px rgba(0, 0, 0, 0.04);
        }

        .modern-contact h3 {
            margin-top: 0;
            display: flex;
            align-items: center;
            gap: 10px;
            font-size: 17px;
        }

        .modern-contact i {
            color: #7065e8;
        }

        .modern-contact p {
            line-height: 1.6;
            margin-bottom: 0;
        }

        .modern-contact a {
            color: #5d50d7;
            text-decoration: none;
        }

        .modern-contact a:hover {
            text-decoration: underline;
        }

        .modern-back {
            display: inline-flex;
            align-items: center;
            gap: 10px;
            margin: 30px 0;
            padding: 12px 18px;
            background: white;
            border-radius: 8px;
            text-decoration: none;
            color: #1f2937;
            font-weight: bold;
            transition: 0.2s;
        }

        .modern-back:hover {
            background: #e2e5ed;
        }

        @media (max-width: 700px) {
            .modern-header-content {
                flex-direction: column;
                text-align: center;
            }

            .modern-header h1 {
                font-size: 32px;
            }

            .modern-grid,
            .modern-contact {
                grid-template-columns: 1fr;
            }

            .modern-card {
                padding: 24px;
            }
        }
    </style>
</head>

<body>

<!-- Profile Header -->
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

    <!-- Portfolio Information Cards -->
    <div class="modern-grid">

        <div class="modern-card">
            <h3><i class="fa-solid fa-user"></i> About Me</h3>
            <p>{!! nl2br(e($portfolio->about ?? '')) !!}</p>
        </div>

        <div class="modern-card">
            <h3><i class="fa-solid fa-graduation-cap"></i> Education</h3>
            <p>{!! nl2br(e($portfolio->educational_background ?? '')) !!}</p>
        </div>

        <div class="modern-card">
            <h3><i class="fa-solid fa-lightbulb"></i> Skills</h3>
            <p>{!! nl2br(e($portfolio->skills ?? '')) !!}</p>
        </div>

        <div class="modern-card">
            <h3><i class="fa-solid fa-folder-open"></i> Projects</h3>
            <p>{!! nl2br(e($portfolio->projects ?? '')) !!}</p>
        </div>

        <div class="modern-card">
            <h3><i class="fa-solid fa-briefcase"></i> Work Experience</h3>
            <p>{!! nl2br(e($portfolio->work_experience ?? '')) !!}</p>
        </div>

        <div class="modern-card">
            <h3><i class="fa-solid fa-share-nodes"></i> Social Links</h3>
            <p>{!! nl2br(e($portfolio->social_links ?? '')) !!}</p>
        </div>

    </div>

    <!-- Contact Information -->
    <div class="modern-contact">

        @if ($portfolio->email)
            <div>
                <h3><i class="fa-solid fa-envelope"></i> Email</h3>
                <p>
                    <a href="mailto:{{ $portfolio->email }}">
                        {{ $portfolio->email }}
                    </a>
                </p>
            </div>
        @endif

        @if ($portfolio->phone)
            <div>
                <h3><i class="fa-solid fa-phone"></i> Phone</h3>
                <p>{{ $portfolio->phone }}</p>
            </div>
        @endif

        @if ($portfolio->location)
            <div>
                <h3><i class="fa-solid fa-location-dot"></i> Address</h3>
                <p>{{ $portfolio->location }}</p>
            </div>
        @endif

    </div>

    <!-- Back Button -->
    <a class="modern-back" href="{{ route('portfolios.index') }}">
        <i class="fa-solid fa-arrow-left"></i>
        Back to Portfolios
    </a>

</main>

</body>
</html>
```