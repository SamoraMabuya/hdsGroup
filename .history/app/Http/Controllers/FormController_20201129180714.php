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
            'work'=> $request->work,
            'home'=> $request->home,
            'msg' => $request->msg

        ], function($mail) use($request) {
            $mail->from('samora.sm.sam@gmail.com'),$request->name);
            $mail->to("samora.sm.sam@gmail.com")->subject('Contact us message');
        });
        return "Message has been sent successfully";
    }
}

//     $data = array(
//         array('Board color', 'Length(mm)', 'Width (mm)', 'Quantity', 'Grain', 'Edge Length', 'Edge Width', 'Potholes', 'Edge Material (mm)'),
//         array($_POST['boardcolor1'], $_POST['length1'], $_POST['width1'], $_POST['quantity1'], $_POST['Grain1'], $_POST['edgelength1'], $_POST['edgewidth1'], $_POST['potholes1'], $_POST['edgematerial1']),







    
    // function getData() {
    //     return "<h1>Form has been submitter. We'll contact you soon.</h1>";
//     }
// }
