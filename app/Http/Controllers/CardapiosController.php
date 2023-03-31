<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cardapio;

class CardapiosController extends Controller
{
    public function index()
    {
        $cardapios = Cardapio::all();
        return view('cardapios.index', compact('cardapios'));
    }

    
    public function create()
    {
        return view('cardapios.create');
    }
        
    public function store(Request $requisicao)
    {
        $cardapio = new Cardapio();

        $cardapio->dia_semana = $requisicao->dia_semana;
        $cardapio->refeicao_principal = $requisicao->refeicao_principal;
        $cardapio->sobremesa = $requisicao->sobremesa;
        $cardapio->bebida = $requisicao->bebida;
        $cardapio->valor_calorico = $requisicao->valor_calorico;

        $cardapio->save();

        return redirect()->route('cardapios.show', $cardapio->id);
    }

    public function show(Cardapio $cardapio)
    {
        return view('cardapios.view', compact('cardapio'));
    }

    public function edit(Cardapio $cardapio)
    {
        return view('cardapios.edit', compact('cardapio'));
    }

    public function update(Request $requisicao, Cardapio $cardapio)
    {
        $cardapio->update($requisicao->all());

        return redirect()->route('cardapios.show', $cardapio->id);
    }

    public function destroy(Cardapio $cardapio)
    {
        $cardapio->delete();

        return redirect()->route('cardapios.index');
    }

}