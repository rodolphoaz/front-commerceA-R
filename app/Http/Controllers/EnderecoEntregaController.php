<?php

namespace App\Http\Controllers;

use App\EnderecoEntrega;
use Illuminate\Http\Request;

class EnderecoEntregaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    function index() {
        return view('loja.pages.endereco_entrega.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    function create() {
        return view('loja.pages.endereco_entrega.create');
    }

    function save(Request $request) {
        try {
            $create = EnderecoEntrega::create($request->input());
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
     * @param  \App\EnderecoEntrega  $enderecoEntrega
     * @return \Illuminate\Http\Response
     */
    public function show(EnderecoEntrega $enderecoEntrega)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\EnderecoEntrega  $enderecoEntrega
     * @return \Illuminate\Http\Response
     */
    public function edit(EnderecoEntrega $enderecoEntrega)
    {
        return  view('loja.pages.endereco_entrega.edit');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\EnderecoEntrega  $enderecoEntrega
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        try{
            EnderecoEntrega::where(['id' => $id])->update($request->input());
            return response()->json(['status' => 'atualizado com sucesso']); 
        }catch (Exception $ex) {
            return response()->json($ex);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\EnderecoEntrega  $enderecoEntrega
     * @return \Illuminate\Http\Response
     */
    public function destroy(EnderecoEntrega $enderecoEntrega)
    {
        //
    }

    
    /**
     * Remove the specified resource from storage.
     *
     * @param Request $request
     * @return void
     */
    function delete(Request $request)
    {
        foreach($request->uuids as $uuid){
            $x = EnderecoEntrega::where('uuid','=',$uuid)->first();
            $x->delete();
        }
    }


    function DataTable () {
        return datatables()->of(EnderecoEntrega::all())->toJson();
    }
}
