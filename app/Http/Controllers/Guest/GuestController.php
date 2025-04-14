<?php

namespace App\Http\Controllers\Guest;
use App\Http\Controllers\Controller;

class GuestController extends Controller
{
    public function home()
    {
        return view('public.home');
    }

    public function about()
    {
        return view('public.about');
    }

    public function contact()
    {
        return view('public.contact');
    }
}
