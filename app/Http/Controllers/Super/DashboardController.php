<?php

namespace App\Http\Controllers\Super;

use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;

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

        //if value is set - extract
        if(isset($_POST['value'])){
            $value=$_POST['value'];
            include(app_path().'/code/getValue.php');}

        //should it use an app file?
        if(isset($_POST['isapp'])){
          $renderURL = str_replace(".", "/",$renderFrom);
          include(app_path().'/'.$renderURL.'.php');}

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