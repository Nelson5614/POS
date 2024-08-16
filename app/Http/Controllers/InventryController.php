<?php

namespace App\Http\Controllers;

use App\Models\Inventry;
use Illuminate\Http\Request;

class InventryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return inertia('Inventry/index',[
            'products' => Inventry::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return inertia('Inventry/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //dd($data);
        $request->validate([
            'name' => 'required|string|min:2|max:50',
            'code' => 'required|string|min:2|max:50',
            'price' => 'required|integer',
            'quantity' => 'required|integer',
            'expiring_date' => 'required|string|min:2|max:50',
            'catergory' => 'required|string|min:2|max:50'
        ]);

        Inventry::create($request->all());

        return redirect()->route('inventry.index')->with('message', 'Product added successfuly');

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
    public function edit(Inventry $product)
    {

        return inertia('Inventry/edit',[
            'product' => $product
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Inventry $product)
    {
        $request->validate([
            'name' => 'required|string|min:2|max:50',
            'code' => 'required|string|min:2|max:50',
            'price' => 'required|integer',
            'quantity' => 'required|integer',
            'expiring_date' => 'required|string|min:2|max:50',
            'catergory' => 'required|string|min:2|max:50'
        ]);

        $product -> update($request->all());

        return redirect()->route('inventry.index')->with('message', 'updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
