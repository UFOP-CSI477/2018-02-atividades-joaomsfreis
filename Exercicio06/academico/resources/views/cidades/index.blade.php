@extends('layout')

@section('conteudo')

    <h1>Cidades</h1>

    @foreach($cidades as $c)

        <p><a href="{{ route('cidades.show', $c->id) }}">{{ $c->nome }}-{{ $c->estado->sigla}}</a></p>

    @endforeach

    <p><a href="{{route('cidades.create')}}">Criar nova cidade</a></p>

@endsection
