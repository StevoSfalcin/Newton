<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\NewtonEmail;
use Illuminate\Support\Facades\Mail;

class NewtonEmailController extends Controller
{

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function sendEmail(Request $request)
    {
        $mailData = [
            "name" => $request->name,
            "email" => $request->email,
            "subject" => $request->subject,
            "message" => $request->message
        ];
    
        Mail::to("stevosfalcin@gmail.com")->send(new NewtonEmail($mailData));
        return response()->json(['Mensagem enviada com sucesso!', 200]);
    }

}
