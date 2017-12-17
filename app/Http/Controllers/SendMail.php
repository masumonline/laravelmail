<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\sendmailto;
use Mail;

class SendMail extends Controller
{
    public function index(Request $request){
        $data = $request->data;
        Mail::to('masumcis@gmail.com')->queue(new sendmailto($data));
        return redirect('/')->with('status', 'mail send');
    }
}
