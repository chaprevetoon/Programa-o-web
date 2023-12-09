<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produto; // Make sure to import the Product model

class ProdutoController extends Controller
{
    // Listar produtos
    public function index()
    {
        $produtos = Produto::all(); // Buscar todos os registros no banco
        return view("produtos.index", compact("produtos"));
    }

    public function cadastro()
    {
        return view("produtos.cadastro");
    }

    public function novo(Request $req)
    {
        $nome = $req->nome;
        $preco = $req->preco;
        $descricao = $req->descricao;

        $produto = new Produto();
        $produto->nome = $nome;
        $produto->preco = $preco;
        $produto->descricao = $descricao;

        if ($produto->save()) {
            $mensagem = "Produto $nome inserido com sucesso";
        } else {
            $mensagem = "Não foi possível inserir o produto";
        }

        return redirect()->route('produtos.index');
    }

    public function telaAlteracao($id)
    {
        $produto = Produto::find($id);
        return view("produtos.alterar", ["p" => $produto]);
    }

    public function alterar(Request $req, $id)
    {
        $nome = $req->input("nome");
        $preco = $req->input("preco");
        $descricao = $req->input("descricao");

        $produto = Produto::find($id);
        $produto->nome = $nome;
        $produto->preco = $preco;
        $produto->descricao = $descricao;

        if ($produto->save()) {
            $msg = "Atualização feita";
        } else {
            $msg = "Atualização não feita";
        }

        return redirect()->route('produtos.index');
    }

    public function excluir($id)
    {
        $produto = Produto::find($id);

        if ($produto->delete()) {
            $msg = "Exclusão feita";
        } else {
            $msg = "Exclusão não feita";
        }

        return redirect()->route('produtos.index');
    }
}
