<?php

namespace App\Http\Controllers;
use App\Models\deadlines;
use App\Models\phase3;
use Illuminate\Http\Request;

class Phase3Controller extends Controller
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
        $dead = deadlines::get()->where('id',3);
        //echo $dead[0]->submissiondate."  ".$dead[0]->submissiontime." ".date("h:i:00")."  ".date("Y-m-d");
        if($dead[2]->submissiondate > date("Y-m-d") && $dead[2]->submissiontime." ".date("h:i:00"))
        {
            return view('student.project.phase3');
        }
        else{
            echo "Submission time expired\n";
        }
        
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'description' => 'required',
            'file' =>'required',
        ]);
        $file = $request->file('file');
        $filename = $file->getClientOriginalName();
        $file->move('phasee3',$filename);
        $filepath = "phasee3/".$filename;
        $user = auth()->user();
        $p1 = new phase3();
        $p1->sid = $user->id;
        $p1->description = $validatedData['description'];
        $p1->document = $filepath;
        // Set other form inputs to the corresponding columns in the project_applications table
        $p1->save();
        // Optionally, you can redirect the user to a confirmation page or another appropriate route
        //return redirect()->route('student.dashboard')->with('success', 'Project application submitted successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(phase3 $phase3)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(phase3 $phase3)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        $marks = $request->marks;
        $id = $request->pid;
        phase3::where('id', $id)->update(['marks' => $marks]);
        return redirect()->back();

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(phase3 $phase3)
    {
        //
    }
}
