<?php

namespace App\Http\Controllers;

use App\CategoriaProduto;
use Illuminate\Http\Request;

class CategoriaProdutoController extends Controller
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
        return view('admin.pages.categoria.create');
    }

    function save(Request $request) {
        try {
            $create = CategoriaProduto::create($request->input());
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
     function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\CategoriaProduto  $categoriaProduto
     * @return \Illuminate\Http\Response
     */
     function show(CategoriaProduto $categoriaProduto)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\CategoriaProduto  $categoriaProduto
     * @return \Illuminate\Http\Response
     */
     function edit(CategoriaProduto $categoriaProduto)
    {
        return  view('admin.pages.categoria.edit');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\CategoriaProduto  $categoriaProduto
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        try{
            CategoriaProduto::where(['id' => $id])->update($request->input());
            return response()->json(['status' => 'atualizado com sucesso']); 
        }catch (Exception $ex) {
            return response()->json($ex);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\CategoriaProduto  $categoriaProduto
     * @return \Illuminate\Http\Response
     */
     function destroy(CategoriaProduto $categoriaProduto)
    {
        //
    }
    
    /**
     * Remove the specified resource from storage.
     *
     * @param Request $request
     * @return void
     */
    public function delete(Request $request)
    {
        foreach($request->uuids as $uuid){
            $x = CategoriaProduto::where('uuid','=',$uuid)->first();
            $x->delete();
        }
    }



    function DataTable () {
        return datatables()->of(CategoriaProduto::all())->toJson();
    }

}
