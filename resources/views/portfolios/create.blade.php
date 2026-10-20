
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Portfolio — F.Porfs.</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;600;700&family=Manrope:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">

    <style>
        :root {
            --bg: #171719;
            --panel: #202023;
            --panel-light: #27272c;
            --accent: #a99bea;
            --text: #f2f0ed;
            --muted: #aaa7b2;
            --border: #39383f;
            --danger: #ff929c;
            --success: #9ad9b1;
        }

        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        body {
            font-family: 'DM Sans', sans-serif;
            background: var(--bg);
            color: var(--text);
            min-height: 100vh;
            line-height: 1.6;
        }

        input, textarea, button, a {
            font: inherit;
        }

        a {
            color: inherit;
            text-decoration: none;
        }

        button, input, textarea {
            outline-color: var(--accent);
        }

        .topbar {
            border-bottom: 1px solid var(--border);
            background: rgba(23, 23, 25, .96);
        }

        nav {
            max-width: 1080px;
            margin: auto;
            padding: 17px 24px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            gap: 16px;
        }

        .logo {
            font-family: 'Manrope', sans-serif;
            font-weight: 800;
            font-size: 25px;
            letter-spacing: -1.2px;
        }

        .logo span {
            color: var(--accent);
        }

        .nav-links {
            display: flex;
            align-items: center;
            gap: 22px;
        }

        .nav-links a {
            color: var(--muted);
            font-size: 13px;
            font-weight: 600;
            transition: color .2s;
        }

        .nav-links a:hover {
            color: var(--accent);
        }

        .nav-links i {
            margin-right: 6px;
        }

        .page-header {
            max-width: 960px;
            margin: 35px auto 24px;
            padding: 0 24px;
        }

        .breadcrumb {
            display: flex;
            flex-wrap: wrap;
            align-items: center;
            gap: 10px;
            color: var(--muted);
            font-size: 12px;
            margin-bottom: 25px;
        }

        .breadcrumb a {
            color: var(--accent);
        }

        .eyebrow {
            color: var(--accent);
            font-size: 11px;
            font-weight: 700;
            letter-spacing: 1.8px;
            margin-bottom: 8px;
        }

        h1, h2, h3 {
            font-family: 'Manrope', sans-serif;
        }

        h1 {
            font-size: clamp(30px, 5vw, 42px);
            line-height: 1.2;
            letter-spacing: -1.5px;
            margin-bottom: 10px;
        }

        .page-description {
            color: var(--muted);
            max-width: 650px;
            font-size: 14px;
        }

        .container {
            max-width: 960px;
            padding: 0 24px;
            margin: 0 auto 50px;
        }

        .form-card {
            background: var(--panel);
            border: 1px solid var(--border);
            border-radius: 16px;
            overflow: hidden;
            box-shadow: 0 15px 45px rgba(0, 0, 0, .12);
        }

        .form-intro {
            padding: 23px 28px;
            border-bottom: 1px solid var(--border);
            background: linear-gradient(110deg, #26232f, #202023);
            display: flex;
            align-items: center;
            gap: 14px;
        }

        .intro-icon, .section-icon {
            display: flex;
            align-items: center;
            justify-content: center;
            flex-shrink: 0;
            background: rgba(169, 155, 234, .12);
            color: var(--accent);
            border: 1px solid rgba(169, 155, 234, .15);
        }

        .intro-icon {
            width: 46px;
            height: 46px;
            border-radius: 13px;
            font-size: 19px;
        }

        .form-intro h2 {
            font-size: 16px;
            margin-bottom: 3px;
        }

        .form-intro p {
            color: var(--muted);
            font-size: 12px;
        }

        form {
            padding: 8px 28px 30px;
        }

        .form-section {
            padding-top: 28px;
            margin-top: 4px;
        }

        .section-heading {
            display: flex;
            align-items: center;
            gap: 12px;
            padding-bottom: 15px;
            margin-bottom: 20px;
            border-bottom: 1px solid var(--border);
        }

        .section-icon {
            width: 41px;
            height: 41px;
            border-radius: 12px;
            font-size: 16px;
        }

        .section-heading h2 {
            font-size: 16px;
            margin-bottom: 3px;
        }

        .section-heading p {
            color: var(--muted);
            font-size: 12px;
        }

        .field-grid {
            display: grid;
            grid-template-columns: repeat(2, minmax(0, 1fr));
            gap: 21px 20px;
        }

        .field {
            min-width: 0;
        }

        .full-width {
            grid-column: 1 / -1;
        }

        .field label {
            display: flex;
            align-items: center;
            gap: 8px;
            color: var(--text);
            font-size: 13px;
            font-weight: 700;
            margin-bottom: 8px;
        }

        .field label i {
            width: 15px;
            color: var(--accent);
            text-align: center;
        }

        .required {
            color: var(--danger);
        }

        .optional {
            color: var(--muted);
            font-size: 11px;
            font-weight: 400;
        }

        input[type="text"],
        input[type="email"],
        input[type="tel"],
        input[type="url"],
        input[type="file"],
        textarea {
            width: 100%;
            padding: 12px 13px;
            border: 1px solid var(--border);
            border-radius: 9px;
            background: #19191c;
            color: var(--text);
            font-size: 13px;
            transition: border-color .2s, box-shadow .2s;
        }

        input::placeholder, textarea::placeholder {
            color: #777580;
        }

        input:focus, textarea:focus {
            border-color: var(--accent);
            box-shadow: 0 0 0 3px rgba(169, 155, 234, .1);
            outline: none;
        }

        textarea {
            min-height: 115px;
            resize: vertical;
            line-height: 1.7;
        }

        textarea.short-textarea {
            min-height: 95px;
        }

        .help-text {
            color: var(--muted);
            font-size: 11px;
            line-height: 1.7;
            margin-top: 7px;
        }

        .help-text i {
            color: var(--accent);
            margin-right: 4px;
        }

        input[type="file"] {
            padding: 10px;
            cursor: pointer;
        }

        input[type="file"]::file-selector-button {
            background: #302b40;
            color: var(--accent);
            border: 0;
            padding: 8px 11px;
            border-radius: 6px;
            margin-right: 10px;
            cursor: pointer;
            font-size: 12px;
            font-weight: 700;
        }

        .image-upload-box {
            border: 1px dashed #555064;
            background: rgba(169, 155, 234, .035);
            border-radius: 12px;
            padding: 18px;
        }

        .image-upload-title {
            display: flex;
            align-items: center;
            gap: 12px;
            margin-bottom: 13px;
        }

        .image-placeholder {
            width: 48px;
            height: 48px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            background: #302b40;
            color: var(--accent);
            font-size: 19px;
        }

        .image-upload-title strong {
            display: block;
            font-size: 13px;
        }

        .image-upload-title span {
            display: block;
            color: var(--muted);
            font-size: 11px;
        }

        .error-summary {
            margin: 22px 28px 0;
            padding: 15px;
            background: rgba(255, 146, 156, .08);
            border: 1px solid rgba(255, 146, 156, .35);
            border-radius: 10px;
            color: var(--danger);
        }

        .error-summary h2 {
            font-size: 14px;
            margin-bottom: 7px;
        }

        .error-summary ul {
            padding-left: 22px;
            font-size: 12px;
        }

        .error {
            color: var(--danger);
            font-size: 12px;
            margin-top: 6px;
        }

        .template-options {
            display: grid;
            grid-template-columns: repeat(3, minmax(0, 1fr));
            gap: 13px;
        }

        .template-option {
            display: block;
            position: relative;
            cursor: pointer;
        }

        .template-option input {
            position: absolute;
            opacity: 0;
            width: 1px;
            height: 1px;
        }

        .template-visual {
            display: flex;
            flex-direction: column;
            align-items: flex-start;
            height: 100%;
            min-height: 155px;
            padding: 16px;
            border: 1px solid var(--border);
            border-radius: 12px;
            background: #19191c;
            transition: border-color .2s, background .2s;
        }

        .template-option:hover .template-visual {
            border-color: #75699c;
        }

        .template-option input:checked + .template-visual {
            border: 2px solid var(--accent);
            padding: 15px;
            background: rgba(169, 155, 234, .08);
        }

        .template-option input:focus-visible + .template-visual {
            outline: 2px solid var(--accent);
            outline-offset: 3px;
        }

        .template-icon {
            width: 39px;
            height: 39px;
            display: flex;
            align-items: center;
            justify-content: center;
            border-radius: 11px;
            background: #302b40;
            color: var(--accent);
            margin-bottom: 12px;
            font-size: 16px;
        }

        .template-option:nth-child(2) .template-icon {
            background: #20372e;
            color: #9ad9b1;
        }

        .template-option:nth-child(3) .template-icon {
            background: #3a2a25;
            color: #f0b38b;
        }

        .template-visual strong {
            font-family: 'Manrope', sans-serif;
            font-size: 13px;
            margin-bottom: 4px;
        }

        .template-visual small {
            color: var(--muted);
            font-size: 11px;
            line-height: 1.6;
        }

        .template-choice-status {
            color: var(--muted);
            font-size: 11px;
            margin-top: 12px;
        }

        .template-choice-status i {
            color: var(--accent);
            margin-right: 5px;
        }

        .button-area {
            display: flex;
            flex-wrap: wrap;
            gap: 12px;
            border-top: 1px solid var(--border);
            padding-top: 24px;
            margin-top: 30px;
        }

        .submit-button, .back-button {
            min-height: 46px;
            display: inline-flex;
            justify-content: center;
            align-items: center;
            gap: 9px;
            padding: 12px 19px;
            border-radius: 9px;
            border: 1px solid transparent;
            font-size: 13px;
            font-weight: 700;
            cursor: pointer;
            transition: .2s;
        }

        .submit-button {
            background: var(--accent);
            color: #19171f;
        }

        .submit-button:hover {
            background: #c0b5fa;
            transform: translateY(-1px);
        }

        .back-button {
            color: var(--text);
            background: #29292e;
            border-color: var(--border);
        }

        .back-button:hover {
            background: #34343a;
        }

        .privacy-note {
            display: flex;
            gap: 8px;
            align-items: flex-start;
            color: var(--muted);
            font-size: 11px;
            line-height: 1.7;
            margin-top: 17px;
        }

        .privacy-note i {
            color: var(--accent);
            margin-top: 3px;
        }

        footer {
            max-width: 960px;
            margin: auto;
            padding: 0 24px 25px;
            display: flex;
            justify-content: space-between;
            flex-wrap: wrap;
            gap: 10px;
            color: #85828e;
            font-size: 11px;
        }

        @media (max-width: 650px) {
            nav {
                padding: 15px 18px;
            }

            .logo {
                font-size: 22px;
            }

            .nav-links {
                gap: 13px;
            }

            .nav-links a {
                font-size: 11px;
            }

            .nav-links i {
                margin-right: 3px;
            }

            .page-header {
                margin-top: 27px;
                padding: 0 18px;
            }

            .container {
                padding: 0 14px;
            }

            .form-intro {
                padding: 18px;
            }

            form {
                padding: 5px 18px 22px;
            }

            .error-summary {
                margin: 18px 18px 0;
            }

            .field-grid {
                grid-template-columns: 1fr;
                gap: 17px;
            }

            .full-width {
                grid-column: auto;
            }

            .template-options {
                grid-template-columns: 1fr;
            }

            .template-visual {
                min-height: auto;
                display: grid;
                grid-template-columns: 42px 1fr;
                column-gap: 12px;
                align-items: center;
            }

            .template-icon {
                grid-row: 1 / span 2;
                margin: 0;
            }

            .template-visual strong,
            .template-visual small {
                align-self: center;
            }

            .button-area {
                flex-direction: column;
            }

            .submit-button, .back-button {
                width: 100%;
            }

            footer {
                padding: 0 18px 22px;
            }
        }

        @media (max-width: 390px) {
            nav {
                align-items: flex-start;
                flex-direction: column;
            }

            .nav-links {
                width: 100%;
                justify-content: space-between;
            }
        }
    </style>
</head>
<body>

<header class="topbar">
    <nav>
        <a href="{{ url('/') }}" class="logo">
            <i class="fa-solid fa-layer-group" aria-hidden="true"></i>
            F.Porfs<span>.</span>
        </a>

        <div class="nav-links">
            <a href="{{ url('/') }}">
                <i class="fa-solid fa-house"></i> Home
            </a>

            <a href="{{ route('portfolios.index') }}">
                <i class="fa-solid fa-folder-open"></i> My Portfolios
            </a>
        </div>
    </nav>
</header>

<div class="page-header">
    <div class="breadcrumb">
        <a href="{{ url('/') }}"><i class="fa-solid fa-house"></i> Home</a>
        <i class="fa-solid fa-chevron-right"></i>
        <span>Create Portfolio</span>
    </div>

    <p class="eyebrow">
        <i class="fa-solid fa-wand-magic-sparkles"></i>
        LET'S GET STARTED
    </p>

    <h1>Create your portfolio.</h1>

    <p class="page-description">
        Tell your story, show your skills, and highlight your achievements.
        Follow the sections below. You can edit your information later.
    </p>
</div>

<main class="container">
    <div class="form-card">

        <div class="form-intro">
            <div class="intro-icon">
                <i class="fa-solid fa-file-circle-plus"></i>
            </div>

            <div>
                <h2>Your Portfolio Details</h2>
                <p>Complete the information you want visitors to see.</p>
            </div>
        </div>

        @if ($errors->any())
            <div class="error-summary" role="alert">
                <h2>
                    <i class="fa-solid fa-circle-exclamation"></i>
                    Please check your information
                </h2>

                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('portfolios.store') }}"
              method="POST"
              enctype="multipart/form-data">
            @csrf

            <!-- PERSONAL INFORMATION -->
            <section class="form-section">
                <div class="section-heading">
                    <div class="section-icon">
                        <i class="fa-solid fa-user"></i>
                    </div>
                    <div>
                        <h2>Personal Information</h2>
                        <p>Start with your name and contact details.</p>
                    </div>
                </div>

                <div class="field-grid">
                    <div class="field">
                        <label for="name">
                            <i class="fa-solid fa-id-card"></i>
                            Full Name <span class="required">*</span>
                        </label>
                        <input type="text" id="name" name="name"
                               value="{{ old('name') }}"
                               placeholder="e.g. Juan Dela Cruz"
                               autocomplete="name" required>
                        @error('name') <p class="error">{{ $message }}</p> @enderror
                    </div>

                    <div class="field">
                        <label for="title">
                            <i class="fa-solid fa-briefcase"></i>
                            Professional Title <span class="required">*</span>
                        </label>
                        <input type="text" id="title" name="title"
                               value="{{ old('title') }}"
                               placeholder="e.g. IT Student or Web Developer"
                               required>
                        <p class="help-text">A short phrase describing what you do.</p>
                        @error('title') <p class="error">{{ $message }}</p> @enderror
                    </div>

                    <div class="field">
                        <label for="email">
                            <i class="fa-solid fa-envelope"></i>
                            Email Address <span class="optional">(optional)</span>
                        </label>
                        <input type="email" id="email" name="email"
                               value="{{ old('email') }}"
                               placeholder="you@example.com"
                               autocomplete="email">
                        @error('email') <p class="error">{{ $message }}</p> @enderror
                    </div>

                    <div class="field">
                        <label for="phone">
                            <i class="fa-solid fa-phone"></i>
                            Contact Number <span class="optional">(optional)</span>
                        </label>
                        <input type="tel" id="phone" name="phone"
                               value="{{ old('phone') }}"
                               placeholder="e.g. 09XX XXX XXXX"
                               autocomplete="tel">
                        @error('phone') <p class="error">{{ $message }}</p> @enderror
                    </div>

                    <div class="field full-width">
                        <label for="location">
                            <i class="fa-solid fa-location-dot"></i>
                            Address <span class="optional">(optional)</span>
                        </label>
                        <input type="text" id="location" name="location"
                               value="{{ old('location') }}"
                               placeholder="e.g. Cebu City, Philippines"
                               autocomplete="address-level2">
                        <p class="help-text">You can enter just your city or province instead of your full address.</p>
                        @error('location') <p class="error">{{ $message }}</p> @enderror
                    </div>

                    <div class="field full-width">
                        <label for="about">
                            <i class="fa-solid fa-comment-dots"></i>
                            About Me <span class="optional">(optional)</span>
                        </label>
                        <textarea id="about" name="about"
                                  placeholder="Introduce yourself, your interests, your goals, and what you enjoy doing...">{{ old('about') }}</textarea>
                        <p class="help-text">
                            <i class="fa-solid fa-lightbulb"></i>
                            Tip: Write 2–5 sentences about who you are and what you want to achieve.
                        </p>
                        @error('about') <p class="error">{{ $message }}</p> @enderror
                    </div>
                </div>
            </section>

            <!-- PROFILE PICTURE -->
            <section class="form-section">
                <div class="section-heading">
                    <div class="section-icon">
                        <i class="fa-solid fa-camera"></i>
                    </div>
                    <div>
                        <h2>Profile Picture</h2>
                        <p>Add a photo so people can recognize you.</p>
                    </div>
                </div>

                <div class="field">
                    <div class="image-upload-box">
                        <div class="image-upload-title">
                            <div class="image-placeholder">
                                <i class="fa-solid fa-image"></i>
                            </div>
                            <div>
                                <strong>Upload your photo</strong>
                                <span>Choose a clear, professional-looking image.</span>
                            </div>
                        </div>

                        <label for="profile_image">
                            <i class="fa-solid fa-upload"></i>
                            Choose Image <span class="optional">(optional)</span>
                        </label>

                        <input type="file" id="profile_image" name="profile_image"
                               accept="image/jpeg,image/png,image/webp">

                        <p class="help-text">
                            Accepted formats: JPG, JPEG, PNG, or WebP. Maximum size: 2MB.
                        </p>
                    </div>
                    @error('profile_image') <p class="error">{{ $message }}</p> @enderror
                </div>
            </section>

            <!-- EDUCATION -->
            <section class="form-section">
                <div class="section-heading">
                    <div class="section-icon">
                        <i class="fa-solid fa-graduation-cap"></i>
                    </div>
                    <div>
                        <h2>Educational Background</h2>
                        <p>Show where you studied and what you are learning.</p>
                    </div>
                </div>

                <div class="field">
                    <label for="educational_background">
                        <i class="fa-solid fa-school"></i>
                        Education Details <span class="optional">(optional)</span>
                    </label>
                    <textarea id="educational_background" name="educational_background"
                              placeholder="Example:&#10;BS Information Technology&#10;Cebu Eastern College&#10;Expected graduation: 2028">{{ old('educational_background') }}</textarea>
                    <p class="help-text">
                        Include your school, course, year level or graduation year, and relevant achievements.
                    </p>
                    @error('educational_background') <p class="error">{{ $message }}</p> @enderror
                </div>
            </section>

            <!-- SKILLS -->
            <section class="form-section">
                <div class="section-heading">
                    <div class="section-icon">
                        <i class="fa-solid fa-lightbulb"></i>
                    </div>
                    <div>
                        <h2>Skills</h2>
                        <p>List the things you know how to do.</p>
                    </div>
                </div>

                <div class="field">
                    <label for="skills">
                        <i class="fa-solid fa-code"></i>
                        Your Skills <span class="optional">(optional)</span>
                    </label>
                    <textarea id="skills" name="skills" class="short-textarea"
                              placeholder="Example:&#10;HTML and CSS&#10;Java and MySQL&#10;Communication and teamwork">{{ old('skills') }}</textarea>
                    <p class="help-text">
                        You can include technical skills, software you know, and personal skills.
                    </p>
                    @error('skills') <p class="error">{{ $message }}</p> @enderror
                </div>
            </section>

            <!-- PROJECTS -->
            <section class="form-section">
                <div class="section-heading">
                    <div class="section-icon">
                        <i class="fa-solid fa-folder-open"></i>
                    </div>
                    <div>
                        <h2>Projects</h2>
                        <p>Show examples of work you have completed.</p>
                    </div>
                </div>

                <div class="field">
                    <label for="projects">
                        <i class="fa-solid fa-laptop-code"></i>
                        Project Details <span class="optional">(optional)</span>
                    </label>
                    <textarea id="projects" name="projects"
                              placeholder="Example:&#10;School Task Manager — A Laravel app for managing tasks.&#10;My role: Designed the pages and connected the database.">{{ old('projects') }}</textarea>
                    <p class="help-text">
                        Include the project name, what it does, the tools used, and your role.
                        School projects are welcome.
                    </p>
                    @error('projects') <p class="error">{{ $message }}</p> @enderror
                </div>
            </section>

            <!-- WORK EXPERIENCE -->
            <section class="form-section">
                <div class="section-heading">
                    <div class="section-icon">
                        <i class="fa-solid fa-building"></i>
                    </div>
                    <div>
                        <h2>Work Experience</h2>
                        <p>Include jobs, internships, or relevant experience.</p>
                    </div>
                </div>

                <div class="field">
                    <label for="work_experience">
                        <i class="fa-solid fa-briefcase"></i>
                        Experience Details <span class="optional">(optional)</span>
                    </label>
                    <textarea id="work_experience" name="work_experience"
                              placeholder="Example:&#10;IT Intern — ABC Company, June–August 2026&#10;Assisted with computer setup and basic troubleshooting.">{{ old('work_experience') }}</textarea>
                    <p class="help-text">
                        No work experience yet? You can leave this blank or include volunteer work,
                        school responsibilities, or relevant activities.
                    </p>
                    @error('work_experience') <p class="error">{{ $message }}</p> @enderror
                </div>
            </section>

            <!-- SOCIAL LINKS -->
            <section class="form-section">
                <div class="section-heading">
                    <div class="section-icon">
                        <i class="fa-solid fa-share-nodes"></i>
                    </div>
                    <div>
                        <h2>Social Media & Website Links</h2>
                        <p>Give visitors a way to see more of your work.</p>
                    </div>
                </div>

                <div class="field">
                    <label for="social_links">
                        <i class="fa-solid fa-link"></i>
                        Your Links <span class="optional">(optional)</span>
                    </label>
                    <textarea id="social_links" name="social_links"
                              placeholder="GitHub: https://github.com/username&#10;LinkedIn: https://linkedin.com/in/username&#10;Website: https://example.com">{{ old('social_links') }}</textarea>
                    <p class="help-text">
                        Put each link on a separate line. Only include links you want to share publicly.
                    </p>
                    @error('social_links') <p class="error">{{ $message }}</p> @enderror
                </div>
            </section>

            <!-- TEMPLATE SELECTION -->
            <section class="form-section">
                <div class="section-heading">
                    <div class="section-icon">
                        <i class="fa-solid fa-palette"></i>
                    </div>
                    <div>
                        <h2>Choose Your Template</h2>
                        <p>Pick the design that best represents you.</p>
                    </div>
                </div>

                <div class="template-options">
                    <label class="template-option">
                        <input type="radio" name="template" value="simple"
                            {{ old('template', 'simple') === 'simple' ? 'checked' : '' }} required>
                        <span class="template-visual">
                            <span class="template-icon">
                                <i class="fa-solid fa-file-lines"></i>
                            </span>
                            <strong>Simple</strong>
                            <small>Clean, neat, and professional. Best for a straightforward portfolio.</small>
                        </span>
                    </label>

                    <label class="template-option">
                        <input type="radio" name="template" value="modern"
                            {{ old('template') === 'modern' ? 'checked' : '' }} required>
                        <span class="template-visual">
                            <span class="template-icon">
                                <i class="fa-solid fa-table-cells-large"></i>
                            </span>
                            <strong>Modern</strong>
                            <small>Organized cards and sections for a polished, structured look.</small>
                        </span>
                    </label>

                    <label class="template-option">
                        <input type="radio" name="template" value="creative"
                            {{ old('template') === 'creative' ? 'checked' : '' }} required>
                        <span class="template-visual">
                            <span class="template-icon">
                                <i class="fa-solid fa-paintbrush"></i>
                            </span>
                            <strong>Creative</strong>
                            <small>A bold and expressive style for showing your personality.</small>
                        </span>
                    </label>
                </div>

                <p class="template-choice-status">
                    <i class="fa-solid fa-circle-info"></i>
                    Simple is selected by default. Choose one template before creating your portfolio.
                </p>

                @error('template') <p class="error">{{ $message }}</p> @enderror
            </section>

            <!-- FORM ACTIONS -->
            <div class="button-area">
                <button type="submit" class="submit-button">
                    <i class="fa-solid fa-circle-plus"></i>
                    Create Portfolio
                    <i class="fa-solid fa-arrow-right"></i>
                </button>

                <a href="{{ route('portfolios.index') }}" class="back-button">
                    <i class="fa-solid fa-arrow-left"></i>
                    Back to My Portfolios
                </a>
            </div>

            <p class="privacy-note">
                <i class="fa-solid fa-circle-info"></i>
                Fields marked with * are required on this page. Other fields are optional here,
                but your controller may have additional validation rules. Only share contact details
                and links you are comfortable making public.
            </p>
        </form>
    </div>
</main>

<footer>
    <span>&copy; {{ date('Y') }} F.Porfs.</span>
    <span>Made to showcase you.</span>
</footer>

</body>
</html>
