@extends('layout')

@section('conteudo')

    <h1>Alunos</h1>

    @foreach($alunos as $a)

        <p>{{ $a->nome }}-{{ $a->matricula}}</p>

    @endforeach

    <p><a href="{{route('alunos.create')}}">Criar novo aluno</a></p>
@endsection
