<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use mail;

class InscriptionController extends Controller
{
    protected $table = inscription;
    public function inscription()
    {
        return view('formations');
    }
    public function inscriptionsubmit(Request $request)
    {
       Mail::send('inscription' , [
        'name'=> $request->name,
        'email'=> $request->email,
        'message'=> $request->message
       ],function($mail) use($request){
        $mail->from(env('MAIL_FROM_ADDRESS'),$request->name);
        $mail->to("contact@tangagroup.com")->subject('Inscription Message');
       });
       return"Votre inscription a été bien envoyé ! "; 
    }
}
