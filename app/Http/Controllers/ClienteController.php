<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClienteController extends Controller
{

    function welcomeCliente(){
        return  view('cliente.welcome');
    } 

    function historicoCliente(){
        return view('cliente.pages.historico');
    }

    function perfilCliente(){
        return  view('cliente.pages.pefil');
    }

    function resumoCliente(){
        return  view('cliente.pages.resumo');
    }

}
