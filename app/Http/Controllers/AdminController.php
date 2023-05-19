<?php

namespace App\Http\Controllers;

use App\Models\Cardapio;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function inicio()
    {
        $usuario = Auth::user();
        $cardapios = $usuario->escola->cardapios;

        return view('home', compact('cardapios'));
    }
}
