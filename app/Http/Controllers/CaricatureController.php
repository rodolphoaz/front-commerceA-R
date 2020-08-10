<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use App\Caricature;
use Illuminate\Http\Request;

class CaricatureController extends Controller
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
    public function save(Request $request)
    {
        try {
            $create = Caricature::create($request->input());
            return back()->with(['status' => 'cadastrado']);
        }catch (Exception $ex){
            return  response()->json(['msg' => $ex->error]);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Caricature  $caricatura
     * @return \Illuminate\Http\Response
     */
    public function show(Caricature $caricatura)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Caricature  $caricatura
     * @return \Illuminate\Http\Response
     */
    public function edit($edit)
    {
        $fill = Caricature::find($edit);
        return view('admin.pages.caricatura.edit', $fill);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Caricature  $caricatura
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        try{
            Caricature::where(['id' => $id])->update($request->input());
            return response()->json(['status' => 'atualizado com sucesso']); 
        }catch (Exception $ex) {
            return response()->json($ex);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Caricature  $caricatura
     * @return \Illuminate\Http\Response
     */
    public function delete(Caricature $caricatura)
    {
        //
    }

    function DataTable(){
        return datatables()->of(Caricature::all())->toJson();
    }
}
