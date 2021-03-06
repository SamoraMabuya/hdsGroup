<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;
use Excel;
use App\Exports\UsersExport;
use App\Exports\User;

class FormController extends Controller {

    public function contact() {
        return view('form');
    }

    public function generateCSV() {
        $data = 'Boardcolor' . ',' . 'Length(mm)' . ',' . 'Width (mm)'; 

        $file = fopen("thisFile.csv", "w");
        fwrite($file, $data);
        fclose($file);
    }
    public function formSubmit(Request $request) {

   

        Mail::send('emails.emaildata', [
            'name'=> $request ->name,
            'email' => $request->email,
            'cellphone' => $request->cellphone,
            'work'=> $request->work,
            'home'=> $request->home,
            'msg' => $request->msg

        ], 


        function($mail) use($request) {               
            $mail->from('samora.sm.sam@gmail.com',$request->name);
            $mail->to("samora.sm.sam@gmail.com")->subject('Contact us message');
            $mail->attach('yourFile.csv');
        });
 
        return "Message has been sent successfully";
    }
}



    
