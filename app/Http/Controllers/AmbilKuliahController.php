<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AmbilKuliah;
use App\Models\Mahasiswa;
use App\Models\MataKuliah;
use Illuminate\Support\Facades\DB;
class AmbilKuliahController extends Controller
{
    public function index()
    {
        $ambilKuliah = AmbilKuliah::paginate(5);

        return view("ambil_kuliah.index", compact('ambilKuliah'));
    }
    public function create()
    {
        $mahasiswa = Mahasiswa::all();
        $model1 = new Mahasiswa();
        $mataKuliah = MataKuliah::all();
        $model2 = new MataKuliah();

        return view("ambil_kuliah.create", compact('mahasiswa', 'model1','mataKuliah', 'model2'));
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

    public function destroy(string $NRP, string $IDMK)
    {
        // Check if the ambil kuliah object exists
        $ambilKuliah = DB::table('AmbilKuliah')
            ->where('NRP', $NRP)
            ->where('IDMK', $IDMK)
            ->first();

        if (!$ambilKuliah) {
            // Redirect the user to an error page
            return redirect()->route('ambil_kuliah.index')->with('error', 'Ambil kuliah tidak ditemukan!');
        }

        // Delete the ambil kuliah object
        DB::table('AmbilKuliah')
            ->where('NRP', $NRP)
            ->where('IDMK', $IDMK)
            ->delete();

        // Redirect the user to the ambil kuliah index page
        return redirect()->route('ambil_kuliah.index')->with('success', 'Ambil kuliah berhasil dihapus!');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'NRP' => 'required|string|max:5',
            'IDMK' => 'required|string|max:5',
            'NilaiAngka' => 'required|numeric',
        ]);
    
        $data = [
            'NRP' => $request->input('NRP'),
            'IDMK' => $request->input('IDMK'),
            'NilaiAngka' => $request->input('NilaiAngka'),
        ];

        AmbilKuliah::create($data);

        return redirect()->route('ambil_kuliah.index')->with('success', 'Ambil Kuliah berhasil ditambah!');
    }

    public function update(Request $request)
{
    $this->validate($request, [
        'NilaiAngka' => 'required|integer',
        // Tambahkan validasi lain sesuai kebutuhan Anda
    ]);

    $NRP = $request->input('NRP');
    $IDMK = $request->input('IDMK');

    // Lakukan update berdasarkan $NRP dan $IDMK

    return redirect()->route('ambil_kuliah.index')->with('success', 'Ambil Kuliah berhasil diperbarui!');
}

}
