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
 
            
       $request->validate([
            'name'=> $request ->name,
            'email' => $request->email,
            'cellphone' => $request->cellphone,
            'work'=> $request->work,
            'home'=> $request->home,
            'msg' => $request->msg,

        ]);

        $data = array(
            array('Board color', 'Length(mm)', 'Width (mm)', 'Quantity'),
            array(
            'boardcolor' => $request-> boardcolor1,
            'length1' => $request-> length1,
            'width1' => $request-> width1,
            'quantity1' => $request-> quantity1
            ));

            Mail::to('samora.sm.sam@gmail.com')->send(new SendMail($data));
            return back()->with('success', "Your form has been submitted");

        // return "Message has been sent successfully";
        }
    
    





    
