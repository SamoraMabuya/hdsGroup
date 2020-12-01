<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;
use Excel;
use App\Exports\UsersExport;

class FormController extends Controller {

    public function contact() {
        return view('form');
    }
    public function formSubmit(Request $request) {
        $data = "Boardcolor" . ',' . "Length" . 
        $fp = fopen("thisFile.csv", "w");

    foreach ($data as $line) {
        fputcsv($file, $line);
    }
    fclose($file);
)

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
            $mail->attachData($data, 'HDSdata.csv');
        };
        return "Message has been sent successfully";
        $mail->export('xls');
    }
}






    
