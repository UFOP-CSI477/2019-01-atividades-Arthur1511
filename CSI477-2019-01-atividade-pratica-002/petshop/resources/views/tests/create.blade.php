@extends('layouts.app')

@section('titulo', 'Inserir Teste')

@section('content')

    <form class="form-group" method="post" action="{{route('tests.store')}}">
        @csrf
        <p class="form-text">Nome <select class="form-control" name="procedure_id">
                <option value="">Selecione</option>
                @foreach(\App\Procedure::all() as $c)
                    <option value="{{$c->id}}">{{$c->name}}</option>
                @endforeach
            </select></p>

        <p class="form-text">Date <input class="form-control" type="date" name="date"></p>

        <p class="form-text">Usuário <select class="form-control" name="user_id">
                <option value="">Selecione</option>
                @foreach(\App\User::all() as $c)
                    <option value="{{$c->id}}">{{$c->name}}</option>
                @endforeach
            </select></p>

        <input class="btn btn-primary" type="submit" name="btnSalvar" value="Incluir">
    </form>
@endsection