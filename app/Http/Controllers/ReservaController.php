<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Http\Requests\ReservaRequest;

class ReservaController extends Controller
{
    public function index(){

					}

					public function create(){

					}

					public function store(ReservaRequest $request, $cod){
						

						\App\Reserva::create([
							'nomeCliente' => $request['nomeCliente'],
							'telefone' =>  $request['telefone'],
							'email' => $request['email'],
							'data' => $request['data'],
							'hora' => $request['hora'],
							'nrAcompanhantes' => $request['nrAcompanhantes'],
							'observacao' => $request['observacao'],
							'userID' =>  $cod,

						]);

						 notify()->flash('reserva criada','success');

						return redirect()->away('/restaurante#linkReserva');



						}


					public function show($id){
						
					}

					public function edit($id){
						
					}

					public function update(ReservaRequest $request, $id){
						
					}

					public function destroy($id){
						


					}
}
