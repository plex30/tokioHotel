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

    public static function calendar_month($month){
        $mes = $month;
        $daylast = date("Y-m-d", strtotime("last day of ".$mes));
        $fecha = date("Y-m-d", strtotime("first day of ".$mes));
        $daysmonth = date("d", strtotime($fecha));
        $montmonth = date("m", strtotime($fecha));
        $yearmonth = date("Y", strtotime($fecha));
        $nuevaFecha = mktime(0,0,0,$montmonth, $daysmonth, $yearmonth);
        $diaSemana = date("w", $nuevaFecha);
        $nuevaFecha = $nuevaFecha - ($diaSemana*24*3600);
        $dateIni = date("Y-m-d", $nuevaFecha);
        $semana1 = date("W", strtotime($fecha));
        $semana2 = date("W", $daylast);

        if (date("m", strtotime($mes))==12) {
            $semana = 5;
        }else{
            $semana = ($semana2 - $semana1)+1;
        }

        $datafecha = $dateIni;
        $calendario = array();
        $iweek = 0;

        while($iweek < $semana);

    






    }

}
