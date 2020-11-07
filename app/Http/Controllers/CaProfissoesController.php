<?php

namespace App\Http\Controllers;

use App\CaProfissoes;
use Illuminate\Http\Request;

class CaProfissoesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('loja.pages.caricaturas.digital.CaProfissoes.index');
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
     * @param  \App\CaProfissoes  $caProfissoes
     * @return \Illuminate\Http\Response
     */
    public function show(CaProfissoes $caProfissoes)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\CaProfissoes  $caProfissoes
     * @return \Illuminate\Http\Response
     */
    public function edit(CaProfissoes $caProfissoes)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\CaProfissoes  $caProfissoes
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, CaProfissoes $caProfissoes)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\CaProfissoes  $caProfissoes
     * @return \Illuminate\Http\Response
     */
    public function destroy(CaProfissoes $caProfissoes)
    {
        //
    }
}
