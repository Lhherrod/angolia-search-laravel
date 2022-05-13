<?php

namespace App\Http\Controllers;

use App\Models\ProjectCreatorModel;
use App\Http\Requests\StoreProjectCreatorModelRequest;
use App\Http\Requests\UpdateProjectCreatorModelRequest;

class ProjectCreatorModelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
     * @param  \App\Http\Requests\StoreProjectCreatorModelRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreProjectCreatorModelRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ProjectCreatorModel  $projectCreatorModel
     * @return \Illuminate\Http\Response
     */
    public function show(ProjectCreatorModel $projectCreatorModel)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ProjectCreatorModel  $projectCreatorModel
     * @return \Illuminate\Http\Response
     */
    public function edit(ProjectCreatorModel $projectCreatorModel)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateProjectCreatorModelRequest  $request
     * @param  \App\Models\ProjectCreatorModel  $projectCreatorModel
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateProjectCreatorModelRequest $request, ProjectCreatorModel $projectCreatorModel)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ProjectCreatorModel  $projectCreatorModel
     * @return \Illuminate\Http\Response
     */
    public function destroy(ProjectCreatorModel $projectCreatorModel)
    {
        //
    }
}
