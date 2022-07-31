<?php

namespace App\Http\Controllers;

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
        $covers = $this->welcomeHeader->orderBy('id','desc')->paginate(10); 
        $projects = $this->welcomeProject->orderBy('id','desc')->paginate(8);
        $about = $this->welcomeAbout->orderBy('id', 'desc')->paginate(1); 
        $users = $this->user->orderBy('id', 'desc')->paginate(4);
        $communications = $this->communication->orderBy('id','desc')->paginate(1); 
        $medium = $this->medium->orderBy('id','desc')->get(); 
        //
        return view('welcome', compact('covers','projects','about','users','communications'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
