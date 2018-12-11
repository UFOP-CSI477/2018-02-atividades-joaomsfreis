@extends('layouts.app')

@section('titulo', 'Área do Cliente');

@section('content')
    <div class="container bg-white text-center">
        <br/>
        <h1>Área do Cliente</h1>
        <div class="text-right">
            <a href="/alterar" class="badge badge-light">Alterar meus dados</a>
        </div>

        <h2 class="text-left">Meu Carrinho</h2>

        <h2 class="text-left">Minhas Compras</h2>

        <br/>
    </div>

@endsection