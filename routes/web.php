<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Super\DashboardController as SuperDashboard;
use App\Http\Controllers\Admin\DashboardController as AdminDashboard;
use App\Http\Controllers\Member\DashboardController as MemberDashboard;
use App\Http\Controllers\Guest\GuestController as Guest;

/* ---------------- Public ---------------- */
Route::get('/', [Guest::class, 'home'])->name('home');
Route::get('/about', [Guest::class, 'about'])->name('about');
Route::get('/contact', [Guest::class, 'contact'])->name('contact');
Route::post('/login', [Guest::class, 'login'])->name('login.submit');

/* ---------------- Super ---------------- */
Route::get('/super/dashboard', [SuperDashboard::class, 'index'])->name('super.dashboard');
Route::get('/super/reports', [SuperDashboard::class, 'reports'])->name('super.reports');

/* ---------------- Admin ---------------- */
Route::get('/admin/dashboard', [AdminDashboard::class, 'index'])->name('admin.dashboard');

/* ---------------- Member ---------------- */
Route::get('/member/dashboard', [MemberDashboard::class, 'index'])->name('member.dashboard');


/********************************************/
//useful somewhere at some point
Route::get('/php-version', function () {
    return phpversion();});

//logouts (per role)
Route::post('/logout', function () {
    $role = Auth::user()->role ?? 'guest';

    Auth::logout();
    request()->session()->invalidate();
    request()->session()->regenerateToken();

    // Redirect based on role
    switch ($role) {
        case 'super':
            return redirect('/super/dashboard');
        case 'admin':
            return redirect('/admin/login');
        case 'member':
            return redirect('/member/login');
        default:
            return redirect('/login');
    }
})->name('logout');