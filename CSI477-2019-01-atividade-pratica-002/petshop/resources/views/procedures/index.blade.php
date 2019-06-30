@extends('principal')

@section('titulo', 'Procedures')

@section('conteudo')

    <table class="table table-bordered table-hover table-striped">

        <tr>
            <th >Código</th>
            <th>Nome</th>
            <th>Preço</th>
            <th>Visualizar</th>

        </tr>

        @foreach($procedures as $e)
            <tr>
                <td>{{$e->id}}</td>
                <td><a>{{$e->name}}</a></td>
                <td>{{$e->price}}</td>
                <td><a href="{{route('procedures.show', $e->id)}}">Exibir</a> </td>

            </tr>
        @endforeach

    </table>

    <a class="btn btn-primary" href="{{route('procedures.create')}}">Inserir</a>
@endsection