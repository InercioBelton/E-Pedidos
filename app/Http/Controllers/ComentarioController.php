<?php

use App\Http\Controllers\Controller;

namespace App\Http\Controllers;

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

					 	$request->session()->flash('alert-success', 'User was successful added!');
					    return redirect()->back();

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