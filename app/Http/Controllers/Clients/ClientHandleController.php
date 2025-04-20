<?php

namespace App\Http\Controllers\Super;

use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;

class ClientHandleController extends Controller
{
    public function __construct()
    {
    	$this->middleware('role:admin,super');
    }

    public function handle(Request $request)
    {
        // Only runs for admin/super
        dd("YOURE READY TO HANDLE HERE");

    }

    public function create(Request $request)
    {
        // Only runs for admin/super
        dd("YOURE READY TO CREATE HERE");

    }
}
