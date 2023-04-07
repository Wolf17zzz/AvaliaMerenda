<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AuthController;
use App\Http\Controllers\CardapiosController;
use App\Http\Controllers\AvaliacaoController;
use App\Http\Controllers\EscolasController;


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

Route::get('/', function () {
    return view('welcome');
});

                //Rota para login dos usuarios
Route::get('login',[AuthController::class,'index'])->name('login');
Route::post('login',[AuthController::class,'login'])->name('login');

                //Rota para cadastro dos usuarios
Route::get('register',[Authcontroller::class,'register_view'])->name('register');
Route::post('register',[Authcontroller::class,'register'])->name('register');

                //Rota para cadastro do cardapio
Route::get('/cardapios', [CardapiosController::class, 'index'])->name('cardapios.index');

Route::get('/cardapios/novo', [CardapiosController::class, 'create'])->name('cardapios.create');

Route::get('/cardapios/{cardapio}', [CardapiosController::class, 'show'])->name('cardapios.show');

Route::get('/cardapios/{cardapio}/editar', [CardapiosController::class, 'edit'])->name('cardapios.edit');

Route::post('/cardapios', [CardapiosController::class, 'store'])->name('cardapios.store');

Route::put('/cardapios/{cardapio}', [CardapiosController::class, 'update'])->name('cardapios.update');

Route::delete('/cardapios/{cardapio}', [CardapiosController::class, 'destroy'])->name('cardapios.destroy');



Route::get('home',[AuthController::class,'home'])->name('home');

Route::get('/avaliacao', [AvaliacaoController::class, 'index'])->name('avaliacao.index');

Route::get('/avaliacao/novo', [AvaliacaoController::class, 'create'])->name('avaliacao.create');

Route::get('/avaliacao/{avaliacao}', [AvaliacaoController::class, 'show'])->name('avaliacao.show');

Route::get('/avaliacao/{avaliacao}/editar', [AvaliacaoController::class, 'edit'])->name('avaliacao.edit');

Route::post('/avaliacao', [AvaliacaoController::class, 'store'])->name('avaliacao.store');

Route::put('/avaliacao/{avaliacao}', [AvaliacaoController::class, 'update'])->name('avaliacao.update');

Route::delete('/avaliacao/{avaliacao}', [AvaliacaoController::class, 'destroy'])->name('avaliacao.destroy');


//
// ESCOLA
//
Route::get('/escolas', [EscolasController::class, 'index'])->name('escolas.index');
Route::get('/escolas/novo', [EscolasController::class, 'create'])->name('escolas.create');
Route::get('/escolas/{escola}', [EscolasController::class, 'show'])->name('escolas.show');
Route::get('/escolas/{escola}/editar', [EscolasController::class, 'edit'])->name('escolas.edit');
Route::post('/escolas', [EscolasController::class, 'store'])->name('escolas.store');
Route::put('/escolas/{escola}', [EscolasController::class, 'update'])->name('escolas.update');
Route::delete('/escolas/{escola}', [EscolasController::class, 'destroy'])->name('escolas.destroy');