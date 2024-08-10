@extends('layouts.app')

@section('content')

    <h1>Contato</h1>

    <form action="{{ url('/contato') }}" method="post">
        @csrf
        <div class="mb-3">
            <label for="nome" class="form-label">Nome</label>
            <input type="text" class="form-control" id="nome" name="nome">
        </div>
        <div class="mb-3">
            <label for="id" class="form-label">ID</label>
            <input type="text" class="form-control" id="id" name="id">
        </div>
        <div class="mb-3">
            <label for="telefone" class="form-label">Telefone</label>
            <input type="text" class="form-control" id="telefone" name="telefone">
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="text" class="form-control" id="email" name="email">
        </div>
        <div class="mb-3">
            <label for="mtv_contato" class="form-label">Motivo do Contato</label>
            <input type="text" class="form-control" id="mtv_contato" name="mtv_contato">
        </div>
        <div class="mb-3">
            <label for="mensagem" class="form-label">Mensagem</label>
            <input type="text" class="form-control" id="mensagem" name="mensagem">
        </div>
        <div class="mb-3">
            <label for="endereco" class="form-label">Endereço</label>
            <input type="text" class="form-control" id="endereco" name="endereco">
        </div>
        <div class="mb-3">
            <label for="sexo" class="form-label">Sexo</label>
            <select class="form-control" id="sexo" name="sexo">
                <option value="M">Masculino</option>
                <option value="F">Feminino</option>
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Enviar</button>
    </form>
    <br><br>
    @if(isset($contato))
        <h2>Dados Inseridos na Tabela</h2>
        <table class="table">
            <tr><th>Nome:</th><td>{{ $contato->nome }}</td></tr>
            <tr><th>ID:</th><td>{{ $contato->id }}</td></tr>
            <tr><th>Telefone:</th><td>{{ $contato->telefone }}</td></tr>
            <tr><th>Email:</th><td>{{ $contato->email }}</td></tr>
            <tr><th>Motivo do Contato:</th><td>{{ $contato->mtv_contato }}</td></tr>
            <tr><th>Mensagem:</th><td>{{ $contato->mensagem }}</td></tr>
            <tr><th>Endereço:</th><td>{{ $contato->endereco }}</td></tr>
            <tr><th>Sexo:</th><td>{{ $contato->sexo }}</td></tr>
        </table>
    @endif
@endsection
