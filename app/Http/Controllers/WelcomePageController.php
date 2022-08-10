<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Traits\IncModels;
use Illuminate\Http\Request;

class WelcomePageController extends Controller
{
    use IncModels;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $covers = $this->welcomeHeader->orderBy('id', 'desc')->paginate(10);
        $projects = $this->welcomeProject->orderBy('id', 'desc')->paginate(8);
        $about = $this->welcomeAbout->orderBy('id', 'desc')->paginate(1);
        $users = $this->user->orderBy('id', 'asc')->where('type', '=', '1')->paginate(4);
        $communications = $this->communication->orderBy('id', 'desc')->paginate(1);
        $medium = $this->medium->orderBy('id', 'desc')->get();
        //
        return view('welcome', compact('covers', 'projects', 'about', 'users', 'communications'));
    }
    //
    public function our_projects()
    {
        $projects = $this->welcomeProject->all();
        # code...
        return view('pages.our_projects', compact('projects'));
    }
    //
    public function user($id)
    {
        # code...
        $user = $this->user->find($id);
        //
        return view('users.show',compact('user'));
    }
}
