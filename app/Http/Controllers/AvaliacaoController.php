<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Avaliacao;
use App\Models\Cardapio;
use Illuminate\Support\Facades\Auth;

class AvaliacaoController extends Controller
{

    public function index()
    {
        $avaliacao = Avaliacao::all();


        return view('avaliacao.index', compact('avaliacao'));
    }


    public function create()
    {
        return view('avaliacao.create');
        return redirect()->route('avaliacao.index');

    }


    public function store(Request $requisicao, Cardapio $cardapio)
    {
        $requisicao->validate([
            'comentario' => 'required|string',
            'cardapio_id' => 'required',
            
        ]);

        $avaliacao = new Avaliacao();

        $avaliacao->comentario = $requisicao->comentario;
        $avaliacao->nota = $requisicao->nota;

        $avaliacao->cardapio_id = $requisicao->cardapio_id;
        $avaliacao->usuario_id = Auth::user()->id;

        $avaliacao->save();

        return redirect()->back();
    }

    public function show(Avaliacao $avaliacao)
    {
        return view('avaliacao.view', compact('avaliacao'));
    }

    public function edit(Avaliacao $avaliacao)
    {
        // $this->authorize('update', $avaliacao);

        return view('avaliacao.edit', compact('avaliacao'));
    }

    public function update(Request $requisicao, Avaliacao $avaliacao)
    {
        // Atualiza o objeto com os dados da requisição
        $avaliacao->update($requisicao->all());

        // Redireciona para a página de detalhes do Avaliacao
        return redirect()->route('avaliacao.show', $avaliacao->id);
    }

    public function destroy(Avaliacao $avaliacao)
    {
        $avaliacao->delete();

        return redirect()->route('avaliacao.index');
    }

}
