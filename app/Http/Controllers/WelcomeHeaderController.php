<?php

namespace App\Http\Controllers;

use App\Models\welcomeHeader;
use App\Http\Requests\StorewelcomeHeaderRequest;
use App\Http\Requests\UpdatewelcomeHeaderRequest;

class WelcomeHeaderController extends Controller
{
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('admin.cms.welcome.header.index',);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.cms.welcome.header.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StorewelcomeHeaderRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorewelcomeHeaderRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\welcomeHeader  $welcomeHeader
     * @return \Illuminate\Http\Response
     */
    public function show(welcomeHeader $welcomeHeader)
    {
        //
        return view('admin.cms.welcome.header.show',compact('welcomeHeader'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\welcomeHeader  $welcomeHeader
     * @return \Illuminate\Http\Response
     */
    public function edit(welcomeHeader $welcomeHeader)
    {
        //
        return view('admin.cms.welcome.header.edit',compact('welcomeHeader'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatewelcomeHeaderRequest  $request
     * @param  \App\Models\welcomeHeader  $welcomeHeader
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatewelcomeHeaderRequest $request, welcomeHeader $welcomeHeader)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\welcomeHeader  $welcomeHeader
     * @return \Illuminate\Http\Response
     */
    public function destroy(welcomeHeader $welcomeHeader)
    {
        //
    }
}
