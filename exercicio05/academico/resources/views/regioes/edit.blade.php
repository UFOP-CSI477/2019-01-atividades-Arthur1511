@extends('principal')

@section('titulo', 'Regiões')

@section('conteudo')

    <form method="post" action="{{route('regioes.update', $regiao->id)}}">
        @csrf
        @method('PATCH')

        <p>Nome <input type="text" name="nome" value="{{$regiao->nome}}"></p>

        <input type="submit" name="btnSalvar" value="incluir">
    </form>

@endsection
