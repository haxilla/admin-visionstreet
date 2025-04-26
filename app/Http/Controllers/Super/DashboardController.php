<?php

namespace App\Http\Controllers\Super;

use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    public function __construct()
    {
        $this->middleware('role:super');
    }


    public function index()
    {
        return view('super.dashboard');
    }

    public function reports()
    {
        return view('super.reports');
    }

    public function safekeys(){
        //sets $data
        $renderFrom=request('renderfrom');

        if(empty($renderFrom)){
            dd("error-line32-super/dashboardController");}

        include(app_path().'/admin/secure/safekeys.php');

        return view($renderFrom,compact('data'));

    }
}