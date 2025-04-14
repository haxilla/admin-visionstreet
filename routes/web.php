<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});
Route::get('/php-version', function () {
    return phpversion();
});

/* ---------------- Super ---------------- */
Route::get('/super/dashboard', [SuperDashboard::class, 'index'])->name('super.dashboard');
Route::get('/super/reports', [SuperDashboard::class, 'reports'])->name('super.reports');

/* ---------------- Admin ---------------- */
Route::get('/admin/dashboard', [AdminDashboard::class, 'index'])->name('admin.dashboard');

/* ---------------- Member ---------------- */
Route::get('/member/dashboard', [MemberDashboard::class, 'index'])->name('member.dashboard');
