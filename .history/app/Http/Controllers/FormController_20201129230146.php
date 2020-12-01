<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;
use Excel;
class FormController extends Controller {

    public function contact() {
        return view('form');
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

        $data = Excel::store(userControler, 'hds.xlsx') {

            $excel->sheet('Selection', funtion($sheet) [

                $sheet->fromArray(array(
                    array('Boardcolor', 'Length', 'Width'),
                    array('boardcolor1'=> $boardcolor, 'lenght1'=> $lenght1, 'width1'=> $width1)
                ))
            ])
                });
           

        function($mail) use($request) {
            $mail->from('samora.sm.sam@gmail.com',$request->name);
            $mail->to("samora.sm.sam@gmail.com")->subject('Contact us message');
            $mail->attachData($data, 'HDSdata.csv');
        };
        return "Message has been sent successfully";
        $mail->export('xls');
 
    }
}




    
