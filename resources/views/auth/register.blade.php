<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Account | Portfolio Generator</title>
    <style>
        * { box-sizing: border-box; }
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background: #f3f4f6;
            min-height: 100vh;
            display: grid;
            place-items: center;
            padding: 20px;
        }
        .card {
            width: 100%;
            max-width: 430px;
            padding: 32px;
            background: white;
            border-radius: 16px;
            box-shadow: 0 8px 30px #00000012;
        }
        h1 { margin-top: 0; color: #1f2937; }
        .subtitle { color: #6b7280; margin-bottom: 24px; }
        label { display: block; margin: 16px 0 7px; font-weight: bold; }
        input {
            width: 100%;
            padding: 12px;
            border: 1px solid #d1d5db;
            border-radius: 8px;
            font-size: 15px;
        }
        button {
            width: 100%;
            margin-top: 24px;
            padding: 13px;
            background: #4f46e5;
            color: white;
            border: 0;
            border-radius: 8px;
            font-size: 16px;
            cursor: pointer;
        }
        button:hover { background: #4338ca; }
        .error { color: #dc2626; font-size: 14px; margin-top: 5px; }
        .footer { text-align: center; margin-top: 20px; color: #6b7280; }
        a { color: #4f46e5; }
    </style>
</head>
<body>
    <div class="card">
        <h1>Create your account</h1>
        <p class="subtitle">Sign up to create and manage your portfolio.</p>

        @if ($errors->any())
            <div class="error">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <label for="name">Full Name</label>
            <input id="name" type="text" name="name"
                   value="{{ old('name') }}" required autocomplete="name">

            <label for="email">Email Address</label>
            <input id="email" type="email" name="email"
                   value="{{ old('email') }}" required autocomplete="email">

            <label for="password">Password</label>
            <input id="password" type="password" name="password"
                   required minlength="8" autocomplete="new-password">

            <label for="password_confirmation">Confirm Password</label>
            <input id="password_confirmation" type="password"
                   name="password_confirmation" required minlength="8"
                   autocomplete="new-password">

            <button type="submit">Create Account</button>
        </form>

        <p class="footer">
            Already have an account?
            <a href="{{ route('login') }}">Log in</a>
        </p>
    </div>
</body>
</html>
