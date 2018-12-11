@extends('layouts.app')

@section('titulo', 'Área do Administrador');

@section('content')
    <div class="container bg-white text-center">
        <br/>
        <h1>Área do Administrador</h1>
        <div class="container">
            <div class="row">
                <div class="col-6">
                    <h3><a href="/adicionar" class="badge badge-light">Adicionar produtos</a></h3>
                </div>
                <div class="col-6">
                    <h3><a href="/alterar" class="badge badge-light">Editar produtos</a></h3>
                </div>
            </div>
        </div>
        <br/>
    </div>

@endsection