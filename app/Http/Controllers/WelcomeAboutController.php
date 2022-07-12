<?php

namespace App\Http\Controllers;

use App\Models\WelcomeAbout;
use App\Http\Requests\StoreWelcomeAboutRequest;
use App\Http\Requests\UpdateWelcomeAboutRequest;
use App\Traits\IncModels;

class WelcomeAboutController extends Controller
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
        $about = $this->welcomeAbout->orderBy('id', 'desc')->paginate(10);
        //
        return view('admin.cms.welcome.about.index', compact('about'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.cms.welcome.about.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreWelcomeAboutRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreWelcomeAboutRequest $request)
    {
        //
        $this->welcomeAbout->create($request->all());
        //
        return back()->with('msg', trans('site.msg_c'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\WelcomeAbout  $about
     * @return \Illuminate\Http\Response
     */
    public function show(WelcomeAbout $about)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\WelcomeAbout  $about
     * @return \Illuminate\Http\Response
     */
    public function edit(WelcomeAbout $about)
    {
        return view('admin.cms.welcome.about.edit', compact('about'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateWelcomeAboutRequest  $request
     * @param  \App\Models\WelcomeAbout  $about
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateWelcomeAboutRequest $request, WelcomeAbout $about)
    {
        //
        $this->welcomeAbout = $about->find($about->id)->update($request->all());
        //
        return back()->with('msg', trans('site.msg_u'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\WelcomeAbout  $about
     * @return \Illuminate\Http\Response
     */
    public function destroy(WelcomeAbout $about)
    {
        //
        $this->welcomeAbout->find($about->id)->delete();
        //
        return back()->with('msg', trans('site.msg_d'));
    }
}
