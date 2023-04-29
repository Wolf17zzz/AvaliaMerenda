<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsuariosController extends Controller
{
    public function index()
    {
        $cadusuarios = Usuarios::all();


        return view('cadusuarios.index', compact('cadusuarios'));
    }


    public function create()
    {
        return view('cadusuarios.create');
        return redirect()->route('cadusuarios.index');

    }


    public function store(Request $requisicao, Cardapio $cardapio)
    {
        $requisicao->validate([
            'comentario' => 'required|string'
        ]);

        $cadusuarios = new cadusuarios();

        $cadusuarios->comentario = $requisicao->comentario;

        $cardapio->avaliacoes()->save($cadusuarios);

        return redirect()->route('cadusuarios.show', $cadusuarios->id);
    }

    public function show(cadusuarios $cadusuarios)
    {
        return view('cadusuarios.view', compact('cadusuarios'));
    }

    public function edit(cadusuarios $cadusuarios)
    {
        // $this->authorize('update', $cadusuarios);

        return view('cadusuarios.edit', compact('cadusuarios'));
    }

    public function update(Request $requisicao, cadusuarios $cadusuarios)
    {
        // Atualiza o objeto com os dados da requisição
        $cadusuarios->update($requisicao->all());

        // Redireciona para a página de detalhes do cadusuarios
        return redirect()->route('cadusuarios.show', $cadusuarios->id);
    }

    public function destroy(cadusuarios $cadusuarios)
    {
        $cadusuarios->delete();

        return redirect()->route('cadusuarios.index');
    }

}

}
