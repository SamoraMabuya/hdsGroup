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
    public function formSubmit(Request $request) {

        $data = array(
        array('Board color', 'Length(mm)', 'Width (mm)', 
        array($_POST['boardcolor1'], $_POST['length1'], $_POST['width1'])));      


    $file = fopen("thisFile.csv", "w");

    foreach ($data as $line) {
        fputcsv($file, $line);
    }
    fclose($file);

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
            $mail->attachData($data, 'yourFile.csv');
        });
 
        return "Message has been sent successfully";
    }
}



    
