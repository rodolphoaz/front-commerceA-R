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

/*digital*/ 

/*a lapis*/ 

/*quadros*/ 

/*Mascotes*/ 

Route::prefix('UAXEE112')->middleware(['auth'])->group( function(){	
	Route::get('funcionario','EmployeeController@index')->name('employee.index');
	Route::resource('product', 'ProductController')->name('product.resource');
	Route::get('dashboard', 'DashboardController@index')->name('dashboard');
	Route::put('profile/password', 'ProfileController@password')->name('profile.password');
	Route::get('profile', 'ProfileController@edit')->name('profile.edit');
	Route::put('profile', 'ProfileController@update')->name('profile.update');
});

Route::prefix('cliente')->middleware(['auth'])->group( function () {
	Route::get('profile/{id}', 'ProfileController@edit')->name('profile.edit');
	Route::put('profile/{id}', 'ProfileController@update')->name('profile.update');
	Route::get('checkout', 'CheckoutController@index')->name('checkout.index');
	Route::get('carrinho', 'Cartcontroller@index')->name('cart.index');

});

Route::get('/product','ProductController@index')->name('product');

Route::get('/email','EmailController@index')->name('email');