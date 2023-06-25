<?php

namespace App\Http\Controllers;

use App\Models\grades2;
use Illuminate\Http\Request;

class Grades2Controller extends Controller
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
            'marks'=>'required',
            'pid' =>'required'
        ]);
        grades2::create($data);
    }

    /**
     * Display the specified resource.
     */
    public function show(grades2 $grades2)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(grades2 $grades2)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, grades2 $grades2)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(grades2 $grades2)
    {
        //
    }
}
