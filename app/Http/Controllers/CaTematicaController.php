<?php

namespace App\Http\Controllers;

use App\CaTematica;
use Illuminate\Http\Request;

class CaTematicaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('loja.pages.caricaturas.digital.CaTematica.index');
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
     * @param  \App\CaTematica  $caTematica
     * @return \Illuminate\Http\Response
     */
    public function show(CaTematica $caTematica)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\CaTematica  $caTematica
     * @return \Illuminate\Http\Response
     */
    public function edit(CaTematica $caTematica)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\CaTematica  $caTematica
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, CaTematica $caTematica)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\CaTematica  $caTematica
     * @return \Illuminate\Http\Response
     */
    public function destroy(CaTematica $caTematica)
    {
        //
    }
}
