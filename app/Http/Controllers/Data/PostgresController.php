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

        include(app_path().'/admin/tools/postgres/schemas/show.php');

    }

    public function handle(Request $request){

        $data = request()->only([
            'renderfrom', 'renderto', 'renderas', 
            'task', 'value', 'isapp','schema']);

        extract($data);

        if(isset($value)){
            include(app_path().'/code/admin/getValue.php');}

        if(isset($isapp)){
            $renderURL = str_replace('.', '/', $renderfrom);
            $renderTask= str_replace('.', '/', $task);
            $renderView="$renderfrom.$task";

            include(app_path()."/$renderURL/$renderTask.php");}

    }
}
