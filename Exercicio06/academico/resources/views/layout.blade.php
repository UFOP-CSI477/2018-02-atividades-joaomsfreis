<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>@yield('titulo', 'Sistema Acadêmico')</title>

  </head>
  <body>

    <!-- Flash: mensagem //-->
    @if ( Session::has('mensagem') )
      <p><strong>{{ Session::get('mensagem') }}</strong></p>
    @endif

    <ul>
        <li><a href="/">Principal</a></li>
        <li><a href="/estados">Lista estados</a></li>
        <li><a href="/cidades">Lista cidades</a></li>
        <li><a href="/alunos">Lista alunos</a></li>
        <li><a href="/info">Informações</a></li>
    </ul>

    @yield('conteudo')


  </body>
</html>
