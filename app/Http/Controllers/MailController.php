<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;
use Session;
use Redirect;
use App\Http\Requests;

class MailController extends Controller
{

    public function index(){

    }

    public function create(){

    }

    public function store(Request $request){
            Mail::send('emails.contact',$request->all(), function($msg){
                    $msg->subject('Novo comentario sobre o website!');
                    $msg->to('epedidosweb@gmail.com');
            });

        notify()->flash('email','success');
        return redirect()->away('/restaurante#tituloContacte');

    }

    public function show($id){

    }

    public function edit($id){

    }

    public function update(ProdutosRequest $request, $id){

    }

    public function destroy($id){



    }
}
