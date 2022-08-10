<?php

namespace App\Http\Controllers;

use App\Traits\IncModels;
use Illuminate\Http\Request;

class dashboardController extends Controller
{
    use IncModels;
    //
    public function index()
    {
        $countUsers = $this->user->count();
        # code...
        return view('admin.index', compact('countUsers'));
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
