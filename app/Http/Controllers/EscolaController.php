<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Escola;

class EscolaController extends Controller
{
    public function create()
    {
        return view('escola.create');
    }
    public function store (Request $requisicao)
    {
        $escola = new Escola();

        $escola->nome = $requisicao->nome;
        $escola->endereco = $requisicao->endereco;
        $escola->cnpj = $requisicao->cnpj;

        $escola->save();
        return view('escola.index');

    }
    public function show(Escola $escola)
    {
        $escola = Escola::all();
        return view('escola.show', ['escola' => $escola]);

    }
    public function edit(Escola $escola)
    {
        $escola = Escola::all();
        return view('escola.edit', ['escola' => $escola]);
    }

    public function update(Request $requisicao, Escola $escola)
    {
        $escola->update($requisicao->all());

        return redirect()->route('escola.show', $escola->id);
    }

    public function delete(Escola $escola)
    {
        return view('escola.delete', ['escola' =>$escola]);
    }

    public function destroy(Escola $escola)
    {
        $escola->delete();
        return redirect()->route('escola.index');
    }

     public function index()
{

    $escola = Escola::all();
    return view('escola.index', compact('escola'));
}

}
