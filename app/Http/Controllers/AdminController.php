<?php

namespace App\Http\Controllers;

use App\Room;
use App\User;
use App\UserRoom;
use Illuminate\Http\Request;
use App\Http\Requests\ReservaRequest;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\ActReservaRequest;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }


    public function indexCli(){
        $user = User::orderBy('id')->paginate(10);
        return view('admin.indexCli', compact('user'));
    }


    public function indexRoom(){
        $room = Room::orderBy('id')->paginate(10);
        return view('admin.indexRoom', compact('room'));
    }


    public function indexRev(){
        $uroom = UserRoom::all();
        return view('admin.indexRev', compact('uroom'));
    }


    public function destroyCli(User $user){
        $user->delete();
        return redirect()->route('admin.indexCli')->with('message', 'Usuario Borrado');
    }


    public function destroyRoom(Room $room){
        /* $foto = $room->imagen;
        if (basename($foto)!='default.jpg') {

            unlink(($foto));
        } */
        $room->delete();
        return redirect()->route('admin.indexRoom')->with('message', 'Habitación Borrada');


    }
        

    public function destroyRev(UserRoom $uroom){
        $uroom->delete();
        return redirect()->route('admin.indexRev')->with('message', 'Reserva Cancelada');
    }


    public function editCli(User $user){
        return view('admin.editCli', compact('user'));
    }


    public function editRoom(Room $room){
        return view('admin.editRoom', compact('room'));
    }


    public function editRev(UserRoom $uroom){
        return view('admin.editRev', compact('uroom'));
    }


    public function updateCli(Request $request, User $user){
        
            $user->update($request->all());
        
        return redirect()->route('admin.indexCli')->with('message', 'Usuario Actualizado');
    }


    public function updateRoom(Request $request, Room $room){
        if($request->has('imagen')){
            $request->validate([
                'imagen'=>['image']
            ]);
            
            $file=$request->file('imagen');
            $nombre = 'room/'.time().'_'.$file->getClientOriginalName();
            Storage::disk('public')->put($nombre, \File::get($file));
            
            $room->update($request->all());
            $room->update(['imagen'=>"img/$nombre"]);
        }else{
            $room->update($request->all());
        }
        return redirect()->route('admin.indexRoom')->with('message', 'Habitación Actualizada');
    }

    public function updateRev(ReservaRequest $request){
        
        $datos=$request->validated();
        $user = User::find($request->input('idUser'));
        $user->room()->updateExistingPivot($request->get('idRoom'),['f_entrada'=>$datos['f_entrada'],'f_salida'=>$datos['f_salida']]);
    
        return redirect()->route('admin.indexRev')->with('message', 'Reserva Actualizada');
}

}
