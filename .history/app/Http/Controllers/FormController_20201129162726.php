<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;
use Maatwebsite\Excel\Facades\Excel;

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
            'work'=> $request->work,
            'home'=> $request->home,
            'msg' => $request->msg,

        ], 
        
        function($mail) use($request) {
            $mail->from(env('Mail_FROM_ADDRESS'),$request->name);
            $mail->to("samora.sm.sam@gmail.com");
            $mail->subject('Contact us message');
            $mail->attachData($attachment, $filename);

        });

            $data = array(
        array('Board color', 'Length(mm)', 'Width (mm)', 'Quantity'),
        array(
        'boardcolor' => $request-> boardcolor1,
        'length1' => $request-> length1,
        'width1' => $request-> width1,
        'quantity1' => $request-> quantity1
        )

        return "Message has been sent successfully";
    }
}






    
