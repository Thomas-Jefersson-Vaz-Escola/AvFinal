@extends('layouts.mainlayout')
@section('title', 'Cadastrado')

@section('conteudo')
<div class="container mt-4">
    <h1 class="mb-4">Detalhes do Livro</h1>

    <div class="row mb-3">
        <div class="col-md-3">
            <label class="form-label">Nome do Livro:</label>
        </div>
        <div class="col-md-9">
            <input type="text" class="form-control" value="{{ $livro->nome }}">
        </div>
    </div>

    <div class="row mb-3">
        <div class="col-md-3">
            <label class="form-label">Categoria:</label>
        </div>
        <div class="col-md-9">
            <input type="text" class="form-control" value="{{ $livro->categoria }}">
        </div>
    </div>

    <div class="row mb-3">
        <div class="col-md-3">
            <label class="form-label">Data de Publicação:</label>
        </div>
        <div class="col-md-9">
            <input type="text" class="form-control" value="{{ $livro->publicação_data }}">
        </div>
    </div>

    <div class="row mb-3">
        <div class="col-md-3">
            <label class="form-label">Idioma:</label>
        </div>
        <div class="col-md-9">
            <input type="text" class="form-control" value="{{ $livro->idioma }}">
        </div>
    </div>

    <div class="row mb-3">
        <div class="col-md-3">
            <label class="form-label">Número de Páginas:</label>
        </div>
        <div class="col-md-9">
            <input type="number" class="form-control" value="{{ $livro->num_pags }}">
        </div>
    </div>

    <div class="row mb-3">
        <div class="col-md-3">
            <label class="form-label">Idade de Leitura Recomendada:</label>
        </div>
        <div class="col-md-9">
            <input type="text" class="form-control" value="{{ $livro->idade_rec }}">
        </div>
    </div>

    <div class="row mb-3">
        <div class="col-md-3">
            <label class="form-label">Nome do Autor:</label>
        </div>
        <div class="col-md-9">
            <input type="text" class="form-control" value="{{ $livro->autor_id }}">
        </div>
    </div>

    <div class="row mb-3">
        <div class="col-md-3">
            <label class="form-label">Editora:</label>
        </div>
        <div class="col-md-9">
            <input type="text" class="form-control" value="{{ $livro->editora_id }}">
        </div>
    </div>
    <div class="container mt-auto d-flex ms-0 me-0 mb-2 ps-0">
        <button type="submit" class="btn btn-dark">Cadastrar</button>
    </div>
</div>
@endsection
