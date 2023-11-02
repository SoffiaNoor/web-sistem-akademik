<?php

namespace App\Http\Controllers;

use App\Models\Users;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login(Request $request)
    {
        // Validasi data masukan dari formulir
        $request->validate([
            'username' => 'required',
            'password' => 'required',
        ]);

        // Coba mencari pengguna dengan username yang sesuai
        $user = Users::where('username', $request->input('username'))->first();

        if ($user) {
            // Jika pengguna ditemukan, periksa kata sandi
            if (password_verify($request->input('password'), $user->password)) {
                // Autentikasi berhasil, arahkan ke halaman /home
                return redirect('/home');
            }
        }

        // Autentikasi gagal, arahkan kembali ke halaman login dengan pesan kesalahan
        return redirect('/login')->with('error', 'Username atau password salah.');
    }
}
