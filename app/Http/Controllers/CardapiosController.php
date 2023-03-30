<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cardapio;

class CardapioController extends Controller
{
    public function index()
    {
        $cardapios = Cardapio::all();
        return view('cardapio.index', compact('cardapios'));
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
        $cardapio->valor_calorico = $requisicao->valor_calorico;

        $cardapio->save();

        return redirect()->route('cardapio.show', $cardapio->id);
    }

}