@extends('layout')

@section('conteudo')

    <h1>Editar Cidade</h1>

    <form method="post" action="{{ route('cidades.update', $cidade->id) }}">

        @csrf
        @method('PATCH')

        <p>Nome: <input type="text" name="nome" value="{{$cidade->nome}}"></p>
        <p>Estado id: <input type="text" name="estado_id" value="{{$cidade->estado_id}}"></p>

        <input type="submit" name="btnSalvar" value="Salvar">

    </form>


@endsection
