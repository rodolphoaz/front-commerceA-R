<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        
        //$this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {

        if (Auth::check()){
            if (Auth::user()->registration === null ){
                return view('loja.pages.inicio.index');
            }else {
                return redirect()->route('dashboard');
            }
        }else{
            return view('loja.pages.inicio.index');
        }
    }
}
