<?php

namespace App\Http\Controllers;

use App\Models\project;
use App\Models\ProjectApplication;

use Illuminate\Http\Request;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = project::all();
        return view('admin.projects',compact('data'));
    }

    public function showPhaseData($projectId)
    {
        $project = Project::with('phases.phaseData')->find($projectId);

        // Pass the $project to the view
    }

    public function showPhase($projectId)
    {
        $project = Project::with('phases')->find($projectId);

        // Pass the $project to the view
    }

    /**
     * Show the form for creating a new resource.
     */
    // public function create(Project $project)
    // {
    //     return view('student.project.upload', compact('project'));
    // }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ProjectApplication $project)
    {
        $attributes = $project->getAttributes();
        $p = new Project;
        echo $project->name;
        $p->name = $project->name;
        $p->description = $project->description;
        $p->document = $project->document;
        $p->status = 'approved';
        $p->save();
        //project::create($attributes);
        //$this->destroy($project);
    }

    /**
     * Display the specified resource.
     */
    public function show(Project $project)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Project $project)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Project $project)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $project = project::where('id', $id)->get();
        //echo $project[0]->id;
        $project[0]->delete();
        return redirect()->back();

        //return view('admin.projects',compact('data'));
    }
}
