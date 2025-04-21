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

                // e.g. your form posts { renderTo: 'client.intake' }
        $renderFrom = $request->input('renderFrom');

        // return that dynamic view
        return view($renderFrom, [
            'client'    => null,
            'mode'      => 'create'
        ]);

    }

    public function submit (Request $request){
        dd($_POST);
    }

}
