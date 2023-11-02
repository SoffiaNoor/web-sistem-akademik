<?php

namespace App\Http\Controllers;

use App\Models\Users;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login(Request $request)
    {
        $username = $request->input('username');
        $password = $request->input('password');

        // Lakukan pengecekan ke database
        $user = Users::where('username', $username)->where('password', $password)->first();

        if ($user) {
            // Jika ditemukan, arahkan pengguna ke halaman /home
            return redirect('/home');
        } else {
            // Jika tidak ditemukan, arahkan pengguna kembali ke halaman login
            return redirect()->route('login')->with('error', 'Login failed. Please check your credentials.');
        }
    }
}
