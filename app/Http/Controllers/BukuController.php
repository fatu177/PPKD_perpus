<?php

namespace App\Http\Controllers;

use App\Models\buku;
use Illuminate\Http\Request;

class BukuController extends Controller
{
    public function index()
    {
        $title = 'Buku';
        $data = buku::get();
        return view('buku.index', compact('title', 'data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $title = 'Buku';
        return view('buku.create', compact('title'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama_buku' => 'required|max:255',
            'penerbit' =>   'required',
            'qty' => 'required',
            'deskripsi' => 'required',
            'penulis' => 'required',
            'genre' => 'required',
        ]);

        buku::create($request->all());
        return redirect()->route('buku.index');
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
        $title = 'Buku';
        $data = buku::findOrFail($id);
        return view('buku.edit', compact('title', 'data'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'nama_buku' => 'required|max:255',
            'penerbit' =>   'required',
            'qty' => 'required',
            'deskripsi' => 'required',
            'penulis' => 'required',
            'genre' => 'required',
        ]);

        buku::find($id)->update($request->all());
        return redirect()->route('buku.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        buku::find($id)->delete();
        return redirect()->route('buku.index');
    }
}
