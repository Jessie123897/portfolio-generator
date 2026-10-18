<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Create Portfolio</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f4f6f8;
            margin: 0;
            padding: 30px;
        }

        .container {
            max-width: 900px;
            margin: auto;
            background: white;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.08);
        }

        h1 {
            margin-bottom: 25px;
        }

        h2 {
            margin-top: 30px;
            border-bottom: 1px solid #ddd;
            padding-bottom: 8px;
        }

        label {
            display: block;
            margin-top: 15px;
            margin-bottom: 6px;
            font-weight: bold;
        }

        input,
        textarea,
        select {
            width: 100%;
            padding: 10px;
            box-sizing: border-box;
            border: 1px solid #ccc;
            border-radius: 6px;
            font-size: 15px;
        }

        textarea {
            min-height: 120px;
            resize: vertical;
        }

        input[type="file"] {
            padding: 8px;
            background: #fafafa;
        }

        .help-text {
            color: #666;
            font-size: 14px;
            margin-top: 5px;
        }

        .error {
            color: red;
            font-size: 14px;
            margin-top: 5px;
        }

        .button-area {
            margin-top: 30px;
            display: flex;
            gap: 10px;
        }

        button,
        .back-button {
            padding: 12px 20px;
            border: none;
            border-radius: 6px;
            cursor: pointer;
            text-decoration: none;
            font-size: 15px;
        }

        button {
            background: #2563eb;
            color: white;
        }

        button:hover {
            background: #1d4ed8;
        }

        .back-button {
            background: #6b7280;
            color: white;
        }

        .back-button:hover {
            background: #4b5563;
        }
    </style>
</head>

<body>

<div class="container">

    <h1>Create Your Portfolio</h1>

    @if ($errors->any())
        <div class="error">
            <strong>Please fix the following errors:</strong>

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

        <h2>Personal Information</h2>

        <label for="name">Full Name</label>

        <input
            type="text"
            id="name"
            name="name"
            value="{{ old('name') }}"
            required
        >

        @error('name')
            <p class="error">{{ $message }}</p>
        @enderror


        <label for="title">Professional Title</label>

        <input
            type="text"
            id="title"
            name="title"
            value="{{ old('title') }}"
            placeholder="Example: Web Developer"
            required
        >

        @error('title')
            <p class="error">{{ $message }}</p>
        @enderror


        <label for="about">About Me</label>

        <textarea
            id="about"
            name="about"
            placeholder="Tell something about yourself..."
        >{{ old('about') }}</textarea>


        <label for="email">Email</label>

        <input
            type="email"
            id="email"
            name="email"
            value="{{ old('email') }}"
        >

        @error('email')
            <p class="error">{{ $message }}</p>
        @enderror


        <label for="phone">Contact Number</label>

        <input
            type="text"
            id="phone"
            name="phone"
            value="{{ old('phone') }}"
        >


        <label for="location">Address</label>

        <input
            type="text"
            id="location"
            name="location"
            value="{{ old('location') }}"
        >


        <h2>Profile Picture</h2>

        <label for="profile_image">Choose Profile Picture</label>

        <input
            type="file"
            id="profile_image"
            name="profile_image"
            accept="image/jpeg,image/png,image/webp"
        >

        <p class="help-text">
            Accepted formats: JPG, JPEG, PNG, or WebP. Maximum size: 2MB.
        </p>

        @error('profile_image')
            <p class="error">{{ $message }}</p>
        @enderror


        <h2>Educational Background</h2>

        <label for="educational_background">
            Educational Background
        </label>

        <textarea
            id="educational_background"
            name="educational_background"
            placeholder="Example: BS Information Technology - Cebu Eastern College, 2026"
        >{{ old('educational_background') }}</textarea>


        <h2>Skills</h2>

        <label for="skills">Skills</label>

        <textarea
            id="skills"
            name="skills"
            placeholder="Example: HTML, CSS, JavaScript, PHP, Laravel, MySQL"
        >{{ old('skills') }}</textarea>


        <h2>Projects</h2>

        <label for="projects">Projects</label>

        <textarea
            id="projects"
            name="projects"
            placeholder="Describe your projects..."
        >{{ old('projects') }}</textarea>


        <h2>Work Experience</h2>

        <label for="work_experience">
            Work Experience
        </label>

        <textarea
            id="work_experience"
            name="work_experience"
            placeholder="Describe your work experience..."
        >{{ old('work_experience') }}</textarea>


        <h2>Social Media / Website Links</h2>

        <label for="social_links">
            Social Media / Website Links
        </label>

        <textarea
            id="social_links"
            name="social_links"
            placeholder="Example: GitHub: https://github.com/username&#10;LinkedIn: https://linkedin.com/in/username"
        >{{ old('social_links') }}</textarea>


        <h2>Choose Portfolio Template</h2>

        <label for="template">Template</label>

        <select
            id="template"
            name="template"
            required
        >
            <option value="">-- Select Template --</option>

            <option
                value="simple"
                {{ old('template') === 'simple' ? 'selected' : '' }}
            >
                Simple
            </option>

            <option
                value="modern"
                {{ old('template') === 'modern' ? 'selected' : '' }}
            >
                Modern
            </option>

            <option
                value="creative"
                {{ old('template') === 'creative' ? 'selected' : '' }}
            >
                Creative
            </option>
        </select>

        @error('template')
            <p class="error">{{ $message }}</p>
        @enderror


        <div class="button-area">

            <button type="submit">
                Create Portfolio
            </button>

            <a
                href="{{ route('portfolios.index') }}"
                class="back-button"
            >
                Cancel
            </a>

        </div>

    </form>

</div>

</body>
</html>