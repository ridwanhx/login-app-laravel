<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\Pengguna;

class AuthController extends Controller
{
    // Menampilkan form login
    public function showLoginForm()
    {
        return view('auth.login', [
            'title' => 'Form Login',
        ]);
    }

    // Proses login
    public function login(Request $request)
    {
        // Validasi data input
        $data = $request->validate([
            'username' => ['required', 'string'],
            'password' => ['required'],
        ]);

        // Proses autentikasi
        if (Auth::attempt(['username' => $data['username'], 'password' => $data['password']])) {
            return redirect()->intended('dashboard');
        } else {
            // dd($data);
            // Jika gagal, kembali ke halaman login
            return back()->withErrors([
                'username' => 'username / password salah.',
            ])->withInput();
        }

    }

    // Menampilkan halaman dashboard setelah login
    public function dashboard()
    {
        return view('dashboard', [
            'title' => 'Halaman Dashboard'
        ]);
    }

    // Logout user
    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/login');
    }
}
