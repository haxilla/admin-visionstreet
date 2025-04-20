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
            'renderFrom' => $request->input('renderFrom'),
            'key' => $request->input('key'),
            'value' => $request->input('value'),
            'isapp' => $request->input('isapp'),
        ];

        return '<script>console.log("🔍 Incoming request:", ' . json_encode($data) . ');</script><div>Loaded form UI here</div>';
    }

}
