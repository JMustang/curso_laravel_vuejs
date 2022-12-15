<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProvidersController extends Controller
{
    public function index(){
        $providers = ['1','2','3','4','5','6','7','8','9','10','11','12','13','14','15','16','17'];

        return view('app.providers.index', compact('providers'));
    }
}
