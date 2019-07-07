@extends('layouts.app')

@section('titulo', 'Testes')

@section('content')

    <div class="container-fluid">

        <h1 class="text-primary" style="text-align: center">Testes</h1>
        <table class="table table-responsive-md table-bordered table-hover table-striped">

            <thead class="table-primary">
            <tr>
                <th>Código</th>
                <th>Nome</th>
                <th>Preço</th>
                <th>Data</th>
                <th>Excluir</th>
                <th>Alterar</th>

            </tr>
            </thead>

            <tbody>
            @foreach($tests as $e)
                @if(\Illuminate\Support\Facades\Auth::user()->id == $e->user_id)
                    <tr>
                        <td>{{$e->id}}</td>
                        <td><a>{{$e->procedure->name}}</a></td>
                        <td>{{$e->procedure->price}}</td>
                        <td>{{$e->date}}</td>
                        <td>
                            <form method="post" action="{{route('tests.destroy', $e->id)}}"
                                  onsubmit="return confirm('Deseja realmente excluir?');">
                                @csrf
                                @method('DELETE')

                                <input class="btn btn-primary" type="submit" value="Excluir">
                            </form>
                        </td>

                        <td>
                            <a class="btn btn-primary" href="{{route('tests.edit', $e->id)}}">Alterar</a>
                        </td>
                    </tr>
                @endif
            @endforeach
            </tbody>

            <tfoot class="table-primary">
            <tr>

                <td colspan="3">Quantidade: {{($tests->count())}}</td>
                <td colspan="3">Valor total: R${{$tests->sum(function ($tests) {
                    return $tests->procedure->price;})}}
                </td>

            </tr>
            </tfoot>
        </table>

        <a class="btn btn-primary" href="{{route('tests.create')}}">Inserir</a>
    </div>

@endsection