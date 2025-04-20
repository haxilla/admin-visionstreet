<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Super\DashboardController as SuperDashboard;
use App\Http\Controllers\Admin\DashboardController as AdminDashboard;
use App\Http\Controllers\Member\DashboardController as MemberDashboard;
use App\Http\Controllers\Guest\GuestController as Guest;
use App\Http\Controllers\HandleController;
use App\Http\Controllers\Client\ClientHandleController;


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

/* ---------------- Clients ---------------- */
Route::post('/clients/create', [ClientHandleController::class, 'create'])->name('clients.create');

/* ---- Internal Request Handler -- */
Route::post('/handle', [HandleController::class, 'handle'])->name('handle');

// Temporary or diagnostic
Route::get('/php-version', fn() => phpversion())->name('php.version');

// Role-based logout
Route::post('/logout', function () {
    $role = Auth::user()->role ?? 'guest';

    Auth::logout();
    request()->session()->invalidate();
    request()->session()->regenerateToken();

    return match ($role) {
        'super'  => redirect('/super/dashboard'),
        'admin'  => redirect('/admin/dashboard'),
        'member' => redirect('/member/dashboard'),
        default  => redirect('/login'),
    };
})->name('logout');
