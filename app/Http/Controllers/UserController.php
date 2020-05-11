<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    
    public function indexReservas(){

    }

    public function edit(User $user){
        return view('user.edit', compact('user'));
    }
    
    public function update(){

    }


}
