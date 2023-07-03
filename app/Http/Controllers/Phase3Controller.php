<?php

namespace App\Http\Controllers;
use App\Models\project;
use App\Models\deadlines;
use App\Models\phase3;
use Illuminate\Http\Request;
use Carbon\Carbon;
use function PHPUnit\Framework\isEmpty;

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
    public function create($id)
    {
        $data = phase3::where('sid','=',auth()->user()->id)->first();
        if($data)
        {
            echo "Hoi wi hai submission - niklo yaha se\n";
            return ;
        }
        $dead = deadlines::get()->where('id',3);
        $projectid = project::where('sid',auth()->user()->id)->first();
        $currentDate = Carbon::now()->toDateString();
        if(!$projectid)
        {
            echo"your proposal still in awaiting yet\n";
            return;
        }
        else if(count($dead) === 0)
        {
            echo "Submission is not created yet\n";
            return;
        }
        else if ($dead[1]->startingdate > $currentDate)
        {
            echo "Submission Time is not started yet\n";
            return;
        }
        else if($dead[1]->submissiondate >= date("Y-m-d") && $dead[1]->submissiontime." ".date("h:i:00"))
        {
            return view('student.project.phase2',['id'=>$id]);
        } 
        else{
            echo "Submission time expired\n";
            return;
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
        $projectdata = project::where('sid',$user->id)->first();
        $p1->pid = $projectdata->id;
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
