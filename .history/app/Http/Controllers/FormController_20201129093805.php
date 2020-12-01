<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormController extends Controller {

    function getData() {
        return "<h1>Form has been submitter. We'll contact you soon.</h1>";
    
    }
}
