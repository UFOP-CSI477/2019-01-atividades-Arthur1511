<?php

namespace App\Http\Controllers;

use App\Procedure;
use Illuminate\Http\Request;

class ProcedureController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $procedures = Procedure::all()->sortBy('name');

        return view('procedures.index')->with('procedures', $procedures);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('procedures.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Procedure::create($request->all());

        // mensagem de sucesso:
        session()->flash('mensagem', 'Procedimento Inserido com sucesso!');


        return redirect()->route('procedures.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Procedure  $procedure
     * @return \Illuminate\Http\Response
     */
    public function show(Procedure $procedure)
    {
        return view('procedures.show')->with('procedure', $procedure);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Procedure  $procedure
     * @return \Illuminate\Http\Response
     */
    public function edit(Procedure $procedure)
    {
        return view('procedures.edit')->with('procedure', $procedure);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Procedure  $procedure
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Procedure $procedure)
    {
        $procedure->fill($request->all());
        $procedure->save();

        session()->flash('mensagem', 'Procedimento Atualizado com sucesso!');

        return redirect()->route('procedures.show', $procedure->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Procedure $procedure
     * @return \Illuminate\Http\Response
     * @throws \Exception
     */
    public function destroy(Procedure $procedure)
    {
        $procedure->delete();
        session()->flash('mensagem', 'Procedimento excluido com sucesso!');

        return redirect()->route('procedures.index');
    }
}
