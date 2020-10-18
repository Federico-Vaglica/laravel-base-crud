<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\bakery;
class BakeryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Bakery::all();
        return view('index',compact('data'));
        }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->all();
        $newCake = new Bakery;
        $newCake->fill($data);
        $saved = $newCake->save();
        dd($saved);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */


    // public function show($id)
    // {
    //     $bakery = Bakery::find($id);
    //     return view('show',compact('bakery'));
    // }
    public function show(Bakery $bakery)
    {
        return view('show',compact('bakery'));
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Bakery $bakery)
    {
        return view('create',compact('bakery'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Bakery $bakery)
    {
        $data = $request->all();
        $bakery->update($data);
        return view('show',compact('bakery'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Bakery $bakery)
    {
        $bakery->delete();
        return redirect()->route('bakery.index');
    }
}
