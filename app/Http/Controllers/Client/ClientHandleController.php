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
        $data = [
            'renderTo' => $request->input('renderTo'),
            'renderFrom' => $request->input('renderFrom'),
            'renderAs' => $request->input('renderAs'),
            'key' => $request->input('key'),
            'value' => $request->input('value'),
            'isapp' => $request->input('isapp'),
        ];
    }

}
