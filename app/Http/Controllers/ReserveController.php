<?php

namespace App\Http\Controllers;

use App\Room;
use Illuminate\Http\Request;

class ReserveController extends Controller
{
    public function index()
    {
        $rm = Room::orderBy('n_habitacion');
        return view("reserve.index", compact('rm'));
    }

}
