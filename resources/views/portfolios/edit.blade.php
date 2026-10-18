<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Edit Portfolio</title>

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: Arial, sans-serif;
        }

        body {
            background: #f5f7fb;
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

        .nav-links {
            display: flex;
            gap: 20px;
        }

        .nav-links a {
            text-decoration: none;
            color: #4b5563;
            font-weight: 500;
        }

        .nav-links a:hover {
            color: #2563eb;
        }

        /* Main */

        .container {
            width: 90%;
            max-width: 950px;
            margin: 45px auto 70px;
        }

        .page-header {
            margin-bottom: 30px;
        }

        .page-header h1 {
            font-size: 36px;
            margin-bottom: 8px;
        }

        .page-header p {
            color: #6b7280;
            font-size: 16px;
        }

        /* Form Card */

        .form-card {
            background: white;
            border-radius: 16px;
            padding: 35px;
            border: 1px solid #e5e7eb;
            box-shadow: 0 5px 20px rgba(0, 0, 0, 0.04);
            margin-bottom: 25px;
        }

        .section-header {
            margin-bottom: 25px;
            padding-bottom: 15px;
            border-bottom: 1px solid #e5e7eb;
        }

        .section-header h2 {
            font-size: 21px;
            margin-bottom: 5px;
        }

        .section-header p {
            color: #6b7280;
            font-size: 14px;
        }

        /* Form */

        .form-group {
            margin-bottom: 22px;
        }

        .form-row {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 20px;
        }

        label {
            display: block;
            margin-bottom: 8px;
            font-size: 14px;
            font-weight: bold;
            color: #374151;
        }

        .required {
            color: #dc2626;
        }

        input,
        textarea,
        select {
            width: 100%;
            padding: 12px 14px;
            border: 1px solid #d1d5db;
            border-radius: 8px;
            font-size: 15px;
            background: white;
            color: #1f2937;
            outline: none;
            transition: 0.2s;
        }

        input:focus,
        textarea:focus,
        select:focus {
            border-color: #2563eb;
            box-shadow: 0 0 0 3px rgba(37, 99, 235, 0.10);
        }

        textarea {
            min-height: 120px;
            resize: vertical;
        }

        .help-text {
            margin-top: 6px;
            color: #6b7280;
            font-size: 13px;
        }

        /* Profile Picture */

        .profile-area {
            display: flex;
            align-items: center;
            gap: 25px;
            margin-bottom: 20px;
        }

        .current-image {
            width: 110px;
            height: 110px;
            border-radius: 50%;
            object-fit: cover;
            border: 4px solid #e5e7eb;
        }

        .no-image {
            width: 110px;
            height: 110px;
            border-radius: 50%;
            background: #eff6ff;
            border: 4px solid #dbeafe;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 40px;
        }

        .image-info h3 {
            margin-bottom: 7px;
            font-size: 16px;
        }

        .image-info p {
            color: #6b7280;
            font-size: 13px;
            line-height: 1.5;
        }

        input[type="file"] {
            padding: 10px;
            background: #f9fafb;
        }

        /* Errors */

        .errors {
            background: #fef2f2;
            border: 1px solid #fecaca;
            color: #b91c1c;
            padding: 15px 20px;
            border-radius: 8px;
            margin-bottom: 25px;
        }

        .errors ul {
            margin-left: 20px;
        }

        .errors li {
            margin-bottom: 4px;
        }

        /* Template Selection */

        .template-options {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 15px;
        }

        .template-option {
            position: relative;
        }

        .template-option input {
            position: absolute;
            opacity: 0;
            pointer-events: none;
        }

        .template-label {
            display: block;
            padding: 20px;
            border: 2px solid #e5e7eb;
            border-radius: 12px;
            cursor: pointer;
            transition: 0.2s;
            height: 100%;
        }

        .template-label:hover {
            border-color: #93c5fd;
            background: #f8fbff;
        }

        .template-option input:checked + .template-label {
            border-color: #2563eb;
            background: #eff6ff;
        }

        .template-icon {
            font-size: 30px;
            margin-bottom: 10px;
        }

        .template-label h3 {
            margin-bottom: 5px;
        }

        .template-label p {
            color: #6b7280;
            font-size: 13px;
            line-height: 1.4;
        }

        /* Buttons */

        .form-actions {
            display: flex;
            justify-content: space-between;
            align-items: center;
            gap: 15px;
        }

        .left-actions,
        .right-actions {
            display: flex;
            gap: 10px;
        }

        .btn {
            padding: 12px 20px;
            border-radius: 8px;
            text-decoration: none;
            font-weight: bold;
            border: none;
            cursor: pointer;
            font-size: 14px;
        }

        .btn-primary {
            background: #2563eb;
            color: white;
        }

        .btn-primary:hover {
            background: #1d4ed8;
        }

        .btn-secondary {
            background: #f3f4f6;
            color: #374151;
        }

        .btn-secondary:hover {
            background: #e5e7eb;
        }

        .btn-view {
            background: #eff6ff;
            color: #2563eb;
        }

        .btn-view:hover {
            background: #dbeafe;
        }

        /* Footer */

        footer {
            text-align: center;
            padding: 25px;
            color: #6b7280;
            font-size: 14px;
        }

        /* Mobile */

        @media (max-width: 700px) {

            .container {
                width: 94%;
                margin-top: 30px;
            }

            .form-card {
                padding: 25px 20px;
            }

            .form-row {
                grid-template-columns: 1fr;
                gap: 0;
            }

            .template-options {
                grid-template-columns: 1fr;
            }

            .profile-area {
                flex-direction: column;
                align-items: flex-start;
            }

            .form-actions {
                flex-direction: column;
                align-items: stretch;
            }

            .left-actions,
            .right-actions {
                width: 100%;
            }

            .btn {
                text-align: center;
                flex: 1;
            }

            nav {
                padding: 18px 5%;
            }

            .nav-links {
                gap: 10px;
            }

            .nav-links a {
                font-size: 14px;
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

        <div class="nav-links">

            <a href="{{ url('/') }}">
                Home
            </a>

            <a href="{{ route('portfolios.index') }}">
                My Portfolios
            </a>

        </div>

    </nav>


    <!-- Main -->

    <main class="container">

        <div class="page-header">

            <h1>Edit Portfolio</h1>

            <p>
                Update your portfolio information and design.
            </p>

        </div>


        <!-- Validation Errors -->

        @if ($errors->any())

            <div class="errors">

                <strong>
                    Please fix the following:
                </strong>

                <ul>

                    @foreach ($errors->all() as $error)

                        <li>
                            {{ $error }}
                        </li>

                    @endforeach

                </ul>

            </div>

        @endif


        <form
            action="{{ route('portfolios.update', $portfolio) }}"
            method="POST"
            enctype="multipart/form-data"
        >

            @csrf
            @method('PUT')


            <!-- Personal Information -->

            <div class="form-card">

                <div class="section-header">

                    <h2>Personal Information</h2>

                    <p>
                        Update your basic portfolio information.
                    </p>

                </div>


                <div class="form-row">

                    <div class="form-group">

                        <label for="name">
                            Full Name <span class="required">*</span>
                        </label>

                        <input
                            type="text"
                            id="name"
                            name="name"
                            value="{{ old('name', $portfolio->name) }}"
                            required
                        >

                    </div>


                    <div class="form-group">

                        <label for="title">
                            Professional Title <span class="required">*</span>
                        </label>

                        <input
                            type="text"
                            id="title"
                            name="title"
                            value="{{ old('title', $portfolio->title) }}"
                            required
                        >

                    </div>

                </div>


                <div class="form-group">

                    <label for="about">
                        About Me
                    </label>

                    <textarea
                        id="about"
                        name="about"
                        placeholder="Tell visitors about yourself..."
                    >{{ old('about', $portfolio->about) }}</textarea>

                </div>

            </div>


            <!-- Contact Information -->

            <div class="form-card">

                <div class="section-header">

                    <h2>Contact Information</h2>

                    <p>
                        Add information that visitors can use to contact you.
                    </p>

                </div>


                <div class="form-row">

                    <div class="form-group">

                        <label for="email">
                            Email
                        </label>

                        <input
                            type="email"
                            id="email"
                            name="email"
                            value="{{ old('email', $portfolio->email) }}"
                            placeholder="example@email.com"
                        >

                    </div>


                    <div class="form-group">

                        <label for="phone">
                            Contact Number
                        </label>

                        <input
                            type="text"
                            id="phone"
                            name="phone"
                            value="{{ old('phone', $portfolio->phone) }}"
                            placeholder="+63 912 345 6789"
                        >

                    </div>

                </div>


                <div class="form-group">

                    <label for="location">
                        Address
                    </label>

                    <input
                        type="text"
                        id="location"
                        name="location"
                        value="{{ old('location', $portfolio->location) }}"
                        placeholder="City, Province, Philippines"
                    >

                </div>

            </div>


            <!-- Profile Picture -->

            <div class="form-card">

                <div class="section-header">

                    <h2>Profile Picture</h2>

                    <p>
                        Update the photo displayed on your portfolio.
                    </p>

                </div>


                <div class="profile-area">

                    @if ($portfolio->profile_image)

                        <img
                            src="{{ $portfolio->profile_image }}"
                            alt="Current Profile Picture"
                            class="current-image"
                        >

                    @else

                        <div class="no-image">
                            👤
                        </div>

                    @endif


                    <div class="image-info">

                        <h3>Current Profile Picture</h3>

                        <p>
                            Upload a new image below if you want to replace
                            your current profile picture.
                        </p>

                    </div>

                </div>


                <div class="form-group">

                    <label for="profile_image">
                        New Profile Picture
                    </label>

                    <input
                        type="file"
                        id="profile_image"
                        name="profile_image"
                        accept="image/jpeg,image/png,image/webp"
                    >

                    <div class="help-text">
                        JPG, PNG, or WEBP. Maximum size: 2MB.
                        Leave empty to keep your current picture.
                    </div>

                </div>

            </div>


            <!-- Education and Skills -->

            <div class="form-card">

                <div class="section-header">

                    <h2>Education & Skills</h2>

                    <p>
                        Update your educational background and skills.
                    </p>

                </div>


                <div class="form-group">

                    <label for="educational_background">
                        Educational Background
                    </label>

                    <textarea
                        id="educational_background"
                        name="educational_background"
                        placeholder="Example: Bachelor of Science in Information Technology..."
                    >{{ old('educational_background', $portfolio->educational_background) }}</textarea>

                </div>


                <div class="form-group">

                    <label for="skills">
                        Skills
                    </label>

                    <textarea
                        id="skills"
                        name="skills"
                        placeholder="Example: Laravel, PHP, MySQL, HTML, CSS..."
                    >{{ old('skills', $portfolio->skills) }}</textarea>

                </div>

            </div>


            <!-- Projects and Experience -->

            <div class="form-card">

                <div class="section-header">

                    <h2>Projects & Experience</h2>

                    <p>
                        Showcase your projects and previous work experience.
                    </p>

                </div>


                <div class="form-group">

                    <label for="projects">
                        Projects
                    </label>

                    <textarea
                        id="projects"
                        name="projects"
                        placeholder="Describe your projects..."
                    >{{ old('projects', $portfolio->projects) }}</textarea>

                </div>


                <div class="form-group">

                    <label for="work_experience">
                        Work Experience
                    </label>

                    <textarea
                        id="work_experience"
                        name="work_experience"
                        placeholder="Describe your previous work experience..."
                    >{{ old('work_experience', $portfolio->work_experience) }}</textarea>

                </div>

            </div>


            <!-- Social Links -->

            <div class="form-card">

                <div class="section-header">

                    <h2>Social Media & Website</h2>

                    <p>
                        Add links where visitors can find you online.
                    </p>

                </div>


                <div class="form-group">

                    <label for="social_links">
                        Social Media / Website Links
                    </label>

                    <textarea
                        id="social_links"
                        name="social_links"
                        placeholder="Example:&#10;Facebook: https://facebook.com/...&#10;LinkedIn: https://linkedin.com/in/...&#10;GitHub: https://github.com/..."
                    >{{ old('social_links', $portfolio->social_links) }}</textarea>

                </div>

            </div>


            <!-- Template -->

            <div class="form-card">

                <div class="section-header">

                    <h2>Portfolio Design</h2>

                    <p>
                        Choose the design you want to use for your portfolio.
                    </p>

                </div>


                <div class="template-options">

                    <!-- Simple -->

                    <div class="template-option">

                        <input
                            type="radio"
                            id="simple"
                            name="template"
                            value="simple"
                            {{ old('template', $portfolio->template) === 'simple' ? 'checked' : '' }}
                        >

                        <label
                            for="simple"
                            class="template-label"
                        >

                            <div class="template-icon">
                                📄
                            </div>

                            <h3>
                                Simple
                            </h3>

                            <p>
                                Clean and professional layout.
                            </p>

                        </label>

                    </div>


                    <!-- Modern -->

                    <div class="template-option">

                        <input
                            type="radio"
                            id="modern"
                            name="template"
                            value="modern"
                            {{ old('template', $portfolio->template) === 'modern' ? 'checked' : '' }}
                        >

                        <label
                            for="modern"
                            class="template-label"
                        >

                            <div class="template-icon">
                                💼
                            </div>

                            <h3>
                                Modern
                            </h3>

                            <p>
                                Cards, sections, and visual elements.
                            </p>

                        </label>

                    </div>


                    <!-- Creative -->

                    <div class="template-option">

                        <input
                            type="radio"
                            id="creative"
                            name="template"
                            value="creative"
                            {{ old('template', $portfolio->template) === 'creative' ? 'checked' : '' }}
                        >

                        <label
                            for="creative"
                            class="template-label"
                        >

                            <div class="template-icon">
                                🎨
                            </div>

                            <h3>
                                Creative
                            </h3>

                            <p>
                                Unique and stylish arrangement.
                            </p>

                        </label>

                    </div>

                </div>

            </div>


            <!-- Actions -->

            <div class="form-actions">

                <div class="left-actions">

                    <a
                        href="{{ route('portfolios.index') }}"
                        class="btn btn-secondary"
                    >
                        ← Back
                    </a>

                    <a
                        href="{{ route('portfolios.show', $portfolio) }}"
                        class="btn btn-view"
                    >
                        View Portfolio
                    </a>

                </div>


                <div class="right-actions">

                    <button
                        type="submit"
                        class="btn btn-primary"
                    >
                        Save Changes
                    </button>

                </div>

            </div>

        </form>

    </main>


    <footer>
        Online Portfolio Template Generator
    </footer>

</body>
</html>