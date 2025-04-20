<?php

class ClientHandleController extends Controller
{
    public function __construct()
    {
        $this->middleware(function ($request, $next) {
            $user = Auth::user();

            if (!$user || !in_array($user->role, ['admin', 'super'])) {
                abort(403, 'Unauthorized');
            }

            return $next($request);
        });
    }

    public function handle(Request $request)
    {
        // Only runs for admin/super
    }
}
