<?php

namespace App\Http\Controllers;

use App\Models\Cardapio;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function inicio()
    {
        $cardapios = Cardapio::all();

        return view('home', compact('cardapios'));
    }
}
