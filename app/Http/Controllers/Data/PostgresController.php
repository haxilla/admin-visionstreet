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

        include(app_path().'/admin/tools/postgres/schemas/showall.php');

        return view('admin.tools.postgres.index', [
            'schemas' => $schemas,
        ]);
    }

    public function handle(Request $request){

        $data = request()->only([
            'renderfrom', 'renderto', 'renderas', 
            'task', 'value', 'isapp',]);

        if($isapp){
            $renderURL = str_replace('.', '/', $renderfrom);
            include(app_path()."/$renderfrom");}


    }
}
