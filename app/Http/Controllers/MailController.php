<?php

namespace App\Http\Controllers;

use Mail;
use Illuminate\Http\Request;

class MailController extends Controller
{
    function __MailController__(){
       
        return '';
    }
    public function txt_mail(Request $request)
    {
        $mailsendto = $request->emailotp;
        $randomNumber = rand(1111,9999);
        $info = array(  
            'name' => "sport site"
        );
        Mail::send(['text' => 'mail'], $info, function ($message) use ($mailsendto,$randomNumber) 
        {
            
            $message->to($mailsendto, 'mailed')
                ->subject("otp = ".$randomNumber);
            $message->from('sport@gmail.com', 'otp');
        });
         echo $randomNumber ;
    }
}
