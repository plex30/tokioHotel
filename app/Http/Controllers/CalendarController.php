<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CalendarController extends Controller
{
    public function index(){

        $month = date("Y-m");
        $data = $this->calendar_month($month);
        $mes = $data['month'];

        $mespanish = $this->spanish_month($mes);
        $mes = $data['month'];

        return view("index", [
            'data' => $data,
            'mes' => $mes,
            'mespanish' => $mespanish
        ]);
    }

    public function index_month($month){

        $data = $this->calendar_month($month);
        $mes = $data['month'];

        $mespanish = $this->spanish_month($mes);
        $mes = $data['month'];

        return view("index", [
            'data' => $data,
            'mes' => $mes,
            'mespanish' => $mespanish
        ]);
    }

    
}
