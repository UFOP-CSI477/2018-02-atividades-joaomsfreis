<?php

namespace App\Http\Controllers;

use App\Produtos;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index() {
        $produtos = Produtos::all();
        return view('welcome', compact('produtos')); //continuar tabela
    }

    public function login() {
        return view('login');
    }

    public function cliente() {
        return view('cliente');
    }

    public function alterar() {
        return view('alterar');
    }
}
