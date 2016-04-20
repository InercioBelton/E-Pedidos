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
					echo "Welcome Mr. Belton!";
				});




				Route::get('restaurante', function(){

					$produtos = App\Produtos::all();
					$categorias = App\Categoria::all();

					return view('index')->with('produtos',$produtos)->with("categorias",$categorias);

				});



				Route::get('mylogin', function(){
					return view ('login');
				});


				Route::auth();

				Route::get('/home', 'HomeController@index');

				Route::resource('comentario','ComentarioController');

				Route::resource('reserva','ReservaController');

				Route::get('remove/{id}', function($id){
					App\Cart::destroy($id);
					return redirect()->away('/restaurante#menu');
				});

				Route::resource('cart/{id}','CartController@store');



				Route::resource('pedido','PedidoController');


				

				?>

