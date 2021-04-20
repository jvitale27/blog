<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\Categoria;

class Post extends Model
{
    use HasFactory;

    //relacion 1 a muchos inversa
    public  function user(){                              //metodo que me devuelve el usuario de un perfil
//        $user = User::find($this->user_id);
//        return $user;
        return $this->belongsTo(User::class);       //una manera mucho mas resumida que la anterior
//        return $this->belongsTo(User::class, 'user_id');       //si el campos no se llaman segun convencion, hay que pasarlo como argumento para que relacione las tablas
//        return $this->belongsTo('App\Models\User');       //igual que el anterior, no requiere el 
                                                            //"use App\Models\Users"
    }

    //relacion 1 a muchos inversa
    public  function categoria(){                          //metodo que me devuelve la categoria de un post
//        $categoria = Categoria::find($this->categoria_id);
//        return $categoria;
        return $this->belongsTo(Categoria::class);       //una manera mucho mas resumida que la anterior
//        return $this->belongsTo(Categoria::class, 'categoria_id');       //si el campos no se llaman segun convencion, hay que pasarlo como argumento para que relacione las tablas
//        return $this->belongsTo('App\Models\Categoria');       //igual que el anterior, no requiere el 
                                                            //"use App\Models\Categoria"
    }

        //relacion 1 a 1 polimorfica
    public function image(){
        return $this->morphOne('App\Models\Image', 'imageable');    //imageable es el metodo a usar
    }

}
