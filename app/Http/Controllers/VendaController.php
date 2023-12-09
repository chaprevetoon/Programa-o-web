<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Venda;
use App\Models\Usuario;

class VendaController extends Controller
{
    function telaCadastro(){
        $us = usuario::all();
        return view('vendas.cadastro', ["usuarios" => $us]);
    }
    function novo(Request $req){
        $valor = $req->input("valor");
        $id_usuario = $req->id_usuario;
        $venda = new Venda();
        $venda->valor = $valor;
        $venda->id_usuario = $id_usuario;

        if($venda->save()){
            $mensagem = "Venda adicionada com sucesso";
        }else{
            $mensagem = "venda não foi cadastrada";
        }
        return view("usuarios.resultado", compact('mensagem'));
    }

    function vendaPorUsuario($id){
        $usuario = Usuario::find($id);
        if($usuario){
            return view('vendas.index', ['usuario' => $usuario]);
        }else {
            return redirect()->route('usuarios.index');
        }
    }
}