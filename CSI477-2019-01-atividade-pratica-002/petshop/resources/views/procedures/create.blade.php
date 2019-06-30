@extends('principal')

@section('titulo', 'Inserir Procedimento')

@section('conteudo')

    <form class="form-group" method="post" action="{{route('procedures.store')}}">
        @csrf
        <p class="form-text">Nome <input class="form-control" type="text" name="name"></p>
        <p class="form-text">Preço <input class="form-control" type="text" name="price"></p>
        <p class="form-text">Usuário <select class="form-control" name="user_id">
                <option value="">Selecione</option>
                @foreach(\App\User::all() as $c)
                    <option value="{{$c->id}}">{{$c->name}}</option>
                @endforeach
            </select></p>

        <input class="btn btn-primary" type="submit" name="btnSalvar" value="Incluir">
    </form>
@endsection