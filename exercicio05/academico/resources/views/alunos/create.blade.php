@extends('principal')

@section('titulo', 'Inserir Aluno')

@section('conteudo')

    <form method="post" action="{{route('alunos.store')}}">
        @csrf
        <p>Nome <input type="text" name="nome"></p>
        <p>Email <input type="text" name="email"></p>
        <p>Cidade <input type="text" name="cidade_id"></p>

        <input type="submit" name="btnSalvar" value="incluir">
    </form>
@endsection