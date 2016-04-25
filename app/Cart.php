<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
     protected $fillable = ['id','nomeProd','price','quant'];
     

     public function pedidos(){
          return $this->belongsTo('App\Pedidos');
     }
     
}
