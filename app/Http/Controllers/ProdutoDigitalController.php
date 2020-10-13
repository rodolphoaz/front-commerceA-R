<?php

namespace App\Http\Controllers;

use App\ProdutoDigital;
use Illuminate\Http\Request;

class ProdutoDigitalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.pages.produto_digital.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.pages.produto_digital.create');
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
     * @param  \App\ProdutoDigital  $produtoDigital
     * @return \Illuminate\Http\Response
     */
    public function save(Request $request)
    {
        try {
            $create = ProdutoDigital::create($request->input());
            return back()->with(['status' => 'cadastrado']);
        }catch (Exception $ex){
            return  response()->json(['msg' => $ex->error]);
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\ProdutoDigital  $produtoDigital
     * @return \Illuminate\Http\Response
     */
    public function edit(ProdutoDigital $produtoDigital)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\ProdutoDigital  $produtoDigital
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ProdutoDigital $produtoDigital)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\ProdutoDigital  $produtoDigital
     * @return \Illuminate\Http\Response
     */
    public function destroy(ProdutoDigital $produtoDigital)
    {
        //
    }
    
    function delete(Request $request)
    {
        foreach($request->uuids as $uuid){
            $x = ProdutoDigital::where('uuid','=',$uuid)->first();
            $x->delete();
        }
    }
    
    function DataTable () {
        return datatables()->of(ProdutoDigital::all())->toJson();
    }
}
