<?php

namespace App\Http\Controllers;

use App\Mail\ConfirmationEmail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    public function sendEmail(){
        $details = [
            'title' => '¡Confirmado!',
            'body' => 'Estás inscrito en el evento'
        ];
        
        Mail::to("admin@admin.com")->send(new ConfirmationEmail($details));
        return redirect()->route('home');
    }
}
