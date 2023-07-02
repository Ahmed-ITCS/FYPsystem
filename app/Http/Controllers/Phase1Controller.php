<?php

namespace App\Http\Controllers;
use App\Models\project;
use App\Models\phase1;
use App\Models\deadlines;
use Illuminate\Http\Request;

use function PHPUnit\Framework\isEmpty;

class Phase1Controller extends Controller
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
        $data = phase1::where('sid','=',auth()->user()->id)->first();
        if($data)
        {
            echo "Hoi wi hai submission - niklo yaha se\n";
            return ;
        }
        $dead = deadlines::get()->where('id',1);
        $projectid = project::where('sid',auth()->user()->id)->first();
        if(!$projectid)
        {
            echo"your proposal still in awaiting yet\n";
            return;
        }
        else if(empty($dead))
        {
            echo "Submission is not created yet\n";
            return;
        }
        else if($dead[0]->submissiondate > date("Y-m-d") && $dead[0]->submissiontime." ".date("h:i:00"))
        {
            return view('student.project.phase1',['id'=>$id]);
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
        $file->move('phasee1',$filename);
        $filepath = "phasee1/".$filename;
        $user = auth()->user();
        $p1 = new phase1();
        $projectdata = project::where('sid',$user->id)->first();
        $p1->pid = $projectdata->id;
        $p1->sid = $user->id;
        $p1->description = $validatedData['description'];
        $p1->document = $filepath;
        $p1->save();
        $this->show();
        
    }
    /**
     * Display the specified resource.
     */
    public function show()
    {
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(phase1 $phase1)
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
        phase1::where('id', $id)->update(['marks' => $marks]);
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(phase1 $phase1)
    {
        //
    }
}
