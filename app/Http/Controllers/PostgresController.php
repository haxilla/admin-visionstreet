<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class PostgresController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth', 'role:admin,super']);
    }

    public function handle(Request $request)
    {
        dd($request->all());
    }

}