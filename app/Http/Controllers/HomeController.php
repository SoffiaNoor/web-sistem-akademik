<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mahasiswa;
use App\Models\Dosen;
use App\Models\MataKuliah;

class HomeController extends Controller
{
    public function index()
    {
        $mahasiswa = Mahasiswa::all();
        $dosen = Dosen::all();
        $mataKuliah = MataKuliah::all();

        return view("home", compact('mahasiswa','dosen','mataKuliah'));
    }

    public function login()
    {
        return view("login");
    }
}
