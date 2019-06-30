<!DOCTYPE html>

<html lang="br">

    <head>
        <meta charset="utf-8">
        <title>@yield('titulo', 'Sistema Acadêmico')</title>
    </head>

    <body>

        @if(Session::has('mensagem'))
            <p><strong>{{Session::get('mensagem')}}</strong></p>
        @endif
        <ul>
            <li><a href="/">Home</a></li>
            <li><a href="/welcome">About</a></li>
            <li><a href="/alunos/listar">Listar</a></li>
            <li><a href="/estados">Estados</a> </li>
            <li><a href="/regioes">Regiões</a> </li>
            <li><a href="/cidades">Cidades</a> </li>
            <li><a href="/alunos">Alunos</a> </li>
        </ul>

        @yield('conteudo')

    </body>
</html>