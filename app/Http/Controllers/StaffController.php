<?php

namespace App\Http\Controllers;

use App\Models\Staff;
use Illuminate\Http\Request;

class StaffController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return inertia('Staff/index',[
            'employees' => Staff::all(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return inertia('Staff/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Staff $data)
    {
        //dd($data);
        $request->validate([
            'name' => 'string|required|min:2|max:255',
            'email' =>'email|required|unique:staff',
            'phone' => 'integer|required|min:8',
            'address' => 'string|required|min:5',
            'department' => 'string|required|min:5',
            'position' => 'string|required|min:5'
        ]);

       Staff::create($request->all());

        return redirect()->route('staff.index')->with('message', 'New staff added successfuly');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit( Staff $employee)
    {
        return inertia('Staff/edit',[
            'employee' => $employee
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Staff $employee )
    {
        $request->validate([
            'name' => 'string|required|min:2|max:255',
            'email' =>'email|required|unique:staff',
            'phone' => 'integer|required|min:8',
            'address' => 'string|required|min:5',
            'department' => 'string|required|min:5',
            'position' => 'string|required|min:5'
        ]);

        $employee -> update($request->all());

        return redirect()->route('staff.index')->with('message', 'record updated succesfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Staff $employee)
    {
        $employee -> delete();

        return redirect()->route('staff.index')->with('message', 'Recorded delete successfullys');
    }
}
