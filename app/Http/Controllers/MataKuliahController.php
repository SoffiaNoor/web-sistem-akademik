<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MataKuliah;

class MataKuliahController extends Controller
{
    public function index(){
        // codingan buat dapetin data dari model
        $mataKuliah = MataKuliah::all();
        // var_dump($mataKuliah);die;

        return view("mata_kuliah.index", compact('mataKuliah'));
    }
    public function create(){
        return view("mata_kuliah.create");
    }


    public function show(string $IDMK){
        $mataKuliah = MataKuliah::where('IDMK', $IDMK)->first();
        return view("mata_kuliah.view", compact('mataKuliah'));
    }

    public function update(Request $request, MataKuliah $mataKuliah){
        $mataKuliah->update($request->all());
        return redirect()->route('mata_kuliah.index');
    }

    // public function store(Request $request){
    //     $this->validate($request, [
    //         'IDMK' => 'required|max:5|string',
    //         'NamaMK' => 'required|string',
    //     ]);
        
    //     $input = $request->all();
    //     MataKuliah::create($input);

    //     return redirect()->route('mata_kuliah.index');
    // }
    public function store(Request $request)
    {
        $this->validate($request, [
            'IDMK' => 'required|max:5|string',
            'NamaMK' => 'required|string',
        ]);

        $data = [
            'IDMK' => $request->input('IDMK'),
            'NamaMK' => $request->input('NamaMK'),
        ];

        MataKuliah::create($data);

        return redirect()->route('mata_kuliah.index');
    }
}
