<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MataKuliah;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class MataKuliahController extends Controller
{
    public function index()
    {
        $mataKuliah = MataKuliah::paginate(5);

        return view("mata_kuliah.index", compact('mataKuliah'));
    }
    public function create()
    {
        return view("mata_kuliah.create");
    }


    public function show(string $IDMK)
    {
        $mataKuliah = MataKuliah::where('IDMK', $IDMK)->first();
        return view("mata_kuliah.view", compact('mataKuliah'));
    }

    // public function store(Request $request)
    // {
    //     $this->validate($request, [
    //         'IDMK' => 'required|max:5|string',
    //         'NamaMK' => 'required|string',
    //     ]);
    //     try {
    //         $data = [
    //             'IDMK' => $request->input('IDMK'),
    //             'NamaMK' => $request->input('NamaMK'),
    //         ];
    
    //         MataKuliah::create($data);
    
    //         return redirect()->route('mata_kuliah.index')->with('success', 'Mata Kuliah berhasil ditambah!');
    //     } catch (\Exception $e) {
    //         return redirect()->route('mata_kuliah.create')->with('error', 'Gagal input Mata Kuliah. Pastikan data yang Anda masukkan benar.');
    //     }
    // }

    public function store(Request $request)
    {
        $this->validate($request, [
            'IDMK' => 'required|max:5|string',
            'NamaMK' => 'required|string',
        ]);

        try {
            $user = Auth::user(); // Get the currently logged-in user
            $data = [
                'IDMK' => $request->input('IDMK'),
                'NamaMK' => $request->input('NamaMK'),
                'user_id' => $user->id,
                // Store the user_id in the 'MataKuliah' table
            ];

            MataKuliah::create($data);

            return redirect()->route('mata_kuliah.index')->with('success', 'Mata Kuliah berhasil ditambah!');
        } catch (\Exception $e) {
            return redirect()->route('mata_kuliah.create')->with('error', 'Gagal input Mata Kuliah. Pastikan data yang Anda masukkan benar.');
        }
    }

    // public function update(Request $request, MataKuliah $mataKuliah)
    // {
    //     $this->validate($request, [
    //         'NamaMK' => 'required|string',
    //         'SKS' => 'required|integer',
    //     ]);

    //     $mataKuliah->update($request->all());

    //     return redirect()->route('mata_kuliah.index')->with('success', 'Mata Kuliah berhasil diperbarui!');

    // }
    public function update(Request $request, MataKuliah $mataKuliah)
    {
        $this->validate($request, [
            'NamaMK' => 'required|string',
            'SKS' => 'required|integer',
        ]);

        $user = Auth::user();

        $data = [
            'NamaMK' => $request->input('NamaMK'),
            'SKS' => $request->input('SKS'),
            'user_id' => $user->id,
        ];

        $mataKuliah->update($data);

        return redirect()->route('mata_kuliah.index')->with('success', 'Mata Kuliah berhasil diperbarui!');
    }


    public function destroy($id)
    {
        $mataKuliah = MataKuliah::find($id);

        if (!$mataKuliah) {
            return redirect()->route('mata_kuliah.index')->with('error', 'Mata kuliah tidak ditemukan!');
        }

        $mataKuliah->delete();

        return redirect()->route('mata_kuliah.index')->with('success', 'Mata kuliah berhasil dihapus!');
    }


    public function edit(MataKuliah $mataKuliah)
    {
        return view("mata_kuliah.update", compact('mataKuliah'));
    }
}
