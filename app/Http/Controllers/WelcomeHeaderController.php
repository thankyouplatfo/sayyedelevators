<?php

namespace App\Http\Controllers;

use App\Models\welcomeHeader;
use App\Http\Requests\StorewelcomeHeaderRequest;
use App\Http\Requests\UpdatewelcomeHeaderRequest;
use App\Traits\ImageUploadTrait;
use App\Traits\IncModels;
use Illuminate\Support\Facades\Storage;

class WelcomeHeaderController extends Controller
{
    use IncModels, ImageUploadTrait;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $images = $this->welcomeHeader->orderBy('id', 'desc')->paginate(10);
        //
        return view('admin.cms.welcome.header.index', compact('images'));
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
        $data = $request->validated();
        $data['path'] = $this->uploadImage($request->path);
        //
        $this->welcomeheader = welcomeHeader::create($data);
        //
        return back()->with('msg', trans('site.msg_c'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\welcomeHeader  $header
     * @return \Illuminate\Http\Response
     */
    public function show(welcomeHeader $header)
    {
        //
        return view('admin.cms.welcome.header.show', compact('header'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\welcomeHeader  $header
     * @return \Illuminate\Http\Response
     */
    public function edit(welcomeHeader $header)
    {
        
        //
        return view('admin.cms.welcome.header.edit', compact('header'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatewelcomeHeaderRequest  $request
     * @param  \App\Models\welcomeHeader  $header
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatewelcomeHeaderRequest $request, welcomeHeader $header)
    {
        //
        $data = $request->validated();
        if ($request->has('path')) {
            # code...
            Storage::disk('public')->delete($header->path);
            $data['path'] = $this->uploadImage($request->path);
        }
        //
        $this->welcomeHeader = $header->find($header->id)->update($data);
        //
        return back()->with('msg', trans('site.msg_u'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\welcomeHeader  $header
     * @return \Illuminate\Http\Response
     */
    public function destroy(welcomeHeader $header)
    {
        //
        Storage::disk('public')->delete($header->cover_image);
        //
        $this->welcomeHeader->find($header->id)->delete();
        //
        return back()->with('msg', trans('site.msg_d'));
    }
}
