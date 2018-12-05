@extends('layout')

@section('conteudo')

    <h1>Editar Aluno</h1>

    <form method="post" action="{{ route('alunos.update', $aluno->id) }}">

        @csrf
        @method('PATCH')

        <p>Nome: <input type="text" name="nome" value="{{$aluno->nome}}"></p>
        <p>Matrículo: <input type="text" name="matricula" value="{{$aluno->matricula}}"></p>
        <p>Email: <input type="text" name="email" value="{{$aluno->emal}}"></p>
        <p>Cidade id: <input type="text" name="cidade_id" value="{{$aluno->cidade_id}}"></p>

        <input type="submit" name="btnSalvar" value="Salvar">

    </form>


@endsection
