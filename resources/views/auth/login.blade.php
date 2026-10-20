<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login | Portfolio Generator</title>
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
        .remember { display: flex; align-items: center; gap: 8px; margin-top: 16px; }
        .remember input { width: auto; }
    </style>
</head>
<body>
    <div class="card">
        <h1>Welcome back</h1>
        <p class="subtitle">Log in to manage your portfolios.</p>

        @if ($errors->any())
            <div class="error">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <label for="email">Email Address</label>
            <input id="email" type="email" name="email"
                   value="{{ old('email') }}" required autocomplete="email">

            <label for="password">Password</label>
            <input id="password" type="password" name="password"
                   required autocomplete="current-password">

            <label class="remember">
                <input type="checkbox" name="remember" value="1">
                Remember me
            </label>

            <button type="submit">Log In</button>
        </form>

        <p class="footer">
            Don't have an account?
            <a href="{{ route('register') }}">Create an account</a>
        </p>
    </div>
</body>
</html>
