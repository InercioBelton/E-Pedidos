<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
     protected $fillable = ['id','nomeProd','price','quant','clienteID'];

     public function itemsCliente(){
          return $this->belongsTo('App\Pedidos');
     }
}
