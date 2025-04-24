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

        include(app_path().'/admin/tools/postgres/schema/show.php');

    }

    public function handle(Request $request){

        $data=null;
        //renderFrom
        $renderFrom=$_POST['renderfrom'];
        $task=$_POST['task'];

        if(!$renderFrom || !$task){
            dd("error-line27-postgresController");}

        $sqltype = explode('.', $task)[0] ?? '';
        if(!$sqltype){
            dd("error-line34-postgresController");}
        
        //should it use an app file?
        if(isset($_POST['isapp'])){
          $renderURL = str_replace(".", "/",$renderFrom."/$task");
          include(app_path().'/'.$renderURL.'.php');}

        //IE: admin/tools/posgres - index.blade.php
        $html=\View::make($renderFrom.'.index')
          ->with([
            'data'=>$data,
          ])->render();

        echo $html;


        /*
        $data = request()->only([
            'renderfrom', 'renderto', 'renderas', 
            'task', 'value', 'isapp','schema']);

        extract($data);

        if(isset($value)){
            include(app_path().'/code/admin/getValue.php');}

        if(isset($isapp)){
            $renderPath = str_replace('.', '/', "$renderfrom/$task");
            include(app_path($renderPath.'.php'));}

        $html = view('admin.tools.postgres.index', compact('result'))->render();
        echo $html;
        */

    }
}
