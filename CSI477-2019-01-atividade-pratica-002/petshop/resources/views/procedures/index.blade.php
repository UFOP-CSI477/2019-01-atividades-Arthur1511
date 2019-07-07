@extends('layouts.app')

@section('titulo', 'Procedures')

@section('content')
    <h1 class="text-primary" style="text-align: center">Procedimentos</h1>
    <table class="table table-bordered table-hover table-striped">

        <thead>
        <tr>
            <th>Código</th>
            <th>Nome</th>
            <th>Preço</th>
            <th>Visualizar</th>

        </tr>
        </thead>

        <tbody>
            @foreach($procedures as $e)
                <tr>
                    <td>{{$e->id}}</td>
                    <td><a>{{$e->name}}</a></td>
                    <td>{{$e->price}}</td>
                    <td><a href="{{route('procedures.show', $e->id)}}">Exibir</a></td>

                </tr>
            @endforeach
        </tbody>

    </table>

    <a class="btn btn-primary" href="{{route('procedures.create')}}">Inserir</a>
@endsection