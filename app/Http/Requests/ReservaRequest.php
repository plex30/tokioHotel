<?php

namespace App\Http\Requests;

use Carbon\Carbon;
use Illuminate\Foundation\Http\FormRequest;

class ReservaRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    public function prepareForValidation()
    {

        $fecha1=Carbon::parse($this->f_entrada);
        $fecha2=Carbon::parse($this->f_salida);
        $hoy=Carbon::now();
        $room = Room::find($this->idRoom);
        foreach ($room->usrs as $item) {
            $ent = Carbon::parse($item->pivot->f_entrada);
            $sal = Carbon::parse($item->pivot->f_salida);
            if($ent == $fecha1 && $sal == $fecha2){
                $num2=0;
                $this->merge([
                    'num2'=>$num2
                    ]);
            }
             
        }
        
        if($fecha1->gt($fecha2)){
            $num1=0;
            $this->merge([
               'num1'=>$num1
            ]);
        }
        
        if($hoy->gt($fecha1) && $hoy->diffInDays($fecha1)!=0){
            $num0=0;
            $this->merge([
                'num0'=>$num0
            ]);
        }


    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'capacidad' => ['required'],
            'f_entrada' => ['required'],
            'f_salida' => ['required'],
            'num0'=>['nullable', 'not_in:0'],
            'num1'=>['nullable', 'not_in:0'],
            'num2'=>['nullable', 'not_in:0'],
            'idRoom'=>['required'],
            'idUser'=>['required']

        ];
    }

    public function messages(){
        return [
            'capacidad.required'=>'El número de personas es obligatorio.',
            'capacidad.min:1'=>'Minimo tiene que seleccionar una persona.',
            'f_entrada.required'=>'La fecha de entrada es obligatoria.',
            'f_salida.required'=>'La fecha de salida es obligatoria.',
            'num0.not_in'=>'La fecha de entrada no puede ser inferior a la fecha actual',
            'num1.not_in'=>'La fecha de salida debe ser mayor o igual a la de entrada',
            'num2.not_in'=>'Esta habitación no esta disponible en las fechas seleccionadas, porfavor pruebe con otras fechas'
        ];
    }
}
