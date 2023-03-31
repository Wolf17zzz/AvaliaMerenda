<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EscolaController extends Controller
{
    public function create()
    {
        return view('escola.create');
    }
    public function store (Request $requisicao)
    {
        dd($requisicao->all());
    } 
}
