<?php

namespace App\Http\Controllers;

use App\Models\Complaint;
use Illuminate\Http\Request;

class ComplaintController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Complaint::all()->where('AS','!=','Admin');
        return view('admin.complains',compact('data'));
    }

    public function advisorIndex()
    {
        $data = Complaint::all()->where('AS','=','Advisor');
        return view('advisor.complaints',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('student.complaints.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'AS' => 'required',
            'subject' => 'required',
            'description' => 'required',
        ]);

        $complaint = new Complaint();
        //$complaint->student_id = auth()->user()->id;
        $complaint->AS = $validatedData['AS'];
        $complaint->subject = $validatedData['subject'];
        $complaint->description = $validatedData['description'];
        $complaint->save();

        return redirect()->back();
    }

    /**
     * Display the specified resource.
     */
    public function show(Complaint $complaint)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Complaint $complaint)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Complaint $complaint)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Complaint $complaint)
    {
        //
    }
}