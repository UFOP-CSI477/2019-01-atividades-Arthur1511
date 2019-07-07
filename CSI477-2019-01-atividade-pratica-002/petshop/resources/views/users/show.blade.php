@extends('layouts.app')

@section('titulo', 'Usuarios')

@section('content')

    <h1>Nome: {{$user->name}}</h1>

    <p>Código: {{$user->id}}</p>
    <p>Email: {{$user->email}}</p>
    <p>Tipo: {{$user->type}}</p>


    {{--    voltar para a lista de estados --}}
    <a class="btn  btn-sm btn-primary" href="{{route('users.index')}}">Voltar</a>

    {{--    Editar o estado--}}
    <a class="btn btn-sm btn-primary" href="{{route('users.edit', $user->id)}}">Editar</a>


    {{--    Excluir o Estado--}}
    <form method="post" action="{{route('users.destroy', $user->id)}}" onsubmit="return confirm('Deseja realmente excluir?');">
        @csrf
        @method('DELETE')
        <br>
        <input class="btn  btn-sm btn-primary" type="submit" value="Excluir">
    </form>
@endsection