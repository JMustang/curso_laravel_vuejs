<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactUsController extends Controller
{
    public function contactUs(){

        var_dump($_POST);
        return view('site.contactUs');
    }
}
