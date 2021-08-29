<?php

namespace App\Http\Controllers;

use App\Models\Bahasa;
use App\Models\LinkHTantangan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ManagerTantangan extends Controller
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

    public function index(){
        $data = Bahasa::all();
        $dataLink = DB::table('link_h_tantangan')
                        ->join('data_bahasa', 'data_bahasa.id', '=', 'link_h_tantangan.id_bahasa')
                        ->get();

        return view('layouts.admin.pagemanager.hometantangan', [
            'collectionBahasa' => $data,
            'collectionLinkBahasa' => $dataLink
        ]);
    }

    public function tantangan_create(Request $request){
        $insert = LinkHTantangan::create([
            'id_bahasa' => $request->id_bahasa,
            'basic' => $request->basic,
            'inter' => $request->inter,
            'pro' => $request->pro
        ]);

        return response()->json(['data' => $insert]);
    }

    public function tantangan_update(Request $request){
        LinkHTantangan::where('id_link', $request->id)->update([
            'basic' => $request->basic,
            'inter' => $request->inter,
            'pro' => $request->pro
        ]);

        $update = LinkHTantangan::where('id_link', $request->id)->first();

        return response()->json(['data' => $update]);
    }

    public function tantangan_delete(Request $request){
        $delete = LinkHTantangan::where('id_link', $request->id_link)->delete();

        DB::statement('ALTER TABLE link_h_tantangan AUTO_INCREMENT =  1');

        return response()->json(['data' => $delete]);
    }
}
