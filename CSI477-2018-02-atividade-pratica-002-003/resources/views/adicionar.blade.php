@extends('layouts.app')

@section('titulo', 'Adicionar produto');


@section('content')
    <div class="container bg-white">
        <br/>
        <div class="text-center"><h1>Adicionar produto</h1></div>
        <div class="row">
            <div class="col-3"></div>
            <div class="col-6">
                <form method="post" action='/produtos' enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="nome">Nome</label>
                        <input type="text" class="form-control" id="nome" name="nome" placeholder="Digite o nome">
                    </div>
                    <div class="form-group">
                        <label for="preco">Preço</label>
                        <input type="text" class="form-control" id="preco" name="preco" placeholder="Digite o preço">
                    </div>
                    <div class="form-group">
                        <label for="imagem">Imagem: </label>
                        <input type="file" name="imagem" id="imagem">
                    </div>
                    <button type="submit" class="btn btn-dark text-center">Adicionar</button>
                </form>
            </div>
        </div>
    </div>

@endsection
