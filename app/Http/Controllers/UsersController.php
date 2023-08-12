<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateUserRequest;
use App\Models\User;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function index()
    {
        $users = User::all();

        return view('pages.users', compact('users'));
    }

    public function loadCreateUserPage()
    {
        return view('pages.create_user');
    }

    public function createUser(CreateUserRequest $request)
    {
        $validated = $request->validated();

        if (User::createUser($validated)) {
            return redirect()->route('users')->with('message', 'Новый пользователь успешно добавлен!');
        }

    }

    public function destroy($id)
    {
        if (User::deleteUser($id)) {
            return redirect()->back()->with('message', 'Пользователь успешно удален!');
        }
    }
}

