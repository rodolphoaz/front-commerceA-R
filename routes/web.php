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

Route::get('/RDAN/login', function (){
	return redirect()->route('login');
});

Route::get('/', function (){
	return redirect()->route('home');	
});

Route::prefix('/')->group(function () {


	Route::get('product', 'ProductController@index')->name('product.index');

	Route::get('product/{category}/{subcategory?}','ProductController@show')
				->where(['category'=> '[a-z]+' , 'subcategory' => '[a-z]+'])
				->name('product.show');
			
	Route::get('email','EmailController@index')->name('email');

	Route::get('home', 'HomeController@index')->name('home');

	Route::get('support','SupportController@index')->name('suport.index');

	Route::get('/about', 'AboutController@index')->name('about.index');

	Route::get('contact', 'ContactController@index')->name('contact');
	Route::post('contact' , 'ContactController@store')->name('contact.store');

	Route::get('about', 'AboutController@index')->name('about.index');
});

Route::prefix('RDAN')->middleware(['auth'])->group( function(){	
	Route::get('/RDAN', function (){
		return redirect()->route('dashboard');
	});
	Route::get('list-caricatura', 'CaricaturaController@index')->name('caricatura.index');
	Route::get('caricatura', 'CaricaturaController@create')->name('caricatura.create');
	Route::get('caricatura/{id?}', 'CaricaturaController@edit')->name('caricatura.edit');
	
	Route::get('datatable','CaricaturaController@DataTable')->name('caricatura.data_table');
	Route::post('caricatura' , 'CaricaturaController@store')->name('caricatura.store');

	Route::put('caricatura' , 'CaricaturaController@update')->name('caricatura.update');
	
	Route::get('funcionario','EmployeeController@index')->name('employee.index');
	
	Route::get('dashboard', 'DashboardController@index')->name('dashboard');
	Route::resource('user', 'UserController');
	Route::put('profile/password', 'ProfileController@password')->name('profile.password');
	Route::get('profile', 'ProfileController@edit')->name('profile.edit');
	Route::put('profile/{id}', 'ProfileController@update')->name('profile.update');
});

Route::prefix('cliente')->middleware(['auth'])->group( function () {
	
	Route::get('profile', 'ProfileController@edit')->name('profile.edit');
	Route::put('profile/{id}', 'ProfileController@update')->name('profile.update');
	
	Route::get('checkout', 'CheckoutController@index')->name('checkout.index');
	Route::get('carrinho', 'Cartcontroller@index')->name('cart.index');
	
	Route::get('favoritos' ,  'ProductFavorite@index')->name('favorite.index');
	Route::post('favorito',  'ProductFavorite@delete')->name('favorite.delete');
	
	Route::get('amei' ,  'ProductLike@index')->name('like.index');
	Route::post('amei',  'ProductLike@delete')->name('like.delete');
});
