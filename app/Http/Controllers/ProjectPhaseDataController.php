<?php

namespace App\Http\Controllers;

use App\Models\ProjectPhaseData;
use Illuminate\Http\Request;

class ProjectPhaseDataController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create($projectId)
    {
        $phases = ProjectPhaseData::where('project_id', $projectId)->get();
        return view('student.project.upload', compact('phases'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, $projectId)
    {
        $validatedData = $request->validate([
            'proposal' => 'required',
            // Add validation rules for other form inputs as needed
        ]);
        $projectPhaseData = new ProjectPhaseData();
        //$projectApplication->id = $project->id;
        //$projectApplication->student_id = auth()->user()->id;
        //$project->proposal = $validatedData['proposal'];
        // Set other form inputs to the corresponding columns in the project_applications table
        $projectPhaseData->save();

        // Optionally, you can redirect the user to a confirmation page or another appropriate route
        return redirect()->route('student.project.upload', $projectId)->with('success', 'Project application submitted successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(ProjectPhaseData $projectPhaseData)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(ProjectPhaseData $projectPhaseData)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, ProjectPhaseData $projectPhaseData)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ProjectPhaseData $projectPhaseData)
    {
        //
    }
}
