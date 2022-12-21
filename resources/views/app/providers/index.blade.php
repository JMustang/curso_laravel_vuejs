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
        @forelse($providers as $indece => $provider)
                Interacao atua: {{ $loop->iteration}}
                <br>
                Fornecedor: {{ $provider['name'] }}
                <br>
                Status: @{{ $provider['status'] }}
                <br> 
                CNPJ: @{{ $provider['cnpj'] ?? 'Dados nao foram preenchidos' }}
                <br>
                Telefone: @({{ $provider['ddd'] ?? '' }}) {{ $provider['telefone'] ?? '' }}
                <br>
                @if($loop->first)
                        Primeira iteracao do loop
                @endif

                @if($loop->last)
                Ultima iteracao do loop
                <br>
                Total de registros: {{ $loop->count }}
        @endif
                <hr>
        @empty
                Nao existe fornecedores cadastrados!!
        @endforelse
@endisset

