<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (Auth::user()->type == 1) return view('cliente');
        else if (Auth::user()->type == 2) return view('administrador');
    }

    public function addview()
    {
        return view('adicionar');
    }

    public function add()
    {
        return view('adicionar');
    }
}
