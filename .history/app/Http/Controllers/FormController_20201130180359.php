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
        $data = array(
            array('Board color', 'Length(mm)', 'Width (mm)', 'Quantity', 'Grain', 'Edge Length', 'Edge Width', 'Potholes', 'Edge Material (mm)'),
            array($_POST['boardcolor1'], $_POST['length1'], $_POST['width1'], $_POST['quantity1'], $_POST['Grain1'], $_POST['edgelength1'], $_POST['edgewidth1'], $_POST['potholes1'], $_POST['edgematerial1']),
            array($_POST['boardcolor2'], $_POST['length2'], $_POST['width2'], $_POST['quantity2'], $_POST['Grain2'], $_POST['edgelength2'], $_POST['edgewidth2'], $_POST['potholes2'], $_POST['edgematerial2']),
        );

        $$file = fopen('file.csv', 'w');

foreach ($data as $fields) {
    fputcsv($file, $fields);
}

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
            $data = array(
                array('Board color', 'Length(mm)', 'Width (mm)', 'Quantity', 'Grain', 'Edge Length', 'Edge Width', 'Potholes', 'Edge Material (mm)'),
                array($_POST['boardcolor1'], $_POST['length1'], $_POST['width1'], $_POST['quantity1'], $_POST['Grain1'], $_POST['edgelength1'], $_POST['edgewidth1'], $_POST['potholes1'], $_POST['edgematerial1']),
                array($_POST['boardcolor2'], $_POST['length2'], $_POST['width2'], $_POST['quantity2'], $_POST['Grain2'], $_POST['edgelength2'], $_POST['edgewidth2'], $_POST['potholes2'], $_POST['edgematerial2']),
            );
    
            $$file = fopen('file.csv', 'w');
    
    foreach ($data as $fields) {
        fputcsv($file, $fields);
    }
    
    fclose($file);
           
    
            $mail->attach('file.csv');
})
        
 
        return "Message has been sent successfully";
    



    
