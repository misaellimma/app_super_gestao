<h3>Fornecedor</h3>

{{ 'teste'}}
<hr>

{{-- Comentario --}}

@php
    
@endphp
<br>

@isset($fornecedores)
    @for()


    
    @endfor
    Fornecedor: {{ $fornecedores[0]['nome'] }}
    <br>
    Status: {{ $fornecedores[0]['status'] }}
    <br>
    CNPJ: {{ $fornecedores[1]['cnpj'] ?? 'nao preenchido'}} {{-- operador condicional de valor default --}}
    <br>
    Telefone: ({{ $fornecedores[1]['ddd'] ?? ''}}) {{ $fornecedores[1]['telefone'] ?? ''}}
    @switch($fornecedores[1]['ddd'])
        @case ('11')
            São Paulo - SP
            @break
        @case ('32')
            Juiz de Fora - MG
            @break
        @case ('85')
            Fortaleza - CE
            @break
        @default
            Estado não identificado
    @endswitch
    <br>
@endisset

{{-- verifica se a variavel existe --}}
{{--
@isset($fornecedores)
    Fornecedor: {{ $fornecedores[0]['nome'] }}
    <br>
    Status: {{ $fornecedores[0]['status'] }}
    <br>
    @isset($fornecedores[0]['cnpj'])
        CNPJ: {{ $fornecedores[0]['cnpj'] }}
        @empty($fornecedores[0]['cnpj'])
            - Vazio
        @endempty
    @endisset
    <br>
    <br>
@endisset
--}}
<hr>

{{-- unless inverso de if | se o valor for false faça --}}
@unless($fornecedores[0]['status'] == 'S')
    Fornecedor inativo
@endunless

<hr>

{{-- estrutura if else --}}
@if(count($fornecedores) > 0 && count($fornecedores) < 10)
    <h3>Existem alguns fornecedores cadastrados</h3>
@elseif(count($fornecedores) > 10)
    <h3>Existem varios fornecedores cadastrados</h3>
@else
    <h3>Não existem fornecedores cadastrados</h3>
@endif

<hr>
