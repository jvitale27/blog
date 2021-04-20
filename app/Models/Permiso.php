<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Role;

class Permiso extends Model
{
    use HasFactory;

    //relacion muchos a muchos
    public  function roles(){                       //metodo que me devuelve los roles de un permiso
//        $roles = User::find($this->role_id);
//        return $roles;
        return $this->belongsToMany(Role::class);       //una manera mucho mas resumida que la anterior
//        return $this->belongsToMany(Role::class, 'role_id');       //si el campos no se llaman segun convencion, hay que pasarlo como argumento para que relacione las tablas
//        return $this->belongsToMany('App\Models\Role');       //igual que el anterior, no requiere 																el "use App\Models\Role"
    }
}
