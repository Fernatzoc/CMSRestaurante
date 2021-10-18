<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\TestMail;

class MailController extends Controller
{
    public function sendEmail(){
        $details = [
            'title' => 'Mail from me',
            'body' => 'correo de prueba'
        ];

        Mail::to("rjuarezm2@miumg.edu.gt")->send(new TestMail($details));


        return 'email sent';

    }



}
