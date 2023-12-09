@extends('layouts.app')

@section('alterarP')
    <h1>Alteração de Produto</h1>
    <form method="post" action="{{ route('produto.alterar', ['id' => $p->id]) }}">
        @csrf
        <input type="text" name="nome" placeholder="Nome" value="{{ $p->nome }}">
        <input type="text" name="preco" placeholder="Preço" value="{{ $p->preco }}">
        <input type="text" name="descricao" placeholder="Descrição" value="{{ $p->descricao }}">
        <input type="submit" value="Enviar">
    </form>
@endsection
