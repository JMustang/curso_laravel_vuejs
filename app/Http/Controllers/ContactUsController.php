<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactUsController extends Controller
{
    public function contactUs(){
        return view('site.contactUs');
    }
}
