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
        $schemas = \DB::select("
        SELECT nspname AS schema_name
        FROM pg_namespace
        WHERE nspname NOT IN ('pg_catalog', 'information_schema')
          AND nspname NOT LIKE 'pg_toast%'
          AND nspname NOT LIKE 'pg_temp_%'
        ORDER BY nspname");

        return view('admin.tools.postgres.index', [
            'schemas' => $schemas,
        ]);
    }

    public function listSchemas(Request $request){

    }
}
