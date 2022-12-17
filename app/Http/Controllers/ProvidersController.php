<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProvidersController extends Controller
{
    public function index(){
        $providers = [
            0 => [
            'name' => 'Fornecedor 1', 
            'status' => 'N', 
            'cnpj' => '00.000.000/000-00'
            ],
            1 => [
                'name' => 'Fornecedor 2', 
                'status' => 'N', 
                ],
        ];

        return view('app.providers.index', compact('providers'));
    }
}
