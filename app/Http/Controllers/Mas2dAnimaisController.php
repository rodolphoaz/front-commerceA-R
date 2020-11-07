<?php

namespace App\Http\Controllers;

use App\Mas2dAnimais;
use Illuminate\Http\Request;

class Mas2dAnimaisController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('loja.pages.caricaturas.mascotes2d.animais.index');
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
     * @param  \App\Mas2dAnimais  $mas2dAnimais
     * @return \Illuminate\Http\Response
     */
    public function show(Mas2dAnimais $mas2dAnimais)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Mas2dAnimais  $mas2dAnimais
     * @return \Illuminate\Http\Response
     */
    public function edit(Mas2dAnimais $mas2dAnimais)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Mas2dAnimais  $mas2dAnimais
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Mas2dAnimais $mas2dAnimais)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Mas2dAnimais  $mas2dAnimais
     * @return \Illuminate\Http\Response
     */
    public function destroy(Mas2dAnimais $mas2dAnimais)
    {
        //
    }
}
