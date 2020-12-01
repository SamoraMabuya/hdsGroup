<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormController extends Controller {

    public function contact() {
        return view('form');
    }
}
    
    // function getData() {
    //     return "<h1>Form has been submitter. We'll contact you soon.</h1>";
//     }
// }
