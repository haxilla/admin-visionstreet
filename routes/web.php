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
