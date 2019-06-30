@extends('principal')

@section('titulo', 'Alunos')

@section('conteudo')

    <a href="{{route('alunos.create')}}">Inserir</a>
    <table>

        <tr>
            <th>Código</th>
            <th>Nome</th>
            <th>Email</th>
            <th>Cidade</th>
            <th>Estado</th>
            <th>Visualizar</th>
        </tr>

        @foreach($alunos as $c)
            <tr>
                <td>{{$c->id}}</td>
                <td><a href="{{route('alunos.show', $c->id)}}">{{$c->nome}}</a></td>
                <td>{{$c->email}}</td>
                <td>{{$c->cidade->nome}}</td>
                <td>{{$c->cidade->estado->nome}}</td>
                <td><a href="{{route('alunos.show', $c->id)}}">Exibir</a> </td>
            </tr>
        @endforeach

    </table>
@endsection