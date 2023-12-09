@extends('layouts.app')
@section('conteudoV')
    <h1>Lista de Venda do Usuário {{$usuario->nome}}</h1>
    <div class="table-responsive">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th># Venda </th>
                    <th> Valor </th>
                </th>
            </thead>
            <tbody>
                @foreach ($usuario->vendas as $venda)
                    <th>
                        <td> {{$venda->id}} </td>
                        <td> {{$venda->valor}} </td>
                    </th>
                @endforeach
                <a class="btn btn-primary" href="{{ route('usuarios.index')}}">Voltar a Lista de Usuário</a>
            </tbody>
        </table>
    </div>
@endsection