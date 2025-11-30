<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    // TAMPILKAN FORM LOGIN
    public function showLoginForm()
    {
        return view('auth.login'); // sesuai lokasi file Blade kamu
    }

    // PROSES LOGIN
    public function login(Request $request)
    {
        // validasi sederhana
        $credentials = $request->validate([
            'email'    => ['required', 'email'],
            'password' => ['required'],
        ]);

        // cek ke tabel users
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            // setelah login sukses, masuk ke beranda
            return redirect()->route('admin.beranda');
        }

        // kalau gagal
        return back()->withErrors([
            'email' => 'Email atau password salah.',
        ])->onlyInput('email');
    }

    // HALAMAN BERANDA
    public function beranda()
    {
        return view('beranda');
    }

    // LOGOUT (kalau mau dipakai nanti)
    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('login.form');
    }
}
