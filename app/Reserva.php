<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reserva extends Model
{
    protected $fillable = ['id','nomeCliente', 'email','telefone','data','hora','nrAcompanhantes','observacao','userID'];

    public function users(){
        return $this->hasMany('App\User');
    }
 
}
