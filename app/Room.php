<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    protected $fillable = [
        'tipo', 'capacidad', 'n_habitacion', 'pvp'
    ];

    public function users(){
        return $this->belongsToMany('App\User')->withPivot('f_entrada', 'f_salida'); 
    }
}
