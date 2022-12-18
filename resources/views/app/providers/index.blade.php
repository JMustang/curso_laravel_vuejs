<h3>Providers</h3>



@php
    // if(){

    // } elseif {

    // } else {

    // }
@endphp

{{-- @if(count($providers) > 0 && count($providers) < 10)
        <h3>Fornecedores cadastrados</h3>
@elseif(count($providers) > 10)
        <h3>Varios fornecedores cadastrados</h3>
@else
        <h3>Ainda nao existe fornecedores cadastrados</h3>
@endif --}}


@isset($providers)
        Fornecedor: {{ $providers[1]['name'] }}
        <br>
        Status: {{ $providers[1]['status'] }}
        <br> 
        CNPJ: {{ $providers[1]['cnpj'] ?? 'Dados nao foram preenchidos' }}
        <br>
        Telefone: ({{ $providers[1]['ddd'] ?? '' }}) {{ $providers[1]['telefone'] ?? '' }}
        @switch($providers[1]['ddd'])
            @case('82')
                Alagoas - AL
                @break
            @case('11')
                Sao Paulo - SP
                @break
            @case('32')
                Juiz de Fora - MG
                @break
            @default
                Estado nao Informado.
                
        @endswitch
@endisset


@if(!($providers[1]['status']=='S'))
        Fornecedor inativo
@endif
<br>
@unless($providers[1]['status']=='S')
        Fornecedor inativo
@endunless
<br>