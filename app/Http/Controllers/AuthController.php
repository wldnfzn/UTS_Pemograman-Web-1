<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    // ===== SHOW LOGIN FORM =====
    public function showLogin()
    {
        return view('auth.login');
    }

    // ===== SHOW REGISTER FORM =====
    public function showRegister()
    {
        return view('auth.register');
    }

    // ===== PROCESS LOGIN =====
    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        $credentials = $request->only('email', 'password');

        if(Auth::attempt($credentials)){
            return redirect()->route('home')->with('success', 'Login berhasil!');
        }

        return back()->withErrors([
            'email' => 'Email atau password salah.'
        ]);
    }

    // ===== PROCESS REGISTER =====
    public function register(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6|confirmed'
        ]);

        User::create([
            'name' => $request->name,
            'email'=> $request->email,
            'password' => Hash::make($request->password)
        ]);

        return redirect()->route('login')->with('success', 'Registrasi berhasil, silahkan login.');
    }

    // ===== LOGOUT =====
    public function logout()
    {
        Auth::logout();
        return redirect()->route('home');
    }
}
