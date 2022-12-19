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
                'cnpj' => 'qwe',
                'ddd' => '82',
                'telefone' => '00000-0900'
            ],
            1 => [
                'name' => 'Fornecedor 2', 
                'status' => 'S', 
                'cnpj' => 'null',
                'ddd' => '11',
                'telefone' => '00000-0900'
                ],
            2 => [
                'name' => 'Fornecedor 3', 
                'status' => 'S', 
                'cnpj' => 'wer23',
                'ddd' => '32',
                'telefone' => '00000-0900'
                ],
        ];


        return view('app.providers.index', compact('providers'));
    }
}
