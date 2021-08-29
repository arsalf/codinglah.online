<?php

namespace App\Http\Controllers;

use App\Models\AlatSimpanData;
use Illuminate\Http\Request;

class KaryaController extends Controller
{
    //
    function simpan_data(){
        $data = AlatSimpanData::all();
        return view('karya.alat.simpan-data', ['items' => $data]);
    }

    function alat_simpan_data(Request $request){
        $data = AlatSimpanData::create([
            'data1' => $request->data1,
            'data2' => $request->data2
        ]);
        return redirect('/');
    }
}
