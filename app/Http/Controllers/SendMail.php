<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\sendmailto;
use Mail;

class SendMail extends Controller
{
    public function index(Request $request){
        $email = [
            'masumcis@gmail.com',
            'masum@activelava.net',
            'masum@hitbts.com'   
        ];
        //return $email;
        $data = $request->data;
        foreach($email as $mail){
            Mail::to($mail)->queue(new sendmailto($data));    
            sleep(10);
        }


        return redirect('/')->with('status', 'mail send');
    }
}
