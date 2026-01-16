<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Http\Request\SingupRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\View\View;

class LoginController extends Controller
{
    public function singupForm()
    {
        return view('auth.singup');
    }

    public function singup(SingupRequest $request):RedirectResponse
    {
        $user = new User();

        $user->username = $request->get('username');
        $user->name = $request->get('name');
        $user->email = $request->get('email');
        $user->password = $request->get('password');

        $user->save();

        Auth::login($user);

        return redirect()->route('users.account');
    }

    public function loginForm()
    {
        if(Auth::viaRemember()){
            return redirect()->route('users.account', ['msg' => 'Bienvenido de Nuevo']);
        }else if(Auth::check()){
            return redirect()->route('users.account');
        }else{
            return view('auth.login');
        }
    }

    public function login(Request $request):View
    {
        $credentials = $request->only('username', 'password');

        if(Auth::guard('web')->attempt($credentials)){
            $request->session()->regenerate();
            return redirect()->route('users.account');
        }else{
            $error = 'Error al acceder a la aplicación';
            return view('auth.login', compact('error'));
        }
    }

    public function logout(Request $request): RedirectResponse
    {
        Auth::guard('web')->logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect()->route('index');
    }
}
