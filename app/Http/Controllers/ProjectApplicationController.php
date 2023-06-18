<?php

namespace App\Http\Controllers;

use App\Models\ProjectApplication;
use Illuminate\Http\Request;

class ProjectApplicationController extends Controller
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
    public function create()
    {
       return view('student.project.application');
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'proposal' => 'required',
            // Add validation rules for other form inputs as needed
        ]);

        $projectApplication = new ProjectApplication();
        //$projectApplication->id = $project->id;
        //$projectApplication->student_id = auth()->user()->id;
        $projectApplication->proposal = $validatedData['proposal'];
        // Set other form inputs to the corresponding columns in the project_applications table
        $projectApplication->save();

        // Optionally, you can redirect the user to a confirmation page or another appropriate route
        return redirect()->route('student.dashboard')->with('success', 'Project application submitted successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(ProjectApplication $projectApplication)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(ProjectApplication $projectApplication)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, ProjectApplication $projectApplication)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ProjectApplication $projectApplication)
    {
        //
    }
}