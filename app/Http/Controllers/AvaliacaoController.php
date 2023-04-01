<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Avaliacao;


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
    }


    public function store(Request $requisicao)
    {

        $Avaliacao = new Avaliacao();

        $Avaliacao->comentario = $requisicao->comentario;

        $Avaliacao->save();

        return redirect()->route('avaliacao.show', $Avaliacao->id);
    }

    public function show(Avaliacao $Avaliacao)
    {
        return view('avaliacao.view', compact('Avaliacao'));
    }

    public function edit(Avaliacao $Avaliacao)
    {
        return view('avaliacao.edit', compact('Avaliacao'));
    }

    public function update(Request $requisicao, Avaliacao $Avaliacao)
    {
        // Atualiza o objeto com os dados da requisição
        $Avaliacao->update($requisicao->all());

        // Redireciona para a página de detalhes do Avaliacao
        return redirect()->route('avaliacao.show', $Avaliacao->id);
    }

    public function destroy(Avaliacao $Avaliacao)
    {
        $Avaliacao->delete();

        return redirect()->route('avaliacao.index');
    }

}
