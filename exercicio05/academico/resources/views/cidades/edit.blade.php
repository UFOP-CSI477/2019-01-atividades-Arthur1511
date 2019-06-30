@extends('principal')

@section('titulo', 'Cidades')

@section('conteudo')

    <form method="post" action="{{route('cidades.update', $cidade->id)}}">
        @csrf
        @method('PATCH')

        <p>Nome <input type="text" name="nome" value="{{$cidade->nome}}"></p>
        <p>Estado <input type="text" name="estado_id" value="{{$cidade->estado_id}}"></p>

        <input type="submit" name="btnSalvar" value="atualizar">
    </form>

@endsection
