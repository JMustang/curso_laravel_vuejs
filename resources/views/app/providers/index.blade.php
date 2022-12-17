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
        @isset($providers[1]['cnpj'])
                CNPJ: {{ $providers[1]['cnpj'] }}
        @endisset
        <br> 
@endisset


@if(!($providers[0]['status']=='S'))
        Fornecedor inativo
@endif
<br>
@unless($providers[0]['status']=='S')
        Fornecedor inativo
@endunless
<br>