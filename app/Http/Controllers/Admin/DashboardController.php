<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    public function __construct()
    {
        $this->middleware(function ($request, $next) {
            if (!Auth::check()||auth()->user()->role !== 'super'||auth()->user()->role !== 'admin') {
                return response()->view('admin.login-form');}

            return $next($request);
        });
    }


    public function index()
    {
        return view('admin.dashboard');
    }

    public function reports()
    {
        return view('admin.reports');
    }
}