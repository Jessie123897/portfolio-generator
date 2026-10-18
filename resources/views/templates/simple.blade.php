<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>{{ $portfolio->name }} - Portfolio</title>

    <!-- Font Awesome Icons -->
    <link rel="stylesheet"
          href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">

    <style>
        * {
            box-sizing: border-box;
        }

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
            border-radius: 12px;
            box-shadow: 0 5px 25px rgba(0, 0, 0, 0.06);
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
            display: flex;
            align-items: center;
            gap: 12px;
        }

        .simple-section h3 i {
            color: #7065e8;
            width: 25px;
            text-align: center;
        }

        .simple-section p {
            line-height: 1.7;
            overflow-wrap: anywhere;
        }

        .simple-contact p {
            margin: 12px 0;
            display: flex;
            align-items: flex-start;
            gap: 12px;
        }

        .simple-contact i {
            color: #7065e8;
            width: 20px;
            margin-top: 4px;
            text-align: center;
        }

        .simple-contact a {
            color: #5d50d7;
            text-decoration: none;
        }

        .simple-contact a:hover {
            text-decoration: underline;
        }

        .simple-back {
            display: inline-flex;
            align-items: center;
            gap: 10px;
            margin-top: 25px;
            text-decoration: none;
            color: #333;
            padding: 12px 16px;
            background: #f1f0ff;
            border-radius: 8px;
            transition: 0.2s;
        }

        .simple-back:hover {
            background: #e4e1ff;
        }

        @media (max-width: 600px) {
            body {
                padding: 15px;
            }

            .simple-container {
                padding: 25px 20px;
            }

            .simple-header h1 {
                font-size: 28px;
            }

            .simple-header h2 {
                font-size: 18px;
            }
        }
    </style>
</head>

<body>

<div class="simple-container">

    <!-- Profile Header -->
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

    <!-- About Me -->
    <div class="simple-section">
        <h3><i class="fa-solid fa-user"></i> About Me</h3>
        <p>{!! nl2br(e($portfolio->about ?? '')) !!}</p>
    </div>

    <!-- Education -->
    <div class="simple-section">
        <h3><i class="fa-solid fa-graduation-cap"></i> Education</h3>
        <p>{!! nl2br(e($portfolio->educational_background ?? '')) !!}</p>
    </div>

    <!-- Skills -->
    <div class="simple-section">
        <h3><i class="fa-solid fa-lightbulb"></i> Skills</h3>
        <p>{!! nl2br(e($portfolio->skills ?? '')) !!}</p>
    </div>

    <!-- Projects -->
    <div class="simple-section">
        <h3><i class="fa-solid fa-folder-open"></i> Projects</h3>
        <p>{!! nl2br(e($portfolio->projects ?? '')) !!}</p>
    </div>

    <!-- Work Experience -->
    <div class="simple-section">
        <h3><i class="fa-solid fa-briefcase"></i> Work Experience</h3>
        <p>{!! nl2br(e($portfolio->work_experience ?? '')) !!}</p>
    </div>

    <!-- Contact -->
    <div class="simple-section">
        <h3><i class="fa-solid fa-address-card"></i> Contact</h3>

        <div class="simple-contact">

            @if ($portfolio->email)
                <p>
                    <i class="fa-solid fa-envelope"></i>
                    <span>
                        <strong>Email:</strong>
                        <a href="mailto:{{ $portfolio->email }}">
                            {{ $portfolio->email }}
                        </a>
                    </span>
                </p>
            @endif

            @if ($portfolio->phone)
                <p>
                    <i class="fa-solid fa-phone"></i>
                    <span>
                        <strong>Phone:</strong>
                        {{ $portfolio->phone }}
                    </span>
                </p>
            @endif

            @if ($portfolio->location)
                <p>
                    <i class="fa-solid fa-location-dot"></i>
                    <span>
                        <strong>Address:</strong>
                        {{ $portfolio->location }}
                    </span>
                </p>
            @endif

            @if ($portfolio->social_links)
                <p>
                    <i class="fa-solid fa-link"></i>
                    <span>
                        <strong>Social Links:</strong><br>
                        {!! nl2br(e($portfolio->social_links)) !!}
                    </span>
                </p>
            @endif

        </div>
    </div>

    <!-- Back Button -->
    <a class="simple-back" href="{{ route('portfolios.index') }}">
        <i class="fa-solid fa-arrow-left"></i>
        Back to Portfolios
    </a>

</div>

</body>
</html>