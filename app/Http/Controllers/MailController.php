<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\TestMail;

class MailController extends Controller
{
    public function sendEmail(Request $request){
        $details = [
            'title' => 'Informacion Nuevo Cliente',
            'name' => $request->name,
            'lastname' => $request->lastname,
            'email' => $request->email,
            'number' => $request->number,
            'msj' => $request->msj,
        ];

        Mail::to("jtzununa1@miumg.edu.gt")->send(new TestMail($details));


        return back()->with('status','Mensaje Enviado Correctamente');

    }



}
