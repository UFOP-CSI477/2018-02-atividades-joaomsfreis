@extends('layout')

@section('conteudo')

  <h1>Estados</h1>

  @foreach($estados as $e)

    <p><a href="{{ route('estados.show', $e->id) }}">{{ $e->nome }}-{{ $e->sigla }}</a></p>

  @endforeach

  <p><a href="{{route('estados.create')}}">Criar novo estado</a></p>

@endsection
