<?php

namespace App\Http\Controllers;

use App\CaCasal;
use Illuminate\Http\Request;

class CaCasalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('loja.pages.caricaturas.Digital.CaCasal.index');
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
     * @param  \App\CaCasal  $caCasal
     * @return \Illuminate\Http\Response
     */
    public function show(CaCasal $caCasal)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\CaCasal  $caCasal
     * @return \Illuminate\Http\Response
     */
    public function edit(CaCasal $caCasal)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\CaCasal  $caCasal
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, CaCasal $caCasal)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\CaCasal  $caCasal
     * @return \Illuminate\Http\Response
     */
    public function destroy(CaCasal $caCasal)
    {
        //
    }
}
