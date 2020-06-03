<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function index(){
        return view('contact.index');
    }

    public function sendEmail(Request $request){

        $this->validate($request, [
            'name'     =>  'required',
            'mail'  =>  'required|email',
            'msg' =>  'required'
           ]);
        $subject = "Tokio Hotel - Formulario de Contacto";
        $for = "elplanbee@gmail.com";;
        Mail::send('contact.mensaje',$request->all(), function($msj) use($subject,$for){
            $msj->from("elplanbee@gmail.com","Tokio Hotel");
            $msj->subject($subject);
            $msj->to($for);
        });
        return redirect()->back()->with('mensaje', 'Muchas gracias por contactar con nosotros.
        En breve nos pondremos en contacto con usted.');
    }
}
