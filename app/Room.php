<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    protected $fillable = [
        'tipo', 'capacidad', 'n_habitacion','tamano', 'pvp', 'imagen'
    ];

    public function usrs(){
        return $this->belongsToMany('App\User')->withPivot('f_entrada', 'f_salida'); 
    }

    public function scopeCapacidad($query, $v){
        switch ($v) {
            case '0':
                return $query;
                break;
            case '1':
                return $query->where('capacidad', '=', 1);
                break;
            case '2':
                return $query->where('capacidad', '=', 2);
                break;
            case '3':
                return $query->where('capacidad', '=', 3);
                break;    
            
        }
    }
}
