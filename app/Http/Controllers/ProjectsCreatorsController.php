<?php

namespace App\Http\Controllers;

use App\Models\ProjectCreator;
use App\Http\Requests\StoreProjectCreatorRequest;
use App\Http\Requests\UpdateProjectCreatorRequest;
use App\Http\Resources\ProjectCreatorsResource;

class ProjectCreatorsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return ProjectCreatorsResource::collection(ProjectCreator::all());
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
     * @param  \App\Http\Requests\StoreProjectCreatorRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreProjectCreatorRequest $request)
    {
        $faker = \Faker\Factory::create(1);

        $project_creator = ProjectCreator::create([
            'project_creator_name' => $faker->name,
            'number_of_projects' => 0,
            'number_of_completed_projects' => 0,
            'number_of_non_completed_projects' => 0,
            'number_of_deployed_projects' => 0,
            'number_of_current_projects_in_production' => 0,
            'number_of_current_projects_in_development' => 0,
        ]);

        return new ProjectCreatorsResource($project_creator);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ProjectCreator  $projectCreator
     * @return \Illuminate\Http\Response
     */
    public function show(ProjectCreator $projectCreator)
    {
        return new ProjectCreatorsResource($projectCreator);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ProjectCreator  $projectCreator
     * @return \Illuminate\Http\Response
     */
    public function edit(ProjectCreator $projectCreator)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateProjectCreatorRequest  $request
     * @param  \App\Models\ProjectCreator  $projectCreator
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateProjectCreatorRequest $request, ProjectCreator $projectCreator)
    {
        $projectCreator->update([
            'project_creator_name' => $request->input('project_creator_name'),
            // 'project_creator_name' => 'The Grand Pumba Son'
        ]);

        return new ProjectCreatorsResource($projectCreator);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ProjectCreator  $projectCreator
     * @return \Illuminate\Http\Response
     */
    public function destroy(ProjectCreator $projectCreator)
    {
        $projectCreator->delete();
        return response(null, 204);
    }
}
