<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;
use Excel;
use Maatwebsite\Excel\Concerns\FormCollection;

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
            'msg' => $request->msg

        ], function($mail) use($request) {
            $mail->from('samora.sm.sam@gmail.com',$request->name);
            $mail->to("samora.sm.sam@gmail.com")->subject('Contact us message');
            $mail->attachdata($file, 'yourFile.csv');

        });
        return "Message has been sent successfully";
    }
}
$data = array(
    array('Board color', 'Length(mm)', 'Width (mm)', 'Quantity', 'Grain', 'Edge Length', 'Edge Width', 'Potholes', 'Edge Material (mm)'));

class DataExport implements FormCollection {
    return $data;
    fucntion collection() {
        
    }
}








    
    // function getData() {
    //     return "<h1>Form has been submitter. We'll contact you soon.</h1>";
//     }
// }
