<?php

namespace App\Http\Controllers;

use App\Models\Media;
use App\Http\Requests\StoreMediaRequest;
use App\Http\Requests\UpdateMediaRequest;
use App\Traits\IncModels;

class MediaController extends Controller
{
    use IncModels;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $medium = $this->medium->all();
        //
        return view('admin.cms.media.index', compact('medium'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.cms.media.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreMediaRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreMediaRequest $request)
    {
        //
        $this->medium->create($request->all());
        //
        return back()->with('msg', trans('site.msg_c'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Media  $medium
     * @return \Illuminate\Http\Response
     */
    public function show(Media $medium)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Media  $medium
     * @return \Illuminate\Http\Response
     */
    public function edit(Media $medium)
    {
        return view('admin.cms.media.edit', compact('medium'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateMediaRequest  $request
     * @param  \App\Models\Media  $medium
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateMediaRequest $request, Media $medium)
    {
        //
        $this->medium->find($medium->id)->update($request->all());
        //
        return back()->with('msg', trans('site.msg_u'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Media  $medium
     * @return \Illuminate\Http\Response
     */
    public function destroy(Media $medium)
    {
        //
        $this->medium->find($medium->id)->delete();
        //
        return back()->with('msg', trans('site.msg_d'));
    }
}
