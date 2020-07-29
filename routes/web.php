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
	return redirect()->route('individual.index');
	
});

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/email','EmailController@index')->name('email');

Route::get('support','SupportController@index')->name('suport.index');

Route::get('/contact', 'ContactController@index')->name('contact');
Route::post('/contact' , 'ContactController@store')->name('contact.store');

Route::get('/about', 'AboutController@index')->name('about.index');

/*Mugs*/ 

Route::get('/individual', 'IndividualController@index')->name('individual.index');
Route::post('/individual' , 'IndividualController@store')->name('individual.store');


Route::get('/infantil', 'InfantilController@index')->name('infantil.index');
Route::post('/infantil' , 'InfantilController@store')->name('infantil.store');

Route::get('/tematica', 'TematicaController@index')->name('tematica.index');
Route::post('/tematica' , 'TematicaController@store')->name('tematica.store');

Route::get('/casal', 'CasalController@index')->name('casal.index');
Route::post('/casal' , 'CasalController@store')->name('casal.store');

/*digital*/ 

Route::get('/Aniver_lapis', 'Aniver_lapisController@index')->name('Aniver_lapis.index');
Route::post('/Aniver_lapis' , 'IndividualController@store')->name('Aniver_lapis.store');

Route::get('/Casal_lapis', 'Casal_lapisController@index')->name('Casal_lapis.index');
Route::post('/Casal_lapis' , 'Casal_lapisController@store')->name('Casal_lapisstore');

Route::get('/Evento_lapis', 'Evento_lapisController@index')->name('Evento_digital.index');

Route::get('/Formatura_lapis', 'Formatura_lapisController@index')->name('Formatura_lapis.index');
Route::post('/Formatura_lapis' , 'Formatura_digitalController@store')->name('Formatura_digital.store');

Route::get('/Grupo_digital', 'Grupo_digitalController@index')->name('Grupo_digital.index');
Route::post('/Grupos_digital' , 'Grupo_digitalController@store')->name('Grupo_digital.store');

Route::get('/Infantil_digital', 'Infantil_digitalController@index')->name('Infantil_digital.index');
Route::post('/Infantil_digital' , 'Infantil_digitalController@store')->name('Infantil_digital.store');

Route::get('/Noivos_digital', 'Noivos_digitalController@index')->name('Noivos_digital.index');
Route::post('/Noivos_digital' , 'Noivos_digitalController@store')->name('Noivos_digital.store');

Route::get('/Pets_digital', 'Pets_digitalController@index')->name('Pets_digital.index');
Route::post('/Pets_digital' , 'Pets_digitalController@store')->name('Pets_digital.store');

Route::get('/Tematicas_digital', 'Tematicas_digitalController@index')->name('Tematicas_digital.index');
Route::post('/Tematicas_digital' , 'Tematicas_digitalController@store')->name('Tematicas_digital.store');

/*a lapis*/ 

Route::get('/Individual_lapis', 'Individual_lapisController@index')->name('Individual_lapis.index');
Route::post('/Individual_lapis' , 'Individual_lapisController@store')->name('Individual_lapis.store');

Route::get('/Aniver_lapis', 'Aniver_lapisController@index')->name('Aniver_lapis.index');
Route::post('/Aniver_lapis' , 'Aniver_lapisController@store')->name('Aniver_lapis.store');

Route::get('/Casal_lapis', 'Casal_lapisController@index')->name('Casal_lapis.index');
Route::post('/Casal_lapis' , 'Casal_lapisController@store')->name('Casal_lapisstore');

Route::get('/Evento_digital', 'Evento_lapisController@index')->name('Evento_lapis.index');

Route::get('/Formatura_lapis', 'Formatura_lapisController@index')->name('Formatura_lapis.index');
Route::post('/Formatura_lapis' , 'Formatura_digitalController@store')->name('Formatura_digital.store');

Route::get('/Grupos_lapis', 'Grupos_lapisController@index')->name('Grupos_lapis.index');
Route::post('/Grupos_lapis' , 'Grupos_lapisController@store')->name('Grupos_lapis.store');

Route::get('/Infantil_lapis', 'Infantil_lapisController@index')->name('Infantil_lapis.index');
Route::post('/Infantil_lapis' , 'Infantil_lapisController@store')->name('Infantil_lapis.store');

Route::get('/Noivos_lapis', 'Noivos_lapisController@index')->name('Noivos_lapis.index');
Route::post('/Noivos_lapis' , 'Noivos_lapisController@store')->name('Noivos_lapis.store');

Route::get('/Pets_lapis', 'Pets_lapisController@index')->name('Pets_lapis.index');
Route::post('/Pets_lapis' , 'Pets_lapisController@store')->name('Pets_lapis.store');

Route::get('/Tematicas_lapis', 'Tematicas_lapisController@index')->name('Tematicas_lapis.index');
Route::post('/Tematicas_lapis' , 'Tematicas_lapisController@store')->name('Tematicas_lapis.store');

/*quadros*/ 

Route::get('/qindividual', 'QindividualController@index')->name('qindividual.index');
Route::post('/qindividual' , 'QindividualController@store')->name('qindividual.store');

Route::get('/qinfantil', 'QinfantilController@index')->name('qinfantil.index');
Route::post('/qinfantil' , 'QinfantilController@store')->name('qinfantil.store');

Route::get('/qtematica', 'QtematicaController@index')->name('qtematica.index');
Route::post('/qtematica' , 'QtematicaController@store')->name('qtematica.store');

Route::get('/qcasal', 'QcasalController@index')->name('qcasal.index');
Route::post('/qcasal' , 'QcasalController@store')->name('qcasal.store');

/*Mascotes*/ 

Route::get('/animais', 'AnimaisController@index')->name('animais.index');
Route::post('/animais' ,'AnimaisController@store')->name('animais.store');

Route::get('/personagens', 'PersonagensController@index')->name('personagens.index');
Route::post('/personagens' , 'PersonagensController@store')->name('personagens.store');

Route::get('/pessoas', 'PessoasController@index')->name('pessoas.index');
Route::post('/pessoas' , 'PessoasController@store')->name('pessoas.store');


Route::prefix('UAXEE112')->middleware(['auth'])->group( function(){	
	Route::get('/dashboard', 'DashboardController@index')->name('dashboard');
	Route::put('profile/password', 'ProfileController@password')->name('profile.password');
	Route::get('profile', 'ProfileController@edit')->name('profile.edit');
	Route::put('profile', 'ProfileController@update')->name('profile.update');
});

Route::prefix('cliente')->middleware(['auth'])->group( function () {
	Route::get('profile/{id}', 'ProfileController@edit')->name('profile.edit');
	Route::put('profile/{id}', 'ProfileController@update')->name('profile.update');
});

Route::get('/product','ProductController@index')->name('product');

Route::get('/email','EmailController@index')->name('email');