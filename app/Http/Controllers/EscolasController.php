<?php

namespace App\Http\Controllers;

use App\Models\Escola;
use Illuminate\Http\Request;

class EscolasController extends Controller
{
    /**
     * Lista todos as escolas cadastrados
     */
    public function index()
    {
        $escolas = Escola::all();

        return view('escolas.index', compact('escolas'));
    }

    /**
     * Mostra o formulário para criar uma nova escola
     */
    public function create()
    {
        return view('escolas.create');
    }

    /**
     * Armazena uma nova escola
     */
    public function store(Request $requisicao)
    {

        $escola = new Escola();

        // Preenche os campos do objeto com os dados da requisição
        $escola->nome = $requisicao->nome;
        $escola->endereco = $requisicao->endereco;
        $escola->cnpj = $requisicao->cnpj;

        // Salva o objeto no banco de dados
        $escola->save();

        // Redireciona para a página de detalhes da escola
        return redirect()->route('login');
    }

    /**
     * Mostra um gato específico
     */
    public function show(Escola $escola)
    {
        // Retorna a view escolas.view com o objeto $escola
        return view('escolas.view', compact('escola'));
    }

    /**
     * Mostra o formulário para editar um gato específico
     */
    public function edit(Escola $escola)
    {
        // Retorna a view escolas.edit com o objeto $escolas
        return view('escolas.edit', compact('escola'));
    }

    /**
     * Atualiza um gato específico
     */
    public function update(Request $requisicao, Escola $escola)
    {
        // Atualiza o objeto com os dados da requisição
        $escola->update($requisicao->all());

        // Redireciona para a página de detalhes da escola
        return redirect()->route('escolas.show', $escola->id);
    }

    /**
     * Remove uma escola específico
     */
    public function destroy(Escola $escola)
    {
        $escola->delete();

        return redirect()->route('escolas.index');
    }
}
