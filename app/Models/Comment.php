<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;

    //relacion 1 a muchos inversa
    public  function user(){                    //metodo que me devuelve el usuario de un comment
        return $this->belongsTo('App\Models\User');       //una manera mucho mas resumida
    }


    //relacion polimorfica
    public function commentable(){

    	return $this->morphTo();	//le indico que esta tabla es de relacion polimorfica

    }
}
