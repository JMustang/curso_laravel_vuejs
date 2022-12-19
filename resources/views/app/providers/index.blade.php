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
        @foreach($providers as $indece => $provider)
                Fornecedor: {{ $provider['name'] }}
                <br>
                Status: {{ $provider['status'] }}
                <br> 
                CNPJ: {{ $provider['cnpj'] ?? 'Dados nao foram preenchidos' }}
                <br>
                Telefone: ({{ $provider['ddd'] ?? '' }}) {{ $provider['telefone'] ?? '' }}
                <hr>
        @endforeach
@endisset

@if(!($providers[1]['status']=='S'))
        Fornecedor inativo
@endif
<br>
@unless($providers[1]['status']=='S')
        Fornecedor inativo
@endunless
<br>