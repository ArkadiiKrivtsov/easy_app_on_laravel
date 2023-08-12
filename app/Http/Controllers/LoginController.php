<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function loadPage()
    {
        return view('pages.login');
    }

    public function login(LoginRequest $request)
    {
        $validated = $request->validated();

        if (auth('web')->attempt($validated)) {
            return redirect()->route('users')->with("message", "Добро пожаловать!");
        }

        return redirect()->route('login')->withInput()->withErrors(['message' => 'Пользователь с такой комбинацией логина и пароля не найден']);
    }

    public function logout()
    {
        auth('web')->logout();

        return redirect()->route('login')->with('message', 'Заходите к нам еще!');
    }
}
