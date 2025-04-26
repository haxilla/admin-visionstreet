<?php

namespace App\Http\Controllers\Super;

use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function __construct()
    {
        $this->middleware('role:super');
    }

    public function handle(Request $request){

        $data=null;
        //renderFrom
        $renderFrom=$_POST['renderfrom'];
        $renderTask=$_POST['task'];
        $value=$_POST['value'];
        $task=$_POST['task'];
        $isapp=$_POST['isapp'];

        //if value is set - extract
        if(!empty($value)){
            include(app_path().'/code/getValue.php');}

        //should it use an app file?
        if(!empty($isapp) && $renderFrom && $renderTask){
            $renderURL = str_replace(".", "/",$renderFrom.$renderTask);
            include(app_path().'/'.$renderURL.'.php');
        }elseif(!empty($isapp)){
            dd("error-line35-super/dashboard-missing");}

        //IE: admin/tools/posgres
        $html=\View::make($renderFrom)
          ->with([
            'data'=>$data,
          ])->render();

        echo $html;

    }


    public function index()
    {
        return view('super.dashboard');
    }

    public function reports()
    {
        return view('super.reports');
    }

    public function safekeys(){

        include(app_path().'/admin/secure/safekeys/show.php');

        return view('admin.secure.safekeys',compact('data'));

    }
}