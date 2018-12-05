@extends('layout')

@section('conteudo')

    <h1>Cidade: {{ $cidade->nome }}-{{ $cidade->estado->sigla }} </h1>

    <p>Código: {{ $cidade->id }}</p>
    <p>Nome: {{ $cidade->nome }}</p>
    <p>Estado: {{ $cidade->estado->nome }}</p>

    <a href="{{ route('cidades.index') }}">Voltar</a>
    <a href="{{ route('cidades.edit', $cidade->id) }}">Editar</a>

@endsection
