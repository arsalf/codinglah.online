<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Bahasa;
use App\Models\LinkHTutorial;
use Illuminate\Support\Facades\DB;

class ManagerProla extends Controller
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
        $data = Bahasa::all();
        return view('layouts.admin.datamanager.prola', ['collectionBahasa' => $data]);
    }

    public function prola_create(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|max:100',
            'image' => 'required'
        ]);
        $insert = Bahasa::create($data);

        return response()->json(['data' => $insert]);
    }

    public function prola_update(Request $request)
    {
        Bahasa::where('id', $request->id)->update([
            'name' => $request->name,
            'image' => $request->image
        ]);

        $update = Bahasa::where('id', $request->id)->first();

        return response()->json(['data' => $update]);
    }

    public function prola_delete(Request $request)
    {
        $delete = Bahasa::where('id', $request->id)->delete();
        LinkHTutorial::where('id_bahasa', $request->id)->delete();
        //refresh DB for ID set increment again
        DB::statement("ALTER TABLE data_bahasa AUTO_INCREMENT =  1");

        return response()->json(['data' => $delete]);
    }
}
