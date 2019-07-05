<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Procedure;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
//        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $procedures = Procedure::all()->sortBy('name');


        return view('home')->with('procedures', $procedures);
    }
}
