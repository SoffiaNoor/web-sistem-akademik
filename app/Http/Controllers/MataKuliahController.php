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
        $mataKuliah = MataKuliah::findOrFail($IDMK);
        return view("mata_kuliah.view", compact('mataKuliah'));
    }
}
