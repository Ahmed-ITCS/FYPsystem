<?php

namespace App\Http\Controllers;

use App\Models\grades1;
use Illuminate\Http\Request;

class Grades1Controller extends Controller
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
        //echo $request['pid'];
        $data = $request->validate([
            'marks'=>'required',
            'pid' =>'required'
        ]);
        grades1::create($data);
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(grades1 $grades1)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(grades1 $grades1)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, grades1 $grades1)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(grades1 $grades1)
    {
        //
    }
}
