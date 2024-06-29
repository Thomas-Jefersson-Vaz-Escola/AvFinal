@extends('layouts.mainlayout')
@section('title', 'Mostrar Livro')

@section('conteudo')
<div class="container mt-4">
    <h1 class="mb-4">Detalhes do Livro</h1>

    <div class="row mb-3">
        <div class="col-md-3">
            <label class="form-label">Nome do Livro:</label>
        </div>
        <div class="col-md-9">
            <p>{{ $livro->nome }}</p>
        </div>
    </div>

    <div class="row mb-3">
        <div class="col-md-3">
            <label class="form-label">Categoria:</label>
        </div>
        <div class="col-md-9">
            <p>{{ $livro->categoria }}</p>
        </div>
    </div>

    <div class="row mb-3">
        <div class="col-md-3">
            <label class="form-label">Data de Publicação:</label>
        </div>
        <div class="col-md-9">
            <p>{{ $livro->publicação_data }}</p>
        </div>
    </div>

    <div class="row mb-3">
        <div class="col-md-3">
            <label class="form-label">Idioma:</label>
        </div>
        <div class="col-md-9">
            <p>{{ $livro->idioma }}</p>
        </div>
    </div>

    <div class="row mb-3">
        <div class="col-md-3">
            <label class="form-label">Número de Páginas:</label>
        </div>
        <div class="col-md-9">
            <p>{{ $livro->num_pags }}</p>
        </div>
    </div>

    <div class="row mb-3">
        <div class="col-md-3">
            <label class="form-label">Idade de Leitura Recomendada:</label>
        </div>
        <div class="col-md-9">
            <p>{{ $livro->idade_rec }}</p>
        </div>
    </div>

    <div class="row mb-3">
        <div class="col-md-3">
            <label class="form-label">Nome do Autor:</label>
        </div>
        <div class="col-md-9">
            <p>{{ $livro->autor_id }}</p>
        </div>
    </div>

    <div class="row mb-3">
        <div class="col-md-3">
            <label class="form-label">Editora:</label>
        </div>
        <div class="col-md-9">
            <p>{{ $livro->editora_id }}</p>
        </div>
    </div>
</div>
@endsection
