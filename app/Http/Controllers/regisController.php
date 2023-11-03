<?php

namespace App\Http\Controllers;

use App\Models\Users;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class regisController extends Controller
{
    // Menampilkan formulir pendaftaran
    public function showRegistrationForm()
    {
        return view("register");
    }

    // Memproses pendaftaran pengguna
    public function register(Request $request)
    {
        $this->validate($request, [
            'username' => 'required|unique:users',
            'password' => 'required|confirmed',
        ]);

        $user = new Users;
        $user->username = $request->input('username');
        $user->password = Hash::make($request->input('password'));
        $user->save();

        // Setelah berhasil mendaftar, arahkan ke halaman lain (misalnya, halaman beranda)
        return redirect('/login');
    }
}
