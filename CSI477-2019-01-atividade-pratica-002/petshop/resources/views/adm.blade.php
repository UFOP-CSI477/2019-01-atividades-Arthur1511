@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-sm">
                <a class="btn  btn-sm btn-primary" href="{{route('procedures.index')}}">Procedimentos</a>
            </div>
            @if(\Illuminate\Support\Facades\Auth::user()->type == 1)
                <div class="col-sm">
                    <a class="btn  btn-sm btn-primary" href="{{route('users.index')}}">Usuarios</a>
                </div>
                <div class="col-sm">
                    <a class="btn  btn-sm btn-primary" href="{{route('tests.index')}}">Testes</a>
                </div>
            @endif
        </div>
    </div>

@endsection
