@extends('layouts.mainlayout')
@section('title', 'Editar Livro')

@section('conteudo')
<form action="{{route ('editarLivro', ['id'=>$livro->id])}}" method="post">
    @csrf
    <div class="container mt-4">
    <h1 class="mb-4">Detalhes do Livro</h1>

    <div class="row mb-3">
        <div class="col-md-3">
            <label class="form-label">Nome do Livro:</label>
        </div>
        <div class="col-md-9">
            <input type="text" class="form-control" name="nome" value="{{ $livro->nome }}">
        </div>
    </div>

    <div class="row mb-3">
        <div class="col-md-3">
            <label class="form-label">Categoria:</label>
        </div>
        <div class="col-md-9">
            <input type="text" class="form-control" name="categoria" value="{{ $livro->categoria }}">
        </div>
    </div>

    <div class="row mb-3">
        <div class="col-md-3">
            <label class="form-label">Data de Publicação:</label>
        </div>
        <div class="col-md-9">
            <input type="text" class="form-control" name="publicação_data" value="{{ $livro->publicação_data }}">
        </div>
    </div>

    <div class="row mb-3">
        <div class="col-md-3">
            <label class="form-label">Idioma:</label>
        </div>
        <div class="col-md-9">
            <input type="text" class="form-control" name="idioma" value="{{ $livro->idioma }}">
        </div>
    </div>

    <div class="row mb-3">
        <div class="col-md-3">
            <label class="form-label">Número de Páginas:</label>
        </div>
        <div class="col-md-9">
            <input type="number" class="form-control" name="num_pags" value="{{ $livro->num_pags }}">
        </div>
    </div>

    <div class="row mb-3">
        <div class="col-md-3">
            <label class="form-label">Idade de Leitura Recomendada:</label>
        </div>
        <div class="col-md-9">
            <input type="text" class="form-control" name="idade_rec" value="{{ $livro->idade_rec }}">
        </div>
    </div>

    <div class="row mb-3">
        <div class="col-md-3">
            <label class="form-label">Nome do Autor:</label>
        </div>
        <div class="col-md-9">
            <input type="text" class="form-control" name="autor_id" value="{{ $livro->autor_id }}">
        </div>
    </div>

    <div class="row mb-3">
        <div class="col-md-3">
            <label class="form-label">Editora:</label>
        </div>
        <div class="col-md-9">
            <input type="text" class="form-control" name="editora_id" value="{{ $livro->editora_id }}">
        </div>
    </div>
    <div class="container mt-auto d-flex ms-0 me-0 mb-2 ps-0">
        <button type="submit" class="btn btn-dark">Cadastrar</button>
    </div>
    </div>
</form>
@endsection
