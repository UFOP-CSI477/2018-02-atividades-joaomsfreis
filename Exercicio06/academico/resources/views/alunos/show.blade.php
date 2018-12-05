@extends('layout')

@section('conteudo')

    <h1>Aluno: {{ $aluno->nome }}-{{ $aluno->matricula}} </h1>

    <p>Código: {{ $aluno->id }}</p>
    <p>Nome: {{ $aluno->nome }}</p>
    <p>Email: {{ $aluno->email}}</p>
    <p>Cidade: {{ $aluno->cidade->nome}}</p>
    <p>Estado: {{ $aluno->cidade->estado->nome}}</p>

    <a href="{{ route('alunos.index') }}">Voltar</a>
    <a href="{{ route('alunos.edit', $aluno->id) }}">Editar</a>

@endsection
