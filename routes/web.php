<?php

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
use App\Models\Produto;
use illuminate\Http\Request;
use App\Http\Controllers\ProdutoController;
use Illuminate\Support\Facades\Auth;

Route::get('/', [ProdutoController::class, 'index'])->name('index')->middleware(['auth']);

//rota de Criar Produto (CREATE)
Route::post('/cadastrar-produto', [ProdutoController::class, 'store'])
->name('cadastrar.produto')->middleware(['auth']);  

//Rota de Leitura do Produto (READ)
Route::get('/ver-produto/{id}', [ProdutoController::class, 'ver'])->name('ver.produto')->middleware(['auth']); 

//Rota de Editar (UPDATE)
Route::get('/editar-produto/{id}', [ProdutoController::class, 'edit'])
->name('editar.produto')->middleware(['auth']); 

Route::post('/editar-produto/{id}', [ProdutoController::class, 'update'])
->name('editar.produto')->middleware(['auth']);

//Rota de excluir produto (DELETE)
Route::get('/excluir-produto/{id}', [ProdutoController::class, 'delete'])->name('excluir.produto')->middleware(['auth']);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

