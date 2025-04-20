<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class HandleController extends Controller
{
    public function handle(Request $request)
    {
        $renderFrom = $request->input('renderFrom');
        $value      = $request->input('value');
        $key        = $request->input('key');
        $isapp      = $request->input('isapp');
        $data       = null;

        // Optional include: runs a PHP file based on the view's dot-path
        if ($isapp && $renderFrom) {
            $renderURL = str_replace('.', '/', $renderFrom);
            $filePath = app_path($renderURL . '.php');

            if (file_exists($filePath)) {
                include($filePath); // defines $lid, $data, etc.
            }
        }

        // Render the Blade view if it exists
        if (View::exists($renderFrom)) {
            return View::make($renderFrom)->with([
                'value' => $value,
                'key'   => $key,
                'data'  => $data,
            ]);
        }

        // Fallback if view does not exist
        return response("View not found: $renderFrom", 404);
    }
}
