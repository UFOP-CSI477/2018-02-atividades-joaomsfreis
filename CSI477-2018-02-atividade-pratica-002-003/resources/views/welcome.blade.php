@extends('layouts.app')

@section('titulo', 'Área Geral');


@section('content')
    <div class="container bg-white text-center">
        <br/>
        <h1>Produtos</h1>
        <br/>
        <div class="row">
            @foreach($produtos as $p)
                <div class="col-3 shadow-lg p-3 mb-5 bg-white rounded">
                    <img src="{{ $p->imagem }}" class="img-thumbnail" alt="Imagem do produto"/>
                    <h3>{{$p->nome}}</h3>
                    <h4>R${{$p->preco}}</h4>
                    <a href="#"><img src="{{ asset('img/carrinho.png') }}" style="width:30px;height:30px;" alt=""/></a>
                </div>
            @endforeach
        </div>
        <br/>
    </div>

@endsection