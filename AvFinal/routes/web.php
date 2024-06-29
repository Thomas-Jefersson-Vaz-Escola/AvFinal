<?php

use App\Http\Controllers\LivroController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/', [LivroController::class,'index'])->name('livro.store');
Route::post('/', [LivroController::class,'store'])->name('livro.store');

Route::get('/mostrarLivro/{id}', [LivroController::class,'show'])->name('mostrarLivro');

Route::get('/editarLivro/{id}', [LivroController::class,'edit']);
Route::post('/editarLivro/{id}', [LivroController::class,'update'])->name('editarLivro');

Route::get('/excluirLivro/{id}',[LivroController::class, 'delete']);
Route::post('/excluirLivro/{id}',[LivroController::class, 'destroy'])->name('excluirLivro');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
