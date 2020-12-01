<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;
class FormController extends Controller {

    public function contact() {
        return view('form');
    }
    public function formSubmit(Request $request)
    {

        Mail::send('emails.emaildata', [
            'name'=> $request ->name,
            'email' => $request->email,
            'cellphone' => $request->cellphone,
            'message' => $request->msg
        ], function($mail) use($request) {
            $mail->from(env('Mail_FROM_ADDRESS'),$request->name);
            $mail->to("samora.sm.sam@gmail.com")->subject('Contact us message');
        });
        return "Message has been sent successfully";
    }
}







    
    // function getData() {
    //     return "<h1>Form has been submitter. We'll contact you soon.</h1>";
//     }
// }
