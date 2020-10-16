<?php

namespace App\Http\Controllers;

use App\TipoTag;
use Illuminate\Http\Request;

class TipoTagController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return  view('admin.pages.tipo_tag.index');
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
     * @param  \App\TipoTag  $tipoTag
     * @return \Illuminate\Http\Response
     */
    public function show(TipoTag $tipoTag)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\TipoTag  $tipoTag
     * @return \Illuminate\Http\Response
     */
    public function edit(TipoTag $tipoTag)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\TipoTag  $tipoTag
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, TipoTag $tipoTag)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\TipoTag  $tipoTag
     * @return \Illuminate\Http\Response
     */
    public function destroy(TipoTag $tipoTag)
    {
        //
    }
}
