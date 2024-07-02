<?php

namespace App\Http\Controllers;

use App\Models\level;
use Illuminate\Http\Request;

class LevelController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $title = 'Level';
        $data = level::get();
        return view('level.index', compact('title', 'data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $title = 'Level';
        return view('level.create', compact('title'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama_level' => 'required|unique:levels|max:255',
        ]);

        level::create($request->all());
        return redirect()->route('level.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $title = 'Level';
        $data = level::findOrFail($id);
        return view('level.edit', compact('title', 'data'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'nama_level' => 'required|unique:levels,nama_level,' . $id . '|max:255',
        ]);

        level::find($id)->update($request->all());
        return redirect()->route('level.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        level::find($id)->delete();
        return redirect()->route('level.index');
    }
}
