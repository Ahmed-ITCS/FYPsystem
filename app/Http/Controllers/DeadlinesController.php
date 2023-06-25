<?php

namespace App\Http\Controllers;

use App\Models\deadlines;
use App\Models\phase1;
use App\Models\phase2;
use App\Models\phase3;
use Illuminate\Http\Request;

class DeadlinesController extends Controller
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
    public function create1()
    {
        //echo"hello";
        $pros=phase1::all();
        $dead = deadlines::where('id',1)->get();
        return view('admin.deadlinephase1',compact('dead','pros'));
    }
    public function create2()
    {
        $pros=phase2::all();
        $dead = deadlines::where('id',2)->get();
        return view('admin.deadlinephase2',compact('dead','pros'));
    }
    public function create3()
    {
        $pros=phase3::all();
        $dead = deadlines::where('id',3)->get();
        return view('admin.deadlinephase3',compact('dead','pros'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store1(Request $request)
    {
        $data = $request->validate([
        "submissiondate" => "required",
        "submissiontime" => "required"
        ]);

        $check = deadlines::find(1);

        if ($check) {
            $check->update($data);
            echo "deadline existed\nso it got updated";
        } else {
             deadlines::create($data);
             echo "deadline created\n";
        }
    }
    public function store2(Request $request)
    {
        $data = $request->validate([
        "submissiondate" => "required",
        "submissiontime" => "required"
        ]);

        $check = deadlines::find(2);

        if ($check) {
            $check->update($data);
            echo "deadline existed\nso it got updated";
        } else {
             deadlines::create($data);
             echo "deadline created\n";
        }
    }
    public function store3(Request $request)
    {
        $data = $request->validate([
        "submissiondate" => "required",
        "submissiontime" => "required"
        ]);

        $check = deadlines::find(3);

        if ($check) {
            $check->update($data);
            echo "deadline existed\nso it got updated";
        } else {
             deadlines::create($data);
             echo "deadline created\n";
        }
    }


    /**
     * Display the specified resource.
     */
    public function show(deadlines $deadlines)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(deadlines $deadlines)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, deadlines $deadlines)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(deadlines $deadlines)
    {
        //
    }
}
