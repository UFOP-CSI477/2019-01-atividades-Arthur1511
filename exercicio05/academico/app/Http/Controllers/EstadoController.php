<?php

namespace App\Http\Controllers;

use App\Estado;
use Illuminate\Http\Request;

class EstadoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //Model -> recuperação dos dados
        $estados = Estado::all();

        //View -> apresentar
        return view('estados.index')->with('estados', $estados);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('estados.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
//        dd($request);
//        return ($request->input('nome'));

        // opção 01
//        $estado = new Estado;
//        $estado->nome = $request->nome;
//        $estado->sigla = $request->sigla;
//
//        $estado->save();

        //opcao 02

        Estado::create($request->all());

        // mensagem de sucesso:
        session()->flash('mensagem', 'Estado Inserido com sucesso!');


        return redirect()->route('estados.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Estado  $estado
     * @return \Illuminate\Http\Response
     */
    public function show(Estado $estado)
    {
        return view('estados.show')->with('estado', $estado);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Estado  $estado
     * @return \Illuminate\Http\Response
     */
    public function edit(Estado $estado)
    {
        return view('estados.edit')->with('estado', $estado);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Estado  $estado
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Estado $estado)
    {
        $estado->fill($request->all());
        $estado->save();

        session()->flash('mensagem', 'Estado Atualizado com sucesse!');

        return redirect()->route('estados.show', $estado->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Estado $estado
     * @return \Illuminate\Http\Response
     * @throws \Exception
     */
    public function destroy(Estado $estado)
    {
        $estado->delete();
        session()->flash('mensagem', 'Estados excluido com sucesso!');

        return redirect()->route('estados.index');
    }
}
