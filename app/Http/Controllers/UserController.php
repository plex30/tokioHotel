<?php

namespace App\Http\Controllers;

use App\Room;
use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function show(User $user){
       
        return view('user.show', compact('user'));
    }

    public function edit(User $user){
        return view('user.edit', compact('user'));
    }
    
    public function update(Request $request, User $user){
        $user->update($request->all());
        
        return redirect()->route('home')->with('message', 'Sus datos se han actualizado correctamente, gracias por usar nuestros servicios.');
    }


}
