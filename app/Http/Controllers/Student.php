<?php

namespace App\Http\Controllers;

use App\Models\cr;
use App\Models\User;
use Illuminate\Http\Request;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

class student extends Controller
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
        $data = $this->alll();
        return view('form',compact('data'));
    }
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'name' =>'required',
            'email'=>'required',
            'password'=>'required',
            'roles'=>'required'
        ]);
        User::create($data);
        $data = $this->alll();
        return view('form',compact('data'));
    }
    public function alll()
    {
        $data = User::all()->where('roles','=','student');
        return $data;
    }
    /**
     * Display the specified resource.
     */
    public function show(cr $cr)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(cr $cr)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, cr $cr)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user)
    {
        $user->delete();
        return redirect()->back();
        //
    }
}
