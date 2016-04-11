<?php
	

namespace App;

use Illuminate\Database\Eloquent\Model;


class Comentarios extends Model{


	 protected $fillable = ['id','nome', 'email', 'observacao','updated_at', 'created_at'];


}

?>