@extends('layouts.app')
@section('cadastroP')

    <h1>Cadastro de Produto</h1>
    <form action="{{ route('produto.novo') }}" method="post">
        @csrf
        <input type="text" name="nome" placeholder="Nome">
        <input type="text" name="preco" placeholder="Preço">
        <input type="text" name="descricao" placeholder="Descrição">
        <input type="submit" value="Enviar">
    </form>
@endsection
