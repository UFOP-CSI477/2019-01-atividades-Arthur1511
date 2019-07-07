@extends('layouts.app')

@section('titulo', 'Testes')

@section('content')

    <form method="post" action="{{route('tests.update', $test->id)}}">
        @csrf
        @method('PATCH')

        <p class="form-text">Nome <select class="form-control" name="procedure_id">
                <option value="">Selecione</option>
                @foreach(\App\Procedure::all() as $c)
                    <option value="{{$c->id}}"
                            @if($test->procedure_id == $c->id)
                            selected
                            @endif
                    >{{$c->name}}</option>
                @endforeach
            </select>
        </p>

        <p class="form-text">Data <input class="form-control" type="date" name="price" value="{{$test->date}}"></p>



        <input class="btn btn-primary" type="submit" name="btnSalvar" value="incluir">
    </form>

@endsection
