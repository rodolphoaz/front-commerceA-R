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

Route::prefix('/')->group(function () {

	Route::get('product', 'ProductController@index')->name('product.index');

	Route::get('product/{category}/{subcategory?}','ProductController@show')
				->where(['category'=> '[a-z]+' , 'subcategory' => '[a-z]+'])
				->name('product.show');

				Route::get('caricaturas_tematicas', 'Caricatura_tematicasController@index')->name('caricaturas_tematicas.index');

				Route::get('caricaturas_tematicas/{category}/{subcategory?}','Caricatura_tematicasController@show')
							->where(['category'=> '[a-z]+' , 'subcategory' => '[a-z]+'])
							->name('Caricaturas_tematicas.show');
			
			
	Route::get('email','EmailController@index')->name('email');

	Route::get('home', 'HomeController@index')->name('home');

	Route::get('support','SupportController@index')->name('suport.index');

	Route::get('/about', 'AboutController@index')->name('about.index');

	Route::get('contact', 'ContactController@index')->name('contact');
	Route::post('contact' , 'ContactController@store')->name('contact.store');

	Route::get('about', 'AboutController@index')->name('about.index');
});

Route::prefix('RDAN')->middleware(['auth'])->group( function(){	
	
	Route::get('', function (){
		return redirect()->route('dashboard');
	});

	Route::group(['prfix' => 'lista pedidos', 'as' => 'pedidos.'] , function (){
		Route::get('' , 'PedidoController@index')->name('index');
		Route::post('update','PedidoController@update')->name('update');
		Route::get('edit' , 'PedidoController@edit')->name('edit');
		Route::get('datatable','PedidoController@DataTable')->name('data-table');
	});

	//routes  Categoria Produto
	
	Route::group(['prefix' => 'categoriaproduto' , 'as' => 'categoria_produto.' ] , function() {
		Route::get('', 'CategoriaProdutoController@index')->name('index');
		Route::get('create', 'CategoriaProdutoController@create')->name('create');
		Route::get('edit/{id?}', 'CategoriaProdutoController@edit')->name('edit');
		Route::get('datatable','CategoriaProdutoController@DataTable')->name('data-table');
		Route::post('save' , 'CategoriaProdutoController@save')->name('save');
		Route::post('update' , 'CategoriaProdutoController@update')->name('update');
		Route::post('delete' , 'CategoriaProdutoController@delete')->name('delete');
	});
		//routes  Categoria Produto
	
		Route::group(['prefix' => 'endereco_cbr' , 'as' => 'endereco_cobranca.' ] , function() {
			Route::get('', 'EnderecoCobrancaController@index')->name('index');
			Route::get('create', 'EnderecoCobrancaController@create')->name('create');
			Route::get('edit/{id?}', 'EnderecoCobrancaController@edit')->name('edit');
			Route::get('datatable','EnderecoCobrancaController@DataTable')->name('data-table');
			Route::post('save' , 'EnderecoCobrancaController@save')->name('save');
			Route::post('update' , 'EnderecoCobrancaController@update')->name('update');
			Route::post('delete' , 'EnderecoCobrancaController@delete')->name('delete');
		});		//routes  Categoria Produto
	
		Route::group(['prefix' => 'endereco_entrega' , 'as' => 'endereco_entrega.' ] , function() {
			Route::get('', 'EnderecoEntregaController@index')->name('index');
			Route::get('create', 'EnderecoEntregaController@create')->name('create');
			Route::get('edit/{id?}', 'EnderecoEntregaController@edit')->name('edit');
			Route::get('datatable','EnderecoEntregaController@DataTable')->name('data-table');
			Route::post('save' , 'EnderecoEntregaController@save')->name('save');
			Route::post('update' , 'EnderecoEntregaController@update')->name('update');
			Route::post('delete' , 'EnderecoEntregaController@delete')->name('delete');
		});
	//routes  Contato usuario
	
	Route::group(['prefix' => 'contatousuario' , 'as' => 'contatousuario.' ] , function() {
		Route::get('', 'ContatoUsuarioController@index')->name('index');
		Route::get('create', 'ContatoUsuarioController@create')->name('create');
		Route::get('edit/{id?}', 'ContatoUsuarioController@edit')->name('edit');
		Route::get('datatable','ContatoUsuarioController@DataTable')->name('data-table');
		Route::post('save' , 'ContatoUsuarioController@save')->name('save');
		Route::post('update' , 'ContatoUsuarioController@update')->name('update');
		Route::post('delete' , 'ContatoUsuarioController@delete')->name('delete');
	});
	
	
	//routes  Forma de pagamento
	
	Route::group(['prefix' => 'formapagamento' , 'as' => 'formapagamento.' ] , function() {
		Route::get('', 'FormaPagamentoController@index')->name('index');
		Route::get('create', 'FormaPagamentoController@create')->name('create');
		Route::get('edit/{id?}', 'FormaPagamentoController@edit')->name('edit');
		Route::get('datatable','FormaPagamentoController@DataTable')->name('data-table');
		Route::post('save' , 'FormaPagamentoController@save')->name('save');
		Route::post('update' , 'FormaPagamentoController@update')->name('update');
		Route::post('delete' , 'FormaPagamentoController@delete')->name('delete');
	});
	
	//routes Galeria de produto
	
	Route::group(['prefix' => 'galeriaproduto' , 'as' => 'galeriaproduto.' ] , function() {
		Route::get('', 'GaleriaProdutoController@index')->name('index');
		Route::get('create', 'GaleriaProdutoController@create')->name('create');
		Route::get('edit/{id?}', 'GaleriaProdutoController@edit')->name('edit');
		Route::get('datatable','GaleriaProdutoController@DataTable')->name('data-table');
		Route::post('save' , 'GaleriaProdutoController@save')->name('save');
		Route::post('update' , 'GaleriaProdutoController@update')->name('update');
		Route::post('delete' , 'GaleriaProdutoController@delete')->name('delete');
	});
	
	
	//routes produto
	
	Route::group(['prefix' => 'produto' , 'as' => 'produto.' ] , function() {
		Route::get('', 'ProdutoController@index')->name('index');
		Route::get('create', 'ProdutoController@create')->name('create');
		Route::get('edit/{id?}', 'ProdutoController@edit')->name('edit');
		Route::get('datatable','ProdutoController@DataTable')->name('data-table');
		Route::post('save' , 'ProdutoController@save')->name('save');
		Route::post('update' , 'ProdutoController@update')->name('update');
		Route::post('delete' , 'ProdutoController@delete')->name('delete');
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
	
		//rotas produto digital 
	Route::group(['prefix' => 'produto_digital' , 'as' => 'produto_digital.' ] , function() {
		Route::get('', 'ProdutoDigitalController@index')->name('index');
		Route::get('create', 'ProdutoDigitalController@create')->name('create');
		Route::get('edit/{id?}', 'ProdutoDigitalController@edit')->name('edit');
		Route::get('datatable','ProdutoDigitalController@DataTable')->name('data-table');
		Route::post('save' , 'ProdutoDigitalController@save')->name('save');
		Route::post('update' , 'ProdutoDigitalController@update')->name('update');
		Route::post('delete' , 'ProdutoDigitalController@delete')->name('delete');
	});
		//rotas tipo tag 
		Route::group(['prefix' => 'tipo_tag' , 'as' => 'tipo_tag.' ] , function() {
			Route::get('', 'TipoTagController@index')->name('index');
			Route::get('create', 'TipoTagController@create')->name('create');
			Route::get('edit/{id?}', 'TipoTagController@edit')->name('edit');
			Route::get('datatable','TipoTagController@DataTable')->name('data-table');
			Route::post('save' , 'TipoTagController@save')->name('save');
			Route::post('update' , 'TipoTagController@update')->name('update');
			Route::post('delete' , 'TipoTagController@delete')->name('delete');
		});
	
			//rotas telefone 
			Route::group(['prefix' => 'telefone' , 'as' => 'telefone.' ] , function() {
				Route::get('', 'TelefoneController@index')->name('index');
				Route::get('create', 'TelefoneController@create')->name('create');
				Route::get('edit/{id?}', 'TelefoneController@edit')->name('edit');
				Route::get('datatable','TelefoneController@DataTable')->name('data-table');
				Route::post('save' , 'TelefoneController@save')->name('save');
				Route::post('update' , 'TelefoneController@update')->name('update');
				Route::post('delete' , 'TelefoneController@delete')->name('delete');
			});
	
		//rotas Tipo Telefone 
		Route::group(['prefix' => 'tipo_telefone' , 'as' => 'tipo_telefone.' ] , function() {
			Route::get('', 'TipoTelefoneController@index')->name('index');
			Route::get('create', 'TipoTelefoneController@create')->name('create');
			Route::get('edit/{id?}', 'TipoTelefoneController@edit')->name('edit');
			Route::get('datatable','TipoTelefoneController@DataTable')->name('data-table');
			Route::post('save' , 'TipoTelefoneController@save')->name('save');
			Route::post('update' , 'TipoTelefoneController@update')->name('update');
			Route::post('delete' , 'TipoTelefoneController@delete')->name('delete');
		});	

	//rotas Tipo pagamento 
	Route::group(['prefix' => 'tipo_pagamento' , 'as' => 'tipo_pagamento.' ] , function() {
		Route::get('', 'TipoPagamentoController@index')->name('index');
		Route::get('create', 'TipoPagamentoController@create')->name('create');
		Route::get('edit/{id?}', 'TipoPagamentoController@edit')->name('edit');
		Route::get('datatable','TipoPagamentoController@DataTable')->name('data-table');
		Route::post('save' , 'TipoPagamentoController@save')->name('save');
		Route::post('update' , 'TipoPagamentoController@update')->name('update');
		Route::post('delete' , 'TipoPagamentoController@delete')->name('delete');
	});

		//rotas subCategoria produto
		Route::group(['prefix' => 'subcategoria' , 'as' => 'subcategoria_produto.' ] , function() {
			Route::get('', 'SubCategoriaProdutoController@index')->name('index');
			Route::get('create', 'SubCategoriaProdutoController@create')->name('create');
			Route::get('edit/{id?}', 'SubCategoriaProdutoController@edit')->name('edit');
			Route::get('datatable','SubCategoriaProdutoController@DataTable')->name('data-table');
			Route::post('save' , 'SubCategoriaProdutoController@save')->name('save');
			Route::post('update' , 'SubCategoriaProdutoController@update')->name('update');
			Route::post('delete' , 'SubCategoriaProdutoController@delete')->name('delete');
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

//routes  

Route::group(['prefix' => 'contatousuario' , 'as' => 'contatousuario.' ] , function() {
	Route::get('', 'ContatoUsuarioController@index')->name('index');
	Route::get('create', 'ContatoUsuarioController@create')->name('create');
	Route::get('edit/{id?}', 'ContatoUsuarioController@edit')->name('edit');
	Route::get('datatable','ContatoUsuarioController@DataTable')->name('data-table');
	Route::post('save' , 'ContatoUsuarioController@save')->name('save');
	Route::post('update' , 'ContatoUsuarioController@update')->name('update');
	Route::post('delete' , 'ContatoUsuarioController@delete')->name('delete');
});


//routes  Forma de pagamento

Route::group(['prefix' => 'formapagamento' , 'as' => 'formapagamento.' ] , function() {
	Route::get('', 'FormaPagamentoController@index')->name('index');
	Route::get('create', 'FormaPagamentoController@create')->name('create');
	Route::get('edit/{id?}', 'FormaPagamentoController@edit')->name('edit');
	Route::get('datatable','FormaPagamentoController@DataTable')->name('data-table');
	Route::post('save' , 'FormaPagamentoController@save')->name('save');
	Route::post('update' , 'FormaPagamentoController@update')->name('update');
	Route::post('delete' , 'FormaPagamentoController@delete')->name('delete');
});

//routes produto

Route::group(['prefix' => 'produto' , 'as' => 'produto.' ] , function() {
	Route::get('', 'ProdutoController@show')->name('show');
});






