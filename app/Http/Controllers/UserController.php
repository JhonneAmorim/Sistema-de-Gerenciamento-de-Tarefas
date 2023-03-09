<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        return view('registrar');
    }

    public function cadastrar(Request $request)
    {
        $criarUsuario = new User();
        $criarUsuario->name = $request->input('name');
        $criarUsuario->password = Hash::make($request->input('password'));
        $criarUsuario->email = $request->input('email');

        $criarUsuario->save();

        return redirect('/')->with('success', 'Usuário criado com sucesso!');
    }

    public function telaLogin()
    {
        return view('login');
    }

    public function login(Request $request)
    {
        $validador = Validator::make($request->all(), [
            'name' => 'required',
            'password' => 'required',
        ]);

        if($validador->fails()) {
            return redirect('login')
                ->with($validador)
                ->withInput();
        }

        $nome = $request->input('name');
        $senha = $request->input('password');

        if(Auth::attempt(['name' => $nome, 'password' => $senha])) {
            return redirect()->intended('/');
        } else {
            return back()->with('error', 'Usuário ou senha inválidos');
        }
    }

    public function logout(Request $request) {
        Auth::logout();
        return redirect()->route('login');
    }
}
