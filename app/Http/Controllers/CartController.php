<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class CartController extends Controller
{
    


					public function index(){

					}

					public function create(){
					}

					public function store(){

					session_start();
                    $id = $_SESSION['id'];	

				    $produto = \App\Produtos::find($id);

                    echo $id;

                    $item = [

                    'id' => null,
                    'descricao' => $produto->nomeProduto,
                    'preco' => $produto->preco,
                    'quantidade' => '1',
                              ];

                     \App\Cart::create($item);
                     return redirect();

					}

					public function show($id){
						
					}

					public function edit($id){
						
					}

					public function update($request, $id){
						
					}

					public function destroy($id){
						


					}


}
