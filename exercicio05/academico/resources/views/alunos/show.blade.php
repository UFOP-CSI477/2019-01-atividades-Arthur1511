@extends('principal')

@section('titulo', 'Estados')

@section('conteudo')

    <h1>Nome: {{$aluno->nome}}</h1>

    <p>Código: {{$aluno->id}}</p>
    <p>Nome: {{$aluno->nome}}</p>
    <p>Email: {{$aluno->email}}</p>
    <p>Cidade: {{$aluno->cidade->nome}}</p>
    <p>Estado: {{$aluno->cidade->estado->nome}}</p>


    {{--    voltar para a lista de estados --}}
    <a href="{{route('alunos.index')}}">Voltar</a>

    {{--    Editar o estado--}}
    <a href="{{route('alunos.edit', $aluno->id)}}">Editar</a>

    {{--    Excluir o Estado--}}
    <form method="post" action="{{route('alunos.destroy', $aluno->id)}}" onsubmit="return confirm('Deseja realmente excluir?');">
        @csrf
        @method('DELETE')

        <input type="submit" value="Excluir">
    </form>
@endsection