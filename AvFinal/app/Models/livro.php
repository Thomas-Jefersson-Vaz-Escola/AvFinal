<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class livro extends Model
{
    protected $fillable = [
        'nome',
        'categoria',
        'isbn-10',
        'publicação_data',
        'idioma',
        'num_pags',
        'idade_rec',
        'autor_id',
        'editora_id',
    ];
    public function autor(){ 
        return $this->belongsTo(Autor::class);
    }
    public function editora(){ 
        return $this->belongsTo(Editora::class);
    }
}
