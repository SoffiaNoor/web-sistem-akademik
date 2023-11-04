<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AmbilKuliah;
class AmbilKuliahController extends Controller
{
    public function index()
    {
        $ambilKuliah = AmbilKuliah::paginate(5);

        return view("ambil_kuliah.index", compact('ambilKuliah'));
    }
    public function create()
    {
        return view("ambil_kuliah.create");
    }

    public function show(string $NRP, string $IDMK)
    {
        $ambilKuliah = AmbilKuliah::where('NRP', $NRP)
                                ->where('IDMK', $IDMK)
                                ->first();

        return view("ambil_kuliah.view", compact('ambilKuliah'));
    }
    public function edit(AmbilKuliah $ambilKuliah)
    {
        return view("ambil_kuliah.update", compact('ambilKuliah'));
    }

    public function destroy($NRP, $IDMK)
    {
        // Gunakan metode where untuk mencocokkan kedua primary key
        $ambilKuliah = AmbilKuliah::where('NRP', $NRP)
                                ->where('IDMK', $IDMK)
                                ->first();

        if (!$ambilKuliah) {
            return redirect()->route('mata_kuliah.index')->with('error', 'Mata kuliah tidak ditemukan!');
        }

        $ambilKuliah->delete();

        return redirect()->route('mata_kuliah.index')->with('success', 'Mata kuliah berhasil dihapus!');
    }

}
