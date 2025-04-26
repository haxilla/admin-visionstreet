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
        //IE: admin/tools/posgres - index.blade.php

        $html=\View::make($renderFrom)
          ->with([
            'data'=>$data,
          ])->render();

        echo $html;

    }

    public function handle(Request $request){

        $data=null;
        //renderFrom
        $renderFrom=$_POST['renderfrom'];
        $value=$_POST['value'];
        $task=$_POST['task'];

        if(!$renderFrom || !$task || !$value){
            dd("error-line37-postgresController");}

        $sqltype = explode('.', $task)[0] ?? '';
        if(!$sqltype){
            dd("error-line41-postgresController");}
        
        //should it use an app file?
        if(isset($_POST['isapp'])){
          $renderURL = str_replace(".", "/",$renderFrom."/$task");
          include(app_path().'/code/getValue.php');
          include(app_path().'/'.$renderURL.'.php');}

        //IE: admin/tools/posgres
        $html=\View::make($renderFrom)
          ->with([
            'data'=>$data,
          ])->render();

        echo $html;

    }

    public function form(Request $request){

        dd("FORM PROCESS");

    }
}
