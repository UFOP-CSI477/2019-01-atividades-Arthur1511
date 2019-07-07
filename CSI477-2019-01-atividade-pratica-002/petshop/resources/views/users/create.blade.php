@extends('layouts.app')

@section('titulo', 'Inserir Usuario')

@section('content')

    <form class="form-group" method="post" action="{{route('users.store')}}">
        @csrf
        <p class="form-text">Nome <input class="form-control" type="text" name="name"></p>
        <p class="form-text">Email <input class="form-control" type="text" name="email"></p>
        <p class="form-text">Senha <input class="form-control" type="text" name="password"></p>
        <p class="form-text">Tipo <input class="form-control" type="text" name="type"></p>

        <input class="btn btn-primary" type="submit" name="btnSalvar" value="Incluir">
    </form>
@endsection