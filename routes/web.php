<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Auth::routes();

Route::get('/', function (){
    return redirect()->route('home');
});

Route::get('/home', 'HomeController@index')->name('home');


/* Rodolpho- Teste de rota */
/* Produtos - Canecas */

/* Route::get('/product', function(){
    return views(views. 'product.indmugs');
})->name('product.indmugs');*/

Route::get('/product','ProductController@index')->name('product');

Route::get('/email','EmailController@index')->name('email');