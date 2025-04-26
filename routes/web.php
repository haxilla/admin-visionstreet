<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Super\DashboardController as SuperDashboard;
use App\Http\Controllers\Admin\DashboardController as AdminDashboard;
use App\Http\Controllers\Member\DashboardController as MemberDashboard;
use App\Http\Controllers\Guest\GuestController as Guest;
use App\Http\Controllers\Client\ClientHandleController;
use App\Http\Controllers\Data\PostgresController;
use App\Http\Controllers\Data\MysqlController;

/* ---------------- Public ---------------- */
Route::get('/', [Guest::class, 'home'])->name('home');
Route::get('/about', [Guest::class, 'about'])->name('about');
Route::get('/contact', [Guest::class, 'contact'])->name('contact');
Route::post('/login', [Guest::class, 'login'])->name('login.submit');

/* ---------------- Super ---------------- */
Route::get('/super/dashboard', [SuperDashboard::class, 'index'])->name('super.dashboard');
Route::get('/super/reports', [SuperDashboard::class, 'reports'])->name('super.reports');
Route::get('/super/safekeys', [SuperDashboard::class, 'safekeys'])->name('super.safekeys');
Route::post('/super/handle', [SuperDashboard::class, 'handle'])->name('super.handle');


/* ---------------- Admin ---------------- */
Route::get('/admin/dashboard', [AdminDashboard::class, 'index'])->name('admin.dashboard');


/* ---------------- Postgres ---------------- */
Route::get('/postgres', [PostgresController::class, 'index'])->name('admin.postgres');
Route::post('/postgres/handle', [PostgresController::class, 'handle'])->name('postgres.handle');
Route::post('/postgres/form', [PostgresController::class, 'form'])->name('postgres.form');

/* ---------------- Mysql ---------------- */
Route::get('/mysql', [MysqlController::class, 'index'])->name('admin.mysql');

/* ---------------- Member ---------------- */
Route::get('/member/dashboard', [MemberDashboard::class, 'index'])->name('member.dashboard');

/* ---------------- Clients ---------------- */
Route::post('/client/create', [ClientHandleController::class, 'create'])->name('client.create');
Route::post('/client/submit', [ClientHandleController::class, 'submit'])->name('client.submit');

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