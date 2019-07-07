@extends('layouts.app')

@section('content')

    <h1 class="text-primary" style="text-align: center">Procedimentos</h1>
    <table class="table table-bordered table-hover table-striped">
        <thead>
            <tr>
                <th>Código</th>
                <th>Nome</th>
                <th>Preço</th>

            </tr>
        </thead>

        @foreach($procedures as $e)
            <tr>
                <td>{{$e->id}}</td>
                <td><a>{{$e->name}}</a></td>
                <td>{{$e->price}}</td>

            </tr>
        @endforeach

    </table>

@endsection
