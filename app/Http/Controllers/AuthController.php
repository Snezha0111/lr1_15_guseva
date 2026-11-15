<?php

// пространство имен, где находится контроллер
namespace App\Http\Controllers;

// необходимые классы
use Illuminate\Http\Request;
use App\Models\User;
use Hash;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function create(){
        return view('auth/signup');
    }

    // Регистрация
    public function signUp(Request $request){
        $request->validate([
            'name'=>'required',
            'email'=>'required|email|unique:App\Models\User',
            'password'=>'required|min:6',
        ]);

        $user = User::create([
            'name' => request('name'),
            'email' => request('email'),
            'password' => Hash::make(request('password')),
        ]);

        $user -> createToken('myAppToken');
        return redirect()->route('login');
    }

    public function login(){
        return view('auth/login');
    }

    // Авторизация
    public function customLogin(Request $request){
        $request->validate([
            'email'=>'required|email',
            'password'=>'required|min:6',
        ]);

        // вводимые данные
        $credentials = [
            'email'=>request('email'),
            'password'=>request('password'),
        ];

        // проверка вводимого пароя с паролем из бд
        if(Auth::attempt($credentials)){
            $request->session()->regenerate();
            return redirect('/');
        }

        return back()->withErrors([
            'email' => 'Предоставленные данные недостаточны для подтверждения пользователя',
        ]);
    }

    // Выход
    public function logout(Request $request){
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/');
    }

}
