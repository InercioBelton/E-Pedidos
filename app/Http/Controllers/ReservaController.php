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

					public function store(ReservaRequest $request){

						$input = $request->all();


					 	\App\Reserva::create($input);

					 	echo "<script> alert('Reserva efectuada com sucesso') </script>";

					    return redirect()->back();



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
