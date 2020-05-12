<?php

namespace App\Http\Controllers;

use App\Room;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\ReservaRequest;
use Illuminate\Support\Facades\Redirect;

class ReserveController extends Controller
{
    public function index(Request $request)
    {
        
        $room = Room::all();
        return view("reserve.index", compact('room'));
    }

    public function reserva(ReservaRequest $request){
        
        $datos=$request->validated();
        $user = User::find($request->get('idUser'));
        $user->room()->attach($request->get('idRoom'),['f_entrada'=>$datos['f_entrada'],'f_salida'=>$datos['f_salida']]);
        return redirect()->route('reserve.index')->with("mensaje", "Reserva Realizada, gracias por confiar en nosotros.
        Si lo desea puede ver su reserva en el panel de cliente.");
        
    }

    public function show(Request $request, Room $room){
        if (!Auth::check()) {
            return Redirect::to("/login");
        }
        $id = $request->input('id');
        $room = Room::find($id);
        return view('reserve.detalle',compact('room') );
    }



}
