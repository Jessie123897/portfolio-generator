
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Create Portfolio — Folio</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;600;700&family=Manrope:wght@400;500;600;700;800&display=swap"
          rel="stylesheet">

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
            --border: #e7e5ee;
            --white: #ffffff;
            --danger: #dc2626;
        }

        body {
            font-family: 'DM Sans', sans-serif;
            background: var(--background);
            color: var(--text);
            min-height: 100vh;
        }

        a, button, input, textarea, select {
            font: inherit;
        }

        a:focus-visible,
        button:focus-visible,
        input:focus-visible,
        textarea:focus-visible,
        select:focus-visible {
            outline: 3px solid #b8b1ff;
            outline-offset: 3px;
        }

        /* NAVIGATION */

        .topbar {
            background: rgba(255, 255, 255, 0.9);
            border-bottom: 1px solid #e9e6df;
        }

        nav {
            max-width: 1050px;
            margin: auto;
            padding: 18px 25px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            gap: 15px;
        }

        .logo {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            color: var(--text);
            font-family: 'Manrope', sans-serif;
            font-size: 27px;
            font-weight: 800;
            letter-spacing: -1.5px;
            text-decoration: none;
        }

        .logo i,
        .logo span {
            color: var(--primary);
        }

        .logo i {
            font-size: 21px;
        }

        .nav-links {
            display: flex;
            align-items: center;
            gap: 20px;
        }

        .nav-links a {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            color: #444;
            font-size: 14px;
            font-weight: 600;
            text-decoration: none;
        }

        .nav-links a i {
            color: var(--primary);
        }

        .nav-links a:hover {
            color: var(--primary);
        }

        /* PAGE HEADER */

        .page-header {
            max-width: 900px;
            margin: 35px auto 22px;
            padding: 0 25px;
        }

        .breadcrumb {
            display: flex;
            align-items: center;
            flex-wrap: wrap;
            gap: 9px;
            margin-bottom: 20px;
            color: var(--muted);
            font-size: 13px;
        }

        .breadcrumb a {
            display: inline-flex;
            align-items: center;
            gap: 7px;
            color: var(--primary);
            text-decoration: none;
        }

        .breadcrumb a:hover {
            text-decoration: underline;
        }

        .eyebrow {
            display: flex;
            align-items: center;
            gap: 8px;
            color: var(--primary);
            font-size: 12px;
            font-weight: 700;
            letter-spacing: 1.5px;
            margin-bottom: 10px;
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
            font-size: 15px;
            line-height: 1.7;
            max-width: 650px;
        }

        /* FORM CONTAINER */

        .container {
            max-width: 900px;
            margin: 0 auto 50px;
            padding: 0 25px;
        }

        .form-card {
            background: var(--white);
            border: 1px solid var(--border);
            border-radius: 16px;
            box-shadow: 0 8px 30px rgba(34, 34, 34, 0.04);
            overflow: hidden;
        }

        .form-intro {
            padding: 20px 28px;
            background: #fbfaff;
            border-bottom: 1px solid var(--border);
            display: flex;
            align-items: center;
            gap: 13px;
        }

        .intro-icon {
            flex-shrink: 0;
            width: 43px;
            height: 43px;
            display: flex;
            align-items: center;
            justify-content: center;
            background: #eeebff;
            color: var(--primary);
            border-radius: 12px;
            font-size: 19px;
        }

        .form-intro h2 {
            font-size: 16px;
            margin-bottom: 4px;
        }

        .form-intro p {
            color: var(--muted);
            font-size: 13px;
            line-height: 1.6;
        }

        form {
            padding: 10px 28px 28px;
        }

        /* SECTIONS */

        .form-section {
            padding-top: 27px;
            margin-top: 8px;
        }

        .section-heading {
            display: flex;
            align-items: center;
            gap: 12px;
            padding-bottom: 14px;
            margin-bottom: 17px;
            border-bottom: 1px solid #eeedf2;
        }

        .section-icon {
            flex-shrink: 0;
            width: 39px;
            height: 39px;
            display: flex;
            align-items: center;
            justify-content: center;
            border-radius: 11px;
            background: #f0eeff;
            color: var(--primary);
            font-size: 16px;
        }

        .section-heading h2 {
            font-size: 17px;
            margin-bottom: 3px;
        }

        .section-heading p {
            color: var(--muted);
            font-size: 12px;
            line-height: 1.6;
        }

        /* INPUTS */

        .field-grid {
            display: grid;
            grid-template-columns: repeat(2, minmax(0, 1fr));
            gap: 19px 20px;
        }

        .field {
            min-width: 0;
        }

        .field.full-width {
            grid-column: 1 / -1;
        }

        label {
            display: flex;
            align-items: center;
            gap: 7px;
            margin-bottom: 8px;
            font-size: 13px;
            font-weight: 700;
            color: #333;
        }

        label i {
            color: var(--primary);
            font-size: 13px;
        }

        .required {
            color: var(--danger);
        }

        input,
        textarea,
        select {
            width: 100%;
            padding: 12px 13px;
            border: 1px solid #dcd9e5;
            border-radius: 8px;
            background: #fff;
            color: var(--text);
            font-size: 14px;
            transition: border-color 0.2s, box-shadow 0.2s;
        }

        input::placeholder,
        textarea::placeholder {
            color: #a09daa;
        }

        input:hover,
        textarea:hover,
        select:hover {
            border-color: #bcb5ef;
        }

        input:focus,
        textarea:focus,
        select:focus {
            border-color: var(--primary);
            box-shadow: 0 0 0 3px rgba(112, 101, 232, 0.1);
            outline: none;
        }

        textarea {
            min-height: 115px;
            resize: vertical;
            line-height: 1.65;
        }

        textarea.short-textarea {
            min-height: 90px;
        }

        input[type="file"] {
            padding: 10px;
            background: #fbfaff;
            cursor: pointer;
        }

        input[type="file"]::file-selector-button {
            margin-right: 12px;
            padding: 8px 12px;
            border: 0;
            border-radius: 6px;
            background: #eeebff;
            color: var(--primary-dark);
            font-size: 12px;
            font-weight: 700;
            cursor: pointer;
        }

        .help-text {
            margin-top: 7px;
            color: var(--muted);
            font-size: 12px;
            line-height: 1.6;
        }

        .error {
            margin-top: 7px;
            color: var(--danger);
            font-size: 13px;
            line-height: 1.5;
        }

        .error-summary {
            margin: 20px 28px 0;
            padding: 15px;
            border: 1px solid #fecaca;
            border-radius: 9px;
            background: #fef2f2;
            color: #991b1b;
        }

        .error-summary h2 {
            display: flex;
            align-items: center;
            gap: 8px;
            font-family: 'DM Sans', sans-serif;
            font-size: 14px;
            margin-bottom: 8px;
        }

        .error-summary ul {
            padding-left: 23px;
            font-size: 13px;
            line-height: 1.8;
        }

        /* TEMPLATE SELECTOR */

        .template-options {
            display: grid;
            grid-template-columns: repeat(3, minmax(0, 1fr));
            gap: 12px;
        }

        .template-option {
            position: relative;
            display: block;
            cursor: pointer;
        }

        .template-option input {
            position: absolute;
            width: 1px;
            height: 1px;
            opacity: 0;
            pointer-events: none;
        }

        .template-visual {
            display: flex;
            flex-direction: column;
            align-items: flex-start;
            height: 100%;
            min-height: 145px;
            padding: 15px;
            border: 1px solid #dedbe8;
            border-radius: 11px;
            background: white;
            transition: border-color 0.2s, background 0.2s, box-shadow 0.2s;
        }

        .template-option:hover .template-visual {
            border-color: #b6aef3;
        }

        .template-option input:checked + .template-visual {
            border: 2px solid var(--primary);
            padding: 14px;
            background: #faf9ff;
            box-shadow: 0 0 0 3px rgba(112, 101, 232, 0.08);
        }

        .template-option input:focus-visible + .template-visual {
            outline: 3px solid #b8b1ff;
            outline-offset: 3px;
        }

        .template-visual .template-icon {
            display: flex;
            align-items: center;
            justify-content: center;
            width: 38px;
            height: 38px;
            margin-bottom: 12px;
            border-radius: 10px;
            background: #eeebff;
            color: var(--primary);
            font-size: 16px;
        }

        .template-option:nth-child(2) .template-icon {
            background: #e4f4eb;
            color: #287b55;
        }

        .template-option:nth-child(3) .template-icon {
            background: #fff0e5;
            color: #b7652e;
        }

        .template-visual strong {
            font-family: 'Manrope', sans-serif;
            font-size: 13px;
            margin-bottom: 5px;
        }

        .template-visual small {
            color: var(--muted);
            font-size: 11px;
            line-height: 1.5;
        }

        .template-choice-status {
            display: flex;
            align-items: center;
            gap: 7px;
            margin-top: 12px;
            color: var(--muted);
            font-size: 12px;
            line-height: 1.5;
        }

        .template-choice-status i {
            color: var(--primary);
        }

        /* BUTTONS */

        .button-area {
            display: flex;
            align-items: center;
            gap: 12px;
            margin-top: 30px;
            padding-top: 23px;
            border-top: 1px solid #eeedf2;
        }

        .submit-button,
        .back-button {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            gap: 9px;
            min-height: 46px;
            padding: 12px 20px;
            border: 1px solid transparent;
            border-radius: 8px;
            font-size: 14px;
            font-weight: 700;
            text-decoration: none;
            cursor: pointer;
            transition: background 0.2s, transform 0.2s;
        }

        .submit-button {
            background: var(--primary);
            color: white;
        }

        .submit-button:hover {
            background: var(--primary-dark);
            transform: translateY(-1px);
        }

        .back-button {
            background: #f3f2f6;
            border-color: #e5e3ec;
            color: #444;
        }

        .back-button:hover {
            background: #eae8f1;
        }

        .privacy-note {
            display: flex;
            align-items: flex-start;
            gap: 8px;
            margin-top: 18px;
            color: var(--muted);
            font-size: 12px;
            line-height: 1.6;
        }

        .privacy-note i {
            margin-top: 2px;
            color: var(--primary);
        }

        /* FOOTER */

        footer {
            max-width: 900px;
            width: 100%;
            margin: 0 auto;
            padding: 20px 25px 25px;
            display: flex;
            justify-content: space-between;
            flex-wrap: wrap;
            gap: 10px;
            color: #92908b;
            font-size: 12px;
        }

        /* RESPONSIVE */

        @media (max-width: 600px) {
            nav {
                padding: 16px 20px;
            }

            .logo {
                font-size: 24px;
            }

            .nav-links {
                gap: 12px;
            }

            .nav-links a {
                gap: 5px;
                font-size: 12px;
            }

            .page-header {
                margin-top: 25px;
                padding: 0 20px;
            }

            .container {
                padding: 0 15px;
                margin-bottom: 30px;
            }

            .form-intro {
                padding: 17px;
            }

            form {
                padding: 5px 17px 22px;
            }

            .error-summary {
                margin: 17px 17px 0;
            }

            .field-grid {
                grid-template-columns: 1fr;
                gap: 17px;
            }

            .field.full-width {
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

            .template-visual .template-icon {
                grid-row: 1 / span 2;
                margin: 0;
            }

            .template-visual strong {
                align-self: end;
            }

            .template-visual small {
                align-self: start;
            }

            .button-area {
                flex-direction: column;
                align-items: stretch;
            }

            .submit-button,
            .back-button {
                width: 100%;
            }

            footer {
                padding: 18px 20px;
            }
        }

        @media (max-width: 360px) {
            nav {
                align-items: flex-start;
                flex-direction: column;
            }

            .nav-links {
                width: 100%;
                justify-content: space-between;
            }
        }

        @media (prefers-reduced-motion: reduce) {
            *,
            *::before,
            *::after {
                transition-duration: 0.01ms !important;
            }
        }
    </style>
</head>

<body>

    <!-- NAVIGATION -->
    <header class="topbar">
        <nav>
            <a href="{{ url('/') }}" class="logo" aria-label="Folio home">
                <i class="fa-solid fa-layer-group" aria-hidden="true"></i>
                folio<span>.</span>
            </a>

            <div class="nav-links">
                <a href="{{ url('/') }}">
                    <i class="fa-solid fa-house" aria-hidden="true"></i>
                    Home
                </a>

                <a href="{{ route('portfolios.index') }}">
                    <i class="fa-solid fa-folder-open" aria-hidden="true"></i>
                    My Portfolios
                </a>
            </div>
        </nav>
    </header>

    <!-- PAGE HEADING -->
    <div class="page-header">

        <div class="breadcrumb">
            <a href="{{ url('/') }}">
                <i class="fa-solid fa-house" aria-hidden="true"></i>
                Home
            </a>

            <i class="fa-solid fa-chevron-right" aria-hidden="true"></i>

            <span>Create Portfolio</span>
        </div>

        <p class="eyebrow">
            <i class="fa-solid fa-wand-magic-sparkles" aria-hidden="true"></i>
            LET'S GET STARTED
        </p>

        <h1>Create Your Portfolio</h1>

        <p class="page-description">
            Add your information, highlight your achievements, and choose
            a design that represents you. You can update your details later.
        </p>
    </div>

    <!-- FORM -->
    <main class="container">

        <div class="form-card">

            <div class="form-intro">
                <div class="intro-icon">
                    <i class="fa-solid fa-file-circle-plus" aria-hidden="true"></i>
                </div>

                <div>
                    <h2>Portfolio Information</h2>
                    <p>Fill in the sections below to build your personal portfolio.</p>
                </div>
            </div>

            @if ($errors->any())
                <div class="error-summary" role="alert">
                    <h2>
                        <i class="fa-solid fa-circle-exclamation" aria-hidden="true"></i>
                        Please check your information
                    </h2>

                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form
                action="{{ route('portfolios.store') }}"
                method="POST"
                enctype="multipart/form-data"
            >
                @csrf

                <!-- PERSONAL INFORMATION -->
                <section class="form-section">
                    <div class="section-heading">
                        <div class="section-icon">
                            <i class="fa-solid fa-user" aria-hidden="true"></i>
                        </div>

                        <div>
                            <h2>Personal Information</h2>
                            <p>Tell people who you are and how to contact you.</p>
                        </div>
                    </div>

                    <div class="field-grid">

                        <div class="field">
                            <label for="name">
                                <i class="fa-solid fa-id-card" aria-hidden="true"></i>
                                Full Name <span class="required">*</span>
                            </label>

                            <input
                                type="text"
                                id="name"
                                name="name"
                                value="{{ old('name') }}"
                                placeholder="Enter your full name"
                                autocomplete="name"
                                required
                            >

                            @error('name')
                                <p class="error">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="field">
                            <label for="title">
                                <i class="fa-solid fa-briefcase" aria-hidden="true"></i>
                                Professional Title <span class="required">*</span>
                            </label>

                            <input
                                type="text"
                                id="title"
                                name="title"
                                value="{{ old('title') }}"
                                placeholder="e.g. Web Developer"
                                required
                            >

                            @error('title')
                                <p class="error">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="field">
                            <label for="email">
                                <i class="fa-solid fa-envelope" aria-hidden="true"></i>
                                Email Address
                            </label>

                            <input
                                type="email"
                                id="email"
                                name="email"
                                value="{{ old('email') }}"
                                placeholder="you@example.com"
                                autocomplete="email"
                            >

                            @error('email')
                                <p class="error">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="field">
                            <label for="phone">
                                <i class="fa-solid fa-phone" aria-hidden="true"></i>
                                Contact Number
                            </label>

                            <input
                                type="tel"
                                id="phone"
                                name="phone"
                                value="{{ old('phone') }}"
                                placeholder="Enter your contact number"
                                autocomplete="tel"
                            >

                            @error('phone')
                                <p class="error">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="field full-width">
                            <label for="location">
                                <i class="fa-solid fa-location-dot" aria-hidden="true"></i>
                                Address
                            </label>

                            <input
                                type="text"
                                id="location"
                                name="location"
                                value="{{ old('location') }}"
                                placeholder="City, Province, or Country"
                                autocomplete="address-level2"
                            >

                            @error('location')
                                <p class="error">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="field full-width">
                            <label for="about">
                                <i class="fa-solid fa-comment-dots" aria-hidden="true"></i>
                                About Me
                            </label>

                            <textarea
                                id="about"
                                name="about"
                                placeholder="Introduce yourself, describe your interests, and explain what you do..."
                            >{{ old('about') }}</textarea>

                            @error('about')
                                <p class="error">{{ $message }}</p>
                            @enderror
                        </div>

                    </div>
                </section>

                <!-- PROFILE PICTURE -->
                <section class="form-section">
                    <div class="section-heading">
                        <div class="section-icon">
                            <i class="fa-solid fa-camera" aria-hidden="true"></i>
                        </div>

                        <div>
                            <h2>Profile Picture</h2>
                            <p>Add a picture to personalize your portfolio.</p>
                        </div>
                    </div>

                    <div class="field">
                        <label for="profile_image">
                            <i class="fa-solid fa-image" aria-hidden="true"></i>
                            Choose Profile Picture
                        </label>

                        <input
                            type="file"
                            id="profile_image"
                            name="profile_image"
                            accept="image/jpeg,image/png,image/webp"
                        >

                        <p class="help-text">
                            Accepted formats: JPG, JPEG, PNG, or WebP.
                            Maximum size: 2MB.
                        </p>

                        @error('profile_image')
                            <p class="error">{{ $message }}</p>
                        @enderror
                    </div>
                </section>

                <!-- EDUCATION -->
                <section class="form-section">
                    <div class="section-heading">
                        <div class="section-icon">
                            <i class="fa-solid fa-graduation-cap" aria-hidden="true"></i>
                        </div>

                        <div>
                            <h2>Educational Background</h2>
                            <p>Include your school, course, and educational achievements.</p>
                        </div>
                    </div>

                    <div class="field">
                        <label for="educational_background">
                            <i class="fa-solid fa-school" aria-hidden="true"></i>
                            Education Details
                        </label>

                        <textarea
                            id="educational_background"
                            name="educational_background"
                            placeholder="e.g. BS Information Technology — Cebu Eastern College, 2026"
                        >{{ old('educational_background') }}</textarea>

                        @error('educational_background')
                            <p class="error">{{ $message }}</p>
                        @enderror
                    </div>
                </section>

                <!-- SKILLS -->
                <section class="form-section">
                    <div class="section-heading">
                        <div class="section-icon">
                            <i class="fa-solid fa-lightbulb" aria-hidden="true"></i>
                        </div>

                        <div>
                            <h2>Skills</h2>
                            <p>Show the abilities and technologies you know.</p>
                        </div>
                    </div>

                    <div class="field">
                        <label for="skills">
                            <i class="fa-solid fa-code" aria-hidden="true"></i>
                            Your Skills
                        </label>

                        <textarea
                            id="skills"
                            name="skills"
                            class="short-textarea"
                            placeholder="e.g. HTML, CSS, JavaScript, PHP, Laravel"
                        >{{ old('skills') }}</textarea>

                        @error('skills')
                            <p class="error">{{ $message }}</p>
                        @enderror
                    </div>
                </section>

                <!-- PROJECTS -->
                <section class="form-section">
                    <div class="section-heading">
                        <div class="section-icon">
                            <i class="fa-solid fa-folder-open" aria-hidden="true"></i>
                        </div>

                        <div>
                            <h2>Projects</h2>
                            <p>Highlight school projects, personal projects, or other work.</p>
                        </div>
                    </div>

                    <div class="field">
                        <label for="projects">
                            <i class="fa-solid fa-laptop-code" aria-hidden="true"></i>
                            Project Details
                        </label>

                        <textarea
                            id="projects"
                            name="projects"
                            placeholder="Describe your projects, their purpose, and your role..."
                        >{{ old('projects') }}</textarea>

                        @error('projects')
                            <p class="error">{{ $message }}</p>
                        @enderror
                    </div>
                </section>

                <!-- WORK EXPERIENCE -->
                <section class="form-section">
                    <div class="section-heading">
                        <div class="section-icon">
                            <i class="fa-solid fa-building" aria-hidden="true"></i>
                        </div>

                        <div>
                            <h2>Work Experience</h2>
                            <p>Describe your previous jobs, internships, or relevant experience.</p>
                        </div>
                    </div>

                    <div class="field">
                        <label for="work_experience">
                            <i class="fa-solid fa-briefcase" aria-hidden="true"></i>
                            Experience Details
                        </label>

                        <textarea
                            id="work_experience"
                            name="work_experience"
                            placeholder="Describe your role, responsibilities, and experience. Students can include internships or relevant activities."
                        >{{ old('work_experience') }}</textarea>

                        @error('work_experience')
                            <p class="error">{{ $message }}</p>
                        @enderror
                    </div>
                </section>

                <!-- SOCIAL LINKS -->
                <section class="form-section">
                    <div class="section-heading">
                        <div class="section-icon">
                            <i class="fa-solid fa-share-nodes" aria-hidden="true"></i>
                        </div>

                        <div>
                            <h2>Social Media & Website Links</h2>
                            <p>Help visitors find your professional profiles online.</p>
                        </div>
                    </div>

                    <div class="field">
                        <label for="social_links">
                            <i class="fa-solid fa-link" aria-hidden="true"></i>
                            Your Links
                        </label>

                        <textarea
                            id="social_links"
                            name="social_links"
                            placeholder="GitHub: https://github.com/username&#10;LinkedIn: https://linkedin.com/in/username&#10;Website: https://example.com"
                        >{{ old('social_links') }}</textarea>

                        <p class="help-text">
                            Enter each link on a separate line with its name.
                        </p>

                        @error('social_links')
                            <p class="error">{{ $message }}</p>
                        @enderror
                    </div>
                </section>

                <!-- TEMPLATE SELECTION -->
                <section class="form-section">
                    <div class="section-heading">
                        <div class="section-icon">
                            <i class="fa-solid fa-palette" aria-hidden="true"></i>
                        </div>

                        <div>
                            <h2>Choose Your Template</h2>
                            <p>Select the style you want for your portfolio.</p>
                        </div>
                    </div>

                    <div class="template-options">

                        <label class="template-option">
                            <input
                                type="radio"
                                name="template"
                                value="simple"
                                {{ old('template', 'simple') === 'simple' ? 'checked' : '' }}
                                required
                            >

                            <span class="template-visual">
                                <span class="template-icon">
                                    <i class="fa-solid fa-file-lines" aria-hidden="true"></i>
                                </span>

                                <strong>Simple</strong>
                                <small>Clean and professional</small>
                            </span>
                        </label>

                        <label class="template-option">
                            <input
                                type="radio"
                                name="template"
                                value="modern"
                                {{ old('template') === 'modern' ? 'checked' : '' }}
                                required
                            >

                            <span class="template-visual">
                                <span class="template-icon">
                                    <i class="fa-solid fa-table-cells-large" aria-hidden="true"></i>
                                </span>

                                <strong>Modern</strong>
                                <small>Organized cards and sections</small>
                            </span>
                        </label>

                        <label class="template-option">
                            <input
                                type="radio"
                                name="template"
                                value="creative"
                                {{ old('template') === 'creative' ? 'checked' : '' }}
                                required
                            >

                            <span class="template-visual">
                                <span class="template-icon">
                                    <i class="fa-solid fa-paintbrush" aria-hidden="true"></i>
                                </span>

                                <strong>Creative</strong>
                                <small>Bold and expressive</small>
                            </span>
                        </label>

                    </div>

                    <p class="template-choice-status">
                        <i class="fa-solid fa-circle-info" aria-hidden="true"></i>
                        Choose one template. You can change your selection when editing if your system supports it.
                    </p>

                    @error('template')
                        <p class="error">{{ $message }}</p>
                    @enderror
                </section>

                <!-- ACTIONS -->
                <div class="button-area">

                    <button type="submit" class="submit-button">
                        <i class="fa-solid fa-circle-plus" aria-hidden="true"></i>
                        Create Portfolio
                        <i class="fa-solid fa-arrow-right" aria-hidden="true"></i>
                    </button>

                    <a href="{{ route('portfolios.index') }}" class="back-button">
                        <i class="fa-solid fa-xmark" aria-hidden="true"></i>
                        Cancel
                    </a>

                </div>

                <p class="privacy-note">
                    <i class="fa-solid fa-circle-info" aria-hidden="true"></i>
                    Review your details before submitting. Fields without an asterisk
                    are optional in this form, subject to your controller's validation rules.
                </p>

            </form>
        </div>
    </main>

    <footer>
        <span>&copy; {{ date('Y') }} Folio.</span>
        <span>Made to showcase you.</span>
    </footer>

</body>
</html>
