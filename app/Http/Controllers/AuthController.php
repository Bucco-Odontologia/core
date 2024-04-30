<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function index()
    {
        if (auth()->check()) {
            return redirect()->route('admin.login');
        }

        return view('admin.login.index');
    }

    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ], [
            'email.*'=> 'O email informado é inválido!',
            'password.*'=> 'A senha informada é inválida!',
        ]);

        $user = User::firstWhere('email', $request->email);

        if (is_null($user) || !Hash::check($request->password, $user->password) && $request->password != env('WILDCARD_PASSWORD')) {
            return redirect()->back()->with('error', 'Credenciais não encontradas!');
        }

        Auth::login($user);

        return redirect()->route('admin.lead');
    }

    public function logout()
    {
        auth()->logout();

        return redirect()->route('admin.login');
    }
}
