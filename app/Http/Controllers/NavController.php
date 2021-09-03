<?php

namespace App\Http\Controllers;

use App\Models\LinkHKarya;
use App\Models\LinkHTantangan;
use App\Models\Products;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class NavController extends Controller
{
    //
    function artikel(){
        $data = LinkHKarya::where('category', '!=' , 'ALAT')->where('category', '!=', 'GAME')->get();
        return view('artikel.home', ['collectionArtikel' => $data]);
    }

    function belajar(){
        $data = DB::table('link_h_belajar')
                    ->join('data_bahasa', 'data_bahasa.id', '=', 'link_h_belajar.id_bahasa')
                    ->get();

        return view('belajar.home', ['collectionBahasa' => $data]);
    }

    function tantangan(){
        $dataLink = DB::table('link_h_tantangan')
                    ->join('data_bahasa', 'data_bahasa.id', '=', 'link_h_tantangan.id_bahasa')
                    ->get();

        return view('tantangan.home', ['collectionBahasa' => $dataLink]);
    }

    function karya(){
        $data_karya = LinkHKarya::all();
        return view('karya.home', ['collectionKarya' => $data_karya]);
    }

    function karya_alat(){
        return view('karya.alat');
    }

    function karya_games(){
        return view('karya.games');
    }

    function tutorial(){
        $data_link = DB::table('link_h_tutorial')
        ->join('data_bahasa', 'data_bahasa.id', '=', 'link_h_tutorial.id_bahasa')
        ->get();

        return view('tutorial.home', ['collectionBahasa' => $data_link]);
    }

    function install_laravel(){
        return view('tutorial.konten.install_laravel');
    }

    function wa_bot(){
        return view('tutorial.konten.wa_bot_python_sele');
    }

    function coming_soon(){
        return view("layouts.coming_soon");
    }

    function belajar_c(){
        return view("belajar.c.intro");
    }

    function belajar_c_syntax(){
        return view("belajar.c.syntax");
    }
}
