<?php

namespace App\Http\Controllers;

use App\CaPets;
use Illuminate\Http\Request;

class CaPetsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('loja.pages.caricaturas.digital.CaPets.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\CaPets  $caPets
     * @return \Illuminate\Http\Response
     */
    public function show(CaPets $caPets)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\CaPets  $caPets
     * @return \Illuminate\Http\Response
     */
    public function edit(CaPets $caPets)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\CaPets  $caPets
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, CaPets $caPets)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\CaPets  $caPets
     * @return \Illuminate\Http\Response
     */
    public function destroy(CaPets $caPets)
    {
        //
    }
}
