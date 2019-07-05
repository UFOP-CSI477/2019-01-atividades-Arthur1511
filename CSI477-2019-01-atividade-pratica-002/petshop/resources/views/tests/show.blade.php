@extends('layouts.app')

@section('titulo', 'Testes')

@section('content')

    <h1>Procedimento: {{$test->name}}</h1>

    <p>Código: {{$test->id}}</p>
    <p>Usuário: {{$test->user->name}}</p>
    <p>Preço: {{$test->procedure->price}}</p>
    <p>Data: {{$test->date}}</p>


    {{--    voltar para a lista de estados --}}
    <a class="btn  btn-sm btn-primary" href="{{route('procedures.index')}}">Voltar</a>

    {{--    Editar o estado--}}
    <a class="btn btn-sm btn-primary" href="{{route('procedures.edit', $test->id)}}">Editar</a>


    {{--    Excluir o Estado--}}
    <form method="post" action="{{route('procedures.destroy', $test->id)}}" onsubmit="return confirm('Deseja realmente excluir?');">
        @csrf
        @method('DELETE')
        <br>
        <input class="btn  btn-sm btn-primary" type="submit" value="Excluir">
    </form>
@endsection