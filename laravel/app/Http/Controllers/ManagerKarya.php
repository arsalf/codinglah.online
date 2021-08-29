<?php

namespace App\Http\Controllers;

use App\Models\LinkHKarya;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ManagerKarya extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index(){
        $data = LinkHKarya::all();
        return view('layouts.admin.pagemanager.homekarya', ['collectionKarya' => $data]);
    }

    public function karya_create(Request $request){
        $insert = LinkHKarya::create([
            'image' => $request->image,
            'category' => strtoupper($request->category),
            'rating' => $request->rating,
            'title' => $request->title,
            'description' => $request->description,
            'link' => $request->link
        ]);

        return response()->json(['data' => $insert]);
    }

    public function karya_update(Request $request){
        LinkHKarya::where('id_card', $request->id)->update([
            'image' => $request->image,
            'category' => $request->category,
            'rating' => $request->rating,
            'title' => $request->title,
            'description' => $request->description,
            'link' => $request->link
        ]);

        $update = LinkHKarya::where('id_card', $request->id)->first();
        return response()->json(['data' => $update]);
    }
    
    public function karya_delete(Request $request){
        $delete_karya = LinkHKarya::where('id_card', $request->id)->delete();
        DB::statement("ALTER TABLE manager_home_karya AUTO_INCREMENT =  1");

        return response()->json(['data' => $delete_karya]);
    }
}
