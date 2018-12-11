@extends('layouts.app')

@section('titulo', 'Alterar Cadastro');


@section('content')
    <div class="container bg-white">
        <br/>
        <div class="text-center"><h1>Alterando dados</h1></div>
        <div class="row">
            <div class="col-3"></div>
            <div class="col-6">
                <form>
                    <div class="form-group">
                        <label for="InputName1">Nome</label>
                        <input type="text" class="form-control" id="InputName1" placeholder="Digite o nome">
                    </div>
                    <div class="form-group">
                        <label for="InputEmail1">Email</label>
                        <input type="email" class="form-control" id="InputEmail1" aria-describedby="emailHelp" placeholder="Digite o email">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Senha</label>
                        <input type="password" class="form-control" id="InputPassword1" placeholder="Digite a senha">
                    </div>
                    <button type="submit" class="btn btn-dark text-center">Alterar</button>
                </form>
            </div>
        </div>
    </div>

@endsection
