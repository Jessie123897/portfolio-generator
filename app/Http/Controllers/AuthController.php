public function login(Request $request)
{
    $credentials = $request->validate([
        'email' => ['required', 'email'],
        'password' => ['required', 'string'],
    ]);

    $user = User::where('email', $credentials['email'])->first();

    if (!$user || !Hash::check($credentials['password'], $user->password)) {
        return back()->withErrors([
            'email' => 'Email or password does not match.',
        ])->withInput($request->only('email'));
    }

    Auth::login($user, $request->boolean('remember'));
    $request->session()->regenerate();

    return redirect('/portfolios');
}