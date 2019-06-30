@extends('principal')

@section('titulo', 'Regiões')

@section('conteudo')

    <h1>Região: {{$regiao->nome}}</h1>

    <p>Código: {{$regiao->id}}</p>
    <p>Nome: {{$regiao->nome}}</p>



    {{--    voltar para a lista de regioes --}}
    <a href="{{route('regioes.index')}}">Voltar</a>

    {{--    Editar a regiao--}}
    <a href="{{route('regioes.edit', $regiao->id)}}">Editar</a>

    {{--    Excluir a regiao--}}
    <form method="post" action="{{route('regioes.destroy', $regiao->id)}}" onsubmit="return confirm('Deseja realmente excluir?');">
        @csrf
        @method('DELETE')

        <input type="submit" value="Excluir">
    </form>
@endsection