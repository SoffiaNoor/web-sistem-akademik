<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;


class UserController extends Controller
{
    public function index()
    {
        $users = User::paginate(5);
        return view("user.index", compact("users"));
    }

    public function show(string $id)
    {
        $users = User::where('id', $id)->first();
        return view("user.show", compact('users'));
    }

    public function destroy($id)
    {
        $users = User::find($id);

        if (!$users) {
            return redirect()->route('user.index')->with('error', 'User tidak ditemukan!');
        }

        $users->delete();

        return redirect()->route('user.index')->with('success', 'User berhasil dihapus!');
    }

    public function changePassword(Request $request, $id)
    {
        $user = User::find($id);

        if (!$user) {
            return redirect()->route('user.index')->with('error', 'User tidak ditemukan!');
        }

        $user->update([
            'password' => Hash::make($request->input('new_password')),
        ]);

        return redirect()->route('user.index')->with('success', 'Password berhasil diubah!');
    }
}
