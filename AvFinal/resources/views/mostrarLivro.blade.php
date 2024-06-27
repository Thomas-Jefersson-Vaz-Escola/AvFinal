@extends('layouts.mainlayout')
@section('title', 'Cadastrado')

@section('conteudo')
        <label>Livro</label>
        <input type="text" name="livro" id="livro" value="{{$livro->nome}}">
        <input type="text" name="livro" id="livro" value="{{$livro->categoria}}">
        <input type="text" name="livro" id="livro" value="{{$livro->publicação_data}}">
        <input type="text" name="livro" id="livro" value="{{$livro->idioma}}">
        <input type="text" name="livro" id="livro" value="{{$livro->num_pags}}">
        <input type="text" name="livro" id="livro" value="{{$livro->idade_rec}}">
        <input type="text" name="livro" id="livro" value="{{$livro->autor_id}}">
        <input type="text" name="livro" id="livro" value="{{$livro->editora_id}}">

@endsection