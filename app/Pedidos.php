<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pedidos extends Model
{
    protected $fillable = ['id','clienteID','hora','observacao'];

    public function users(){
        return $this->hasMany('App\User');
    }

}
