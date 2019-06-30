@extends('principal')

@section('titulo', 'Procedimentos')

@section('conteudo')

    <form method="post" action="{{route('procedures.update', $procedure->id)}}">
        @csrf
        @method('PATCH')

        <p class="form-text">Nome <input class="form-control" type="text" name="name" value="{{$procedure->name}}"></p>
        <p class="form-text">Preço <input class="form-control" type="text" name="price" value="{{$procedure->price}}"></p>
        <p class="form-text">Usuário <select class="form-control" name="user_id">
                <option value="">Selecione</option>
                @foreach(\App\User::all() as $c)
                    <option value="{{$c->id}}">{{$c->name}}</option>
                @endforeach
            </select>
        </p>


        <input class="btn btn-primary" type="submit" name="btnSalvar" value="incluir">
    </form>

@endsection
