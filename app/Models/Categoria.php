<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Post;

class Categoria extends Model
{
    use HasFactory;

    //relacion 1 a muchos direta
    public  function posts(){                              //metodo que me devuelve los posts de un usuario
//        $posts = Posts::where('categoria_id', $this->id);
//        return $posts;
        return $this->hasMany(Post::class);       //una manera mucho mas resumida que la anterior
//        return $this->hasMany(Post::class, 'categoria_id', 'id');       //si los campos no se llaman segun convencion, hay que pasarlos como argumento para que relacione las tablas
//        return $this->hasOne('App\Models\Post');       //igual que el anterior, no requiere el 
                                                            //"use App\Models\Post"
    }

}
