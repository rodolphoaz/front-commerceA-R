<?php

namespace App\Http\Controllers;

use App\TipoTelefone;
use Illuminate\Http\Request;

class TipoTelefoneController extends Controller
{
  /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    function index() {
        return view('admin.pages.tipo_telefone.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    function create() {
        return view('admin.pages.tipo_telefone.create');
    }

    function save(Request $request) {
        try {
            $create = TipoTelefone::create($request->input());
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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return  view('admin.pages.tipo_telefone.edit');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        try{
            TipoTelefone::where(['id' => $id])->update($request->input());
            return response()->json(['status' => 'atualizado com sucesso']); 
        }catch (Exception $ex) {
            return response()->json($ex);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    function delete(Request $request){
        foreach ( $request->uuids as $uuid) :
            $x = TipoTelefone::where('uuid', '=', $uuid)->first();
            $x->delete();
        endforeach;
    }

    function DataTable () {
        return datatables()->of(TipoTelefone::all())->toJson();
    }
}
