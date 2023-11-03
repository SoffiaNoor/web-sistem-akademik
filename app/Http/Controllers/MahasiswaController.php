<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mahasiswa;
class MahasiswaController extends Controller
{
    public function index()
    {
        $mahasiswa = Mahasiswa::paginate(5);

        return view("mahasiswa.index", compact('mahasiswa'));
    }

    public function create()
    {
        return view("mahasiswa.create");
    }

    public function show(string $NRP)
    {
        $mahasiswa = Mahasiswa::where('NRP', $NRP)->first();
        return view("mahasiswa.view", compact('mahasiswa'));
    }

    public function edit(Mahasiswa $mahasiswa)
    {
        return view("mahasiswa.update", compact('mahasiswa'));
    }

    public function destroy($NRP)
    {
        $mahasiswa = Mahasiswa::find($NRP);

        if (!$mahasiswa) {
            return redirect()->route('mahasiswa.index')->with('error', 'Mahasiswa tidak ditemukan!');
        }

        $mahasiswa->delete();

        return redirect()->route('mahasiswa.index')->with('success', 'Mahasiswa berhasil dihapus!');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'NRP' => 'required|max:5|string',
            'NamaMhs' => 'required|string',
            'Alamat' => 'required|string',
            'IDDosen' => 'required|max:5|string',
            'IPK' => 'required|numeric',
            'JenisKelamin' => 'required|string',
        ]);

        $data = [
            'NRP' => $request->input('NRP'),
            'NamaMhs' => $request->input('NamaMhs'),
            'Alamat' => $request->input('Alamat'),
            'IDDosen' => $request->input('IDDosen'),
            'IPK' => $request->input('IPK'),
            'JenisKelamin' => $request->input('JenisKelamin')
        ];

        Mahasiswa::create($data);

        return redirect()->route('mahasiswa.index')->with('success', 'Mahasiswa berhasil ditambah!');
    }

    public function update(Request $request, Mahasiswa $mahasiswa)
    {
        $this->validate($request, [
            'NamaMhs' => 'required|string',
            'Alamat' => 'required|string',
            'IDDosen' => 'required|max:5|string',
            'IPK' => 'required|numeric',
            'JenisKelamin' => 'required|string',
        ]);

        $mahasiswa->update($request->all());

        return redirect()->route('mahasiswa.index')->with('success', 'Mahasiswa berhasil diperbarui!');

    }

}
