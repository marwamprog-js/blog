@extends('layouts.principal')

@section('conteudo') 

<div class="options">
    <ul>
        <li><a class="warning {{ $opcao == 1 ? 'selected' : '' }}" href="{{ route('opcoes', 1) }}">warning</a></li>
        <li><a class="info {{ $opcao == 2 ? 'selected' : '' }}" href="{{ route('opcoes', 2) }}">info</a></li>
        <li><a class="success {{ $opcao == 3 ? 'selected' : '' }}" href="{{ route('opcoes', 3) }}">success</a></li>
        <li><a class="error {{ $opcao == 4 ? 'selected' : '' }}" href="{{ route('opcoes', 4) }}">error</a></li>
    </ul>
</div>

@if(isset($opcao))

    @switch($opcao)
        @case(1)
            @alerta(['titulo' => 'Teste', 'tipo' => 'warning'])
            <p><strong>Warning</strong></p>
            <p>Ocorreu um erro inesperado</p>
            @endalerta
            @break
        @case(2)
            @alerta(['titulo' => 'Teste', 'tipo' => 'info'])
            <p><strong>Info</strong></p>
            <p>Ocorreu um erro inesperado</p>
            @endalerta
            @break
        @case(3)
            @alerta(['titulo' => 'Teste', 'tipo' => 'success'])
            <p><strong>Success</strong></p>
            <p>Ocorreu um erro inesperado</p>
            @endalerta
            @break
        @case(4)
            @alerta(['titulo' => 'Teste', 'tipo' => 'error'])
            <p><strong>Error</strong></p>
            <p>Ocorreu um erro inesperado</p>
            @endalerta
            @break
            
    @endswitch

@endif

@endsection