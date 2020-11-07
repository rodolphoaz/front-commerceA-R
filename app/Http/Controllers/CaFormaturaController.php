<?php

namespace App\Http\Controllers;

use App\CaFormatura;
use Illuminate\Http\Request;

class CaFormaturaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('loja.pages.caricaturas.digital.CaFormatura.index');
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
     * @param  \App\CaFormatura  $caFormatura
     * @return \Illuminate\Http\Response
     */
    public function show(CaFormatura $caFormatura)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\CaFormatura  $caFormatura
     * @return \Illuminate\Http\Response
     */
    public function edit(CaFormatura $caFormatura)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\CaFormatura  $caFormatura
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, CaFormatura $caFormatura)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\CaFormatura  $caFormatura
     * @return \Illuminate\Http\Response
     */
    public function destroy(CaFormatura $caFormatura)
    {
        //
    }
}
