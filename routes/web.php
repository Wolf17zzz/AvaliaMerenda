<?php

use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\CardapiosController;
use App\Http\Controllers\AvaliacaoController;
use App\Http\Controllers\EscolasController;
use App\Http\Controllers\UsuariosController;
use App\Http\Controllers\SenhaController;

use App\Http\Controllers\UserController;
use App\Http\Controllers\AutenticacaoController;


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



// Apenas logado

Route::middleware('auth:usr')->group(function(){
    Route::get('/', [AdminController::class, 'inicio'])->name('inicio');
});

Route::middleware(['auth:usr', 'admin'])->group(function(){
    
//Rota para escola

Route::get('/escolas', [EscolasController::class, 'index'])->name('escolas.index');

Route::get('/escolas/novo', [EscolasController::class, 'create'])->name('escolas.create');

Route::get('/escolas/{escola}', [EscolasController::class, 'show'])->name('escolas.show');

Route::get('/escolas/{escola}/editar', [EscolasController::class, 'edit'])->name('escolas.edit');

Route::post('/escolas', [EscolasController::class, 'store'])->name('escolas.store');

Route::put('/escolas/{escola}', [EscolasController::class, 'update'])->name('escolas.update');

Route::delete('/escolas/{escola}', [EscolasController::class, 'destroy'])->name('escolas.destroy');

//Rota para cadastro do cardapio

Route::get('/cardapios', [CardapiosController::class, 'index'])->name('cardapios.index');

Route::get('/cardapios/novo', [CardapiosController::class, 'create'])->name('cardapios.create');

Route::get('/cardapios/{cardapio}', [CardapiosController::class, 'show'])->name('cardapios.show');

Route::get('/cardapios/{cardapio}/editar', [CardapiosController::class, 'edit'])->name('cardapios.edit');

Route::post('/cardapios', [CardapiosController::class, 'store'])->name('cardapios.store');

Route::put('/cardapios/{cardapio}', [CardapiosController::class, 'update'])->name('cardapios.update');

Route::delete('/cardapios/{cardapio}', [CardapiosController::class, 'destroy'])->name('cardapios.destroy');

});

//Rota para login do usuario

Route::get('/entrar', [AutenticacaoController::class, 'login'])->name('login');
Route::post('/entrar',  [AutenticacaoController::class, 'store'])->name('autenticacao.store');

Route::get('/sair', [AutenticacaoController::class, 'logout'])->name('autenticacao.logout');


//Rota para avaliação

Route::get('home',[AuthController::class,'home'])->name('home');

Route::get('/avaliacao', [AvaliacaoController::class, 'index'])->name('avaliacao.index');

Route::get('/avaliacao/novo', [AvaliacaoController::class, 'create'])->name('avaliacao.create');

Route::get('/avaliacao/{avaliacao}', [AvaliacaoController::class, 'show'])->name('avaliacao.show');

Route::get('/avaliacao/{avaliacao}/editar', [AvaliacaoController::class, 'edit'])->name('avaliacao.edit');

Route::post('/avaliacao', [AvaliacaoController::class, 'store'])->name('avaliacao.store');

Route::put('/avaliacao/{avaliacao}', [AvaliacaoController::class, 'update'])->name('avaliacao.update');

Route::delete('/avaliacao/{avaliacao}', [AvaliacaoController::class, 'destroy'])->name('avaliacao.destroy');




//Rota para usuarios

Route::get('/usuarios', [UsuariosController::class, 'index'])->name('usuarios.index');

Route::get('/perfil', [UsuariosController::class, 'perfil'])->name('usuarios.perfil');

Route::get('/usuarios/novo', [UsuariosController::class, 'create'])->name('usuarios.create');

Route::get('/usuarios', [UsuariosController::class, 'show'])->name('usuarios.show');

Route::get('/usuarios/{usuario}/editar', [UsuariosController::class, 'edit'])->name('usuarios.edit');

Route::post('/usuarios', [UsuariosController::class, 'store'])->name('usuarios.store');

Route::put('/usuarios/{usuario}', [UsuariosController::class, 'update'])->name('usuarios.update');

Route::delete('/usuarios/{usuario}', [UsuariosController::class, 'destroy'])->name('usuarios.destroy');


//SENHA

Route::get('/senha', [SenhaController::class, 'index'])->name('senha.index');
Route::post('/senha', [SenhaController::class, 'store'])->name('senha.store');
Route::get('senha/{senha}', [SenhaController::class, 'edit'])->name('senha.edit');
Route::post('senha/mudar', [SenhaController::class, 'update'])->name('senha.update');
Route::get('senha/mudar/{token}', [SenhaController::class, 'show'])->name('senha.show');
