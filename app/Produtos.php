<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Produtos extends Model
{
     protected $fillable = ['id','nomeProduto', 'preco','categoria_id'];
}
