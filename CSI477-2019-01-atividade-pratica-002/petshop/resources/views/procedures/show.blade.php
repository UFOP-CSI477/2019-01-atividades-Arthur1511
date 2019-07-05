@extends('layouts.app')

@section('titulo', 'Procedimentos')

@section('content')

    <h1>Procedimento: {{$procedure->name}}</h1>

    <p>Código: {{$procedure->id}}</p>
    <p>Preço: {{$procedure->price}}</p>
    <p>Usuário: {{$procedure->user->name}}</p>


    {{--    voltar para a lista de estados --}}
    <a class="btn  btn-sm btn-primary" href="{{route('procedures.index')}}">Voltar</a>

    {{--    Editar o estado--}}
    <a class="btn btn-sm btn-primary" href="{{route('procedures.edit', $procedure->id)}}">Editar</a>


    {{--    Excluir o Estado--}}
    <form method="post" action="{{route('procedures.destroy', $procedure->id)}}" onsubmit="return confirm('Deseja realmente excluir?');">
        @csrf
        @method('DELETE')
        <br>
        <input class="btn  btn-sm btn-primary" type="submit" value="Excluir">
    </form>
@endsection