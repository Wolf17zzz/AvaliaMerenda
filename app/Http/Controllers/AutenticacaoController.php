<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;

class AutenticacaoController extends Controller
{
    public function login()
    {
        return view('autenticacao.login');
    }

    public function store(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'senha' => 'required',
        ]);

        if (!Auth::guard('usr')->attempt(['email' => $request->email, 'password' => $request->senha])) {
            throw ValidationException::withMessages([
                'email' => __('auth.failed'),
            ]);
        }

        return redirect()->route('inicio');
    }
}
