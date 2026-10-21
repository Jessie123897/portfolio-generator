<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PortfolioController;
use App\Http\Controllers\AuthController;

// Welcome page
Route::get('/', function () {
    return view('welcome');
})->name('home');

// Login and Registration
Route::middleware('guest')->group(function () {
    Route::get('/register', [AuthController::class, 'showRegister'])
        ->name('register');

    Route::post('/register', [AuthController::class, 'register'])
        ->name('register.submit');

    Route::get('/login', [AuthController::class, 'showLogin'])
        ->name('login');

    Route::post('/login', [AuthController::class, 'login'])
        ->name('login.submit');
});

// Logout
Route::post('/logout', [AuthController::class, 'logout'])
    ->middleware('auth')
    ->name('logout');

// Portfolio pages — only authenticated users can access these
Route::resource('portfolios', PortfolioController::class)
    ->middleware('auth');

// TEMPORARY DEBUG ROUTE - remove after fixing
Route::get('/_debug', function (\Illuminate\Http\Request $r) {
    return response()->json([
        'is_secure_request' => $r->isSecure(),
        'url_root' => url('/'),
        'app_env' => config('app.env'),
        'app_url' => config('app.url'),
        'session_driver' => config('session.driver'),
        'session_secure_flag' => config('session.secure'),
        'session_domain' => config('session.domain'),
        'session_cookie_name' => config('session.cookie'),
        'browser_sent_session_cookie' => $r->hasCookie(config('session.cookie')),
        'auth_check' => \Illuminate\Support\Facades\Auth::check(),
        'rows_in_sessions_table' => \Illuminate\Support\Facades\DB::table('sessions')->count(),
    ]);
});
