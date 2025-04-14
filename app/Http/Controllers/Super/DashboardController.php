<?php

namespace App\Http\Controllers\Super;

use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    public function __construct()
    {
        $this->middleware(function ($request, $next) {
            if (!Auth::check() || Auth::user()->role !== 'super') {
                return redirect('/login')->with('error', 'Super user access required.');
            }

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