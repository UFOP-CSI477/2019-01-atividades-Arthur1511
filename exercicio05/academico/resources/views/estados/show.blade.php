@extends('principal')

@section('titulo', 'Estados')

@section('conteudo')

    <h1>Estado: {{$estado->nome}}</h1>

    <p>Código: {{$estado->id}}</p>
    <p>Nome: {{$estado->nome}}</p>
    <p>Sigla: {{$estado->sigla}}</p>


{{--    voltar para a lista de estados --}}
    <a href="{{route('estados.index')}}">Voltar</a>

{{--    Editar o estado--}}
    <a href="{{route('estados.edit', $estado->id)}}">Editar</a>

{{--    Excluir o Estado--}}
    <form method="post" action="{{route('estados.destroy', $estado->id)}}" onsubmit="return confirm('Deseja realmente excluir?');">
        @csrf
        @method('DELETE')

        <input type="submit" value="Excluir">
    </form>
@endsection