<?php

namespace App\Http\Controllers;

use App\Prod_Pedidos;
use Illuminate\Http\Request;

use App\Http\Requests\PedidoRequest;

class PedidoController extends Controller
{
    public function index(){
            
    }

    public function create(){
    }

    public function store(PedidoRequest $request, $idUser){


       $pedido = \App\Pedidos::create([

            'id' => null,
            'clienteID' => $idUser,
            'hora' => $_POST['horaPedido'],
            'observacao' =>  $_POST['preferencias'],
        ]);

        $produtos_pedido = new Prod_Pedidos();
        $todosItems = \App\Cart::all();

        foreach ($todosItems as $Cart){
            if($Cart->pedidoID == null) {
                $Cart->pedidoID = $pedido->id;
                $Cart->save();
            }
        }
        


        notify()->flash('pedido','success');
        
        return redirect()->away('/restaurante#tituloMeuPedido');

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
}
