<?php

namespace App\Http\Controllers;

use App\Test;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TestController extends Controller
{
    /**
     * TestController constructor.
     */
//    public function __construct()
//    {
//        $this->middleware('auth:api');
//    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (Auth::user()->type == 1){
            $tests = Test::all();
        }
        else{
            $tests = Test::all()->where('user_id', Auth::user()->id );
        }


        $tests = $tests->sortBy('date')->sortBy(function ($tests) {
            return $tests->procedure->name;});

        return view('tests.index')->with('tests', $tests);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('tests.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Test::create($request->all());

        session()->flash('mensagem', 'Teste Inserido com sucesso!');


        return redirect()->route('tests.index');
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Test $test
     * @return \Illuminate\Http\Response
     */
    public function show(Test $test)
    {
        return view('tests.show')->with('test', $test);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Test $test
     * @return \Illuminate\Http\Response
     */
    public function edit(Test $test)
    {
        return view('tests.edit')->with('test', $test);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Test $test
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Test $test)
    {
        $test->fill($request->all());
        $test->save();

        session()->flash('mensagem', 'Teste Atualizado com sucesso!');

        return redirect()->route('tests.show', $test->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Test $test
     * @return \Illuminate\Http\Response
     * @throws \Exception
     */
    public function destroy(Test $test)
    {
        $test->delete();
        session()->flash('mensagem', 'Teste excluido com sucesso!');

        return redirect()->route('tests.index');
    }
}
