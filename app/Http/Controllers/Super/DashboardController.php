<?php

namespace App\Http\Controllers\Super;

use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    public function index()
    {
        // Must be logged in
        if (!Auth::check()) {
            return redirect('/login');
        }

        // Must have the 'super' role
        if (!auth()->user()->isSuper()) {
            abort(403, 'Access denied');
        }

        // Return the dashboard view
        return view('super.dashboard');
    }
}