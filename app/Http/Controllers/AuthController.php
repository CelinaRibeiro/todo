<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\Auth\{
    RegisterCreate,
    Login
};

use App\Models\User;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function index(Request $request)
    {
        if (Auth::check()) {
            return redirect()->route('home');
        }
        return view('login');
    }

    public function login_action(Request $request)
    {
        $validator = $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:6',
        ]);

        if (Auth::attempt($validator)) {
           return redirect()->route('home');
        }
    }

    public function register(Request $request)
    {
        if (Auth::User()) {
            return redirect()->route('home');
        }

        return view('register');
    }

    public function register_action(RegisterCreate $request)
    {
        $users = User::create($request->all());

        return redirect()->route('login');
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('login');
    }
}
