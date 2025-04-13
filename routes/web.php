<?php

use Illuminate\Support\Facades\Route;

Route::middleware([TrustProxies::class])->group(function () {
    Route::get('_debug-proxy', function () {
        return response()->json([
            'X-Forwarded-Proto' => request()->header('X-Forwarded-Proto'),
            'isSecure()' => request()->isSecure(),
            'url()->current()' => url()->current(),
            'app_url' => config('app.url'),
        ]);
    });
});

Route::get('/', function () {
    return view('index');
});
Route::get('/php-version', function () {
    return phpversion();
});
Route::get('/tailwind-test', function () {
    return view('tailwind-test');
});
