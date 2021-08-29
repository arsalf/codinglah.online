<?php

namespace App\Http\Controllers;

use App\Models\Bahasa;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Models\Todo;
use Illuminate\Support\Facades\DB;

class CrudController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     */
    public function index()
    {
        $todo = Todo::all();
        return view('karya.alat.todoList')->with(compact('todo'));
    }

    /**
     * Store a newly created resource in storage.
     *
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'title' => 'required|max:255',
            'description' => 'required'
        ]);
        $insert = Todo::create($data);
        return response()->json(['data' => $insert]);
    }

    public function insert(Request $request)
    {
        $insert = Bahasa::create($request);
        return response()->json(['data' => $insert]);
    }

    /**
     * Update a resource in storage.
     *
     */
    public function update(Request $data)
    {
        Todo::where('id', $data->id)->update(['title'=>$data->title, 'description' => $data->description]);
        $update = Todo::where('title', $data->title)->first();
        return response()->json(['data' => $update]);
    }

    /**
     * Delete a resource in storage.
     *
     */
    public function delete(Request $data)
    {
        $delete = Todo::where('id', $data->id)->delete();
        CrudController::refreshDB();
        return response()->json(['data' => $delete]);
    }

    /**
     * Refresh resources in storage.
     * so, the id will be start with max id in storage
     */
    private function refreshDB()
    {
        DB::statement("ALTER TABLE todos AUTO_INCREMENT =  1");
    }

    private function search()
    {
    }
}
