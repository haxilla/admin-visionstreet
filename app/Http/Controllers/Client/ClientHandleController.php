<?php

namespace App\Http\Controllers\Client;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;


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

        // return that dynamic view
        return view('client.create', [
            'client'    => null,
            'mode'      => 'create',
        ]);

    }

    public function submit (Request $request){
        dd($_POST);
    }

}
