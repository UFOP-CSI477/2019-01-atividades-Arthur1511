@extends('principal')

@section('titulo', 'Cidades')

@section('conteudo')

    <a href="{{route('cidades.create')}}">Inserir</a>
    <table>

        <tr>
            <th>Código</th>
            <th>Nome</th>
            <th>Estado</th>
            <th>Visualizar</th>
        </tr>

        @foreach($cidades as $c)
            <tr>
                <td>{{$c->id}}</td>
                <td><a href="{{route('cidades.show', $c->id)}}">{{$c->nome}}</a></td>
                <td>{{$c->estado->nome}}</td>
                <td><a href="{{route('cidades.show', $c->id)}}">Exibir</a> </td>
            </tr>
        @endforeach

    </table>
@endsection