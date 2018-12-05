@extends('layout')

@section('conteudo')

    <h1>Inserir Alunos</h1>

    <form method="post" action="/alunos">

        @csrf

        <p>Nome: <input type="text" name="nome"></p>
        <p>Matrículo: <input type="text" name="matricula"></p>
        <p>Email: <input type="text" name="email"></p>
        <p>Cidade id: <input type="text" name="cidade_id"></p>

        <input type="submit" name="btnSalvar" value="Incluir">

    </form>


@endsection
