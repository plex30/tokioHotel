<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserRoom extends Model
{
    protected $table = 'room_user';
    public function usuario()
    {
        return $this->belongsTo('App\User')->wihtPivot('f_entrada', 'f_salida');
    }
    public function habitacion()
    {
        return $this->belongsTo('App\Room')->wihtPivot('f_entrada', 'f_salida');
    }
}
