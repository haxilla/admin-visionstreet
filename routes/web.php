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
