<?php

namespace App\Http\Controllers\Member;

use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    public function __construct()
    {
        $this->middleware(function ($request, $next) {
            if (!Auth::check()) {
                return response()->view('member.login-form');}

            return $next($request);
        });
    }


    public function index()
    {
        return view('member.dashboard');
    }

    public function reports()
    {
        return view('member.reports');
    }
}