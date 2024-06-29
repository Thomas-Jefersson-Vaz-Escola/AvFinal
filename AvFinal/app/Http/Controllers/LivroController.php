<?php

namespace App\Http\Controllers;


use App\Models\livro;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Notifications\Notifiable;

class LivroController extends Controller
{
    use Notifiable;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('main');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //dd($request);
        Livro::create($request->all()); //armazen
        return view("main")->withMessages("Livro cadastrado com sucesso");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\livro  $livro
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {   
        $livro = Livro::findOrFail($id);
        return view('mostrarLivro', ['livro'=>$livro]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\livro  $livro
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $livro = Livro::findOrFail($id);
        return view('editarLivro', ['livro'=>$livro]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\livro  $livro
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        $livro = Livro::findOrFail($id);
        
        $livro->update([
            'nome' => $request->input('nome'),
            'categoria' => $request->input('categoria'),
            'publicação_data' => $request->input('publicação_data'),
            'idioma' => $request->input('idioma'),
            'num_pags' => $request->input('num_pags'),
            'idade_rec' => $request->input('idade_rec'),
        ]);
        
        return "Livro Atualizado";
    }
    

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\livro  $livro
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        $livro= Livro::findOrFail($id);
        return view('excluirLivro',['livro'=>$livro]);
    }


    public function destroy($id)
    {
        $livro= Livro::findOrFail($id);
        $livro->delete(); 
        return 'livro deletado';
    }
}
