<?php

namespace App\Http\Controllers;

use App\Models\Escola;
use App\Models\Usuario;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UsuariosController extends Controller
{
    public function index()
    {
        $usuarios = Usuario::all();

        return view('usuarios.index', compact('usuarios'));
    }


    public function create()
    {
        $escolas = Escola::all();

        return view('usuarios.create', compact('escolas'));
    }


    public function store(Request $requisicao, Usuario $usuario)
    {
        $requisicao->validate([
            'nome' => 'required|string',
            'cpf' => 'required|string',
            'email' => 'required|string',
            'telefone' => 'required|string',
            'senha' => 'required|string|confirmed',
            'escola_id' => 'required|exists:escolas,id'
        ]);

        $usuario = new Usuario();

        $usuario->nome = $requisicao->nome;
        $usuario->cpf = $requisicao->cpf;
        $usuario->email = $requisicao->email;
        $usuario->telefone = $requisicao->telefone;
        $usuario->senha = Hash::make($requisicao->senha);
        $usuario->escola_id = $requisicao->escola_id;

        $usuario->save();

        return redirect()->route('login');
    }

    public function show(Usuario  $usuario)
    {
        return view('usuarios.view', compact('usuario'));
    }

    public function edit(Usuario $usuario)
    {
        // $this->authorize('update', $usuario);

        return view('usuarios.edit', compact('usuario'));
    }

    public function update(Request $requisicao, Usuario $usuario)
    {
        // Atualiza o objeto com os dados da requisição
        $usuario->update($requisicao->all());

        // Redireciona para a página de detalhes do usuario$usuario
        return redirect()->route('usuarios.show', $usuario->id);
    }

    public function destroy(Usuario $usuario)
    {
        $usuario->delete();

        return redirect()->route('usuarios.index');
    }

    public function perfil()
    {
        $usuario = Auth::user();

        return view('perfil.perfil', compact('usuario'));
    }


}



