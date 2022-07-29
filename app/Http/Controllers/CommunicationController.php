<?php

namespace App\Http\Controllers;

use App\Models\Communication;
use App\Http\Requests\StoreCommunicationRequest;
use App\Http\Requests\UpdateCommunicationRequest;
use App\Models\Cities;
use App\Models\Country;

class CommunicationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $contact_us = $this->communication->orderBy('id'.'desc')->paginate(10);
        //
        return view('admin.cms.welcome.contact_us.index', compact('contact_us'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $countries = Country::all();
        $cities = Cities::all();
        //
        return view('admin.cms.welcome.contact_us.create',compact('countries','cities'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreCommunicationRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCommunicationRequest $request)
    {
        //
        $this->communication->create($request->all());
        //
        return back()->with('msg', trans('site.author_c'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Communication  $communication
     * @return \Illuminate\Http\Response
     */
    public function show(Communication $communication)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Communication  $communication
     * @return \Illuminate\Http\Response
     */
    public function edit(Communication $communication)
    {
        //
        return view('admin.cms.welcome.contact_us.edit', compact('communication'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateCommunicationRequest  $request
     * @param  \App\Models\Communication  $communication
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateCommunicationRequest $request, Communication $communication)
    {
        //
        $this->communication->find($communication->id)->update($request->all());
        //
        return back()->with('msg', trans('site.author_u'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Communication  $communication
     * @return \Illuminate\Http\Response
     */
    public function destroy(Communication $communication)
    {
        //
        $this->communication->find($communication->id)->delete();
        //
        return back()->with('msg', trans('site.author_d'));
    }
}
