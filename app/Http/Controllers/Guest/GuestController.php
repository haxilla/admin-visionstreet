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
            // If logged in as super, go to super dashboard
            if (Auth::check() && Auth::user()->role === 'super') {
                return redirect('/super/dashboard');}

            // Otherwise, just show the super login — no logout here
            Session::put('url.intended', url('/super/dashboard'));
            return view('super.login');}

        return view('guest.home');}

    public function about()
    {
        return view('guest.about');
    }

    public function contact()
    {
        return view('guest.contact');
    }
}
