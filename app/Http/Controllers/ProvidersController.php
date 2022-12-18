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
            'cnpj' => 'qwe'
            ],
            1 => [
                'name' => 'Fornecedor 2', 
                'status' => 'N', 
                ],
        ];

        echo isset($providers[0]['cnpj']) ? 'CNPJ informado' : 'CNPJ nao informado';

        return view('app.providers.index', compact('providers'));
    }
}
