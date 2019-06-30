@extends('principal')

@section('titulo', 'Inserir Cidade')

@section('conteudo')

    <form method="post" action="{{route('cidades.store')}}">
        @csrf
        <p>Nome <input type="text" name="nome"></p>
        <p>Estado <input type="text" name="estado_id"></p>

        <input type="submit" name="btnSalvar" value="incluir">
    </form>
@endsection