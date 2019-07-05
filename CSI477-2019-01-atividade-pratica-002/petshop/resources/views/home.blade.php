@extends('layouts.app')

@section('content')

    <table class="table table-bordered table-hover table-striped">

        <tr>
            <th>Código</th>
            <th>Nome</th>
            <th>Preço</th>
            <th>Visualizar</th>

        </tr>

        @foreach($procedures as $e)
            <tr>
                <td>{{$e->id}}</td>
                <td><a>{{$e->name}}</a></td>
                <td>{{$e->price}}</td>
                <td><a href="{{route('procedures.show', $e->id)}}">Exibir</a></td>

            </tr>
        @endforeach

    </table>

    <a class="btn btn-primary" href="{{route('procedures.create')}}">Inserir</a>

{{--    <div class="container">--}}
{{--        <div class="row justify-content-center">--}}
{{--            <div class="col-md-8">--}}
{{--                <div class="card">--}}
{{--                    <div class="card-header">Dashboard</div>--}}

{{--                    <div class="card-body">--}}
{{--                        @if (session('status'))--}}
{{--                            <div class="alert alert-success" role="alert">--}}
{{--                                {{ session('status') }}--}}
{{--                            </div>--}}
{{--                        @endif--}}

{{--                        You are logged in!--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
@endsection
