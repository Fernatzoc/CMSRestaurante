<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\TestMail;

class MailController extends Controller
{
    public function sendEmail(Request $request){

        $data = $request->validate([
            'nombre'    => 'required',
            'apellido'    => 'required',
            'correo'    => 'required|email',
            'telefono'    => 'required|digits:8',
            'mensaje'    => 'required',
        ]);

        $data = [
            'title' => 'Informacion Nuevo Cliente',
            'nombre' => $data['nombre'],
            'apellido' => $data['apellido'],
            'correo' => $data['correo'],
            'telefono' => $data['telefono'],
            'mensaje' => $data['mensaje'],
        ];

        Mail::to("jtzununa1@miumg.edu.gt")->send(new TestMail($data));


        return back()->with('status','Mensaje Enviado Correctamente');

    }



}
