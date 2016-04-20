<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests\CartRequest;

use App\Cart;

class CartController extends Controller
{
    


					public function index(){

					}

					public function create(){
					}

					public function store(CartRequest $request){

						$id = $_GET['cod'];

				    $produto = \App\Produtos::find($id);


                    $item = array();


                     \App\Cart::create([

						 'id' => null,
						 'nomeProd' => $produto->nomeProduto,
						 'price' => $produto->preco,
						 'quant' => '1',
					 ]);
						return redirect()->away('/restaurante#menu');

					}

					public function show($id){
						
					}

					public function edit($id){
						
					}

					public function update($request, $id){
						
					}

					public function destroy($id){

						\App\Cart::truncate();

					}

					public function fazerPedido(){

					}


}
