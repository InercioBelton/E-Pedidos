<?php



namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Comentario;

use App\Http\Requests\ComentariosRequest;

class ComentarioController extends Controller
{
    //


					public function index(){

					}

					public function create(){
						return view('index');
					}

					public function store(ComentariosRequest $request){


						$input = $request->all();


					 	\App\Comentarios::create($input);

					 	notify()->flash('Obrigado pelo seu comentario!','success');

					 return redirect()->away('/restaurante#tituloContacte');

					 	

					}

					public function show($id){
						
					}

					public function edit($id){
						
					}

					public function update(ComentariosRequest $request, $id){
						
					}

					public function destroy($id){
						


					}


					}

?>