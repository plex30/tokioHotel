<?php

namespace App\Http\Controllers;

use App\Room;
use App\User;
use Illuminate\Http\Request;

class ReserveController extends Controller
{
    public function index(Request $request)
    {
        /* $capacidad = $request->get('capacidad'); */
        $room = Room::all();
        return view("reserve.index", compact('room'));
    }

    public function reserva(Request $request, Room $room){
        
        
        $entrada = $request->input('entrada');
        $salida = $request->input('salida');
        
        $idUser = $request->input('idUser');
        $idRoom = $request->input('idRoom');
        $user = User::find($idUser);
        dd($user, $idUser, $idRoom, $room->id);
        $user->room()->attach($idRoom,['f_entrada'=>$entrada, 'f_salida'=>$salida]);
        return redirect()->route('reserve.show', $room);
        
    }

    public function show(Request $request){
        $id = $request->input('id');
        $room = Room::find($id);
        return view('reserve.detalle',compact('room') );
    }



}
