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
        array('Board color', 'Length(mm)', 'Width (mm)', 'Quantity', 'Grain', 'Edge Length', 'Edge Width', 'Potholes', 'Edge Material (mm)'),
        array($_POST['boardcolor1'], $_POST['length1'], $_POST['width1'], $_POST['quantity1'], $_POST['Grain1'], $_POST['edgelength1'], $_POST['edgewidth1'], $_POST['potholes1'], $_POST['edgematerial1']),
        array($_POST['boardcolor2'], $_POST['length2'], $_POST['width2'], $_POST['quantity2'], $_POST['Grain2'], $_POST['edgelength2'], $_POST['edgewidth2'], $_POST['potholes2'], $_POST['edgematerial2']),
        array($_POST['boardcolor3'], $_POST['length3'], $_POST['width3'], $_POST['quantity3'], $_POST['Grain3'], $_POST['edgelength3'], $_POST['edgewidth3'], $_POST['potholes3'], $_POST['edgematerial3']),
        array($_POST['boardcolor4'], $_POST['length4'], $_POST['width4'], $_POST['quantity4'], $_POST['Grain4'], $_POST['edgelength4'], $_POST['edgewidth4'], $_POST['potholes4'], $_POST['edgematerial4']),
        array($_POST['boardcolor5'], $_POST['length5'], $_POST['width5'], $_POST['quantity5'], $_POST['Grain5'], $_POST['edgelength5'], $_POST['edgewidth5'], $_POST['potholes5'], $_POST['edgematerial5']),
        array($_POST['boardcolor6'], $_POST['length6'], $_POST['width6'], $_POST['quantity6'], $_POST['Grain6'], $_POST['edgelength6'], $_POST['edgewidth6'], $_POST['potholes6'], $_POST['edgematerial6']),
        array($_POST['boardcolor7'], $_POST['length7'], $_POST['width7'], $_POST['quantity7'], $_POST['Grain7'], $_POST['edgelength7'], $_POST['edgewidth7'], $_POST['potholes7'], $_POST['edgematerial7']),
        array($_POST['boardcolor8'], $_POST['length8'], $_POST['width8'], $_POST['quantity8'], $_POST['Grain8'], $_POST['edgelength8'], $_POST['edgewidth8'], $_POST['potholes8'], $_POST['edgematerial8']),
        array($_POST['boardcolor9'], $_POST['length9'], $_POST['width9'], $_POST['quantity9'], $_POST['Grain9'], $_POST['edgelength9'], $_POST['edgewidth9'], $_POST['potholes9'], $_POST['edgematerial9']),
        array($_POST['boardcolor10'], $_POST['length10'], $_POST['width10'], $_POST['quantity10'], $_POST['Grain10'], $_POST['edgelength10'], $_POST['edgewidth10'], $_POST['potholes10'], $_POST['edgematerial10']),
        array($_POST['boardcolor11'], $_POST['length11'], $_POST['width11'], $_POST['quantity11'], $_POST['Grain11'], $_POST['edgelength11'], $_POST['edgewidth11'], $_POST['potholes11'], $_POST['edgematerial11']),
        array($_POST['boardcolor12'], $_POST['length12'], $_POST['width12'], $_POST['quantity12'], $_POST['Grain12'], $_POST['edgelength12'], $_POST['edgewidth12'], $_POST['potholes12'], $_POST['edgematerial12']),
        array($_POST['boardcolor13'], $_POST['length13'], $_POST['width13'], $_POST['quantity13'], $_POST['Grain13'], $_POST['edgelength13'], $_POST['edgewidth13'], $_POST['potholes13'], $_POST['edgematerial13']),
        array($_POST['boardcolor14'], $_POST['length14'], $_POST['width14'], $_POST['quantity14'], $_POST['Grain14'], $_POST['edgelength14'], $_POST['edgewidth14'], $_POST['potholes14'], $_POST['edgematerial14']),
        array($_POST['boardcolor15'], $_POST['length15'], $_POST['width15'], $_POST['quantity15'], $_POST['Grain15'], $_POST['edgelength15'], $_POST['edgewidth15'], $_POST['potholes15'], $_POST['edgematerial15']),
        array($_POST['boardcolor16'], $_POST['length16'], $_POST['width16'], $_POST['quantity16'], $_POST['Grain16'], $_POST['edgelength16'], $_POST['edgewidth16'], $_POST['potholes16'], $_POST['edgematerial16']),
        array($_POST['boardcolor17'], $_POST['length17'], $_POST['width17'], $_POST['quantity17'], $_POST['Grain17'], $_POST['edgelength17'], $_POST['edgewidth17'], $_POST['potholes17'], $_POST['edgematerial17']),
        array($_POST['boardcolor18'], $_POST['length18'], $_POST['width18'], $_POST['quantity18'], $_POST['Grain18'], $_POST['edgelength18'], $_POST['edgewidth18'], $_POST['potholes18'], $_POST['edgematerial18']),
        array($_POST['boardcolor19'], $_POST['length19'], $_POST['width19'], $_POST['quantity19'], $_POST['Grain19'], $_POST['edgelength19'], $_POST['edgewidth19'], $_POST['potholes19'], $_POST['edgematerial19']),
        array($_POST['boardcolor20'], $_POST['length20'], $_POST['width20'], $_POST['quantity20'], $_POST['Grain20'], $_POST['edgelength20'], $_POST['edgewidth20'], $_POST['potholes20'], $_POST['edgematerial20']),
        array(''),
        array(''),

        array('Board color', 'Length(mm)', 'Width (mm)', 'Quantity'),
        array($_POST['masonite-colour21'], $_POST['length1'], $_POST['width1'], $_POST['quantity1']),
        array($_POST['masonite-colour22'], $_POST['length2'], $_POST['width2'], $_POST['quantity2']),
        array($_POST['masonite-colour23'], $_POST['length3'], $_POST['width3'], $_POST['quantity3']),
        array($_POST['masonite-colour24'], $_POST['length4'], $_POST['width4'], $_POST['quantity4']),
        array($_POST['masonite-colour25'], $_POST['length5'], $_POST['width5'], $_POST['quantity5']),
        array($_POST['masonite-colour26'], $_POST['length6'], $_POST['width6'], $_POST['quantity6']),
        array($_POST['masonite-colour27'], $_POST['length7'], $_POST['width7'], $_POST['quantity7']),
        array($_POST['masonite-colour28'], $_POST['length8'], $_POST['width8'], $_POST['quantity8']),
        array($_POST['masonite-colour29'], $_POST['length9'], $_POST['width9'], $_POST['quantity9']),
        array($_POST['masonite-colour30'], $_POST['length10'], $_POST['width10'], $_POST['quantity10']),
        array($_POST['masonite-colour31'], $_POST['length11'], $_POST['width11'], $_POST['quantity11']),
        array($_POST['masonite-colour32'], $_POST['length12'], $_POST['width12'], $_POST['quantity12']),
        array($_POST['masonite-colour33'], $_POST['length13'], $_POST['width13'], $_POST['quantity13']),
        array($_POST['masonite-colour34'], $_POST['length14'], $_POST['width14'], $_POST['quantity14']),
        array($_POST['masonite-colour35'], $_POST['length15'], $_POST['width15'], $_POST['quantity15']),
        array($_POST['masonite-colour36'], $_POST['length16'], $_POST['width16'], $_POST['quantity16']),
        array($_POST['masonite-colour37'], $_POST['length17'], $_POST['width17'], $_POST['quantity17']),
        array($_POST['masonite-colour38'], $_POST['length18'], $_POST['width18'], $_POST['quantity18']),
        array($_POST['masonite-colour39'], $_POST['length19'], $_POST['width19'], $_POST['quantity19']),
        array($_POST['masonite-colour40'], $_POST['length20'], $_POST['width20'], $_POST['quantity20']),
        );
            $file = fopen("data.csv", "w");

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
            if ($_POST['branch'] == 'Church Street') {
                $mail->from('samora.sm.sam@gmail.com',$request->name);
                $mail->to("samora.sm.sam@gmail.com")->subject('Contact us message');
                $mail->attach('data.csv');
            
    } else if ($_POST['branch'] == 'Hammanskraal') {
        $mail->from('samora.sm.sam@gmail.com',$request->name);
        $mail->to("samora.sm.sam@gmail.com")->subject('Contact us message');
        $mail->attach('data.csv');
    }
})

        return "Message has been sent successfully";

}
}
?>