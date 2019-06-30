@extends('principal')

@section('titulo', 'Alunos')

@section('conteudo')

    <form method="post" action="{{route('alunos.update', $aluno->id)}}">
        @csrf
        @method('PATCH')

        <p>Nome <input type="text" name="nome" value="{{$aluno->nome}}"></p>
        <p>Email <input type="text" name="sigla" value="{{$aluno->email}}"></p>
        <p>Cidade <select name="cidade_id">
                <option value="">Selecione</option>
                @foreach(\App\Cidade::all() as $c)
                    <option value="{{$c->id}}">{{$c->nome}}</option>
                @endforeach
            </select>
        </p>


        <input type="submit" name="btnSalvar" value="incluir">
    </form>

@endsection
