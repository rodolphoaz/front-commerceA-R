<?php

namespace App\Http\Controllers;

use App\TipoPagamento;
use Illuminate\Http\Request;

class TipoPagamentoController extends Controller
{
   /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    function index() {
        return view('admin.pages.caricatura.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    function create() {
        return view('admin.pages.caricatura.create');
    }

    function save(Request $request) {
        try {
            $create = TipoPagamento::create($request->input());
            return back()->with(['status' => 'cadastrado']);
        }catch (Exception $ex){
            return  response()->json(['msg' => $ex->error]);
        }
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
     * @param  \App\TipoPagamento  $tipoPagamento
     * @return \Illuminate\Http\Response
     */
    public function show(TipoPagamento $tipoPagamento)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\TipoPagamento  $tipoPagamento
     * @return \Illuminate\Http\Response
     */
    public function edit(TipoPagamento $tipoPagamento)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\TipoPagamento  $tipoPagamento
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, TipoPagamento $tipoPagamento)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\TipoPagamento  $tipoPagamento
     * @return \Illuminate\Http\Response
     */
    public function destroy(TipoPagamento $tipoPagamento)
    {
        //
    }

    function DataTable () {
        return datatables()->of(TipoPagamento::all())->toJson();
    }
}
