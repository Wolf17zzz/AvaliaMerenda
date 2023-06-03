<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SenhaController extends Controller
{
      public function index()
      {
         return view('senha.index');
      }
}
