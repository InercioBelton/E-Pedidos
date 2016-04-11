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

Route::get('usuario/{id}', function($id){
	$user = App\Usuario::find($id);
	echo "Hey .. my name is ". $user->nomeUsuario;
});

Route::get('restaurante', function(){

	$produtos = App\Produtos::all();
	$categorias = App\Categoria::all();

 
	return view('index')->with('produtos',$produtos)->with("categorias",$categorias);

});

Route::get('getComentarios', function(){
	$user = App\Comentarios::find(1);
	echo "Hey .. my name is ". $user->Nome;
});

Route::resource('comentario','ComentarioController');

Route::resource('reserva','ReservaController');


?>