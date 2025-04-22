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

        dd($_POST);
        //clear
        $data=null;
        $value=null;
        //check post
        $renderFrom=$_POST['renderFrom'];
        //check for value
        if(isset($_POST['value'])){
          $value=$_POST['value'];}

        //should it use an app file?
        if(isset($_POST['isapp'])){
          $renderURL = str_replace(".", "/",$renderFrom);
          include(app_path().'/'.$renderURL.'.php');}

        return view($renderFrom, [
            'schemas' => $schemas,
        ]);
    }

    public function listSchemas(Request $request){

    }
}
