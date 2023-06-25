<?php

namespace App\Http\Controllers;

use App\Models\ProjectApplication;
use App\Models\project;
use Illuminate\Http\Request;


class ProjectApplicationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = projectApplication::get();
        return view('admin.proposal',compact('data'));
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
            'description' => 'required',
            'name' =>'required',

            // Add validation rules for other form inputs as needed
        ]);
        $file = $request->file('file');
        $filename = $file->getClientOriginalName();
        $file->move('proposals',$filename);
        $filepath = "proposals/".$filename;

        $projectApplication = new ProjectApplication();
        //$projectApplication->id = $project->id;
        //$projectApplication->student_id = auth()->user()->id;
        $projectApplication->name = $validatedData['name'];
        $projectApplication->description = $validatedData['description'];
        $projectApplication->document = $filepath;
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
    public function approve($id)
    {
        $project = ProjectApplication::where('id', $id)->get();
        //echo $project;
        $p = new project;
        $p->name = $project[0]->name;
        $p->description = $project[0]->description;
        $p->document = $project[0]->document;
        $p->status = 'approved';
        $p->save();
        $this->destroy($id);
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
    public function destroy($id)
    {
        $project = ProjectApplication::where('id', $id)->get();
        $project[0]->delete();
        return redirect()->back();

    }
}