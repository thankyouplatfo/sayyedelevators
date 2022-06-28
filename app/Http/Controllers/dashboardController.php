<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class dashboardController extends Controller
{
    //
    public function index()
    {
        # code...
        return view('admin.index');
    }
    //
    public function cms()
    {
        # code...
        return view('admin.cms.index');
    }
    //
    public function welcome()
    {
        # code...
        return view('admin.cms.welcome.index');
    }
}
