<?php

namespace App\Http\Controllers;

use App\ContatoUser;
use Illuminate\Http\Request;

class ContatoUserController extends Controller
{/**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    function index() {
        return view('admin.pages.contato_user.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    function create() {
        return view('admin.pages.contato_user.create');
    }

    function save(Request $request) {
        try {
            $create = ContatoUser::create($request->input());
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
     * @param  \App\ContatoUser  $contatoUser
     * @return \Illuminate\Http\Response
     */
    public function show(ContatoUser $contatoUser)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\ContatoUser  $contatoUser
     * @return \Illuminate\Http\Response
     */
    function edit(ContatoUser $contatoUser)
    {
        return  view('admin.pages.contato_user.edit');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\ContatoUser  $contatoUser
     * @return \Illuminate\Http\Response
     */
    function update(Request $request)
    {
        try{
            ContatoUser::where(['id' => $id])->update($request->input());
            return response()->json(['status' => 'atualizado com sucesso']); 
        }catch (Exception $ex) {
            return response()->json($ex);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\ContatoUser  $contatoUser
     * @return \Illuminate\Http\Response
     */
    public function destroy(ContatoUser $contatoUser)
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
            $x = ContatoUser::where('uuid','=',$uuid)->first();
            $x->delete();
        }
    }



    function DataTable () {
        return datatables()->of(ContatoUser::all())->toJson();
    }
}
