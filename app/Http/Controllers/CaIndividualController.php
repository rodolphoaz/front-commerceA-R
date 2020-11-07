<?php

namespace App\Http\Controllers;

use App\CaIndividual;
use Illuminate\Http\Request;

class CaIndividualController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('loja.pages.caricaturas.digital.CaIndividual.index');
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
     * @param  \App\CaIndividual  $caIndividual
     * @return \Illuminate\Http\Response
     */
    public function show(CaIndividual $caIndividual)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\CaIndividual  $caIndividual
     * @return \Illuminate\Http\Response
     */
    public function edit(CaIndividual $caIndividual)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\CaIndividual  $caIndividual
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, CaIndividual $caIndividual)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\CaIndividual  $caIndividual
     * @return \Illuminate\Http\Response
     */
    public function destroy(CaIndividual $caIndividual)
    {
        //
    }
}
