@extends('principal')

@section('titulo', 'Cidades')

@section('conteudo')

    <h1>Cidade: {{$cidade->nome}}</h1>

    <p>Código: {{$cidade->id}}</p>
    <p>Nome: {{$cidade->nome}}</p>
    <p>Estado: {{$cidade->estado->nome}}</p>


    {{--    voltar para a lista de estados --}}
    <a href="{{route('cidades.index')}}">Voltar</a>

    {{--    Editar o estado--}}
    <a href="{{route('cidades.edit', $cidade->id)}}">Editar</a>

    {{--    Excluir o Estado--}}
    <form method="post" action="{{route('cidades.destroy', $cidade->id)}}" onsubmit="return confirm('Deseja realmente excluir?');">
        @csrf
        @method('DELETE')

        <input type="submit" value="Excluir">
    </form>
@endsection