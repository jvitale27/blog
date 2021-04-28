<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Fortify\TwoFactorAuthenticatable;
use Laravel\Jetstream\HasProfilePhoto;
use Laravel\Jetstream\HasTeams;
use Laravel\Sanctum\HasApiTokens;
use App\Models\Profile;
use App\Models\Post;
use App\Models\Video;
use App\Models\Role;

class User extends Authenticatable
{
    use HasApiTokens;
    use HasFactory;
    use HasProfilePhoto;
    use HasTeams;
    use Notifiable;
    use TwoFactorAuthenticatable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
        'two_factor_recovery_codes',
        'two_factor_secret',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    /**
     * The accessors to append to the model's array form.
     *
     * @var array
     */
    protected $appends = [
        'profile_photo_url',
    ];

    //relacion 1 a 1 direta
    public  function profile(){                              //metodo que me devuelve el perfil de un usuario
//        $profile = Profile::where('user_id', $this->id)->first();
//        return $profile;
        return $this->hasOne(Profile::class);       //una manera mucho mas resumida que la anterior
//        return $this->hasOne(Profile::class, 'user_id', 'id');       //si los campos no se llaman segun convencion, hay que pasarlos como argumento para que relacione las tablas
//        return $this->hasOne('App\Models\Profile');       //igual que el anterior, no requiere el 
                                                            //"use App\Models\Profile"
    }

    //relacion 1 a muchos direta
    public  function posts(){                              //metodo que me devuelve los posts de un usuario
//        $posts = Posts::where('user_id', $this->id);
//        return $posts;
        return $this->hasMany(Post::class);       //una manera mucho mas resumida que la anterior
//        return $this->hasMany(Post::class, 'user_id', 'id');       //si los campos no se llaman segun convencion, hay que pasarlos como argumento para que relacione las tablas
//        return $this->hasMany('App\Models\Post');       //igual que el anterior, no requiere el 
                                                            //"use App\Models\Post"
    }

    //relacion 1 a muchos direta
    public  function videos(){                              //metodo que me devuelve los videos de un usuario
//        $videos = Video::where('user_id', $this->id);
//        return $videos;
        return $this->hasMany(Video::class);       //una manera mucho mas resumida que la anterior
//        return $this->hasMany(Video::class, 'user_id', 'id');       //si los campos no se llaman segun convencion, hay que pasarlos como argumento para que relacione las tablas
//        return $this->hasMany('App\Models\Video');       //igual que el anterior, no requiere el 
                                                            //"use App\Models\Video"
    }

    //relacion 1 a muchos direta
    public  function comments(){                 //metodo que me devuelve los comments de un usuario
        return $this->hasMany('App\Models\Comment');       //una manera mucho mas resumida
    }

    //relacion muchos a muchos
    public  function roles(){                              //metodo que me devuelve los roles de un usuario
//        $roles = Role::find($this->user_id);
//        return $roles;
        return $this->belongsToMany(Role::class);       //una manera mucho mas resumida que la anterior
//        return $this->belongsToMany(Role::class, 'user_id');       //si el campos no se llaman segun convencion, hay que pasarlo como argumento para que relacione las tablas
//        return $this->belongsToMany('App\Models\Role');       //igual que el anterior, no requiere el 
                                                            //"use App\Models\Role"
    }

    //relacion 1 a 1 polimorfica
    public function image(){
        return $this->morphOne('App\Models\Image', 'imageable');    //imageable es el metodo a usar
    }

}
