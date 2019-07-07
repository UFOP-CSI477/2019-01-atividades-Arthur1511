@extends('layouts.app')

@section('titulo', 'Testes')

@section('content')

    <div class="container-fluid">

        <h1 class="text-primary" style="text-align: center">Usuarios</h1>
        <table class="table table-responsive-md table-bordered table-hover table-striped">

            <thead class="table-primary">
            <tr>
                <th>Código</th>
                <th>Nome</th>
                <th>Email</th>
                <th>Tipo</th>
                <th>Excluir</th>
                <th>Alterar</th>

            </tr>
            </thead>

            <tbody>
            @foreach($users as $e)
                <tr>
                    <td>{{$e->id}}</td>
                    <td><a>{{$e->name}}</a></td>
                    <td>{{$e->email}}</td>
                    <td>{{$e->type}}</td>
                    <td>
                        <form method="post" action="{{route('users.destroy', $e->id)}}"
                              onsubmit="return confirm('Deseja realmente excluir?');">
                            @csrf
                            @method('DELETE')

                            <input class="btn btn-primary" type="submit" value="Excluir">
                        </form>
                    </td>

                    <td>
                        <a class="btn btn-primary" href="{{route('users.edit', $e->id)}}">Alterar</a>
                    </td>
                </tr>
            @endforeach
            </tbody>

        </table>

        <a class="btn btn-primary" href="{{route('users.create')}}">Inserir</a>
    </div>

@endsection