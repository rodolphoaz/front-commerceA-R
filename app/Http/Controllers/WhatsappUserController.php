<?php

namespace App\Http\Controllers;

use App\WhatsappUser;
use Illuminate\Http\Request;

class WhatsappUserController extends Controller
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
            $create = WhatsappUser::create($request->input());
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
     * @param  \App\WhatsappUser  $whatsappUser
     * @return \Illuminate\Http\Response
     */
    public function show(WhatsappUser $whatsappUser)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\WhatsappUser  $whatsappUser
     * @return \Illuminate\Http\Response
     */
    public function edit(WhatsappUser $whatsappUser)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\WhatsappUser  $whatsappUser
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, WhatsappUser $whatsappUser)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\WhatsappUser  $whatsappUser
     * @return \Illuminate\Http\Response
     */
    public function destroy(WhatsappUser $whatsappUser)
    {
        //
    }

    function DataTable () {
        return datatables()->of(WhatsappUser::all())->toJson();
    }
}
