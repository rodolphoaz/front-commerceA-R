<?php

namespace App\Http\Controllers;

use App\CaAniver;
use Illuminate\Http\Request;

class CaAniverController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('loja.pages.caricaturas.digital.CaAniver.index');
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
     * @param  \App\CaAniver  $caAniver
     * @return \Illuminate\Http\Response
     */
    public function show(CaAniver $caAniver)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\CaAniver  $caAniver
     * @return \Illuminate\Http\Response
     */
    public function edit(CaAniver $caAniver)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\CaAniver  $caAniver
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, CaAniver $caAniver)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\CaAniver  $caAniver
     * @return \Illuminate\Http\Response
     */
    public function destroy(CaAniver $caAniver)
    {
        //
    }
}
