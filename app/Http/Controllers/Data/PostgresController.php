<?php

namespace App\Http\Controllers\Data;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;


class PostgresController extends Controller
{
    public function __construct()
    {
    	$this->middleware('role:admin,super');
    }

    public function index(Request $request)
    {
        // Only runs for admin/super
        dd("YOURE AT THE POSTGRES INDEX");

    }


}
