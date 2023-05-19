<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cardapio;
use App\Models\Escola;

class CardapiosController extends Controller
{
    public function index()
    {
        $cardapios = Cardapio::all();
        return view('cardapios.index', compact('cardapios'));
    }


    public function create()
    {
        $escolas = Escola::all();
        return view('cardapios.create', compact('escolas'));
    }

    public function store(Request $requisicao)
    {
        $requisicao->validate([
            'dia_semana' => 'required|string',
            'refeicao_principal' => 'required|string',
            'sobremesa' => 'required|string',
            'bebida' => 'required|string|',
            'valor_calorico' =>'required|string|',
            'escola_id' => 'required|exists:escolas,id'
        ]);

        $cardapio = new Cardapio();

        $cardapio->dia_semana = $requisicao->dia_semana;
        $cardapio->refeicao_principal = $requisicao->refeicao_principal;
        $cardapio->sobremesa = $requisicao->sobremesa;
        $cardapio->bebida = $requisicao->bebida;
        $cardapio->valor_calorico = $requisicao->valor_calorico;
        $cardapio->escolas_id = $requisicao->escolas_id;

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
