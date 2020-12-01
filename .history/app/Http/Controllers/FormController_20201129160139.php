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

        $filename = "{$this->po->po_memo}.xlsx";
        $attachment = Excel::raw(new PurchaseOrderLinesExport($this->po), BaseExcel::XLSX);

        Mail::send('emails.emaildata', [
            'name'=> $request ->name,
            'email' => $request->email,
            'cellphone' => $request->cellphone,
            'work'=> $request->work,
            'home'=> $request->home,
            'msg' => $request->msg,

        ], function($mail) use($request) {
            $mail->from(env('Mail_FROM_ADDRESS'),$request->name);
            $mail->to("samora.sm.sam@gmail.com");
            $mail->subject('Contact us message');
        });
        return "Message has been sent successfully";
    }
}






    
