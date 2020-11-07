<?php

namespace App\Http\Controllers;

use App\Mas2dPessoas;
use Illuminate\Http\Request;

class Mas2dPessoasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('loja.pages.caricaturas.mascotes2d.pessoas.index');

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
     * @param  \App\Mas2dPessoas  $mas2dPessoas
     * @return \Illuminate\Http\Response
     */
    public function show(Mas2dPessoas $mas2dPessoas)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Mas2dPessoas  $mas2dPessoas
     * @return \Illuminate\Http\Response
     */
    public function edit(Mas2dPessoas $mas2dPessoas)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Mas2dPessoas  $mas2dPessoas
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Mas2dPessoas $mas2dPessoas)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Mas2dPessoas  $mas2dPessoas
     * @return \Illuminate\Http\Response
     */
    public function destroy(Mas2dPessoas $mas2dPessoas)
    {
        //
    }
}
