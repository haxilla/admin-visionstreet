<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\URL;

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

        if (
            (env('FORCE_HTTPS') === true || env('FORCE_HTTPS') === 'true') &&
            app()->environment('production')
        ) {
            $proto = request()->header('x-forwarded-proto');

            if ($proto === 'https') {
                URL::forceScheme('https');
            } else {
                Log::warning('FORCE_HTTPS is enabled, but request is not marked secure.', [
                    'url' => request()->fullUrl(),
                    'ip' => request()->ip(),
                    'proto_header' => $proto,
                ]);
                abort(403, 'Secure connection required.');
            }
        }

    }
}
