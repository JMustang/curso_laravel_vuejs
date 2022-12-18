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
        @for($i = 0; isset($providers[$i]); $i++)
                Fornecedor: {{ $providers[$i]['name'] }}
                <br>
                Status: {{ $providers[$i]['status'] }}
                <br> 
                CNPJ: {{ $providers[$i]['cnpj'] ?? 'Dados nao foram preenchidos' }}
                <br>
                Telefone: ({{ $providers[$i]['ddd'] ?? '' }}) {{ $providers[$i]['telefone'] ?? '' }}
                <hr>
        @endfor
@endisset

@if(!($providers[1]['status']=='S'))
        Fornecedor inativo
@endif
<br>
@unless($providers[1]['status']=='S')
        Fornecedor inativo
@endunless
<br>