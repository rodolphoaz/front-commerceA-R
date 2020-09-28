<?php

namespace App\Http\Controllers;

use App\SubCategoriaProduto;
use Illuminate\Http\Request;

class SubCategoriaProdutoController extends Controller
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
            $create = SubCategoriaProduto::create($request->input());
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
     * @param  \App\SubCategoriaProduto  $subCategoriaProduto
     * @return \Illuminate\Http\Response
     */
    public function show(SubCategoriaProduto $subCategoriaProduto)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\SubCategoriaProduto  $subCategoriaProduto
     * @return \Illuminate\Http\Response
     */
    public function edit(SubCategoriaProduto $subCategoriaProduto)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\SubCategoriaProduto  $subCategoriaProduto
     * @return \Illuminate\Http\Response
     */

    public function update(Request $request)
    {
        try{
            SubCategoriaProduto::where(['id' => $id])->update($request->input());
            return response()->json(['status' => 'atualizado com sucesso']); 
        }catch (Exception $ex) {
            return response()->json($ex);
        }
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\SubCategoriaProduto  $subCategoriaProduto
     * @return \Illuminate\Http\Response
     */
    public function destroy(SubCategoriaProduto $subCategoriaProduto)
    {
        //
    }

    
    function DataTable () {
        return datatables()->of(SubCategoriaProduto::all())->toJson();
    }
}
