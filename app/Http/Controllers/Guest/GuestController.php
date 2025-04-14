<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class GuestController extends Controller
{
    public function home(Request $request)
    {
        $host = $request->getHost();

        if ($host === 'admin.visionstreet.co') {
            if (!Auth::check()) {
                Session::put('url.intended', url('/super/dashboard'));
                return view('auth.super-login');
            }

            if (Auth::user()->role !== 'super') {
                // Logout and redirect back to login with error message
                Auth::logout();
                return redirect('/super/login')
                    ->withErrors(['role' => 'This section is for super users only.'])
                    ->withInput(); // keeps email field filled
            }

            return redirect('/super/dashboard');
        }

        return view('guest.home');
    }

    public function about()
    {
        return view('guest.about');
    }

    public function contact()
    {
        return view('guest.contact');
    }
}
