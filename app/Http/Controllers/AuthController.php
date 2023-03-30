<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\user;

class AuthController extends Controller
{
    public function index()
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required'
        ]);
    }

    public function register_view()
    {
        return view('auth.register');
    }

    public function register(Request $request)
    {
        $request->validate([
            'name'=>'required',
            'email'=>'required|unique:users|email',
            'password'=>'required|confirmed'
        ]);

        User::create([
            'name'=>$request->name,
            'email'=>$request->email,
            'password'=> \Hash::make($request->password)
        ]);

        if(\Auth::attempt($request->only('email','password'))){
            return redirect('home');
        }

        return redirect('register')->withError('Error');
    }

    public function home(){
        return view('home');
    }

    public function logout(){
        \Session::flush();
        \Auth::logout();
        return redirect('');
    }
}
