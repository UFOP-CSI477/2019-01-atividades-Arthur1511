<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index(){

        $users = User::all();

        return view('users.index')->with('users', $users);
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function create(){

        return view('users.create');

    }

    public function store(Request $request){

        $request['password'] = Hash::make($request['password']);

        User::create($request->all());

        session()->flash('mensagem', 'Usuario Inserido com sucesso!');

        return redirect()->route('users.index');
    }

    public function show(User $user){

        return view('users.show')->with('user', $user);
    }

    public function edit(User $user){

        return view('users.edit')->with('user', $user);
    }

    public function update(Request $request, User $user){

        $user->fill($request->all());
        $user->password = Hash::make($user->password);
        $user->save();

        session()->flash('mensagem', 'Usuario Atualizado com sucesso!');

        return redirect()->route('users.show', $user->id);
    }

    public function destroy(User $user){

        $user->delete();
        session()->flash('mensagem', 'Usuario excluido com sucesso!');

        return redirect()->route('users.index');
    }
}
