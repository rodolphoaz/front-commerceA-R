<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EmailController extends Controller
{
    function index(){
        return view('pages.email.index');
    }
}
