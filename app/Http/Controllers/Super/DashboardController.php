<?php

namespace App\Http\Controllers\Super;

use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    public function __construct()
    {
        $this->middleware(function ($request, $next) {
            if (!Auth::check()) {
                return view('super.login-form')}

            return $next($request);
        });
    }


    public function index()
    {
        return view('super.dashboard');
    }

    public function reports()
    {
        return view('super.reports');
    }
}