<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});
Route::get('/php-version', function () {
    return phpversion();
});
Route::get('/tailwind-test', function () {
    return view('tailwind-test');
});

Route::domain('admin.visionstreet.co')->group(function () {
    Route::get('/super', [\App\Http\Controllers\Super\DashboardController::class, 'index']);
});

Route::get('/login', function () {
    if (auth()->check()) {
        $user = auth()->user();

        if ($user->isSuper()) {
            return redirect('/super');
        }

        if ($user->isAdmin()) {
            return redirect('/admin');
        }

        if ($user->isMember()) {
            return redirect('/member');
        }

        abort(403); // fallback if role is unknown
    }

    return view('auth.login');
});
