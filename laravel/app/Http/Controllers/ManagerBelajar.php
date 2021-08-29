<?php

namespace App\Http\Controllers;

use App\Models\Bahasa;
use App\Models\LinkHBelajar;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class ManagerBelajar extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $dataBahasa = Bahasa::all();
        $dataLink = DB::table('link_h_belajar')
                        ->join('data_bahasa', 'data_bahasa.id', '=', 'link_h_belajar.id_bahasa')
                        ->get();

        return view('layouts.admin.pagemanager.homebelajar',[
            'collectionBahasa' => $dataBahasa,
            'collectionLinkBahasa' => $dataLink
        ]);
    }

    public function belajar_create(Request $request){
        $data = LinkHBelajar::create([
            'id_bahasa' => $request->id_bahasa,
            'link' => $request->link
        ]);

        return response()->json(['data' => $data]);
    }

    public function belajar_update(Request $request){
        LinkHBelajar::where('id_link', $request->id)->update([
            'link' => $request->link
        ]);

        $update = LinkHBelajar::where('id_link', $request->id)->first();
        return response()->json(['data' => $update]);
    }

    public function belajar_delete(Request $request){
        $delete = LinkHBelajar::where('id_link', $request->id_link)->delete();
        DB::statement("ALTER TABLE link_h_belajar AUTO_INCREMENT =  1");
        
        return response()->json(['data' => $delete]);
    }
}
