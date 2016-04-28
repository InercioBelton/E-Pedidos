				<?php

				/*
				|--------------------------------------------------------------------------
				| Application Routes
				|--------------------------------------------------------------------------
				|
				| Here is where you can register all of the routes for an application.
				| It's a breeze. Simply tell Laravel the URIs it should respond to
				| and give it the controller to call when that URI is requested.
				|
				*/

				use App\comentario;

				Route::get('/', function () {
					if(Auth::guest()){
						return Redirect::to('mylogin');
					}else {
						$produtos = App\Produtos::all();
						$categorias = App\Categoria::all();

						$nome = Auth::User()->name;
						$email = Auth::User()->email;
						$id = Auth::User()->id;
						
						return view('index')->with('produtos', $produtos)->
						with("categorias", $categorias)->with("nome",$nome)->with("email",$email)->with("id",$id);
					}

				});

				

				Route::get('restaurante', function () {
					if(Auth::guest()){
						return Redirect::to('mylogin');
					}else {
						$produtos = App\Produtos::all();
						$categorias = App\Categoria::all();

						$nome = Auth::User()->name;
						$email = Auth::User()->email;
						$id = Auth::User()->id;



						return view('index')->with('produtos', $produtos)->with("categorias", $categorias)->
						with("nome",$nome)->with("email",$email)->with("id",$id);
					}
				});


				// Authentication routes...
				Route::get('auth/login', 'Auth\AuthController@getLogin');
				Route::post('auth/login', 'Auth\AuthController@postLogin');
				Route::get('auth/logout', 'Auth\AuthController@getLogout');

				// Registration routes...
				Route::get('auth/register', 'Auth\AuthController@getRegister');
				Route::post('auth/register', 'Auth\AuthController@postRegister');



				Route::get('mylogin', function(){
					return view ('login');
				});

				Route::get('registar', function(){
					return view ('registar');
				});

				Route::get('removeCart/{id}', function($id){
					App\Cart::destroy($id);
					return redirect()->away('/restaurante#tituloMeuPedido');
				});

				Route::get('removeReserva/{cod}', function($cod){
					App\Reserva::destroy($cod);
					return redirect()->away('/restaurante#linkReserva');
				});

				Route::auth();



				Route::resource('mail','MailController');

				Route::resource('cart/{id}','CartController@store');

				Route::resource('fazerPedido/{idUser}','PedidoController@store');
				
				Route::resource('editarReserva/{id}','ReservaController@edit');

				Route::resource('comentario','ComentarioController');

				Route::resource('reserva/{cod}','ReservaController@store');
				

				?>

