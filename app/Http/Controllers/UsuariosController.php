<?php

namespace App\Http\Controllers;

use App\Models\Usuarios;
use Illuminate\Http\Request;

class UsuariosController extends Controller
{
    public function index()
    {
        $usuarios = Usuarios::all();

        return view('usuarios.index', compact('usuarios'));
    }


    public function create()
    {
        return view('usuarios.create');
        return redirect()->route('usuarios.index');

    }


    public function store(Request $requisicao, Usuarios $usuarios)
    {
        $requisicao->validate([
            'nome' => 'required|string',
            'cpf' => 'required|string',
            'email' => 'required|string',
            'senha' => 'required|string'

        ]);

        $usuarios = new Usuarios();

        $usuarios->nome = $requisicao->nome;
        $usuarios->cpf = $requisicao->cpf;
        $usuarios->email = $requisicao->email;
        $usuarios->senha = $requisicao->senha;

        $usuarios->usuarios()->save($usuarios);

        return redirect()->route('usuarios.show', $usuarios->id);
    }

    public function show(Usuarios $usuarios)
    {
        return view('usuarios.view', compact('usuarios'));
    }

    public function edit(Usuarios $usuarios)
    {
        // $this->authorize('update', $usuarios);

        return view('usuarios.edit', compact('usuarios'));
    }

    public function update(Request $requisicao, Usuarios $usuarios)
    {
        // Atualiza o objeto com os dados da requisição
        $usuarios->update($requisicao->all());

        // Redireciona para a página de detalhes do usuarios$usuarios
        return redirect()->route('usuarios.show', $usuarios->id);
    }

    public function destroy(Usuarios $usuarios)
    {
        $usuarios->delete();

        return redirect()->route('usuarios.index');
    }

}

