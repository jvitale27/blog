<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    use HasFactory;

    //relacion muchos a muchos inversa polimorfica
    public function posts(){
    	return $this->morphedByMany('App\Models\Post', 'taggable');	//taggable[s] es la tabla intermedia que las relaciona
    }

    //relacion muchos a muchos inversa polimorfica
    public function videos(){
    	return $this->morphedByMany('App\Models\Video', 'taggable');//taggable[s] es la tabla intermedia que las relaciona
    }
}
