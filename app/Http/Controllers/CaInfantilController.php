<?php

namespace App\Http\Controllers;

use App\CaInfantil;
use Illuminate\Http\Request;

class CaInfantilController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('loja.pages.caricaturas.digital.CaInfantil.index');
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
     * @param  \App\CaInfantil  $caInfantil
     * @return \Illuminate\Http\Response
     */
    public function show(CaInfantil $caInfantil)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\CaInfantil  $caInfantil
     * @return \Illuminate\Http\Response
     */
    public function edit(CaInfantil $caInfantil)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\CaInfantil  $caInfantil
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, CaInfantil $caInfantil)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\CaInfantil  $caInfantil
     * @return \Illuminate\Http\Response
     */
    public function destroy(CaInfantil $caInfantil)
    {
        //
    }
}
