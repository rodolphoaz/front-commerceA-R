<?php

namespace App\Http\Controllers;

use App\ItemAdicional;
use Illuminate\Http\Request;

class ItemAdicionalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin/pages/itens_adicionais/index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      
       // return view('admin/pages/itens_adicionais/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function save(Request $request)
    {
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\ItemAdicional  $itemAdicional
     * @return \Illuminate\Http\Response
     */
    public function show(ItemAdicional $itemAdicional)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\ItemAdicional  $itemAdicional
     * @return \Illuminate\Http\Response
     */
    public function edit(ItemAdicional $itemAdicional)
    {
       // return view('');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\ItemAdicional  $itemAdicional
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ItemAdicional $itemAdicional)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\ItemAdicional  $itemAdicional
     * @return \Illuminate\Http\Response
     */
    public function destroy(ItemAdicional $itemAdicional)
    {
        //
    }

    function DataTable() {
        return datatables()->of(ItemAdicional::all())->toJson();
    }
}