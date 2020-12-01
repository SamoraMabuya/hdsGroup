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


        // $file = fopen('yourFile.csv', 'w');
        // fputcsv($file, array('this','is some', 'csv "stuff", you know.'));
        // fclose($file);
        Mail::send('emails.emaildata', [
            'name'=> $request ->name,
            'email' => $request->email,
            'cellphone' => $request->cellphone,
            'work'=> $request->work,
            'home'=> $request->home,
            'msg' => $request->msg,


        ], function($mail) use($request) {
            $mail->from(env('Mail_FROM_ADDRESS'),$request->name);
            $mail->to("samora.sm.sam@gmail.com")->subject('Contact us message');
            // $mail->attach($files, 'thisFile.csv');
            return "Message has been sent successfully";

        });
    }
}






    
