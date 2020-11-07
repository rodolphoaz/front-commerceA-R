<?php

namespace App\Http\Controllers;

use App\CaNoivos;
use Illuminate\Http\Request;

class CaNoivosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('loja.pages.caricaturas.digital.CaNoivos.index');
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
     * @param  \App\CaNoivos  $caNoivos
     * @return \Illuminate\Http\Response
     */
    public function show(CaNoivos $caNoivos)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\CaNoivos  $caNoivos
     * @return \Illuminate\Http\Response
     */
    public function edit(CaNoivos $caNoivos)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\CaNoivos  $caNoivos
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, CaNoivos $caNoivos)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\CaNoivos  $caNoivos
     * @return \Illuminate\Http\Response
     */
    public function destroy(CaNoivos $caNoivos)
    {
        //
    }
}
