@extends('layouts.mainlayout')
@section('title', 'Cadastrado')

@section('conteudo')
<form action="{{route ('excluirLivro', ['id'=>$livro->id])}}" method="post">
    @csrf
    <Label class="ms-5" >
        Tem certeza?
    </Label>
    <Input class="ms-3" value="{{$livro->nome}}"></Input><br>
    <button class="ms-5" type="submit">Sim</button>
</form>
@endsection
