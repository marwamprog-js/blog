@extends('layouts.principal')

@section('conteudo') 

<h3>Informações do Cliente</h3>

<p>ID: {{$cliente['id']}}</p>
<p>NOME: {{$cliente['nome']}}</p>

<br>

<a href="{{ route('clientes.index') }}">Voltar</a>

@endsection