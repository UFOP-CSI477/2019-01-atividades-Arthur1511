@extends('principal')

@section('titulo', 'Inserir Região')

@section('conteudo')

    <form method="post" action="{{route('regioes.store')}}">
        @csrf
        <p>Nome <input type="text" name="nome"></p>

        <input type="submit" name="btnSalvar" value="incluir">
    </form>
@endsection