<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tempat;
use App\Models\Ruang;
use App\Models\MataKuliah;


class TempatController extends Controller
{
    public function index()
    {
        $Tempat = Tempat::paginate(5);

        return view("tempat.index", compact('Tempat'));
    }
    public function create()
    {
        $Ruang = Ruang::all();
        $model1 = new Ruang();
        $mataKuliah = MataKuliah::all();
        $model2 = new MataKuliah();

        return view("tempat.create", compact('Ruang', 'model1','mataKuliah', 'model2'));
    }

    public function show(string $IDRuang, string $IDMK)
    {
        $Tempat = Tempat::where('IDRuang', $IDRuang)
                                ->where('IDMK', $IDMK)
                                ->first();
        return view("tempat.view", compact('Tempat'));
    }
    public function edit(Tempat $Tempat)
    {
        return view("tempat.update", compact('Tempat'));
    }

    public function destroy($IDRuang, $IDMK)
    {
        // Gunakan metode where untuk mencocokkan kedua primary key
        $Tempat = Tempat::where('IDRuang', $IDRuang)
                                ->where('IDMK', $IDMK)
                                ->first();

        if (!$Tempat) {
            return redirect()->route('ruang.index')->with('error', 'Kelas mata kuliah tidak ditemukan!');
        }

        $Tempat->delete();

        return redirect()->route('ruang.index')->with('success', 'Kelas mata kuliah berhasil dihapus!');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'IDRuang' => 'required|string|max:5',
            'IDMK' => 'required|string|max:5',
        ]);
    
        $data = [
            'IDRuang' => $request->input('IDRuang'),
            'IDMK' => $request->input('IDMK'),
        ];

        Tempat::create($data);

        return redirect()->route('tempat.index')->with('success', 'Kelas mata kuliah berhasil ditambah!');
    }


}