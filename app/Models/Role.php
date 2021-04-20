<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\Permiso;

class Role extends Model
{
    use HasFactory;

    //relacion muchos a muchos
    public  function users(){                       //metodo que me devuelve los usuarios de un rol
//        $users = User::find($this->user_id);
//        return $users;
        return $this->belongsToMany(User::class);       //una manera mucho mas resumida que la anterior
//        return $this->belongsToMany(User::class, 'user_id');       //si el campos no se llaman segun convencion, hay que pasarlo como argumento para que relacione las tablas
//        return $this->belongsToMany('App\Models\User');       //igual que el anterior, no requiere 																el "use App\Models\Role"
    }

    //relacion muchos a muchos
    public  function permisos(){                       //metodo que me devuelve los permisosde un rol
//        $permisos = Permiso::find($this->permiso_id);
//        return $permisos;
        return $this->belongsToMany(Permiso::class);       //una manera mucho mas resumida que la anterior
//        return $this->belongsToMany(Permiso::class, 'permiso_id');       //si el campos no se llaman segun convencion, hay que pasarlo como argumento para que relacione las tablas
//        return $this->belongsToMany('App\Models\Permiso');       //igual que el anterior, no requiere 																el "use App\Models\Permiso"
    }

}
