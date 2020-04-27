<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Role extends Model
{
    public function users(){
        return $this->belongsToMany('App\User')->withTimestamps();
    }
}
