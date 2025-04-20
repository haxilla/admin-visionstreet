<?php

namespace App\Http\Controllers\Member;

use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    public function __construct()
    {
        $this->middleware('role:admin,super,member');
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