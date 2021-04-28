<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class Video extends Model
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

    //relacion 1 a muchos polimorfica
    public function comments(){
        return $this->morphMany('App\Models\Comment', 'commentable');    //commentable es el metodo a usar
    }

    //relacion muchos a muchos polimorfica
    public function tags(){
        return $this->morphToMany('App\Models\Tag', 'taggable');    //taggable[s] es la tabla intermedia que las relaciona
    }

}
