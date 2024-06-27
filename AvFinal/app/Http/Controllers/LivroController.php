<?php

namespace App\Http\Controllers;


use App\Models\livro;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class LivroController extends Controller
{
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
        Livro::create($request->all());
        return redirect()->route('mostrarLivro')->with('success','Produto cadastrado com sucesso');
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
    public function edit(livro $livro)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\livro  $livro
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, livro $livro)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\livro  $livro
     * @return \Illuminate\Http\Response
     */
    public function destroy(livro $livro)
    {
        //
    }
}
