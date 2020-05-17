<?php

namespace App\Http\Controllers;

use App\Room;
use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    
    public function show(User $user){
       
        return view('user.show', compact('user'));
    }

    public function edit(User $user){
        return view('user.edit', compact('user'));
    }
    
    public function update(){

    }


}
