<?php

namespace App\Http\Controllers;

use App\Models\WelcomeProject;
use App\Http\Requests\StoreWelcomeProjectRequest;
use App\Http\Requests\UpdateWelcomeProjectRequest;
use App\Traits\ImageUploadTrait;
use App\Traits\IncModels;
use Illuminate\Support\Facades\Storage;

class WelcomeProjectController extends Controller
{
    use ImageUploadTrait, IncModels;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $projects = $this->welcomeProject->orderBy('id', 'desc')->paginate(8);
        //
        return view('admin.cms.welcome.projects.index', compact('projects'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.cms.welcome.projects.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreWelcomeProjectRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreWelcomeProjectRequest $request)
    {
        //
        $data = $request->validated();
        $data['path'] = $this->uploadImage($request->path);
        //
        $this->welcomeProject = WelcomeProject::create($request->data);
        //
        return back()->with('smg', trans('site.msg_c'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\WelcomeProject  $project
     * @return \Illuminate\Http\Response
     */
    public function show(WelcomeProject $project)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\WelcomeProject  $project
     * @return \Illuminate\Http\Response
     */
    public function edit(WelcomeProject $project)
    {
        //
        return view('admin.cms.welcome.projects.edit', compact('welcomeProject'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateWelcomeProjectRequest  $request
     * @param  \App\Models\WelcomeProject  $project
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateWelcomeProjectRequest $request, WelcomeProject $project)
    {
        //
        $data = $request->validated();
        if ($request->has('path')) {
            # code...
            Storage::disk('public')->delete($project->path);
            $data['path'] = $this->uploadImage($request->path);
        }
        //
        $this->welcomeHeader = $project->find($project->id)->update($data);
        //
        return back()->with('msg', trans('site.msg_u'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\WelcomeProject  $project
     * @return \Illuminate\Http\Response
     */
    public function destroy(WelcomeProject $project)
    {
        //
        //
        Storage::disk('public')->delete($project->cover_image);
        //
        $this->welcomeHeader->find($project->id)->delete();
        //
        return back()->with('msg', trans('site.msg_d'));
    }
}
