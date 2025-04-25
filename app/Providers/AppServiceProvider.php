<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\Route;
use App\Http\Middleware\RequireRole;
use Illuminate\Http\Request;

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
    public function boot(Request $request): void
    {
        
        //fix https bug/issue
        if ( config('app.force_https') &&
        app()->environment('production') &&
        !app()->runningInConsole()){

            $proto = $request->header('x-forwarded-proto');

            if ($proto === 'https') {

                URL::forceScheme('https');

            } else {

                Log::warning('Non-HTTPS access blocked', [
                    'url' => $request->fullUrl(),
                    'ip' => $request->ip(),
                    'proto_header' => $proto,
                    'user_agent' => $request->header('user-agent'),
                ]);

                abort(403, 'Secure connection required.');

            };
        };


        // ✅ Register the alias here (once, globally available)
        Route::aliasMiddleware('role', RequireRole::class);

        // ✅ Then group routes as usual
        Route::middleware('web')
            ->group(base_path('routes/web.php'));

    }
}
