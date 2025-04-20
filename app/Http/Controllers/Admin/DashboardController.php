<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    public function __construct()
    {
        $this->middleware('role:admin,super');
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