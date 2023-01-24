<?php

namespace App\Http\Controllers;

use App\Fumetto;
use Illuminate\Http\Request;

class FumettoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $fumetti = Fumetto::all(); 
        return view('fumettos.index', compact('fumetti'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('fumettos.create');
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

        $fumetto = new Fumetto;
        $fumetto->title = $data['title'];
        $fumetto->description = $data['description'];
        $fumetto->thumb = $data['thumb'];
        $fumetto->price = $data['price'];
        $fumetto->series = $data['series'];
        $fumetto->sale_date = $data['sale_date'];
        $fumetto->type = $data['type'];
        $fumetto->save();

        return redirect()->route('fumettos.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Fumetto $fumetto)
    {
        return view('fumettos.show', compact('fumetto'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Fumetto $fumetto)
    {
        return view('fumettos.edit', compact('fumetto'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Fumetto $fumetto)
    {
        $data = $request->all();

        $fumetto->title = $data['title'];
        $fumetto->description = $data['description'];
        $fumetto->thumb = $data['thumb'];
        $fumetto->price = $data['price'];
        $fumetto->series = $data['series'];
        $fumetto->sale_date = $data['sale_date'];
        $fumetto->type = $data['type'];
        $fumetto->update();

        return redirect()->route('fumettos.show', compact('fumetto'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Fumetto $fumetto)
    {
        $fumetto->delete();

        return redirect()->route('fumettos.index');
    }
}
