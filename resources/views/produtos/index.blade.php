@extends('layouts.app')

@section('conteudoP')
    <h1>Lista de Produtos</h1>
    <div class="table-responsive">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nome</th>
                    <th>Preço</th>
                    <th>Descrição</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($produtos as $produto)
                    <tr>
                        <td>{{ $produto->id }}</td>
                        <td>{{ $produto->nome }}</td>
                        <td>{{ $produto->preco }}</td>
                        <td>{{ $produto->descricao }}</td>
                        <td>
                            <a class="btn btn-warning" href="{{ route('produto.alterar', ['id' => $produto->id]) }}">Alterar</a>
                            <a class="btn btn-danger" href="#" onclick="exclui({{ $produto->id }})">Excluir</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <a class="btn btn-primary" href="{{ route('produtos.cadastro') }}"> Cadastrar Novo </a>
    </div>
    <script>
        function exclui(id) {
            if (confirm('Deseja excluir o produto de id: ' + id + '?')) {
                location.href = '/produto/excluir/' + id;
            }
        }
    </script>
@endsection
