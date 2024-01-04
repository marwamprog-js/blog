@extends('layouts.principal')

@section('titulo', 'Clientes')

@section('conteudo') 
    <h3>{{ $titulo }}</h3>
    <hr>

    <a href="{{ route('clientes.create') }}">Novo Cliente</a>

    @if (count($clientes) > 0)
        <ul>
            @foreach ($clientes as $c)
                <li>{{ $c['id'] }} | {{ $c['nome'] }} | 
                    <a href="{{ route('clientes.show', $c['id']) }}">Ver</a> |
                    <a href="{{ route('clientes.edit', $c['id']) }}">Editar</a> |
                    <form action="{{ route('clientes.destroy', $c['id']) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <input type="submit" value="Apagar">
                    </form>
                </li>
            @endforeach
        </ul>  

        {{-- @for($i = 0; $i < 10; $i++)
            {{ $i }}
        @endfor --}}

        {{-- @foreach ($clientes as $c)
            <br>{{ $c['nome'] }}
            @if ($loop->first)
                (Primeiro)
            @endif
            @if ($loop->last)
                (Ultimo)
            @endif

            ({{ $loop->index }}) - {{ $loop->iteration }} | {{ $loop->count }}
        @endforeach     --}}



    @else
        <p>Não exitem clientes cadastrados</p>
    @endif

    {{-- @empty($cliente)
        <p>Não exitem clientes cadastrados</p>
    @endempty --}}
    
@endsection
