<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Role extends Model
{
    public function usrs(){
        return $this->belongsToMany('App\User')->withTimestamps();
    }
}
