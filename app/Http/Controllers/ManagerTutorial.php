<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Bahasa;
use Illuminate\Support\Facades\DB;
use App\Models\LinkHTutorial;

class ManagerTutorial extends Controller
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
        $data_link = DB::table('link_h_tutorial')
            ->join('data_bahasa', 'data_bahasa.id', '=', 'link_h_tutorial.id_bahasa')
            ->get();

        return view('layouts.admin.pagemanager.hometutorial', [
            'collectionBahasa' => $data,
            'collectionLinkBahasa' => $data_link
        ]);
    }

    public function tutorial_create(Request $request)
    {
        $insert = LinkHTutorial::create([
            'id_bahasa' => $request->id_bahasa,
            'title' => $request->title,
            'link' => $request->link
        ]);

        return response()->json(['data' => $insert]);
    }

    public function tutorial_update(Request $request)
    {
        LinkHTutorial::where('id_link', $request->id)->update([
            'title' => $request->title,
            'link' => $request->link
        ]);

        $update = LinkHTutorial::where('id_link', $request->id)->first();

        return response()->json(['data' => $update]);
    }

    public function tutorial_delete(Request $request)
    {
        $delete = LinkHTutorial::where([
            ['id_bahasa', '=', $request->id_bahasa],
            ['id_link', '=', $request->id_link]
        ])->delete();
        DB::statement("ALTER TABLE link_h_tutorial AUTO_INCREMENT =  1");

        return response()->json(['data' => $delete]);
    }
}
