<?php

namespace App\Http\Controllers;

use App\Models\Users;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    // public function login(Request $request)
    // {
    //     $username = $request->input('username');
    //     $password = $request->input('password');

    //     // Lakukan pengecekan ke database
    //     $user =  DB::table('Users')->where('username', $username)->where('password', $password)->first();

    //     if ($user && password_verify($password, $user->password)) {
    //         // Jika ditemukan, arahkan pengguna ke halaman /home
    //         return redirect('/home');
    //     } else {
    //         // Jika tidak ditemukan, arahkan pengguna kembali ke halaman login
    //         return redirect()->route('login')->with('error', 'Login failed. Please check your credentials.');
    //     }
    // }
    public function login(Request $request)
    {
        $credentials = $request->only('username', 'password');

        if (Auth::attempt($credentials)) {
            // Jika kredensial cocok, arahkan pengguna ke halaman /home
            return redirect('/');
        }

        // Jika kredensial tidak cocok, arahkan pengguna kembali ke halaman login
        return redirect()->route('login')->with('error', 'Login failed. Please check your credentials.');
    }
}
