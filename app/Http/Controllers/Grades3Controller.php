<?php

namespace App\Http\Controllers;

use App\Models\grades3;
use Illuminate\Http\Request;

class Grades3Controller extends Controller
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
        grades3::create($data);
    }

    /**
     * Display the specified resource.
     */
    public function show(grades3 $grades3)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(grades3 $grades3)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, grades3 $grades3)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(grades3 $grades3)
    {
        //
    }
}
