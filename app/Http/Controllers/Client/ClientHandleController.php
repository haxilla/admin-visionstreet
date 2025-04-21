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
        $renderTo = $request->input('renderTo');

        // Optional: guard against someone passing an arbitrary view
        if (! view()->exists($renderTo)) {
            abort(404, "View [{$renderTo}] not found.");
        }

        dd($renderTo);

        // return that dynamic view
        return view($renderTo, [
            // any data you want to pass…
        ]);

    }

}
