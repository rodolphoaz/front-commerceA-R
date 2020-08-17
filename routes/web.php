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
	return view('auth.admin_login');
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

/*Mugs*/ 

Route::get('/individual', 'IndividualController@index')->name('individual.index');
Route::post('/individual' , 'IndividualController@store')->name('individual.store');


Route::get('/Muginfantil', 'MuginfantilController@index')->name('Muginfantil.index');
Route::post('/Muginfantil' , 'MuginfantilController@store')->name('Muginfantil.store');

Route::get('/Mugtema', 'MugtemaController@index')->name('Mugtema.index');
Route::post('/Mugtema' , 'MugtemaController@store')->name('Mugtema.store');

Route::get('/Casal', 'CasalController@index')->name('Casal.index');
Route::post('/Casal' , 'CasalController@store')->name('Casal.store');

/*digital*/ 

Route::get('/AniverDigital', 'AniverDigitalController@index')->name('AniverDigital.index');
Route::post('/AniverDigital' , 'AniverDigitalController@store')->name('AniverDigital.store');

Route::get('/CasalDigital', 'Casal_DigitalController@index')->name('Casal_Digital.index');
Route::post('/CasalDigital' , 'Casal_DigitalController@store')->name('Casal_Digital.store');

Route::get('/EventoDigital', 'EventoDigitalController@index')->name('Evento_Digital.index');

Route::get('/FormaturaDigital', 'FormaturaDigitalController@index')->name('FormaturaDigital.index');
Route::post('/FormaturaDigital' , 'FormaturaDigitalController@store')->name('FormaturaDigital.store');

Route::get('/GrupoDigital', 'GrupoDigitalController@index')->name('GrupoDigital.index');
Route::post('/GruposDigital' , 'GrupoDigitalController@store')->name('Grupo_Digital.store');

Route::get('/InfantilDigital', 'InfantilDigitalController@index')->name('InfantilDigital.index');
Route::post('/InfantilDigital' , 'InfantilDigitalController@store')->name('InfantilDigital.store');

Route::get('/NoivosDigital', 'NoivosDigitalController@index')->name('NoivosDigital.index');
Route::post('/NoivosDigital' , 'NoivosDigitalController@store')->name('NoivosDigital.store');

Route::get('/PetsDigital', 'PetsDigitalController@index')->name('PetsDigital.index');
Route::post('/PetsDigital' , 'PetsDigitalController@store')->name('PetsDigital.store');

Route::get('/TematicasDigital', 'TematicasDigitalController@index')->name('TematicasDigital.index');
Route::post('/TematicasDigital' , 'TematicasDigitalController@store')->name('TematicasDigital.store');


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

/* end Mascotes*/ 


	Route::get('contact', 'ContactController@index')->name('contact');
	Route::post('contact' , 'ContactController@store')->name('contact.store');

	Route::get('about', 'AboutController@index')->name('about.index');
});

Route::prefix('RDAN')->middleware(['auth'])->group( function(){	
	
	Route::get('', function (){
		return redirect()->route('dashboard');
	});


	Route::get('funcionario','EmployeeController@index')->name('employee.index');
	
	Route::get('dashboard', 'DashboardController@index')->name('dashboard');
	Route::resource('user', 'UserController');
	//rotas caricatura 
	Route::group(['prefix' => 'caricatura' , 'as' => 'caricature.' ] , function() {
		Route::get('', 'CaricatureController@index')->name('index');
		Route::get('create', 'CaricatureController@create')->name('create');
		Route::get('edit/{id?}', 'CaricatureController@edit')->name('edit');
		Route::get('datatable','CaricatureController@DataTable')->name('data-table');
		Route::post('save' , 'CaricatureController@save')->name('save');
		Route::post('update' , 'CaricatureController@update')->name('update');
		Route::post('delete' , 'CaricatureController@delete')->name('delete');
	});

	//rotas itens_adicionais
	Route::group(['prefix' => 'itens-adicionais' , 'as' => 'itens-adicionais.' ] , function() {
		Route::get('','ItemAdicionalController@index')->name('index');		
		Route::get('data-table', 'ItemAdicionalController@DataTable')->name('data-table');
		Route::get('create', 'ItemAdicionalController@create')->name('create');
		Route::post('save', 'ItemAdicionalController@save')->name('save');
		Route::get('edit/{id?}','ItemAdicionalController@edit')->name('edit');
		Route::post('update'.'ItemAdicionalController@update')->name('update');
		Route::post('delete','ItemAdicionalController@delete')->name('delete');
	});
	//rotas itens_adicionais
	Route::group(['prefix' => 'item-type' , 'as' => 'item-type.' ] , function() {
		Route::get('','ItemTypeController@index')->name('index');		
		Route::get('data-table', 'ItemTypeController@DataTable')->name('data-table');
		Route::get('create', 'ItemTypeController@create')->name('create');
		Route::post('save', 'ItemTypeController@save')->name('save');
		Route::get('edit/{id?}','ItemTypeController@edit')->name('edit');
		Route::post('update'.'ItemTypeController@update')->name('update');
		Route::post('delete','ItemTypeController@delete')->name('delete');
	});


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
