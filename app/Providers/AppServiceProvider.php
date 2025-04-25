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
    public function boot(): void
    {
        /*
        if (config('app.env') === 'production') {
        URL::forceScheme('https');}
        */
    
        if ( env('FORCE_HTTPS') === 'true' &&
            app()->environment('production') &&
            !app()->runningInConsole()){

            $proto = $request->header('x-forwarded-proto');

            if (is_array($proto)) {
                $proto = $proto[0];}

            if ($proto === 'https') {
                URL::forceScheme('https');

            } else {

                URL::forceScheme('https');
                //abort(403, 'Secure connection required.');
            }

        }



        // ✅ Register the alias here (once, globally available)
        Route::aliasMiddleware('role', RequireRole::class);

        // ✅ Then group routes as usual
        Route::middleware('web')
            ->group(base_path('routes/web.php'));

    }
}
