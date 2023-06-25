<?php

namespace App\Http\Controllers;

use App\Models\feedback;
use App\Models\Complaint;
use Illuminate\Http\Request;

class FeedbackController extends Controller
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
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'feedback' => "required",
            'id'=>"required"
        ]);
        $com = Complaint::all()->where('id','=',$data['id']);
        $feed = new feedback();
        $feed->subject = $com[0]->subject;
        $feed->feedback = $data['feedback'];
        $feed->cid = $data['id'];
        $feed->save();
        return redirect()->back();
        
    }

    /**
     * Display the specified resource.
     */
    public function show(feedback $feedback)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(feedback $feedback)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, feedback $feedback)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
       
        
        
    }
}
