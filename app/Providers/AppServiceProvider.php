<?php

namespace App\Providers;

use Illuminate\Support\Facades\Request;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        Request::setTrustedProxies(
            [
                '23.227.151.74', // IP address of your Apache server
                '127.0.0.1',     // If Apache and Laravel are on the same host
            ],
            Request::HEADER_X_FORWARDED_ALL
        );
    }
}
