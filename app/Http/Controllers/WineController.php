<?php

namespace App\Http\Controllers;

use App\Wine;
use Illuminate\Http\Request;

class WineController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $vini = Wine::all();
        $data = ['wines' => $vini ];
        return view('wines.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('wines.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $form_data = $request->all();
        $wine = new Wine();
        $wine->fill($form_data);
        $wine->save();
        return redirect()->route('wines.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Wine  $wine
     * @return \Illuminate\Http\Response
     */
    public function show(Wine $wine)
    {
        return view('wines.show', ['wine' => $wine]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Wine  $wine
     * @return \Illuminate\Http\Response
     */
    public function edit(Wine $wine)
    {
        return view('wines.edit', ['wine' => $wine]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Wine  $wine
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Wine $wine)
    {
        $form_data = $request->all();
        $wine->update($form_data);
        return redirect()->route('wines.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Wine  $wine
     * @return \Illuminate\Http\Response
     */
    public function destroy(Wine $wine)
    {
        $wine->delete();
        return redirect()->route('wines.index');
    }
}
