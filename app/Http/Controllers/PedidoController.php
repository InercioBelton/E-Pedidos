<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class PedidoController extends Controller
{
    public function index(){
            
    }

    public function create(){
    }

    public function store(Request $request){
            
        notify()->flash('pedido','success');
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
}
