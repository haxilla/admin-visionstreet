<?php

namespace App\Http\Controllers\Data;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class PostgresController extends Controller
{
    public function __construct(){
    	$this->middleware('role:admin,super');
    }

    public function index(Request $request){
        // Only runs for admin/super
        $task = $request->input('task');
        $renderFrom = $request->input('renderFrom');

        if ($task === 'index') {
            return $this->listSchemas($request);
        }

        return view($renderFrom, [
            'schemas' => $schemas,
        ]);
    }

    public function listSchemas(Request $request){
        $schemas = DB::select("
            SELECT schema_name
            FROM information_schema.schemata
            WHERE schema_name NOT IN ('pg_catalog', 'information_schema')
            ORDER BY schema_name");
    }
}
