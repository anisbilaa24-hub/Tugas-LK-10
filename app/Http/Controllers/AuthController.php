<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    // ✅ TAMPILKAN HALAMAN LOGIN
    public function showLogin()
    {
        return view('login');
    }

    // ✅ PROSES LOGIN
    public function login(Request $request)
    {
        // Validasi input
        $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        // Ambil data login
        $credentials = $request->only('email', 'password');

        // Coba login
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            // 🔥 LANGSUNG KE DASHBOARD
            return redirect('/dashboard');
        }

        // Kalau gagal
        return back()->with('error', 'Email atau password salah!');
    }

    // ✅ LOGOUT
    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/');
    }
}