<?php

namespace App\Http\Controllers;

use App\Models\Usuario;
use Carbon\Carbon;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;

class SenhaController extends Controller
{
    public function index()
    {
        return view('senha.index');
    }

    public function store(Request $requisicao)
    {
        $requisicao->validate([
            'email' => 'required|email|exists:usuarios',
        ]);

        $token = Str::random(64);

        DB::table('password_resets')->insert([
            'email' => $requisicao->email,
            'token' => $token,
            'created_at' => Carbon::now()
        ]);

        Mail::send('senha.edit', ['token' => $token], function ($message) use ($requisicao) {
            $message->to($requisicao->email);
            $message->subject('Reset Password');
        });

        return back()->with('message', 'Enviamos o link em seu email!');
    }

    public function edit($token)
    {
        return view('senha.edit', ['token' => $token]);
    }

    public function show($token)
    {
        return view('senha.show', ['token' => $token]);
    }

    public function update(Request $requisicao)
    {
        $requisicao->validate([
            'email' => 'required|email|exists:usuarios',
            'password' => 'required|string|min:6|confirmed',
            'password_confirmation' => 'required'
        ]);

        $updatePassword = DB::table('password_resets')
            ->where([
                'email' => $requisicao->email,
                'token' => $requisicao->token
            ])
            ->first();

        if (!$updatePassword) {
            return back()->withInput()->with('error', 'Invalido');
        }

        $user = Usuario::where('email', $requisicao->email)
            ->update(['senha' => Hash::make($requisicao->password)]);

        DB::table('password_resets')->where(['email' => $requisicao->email])->delete();

        return redirect('entrar')->with('message', 'Sua senha foi mudada com sucesso!');
    }
}
