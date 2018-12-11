<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>@yield('titulo', 'Teste')</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
    integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

</head>
<body class="bg-dark">

    <div class="container">
        <div class="text-center bg-white">
            <img src="{{ asset('img/petshop.png') }}" alt=""/>
        </div>
        <nav class="navbar navbar-light bg-light">
            <a class="navbar-brand" href="/">
                <img src="{{ asset('img/logo.png') }}" width="30" height="30" class="d-inline-block align-top" alt=""/>
                PetShop
            </a>

            <ul class="nav justify-content-end">
                <li class="nav-item">
                    <a class="nav-link disabled" href="/login">Entrar</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link disabled" href="/register">Registrar</a>
                </li>
            </ul>

        </nav>


        @yield('conteudo')

        <footer class="text-center bg-white">
            <p>Universidade Federal de Ouro Preto</p>
            <p>Criado por João Marcos</p>
            <br/>
        </footer>

    </div>

</body>
</html>
