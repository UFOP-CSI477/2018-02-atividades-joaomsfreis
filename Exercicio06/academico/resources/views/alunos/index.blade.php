@extends('layout')

@section('conteudo')

    <h1>Alunos</h1>

    @foreach($alunos as $a)

        <p><a href="{{ route('alunos.show', $a->id) }}">{{ $a->nome }}-{{ $a->matricula}}</a></p>

    @endforeach

    <p><a href="{{route('alunos.create')}}">Criar novo aluno</a></p>
@endsection
