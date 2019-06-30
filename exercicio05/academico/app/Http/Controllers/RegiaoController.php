<?php

namespace App\Http\Controllers;

use App\Regiao;
use Illuminate\Http\Request;

class RegiaoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //Model -> recuperação dos dados
        $regioes = Regiao::all();

        //View -> apresentar
        return view('regioes.index')->with('regioes', $regioes);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('regioes.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Regiao::create($request->all());

        // mensagem de sucesso:
        session()->flash('mensagem', 'Região Inserido com sucesso!');


        return redirect()->route('regioes.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Regiao  $regio
     * @return \Illuminate\Http\Response
     */
    public function show(Regiao $regio)
    {
        return view('regioes.show')->with('regiao', $regio);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Regiao  $regio
     * @return \Illuminate\Http\Response
     */
    public function edit(Regiao $regio)
    {
        return view('regioes.edit')->with('regiao', $regio);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Regiao  $regio
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Regiao $regio)
    {
        $regio->fill($request->all());
        $regio->save();

        session()->flash('mensagem', 'Região Atualizado com sucesso!');

        return redirect()->route('regioes.show', $regio->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Regiao $regio
     * @return \Illuminate\Http\Response
     * @throws \Exception
     */
    public function destroy(Regiao $regio)
    {
        $regio->delete();
        session()->flash('mensagem', 'Região excluido com sucesso!');

        return redirect()->route('regioes.index');
    }
}
