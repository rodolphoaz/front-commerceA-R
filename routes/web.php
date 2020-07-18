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

Route::get('/email','EmailController@index')->name('email');

Route::get('/contact', 'ContactController@index')->name('contact');
Route::post('/contact' , 'ContactController@store')->name('contact.store');

Route::get('/about', 'AboutController@index')->name('about.index');

Route::prefix('UAXEE112')->middleware(['auth'])->group( function(){
	Route::get('/dashboard', 'DashboardController@index')->name('dashboard');
	Route::put('profile/password', 'ProfileController@password')->name('profile.password');
	Route::get('profile', 'ProfileController@edit')->name('profile.edit');
	Route::put('profile', 'ProfileController@update')->name('profile.update');
});

Route::prefix('cliente')->middleware(['auth'])->group( function () {
	Route::get('profile', 'ProfileController@edit')->name('profile.edit');
	Route::put('profile', 'ProfileController@update')->name('profile.update');
});

