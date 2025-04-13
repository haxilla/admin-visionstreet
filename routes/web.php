<?php

use Illuminate\Support\Facades\Route;

Route::get('_debug-proxy', function () {
    return response()->json([
        'X-Forwarded-Proto' => request()->header('X-Forwarded-Proto'),
        'isSecure()' => request()->isSecure(),
        'url()->current()' => url()->current(),
        'app_url' => config('app.url'),
    ]);
})->middleware(\App\Http\Middleware\TrustProxies::class);


Route::get('/', function () {
    return view('index');
});
Route::get('/php-version', function () {
    return phpversion();
});
Route::get('/tailwind-test', function () {
    return view('tailwind-test');
});
