<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use App\Caricatura;
use Illuminate\Http\Request;

class CaricaturaController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
            return view('admin.pages.caricatura.index');
       
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('admin.pages.caricatura.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        try {
            $create = Caricatura::create($request->input());
            return back()->with(['status' => 'cadastrado']);
        }catch (Exception $ex){
            return  response()->json(['msg' => $ex->error]);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Caricatura  $caricatura
     * @return \Illuminate\Http\Response
     */
    public function show(Caricatura $caricatura)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Caricatura  $caricatura
     * @return \Illuminate\Http\Response
     */
    public function edit($edit)
    {
        $fill = Caricatura::find($edit);
        return view('admin.pages.caricatura.edit', $fill);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Caricatura  $caricatura
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        try{
            Caricatura::where(['id' => $id])->update($request->input());
            return response()->json(['status' => 'atualizado com sucesso']); 
        }catch (Exception $ex) {
            return response()->json($ex);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Caricatura  $caricatura
     * @return \Illuminate\Http\Response
     */
    public function destroy(Caricatura $caricatura)
    {
        //
    }

    function DataTable(){
        return datatables()->of(Caricatura::all())->toJson();
    }
}
