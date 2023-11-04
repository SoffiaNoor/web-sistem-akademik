<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AmbilKuliah;
use App\Models\Mahasiswa;
use App\Models\MataKuliah;
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

    public function destroy($NRP, $IDMK)
    {
        // Gunakan metode where untuk mencocokkan kedua primary key
        $ambilKuliah = AmbilKuliah::where('NRP', $NRP)
                                ->where('IDMK', $IDMK)
                                ->first();

        if (!$ambilKuliah) {
            return redirect()->route('ambil_kuliah.index')->with('error', 'Ambil kuliah tidak ditemukan!');
        }

        $ambilKuliah->delete();

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

    public function update(Request $request, AmbilKuliah $ambilKuliah)
    {
        $this->validate($request, [
            'NilaiAngka' => 'required|integer',
            // Tambahkan validasi lain sesuai kebutuhan Anda
        ]);

        $ambilKuliah->update($request->all());

        return redirect()->route('ambil_kuliah.index')->with('success', 'Ambil Kuliah berhasil diperbarui!');
    }

}
