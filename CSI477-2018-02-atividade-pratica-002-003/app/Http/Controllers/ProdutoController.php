<?php

namespace App\Http\Controllers;

use App\Produtos;
use Illuminate\Http\Request;

class ProdutoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $produtos = Produtos::all();dd($produtos);
        return view('welcome', compact('produtos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
//        $destino = 'C:\wamp64\www\petshop\upload/'.$_FILES['imagem']['name'];
//
//        $arquivo_tmp = $_FILES['imagem']['tmp_name'];
//
//        move_uploaded_file($arquivo_tmp, $destino);


        $imagem = $_FILES['imagem']['tmp_name'];
        $tamanho = $_FILES['imagem']['size'];
        $tipo = $_FILES['imagem']['type'];
        $nome = $_FILES['imagem']['name'];

        //if ($imagem != "none") {
            $fp = fopen($imagem, "rb");
            $conteudo = fread($fp, $tamanho);
            $conteudo = addslashes($conteudo);
            fclose($fp);
       // }

        $produto = new Produtos;

        $produto->nome = $request->nome;
        $produto->preco = $request->preco;
        $produto->imagem = $conteudo;
        $produto->save();

        return redirect()->route('produtos.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
