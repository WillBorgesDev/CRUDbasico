<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProdutosController extends Controller
{
    public function index(Request $request)
    {
        //opção 1
        // $dados = $request -> all();
        // $produto = $dados['produto'];
        // $preco = $dados['preco'];
        // $categoria = $dados['categoria'];

        //opção 2 
        // $produto = $request -> query('produto');
        // $preco = $request -> query('preco');
        // $categoria = $request -> query('categoria');

        //opção 3

        // $produto = $request-> input('produto');
        // $preco = $request->input('preco');
        // $categoria = $request-> input('categoria');

        $dados = [
            'produto' => $request-> input('produto'),
            'preco' => $request->input('preco'),
            'categoria' => $request-> input('categoria')
        ];

        return view('produtos', $dados);

    }
}
