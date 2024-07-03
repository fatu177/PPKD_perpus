<?php

namespace App\Http\Controllers;

use App\Models\anggota;
use App\Models\peminjaman;
use Illuminate\Http\Request;

class PeminjamanController extends Controller
{
    public function index()
    {
        $title = 'peminjaman';
        $data = peminjaman::get();
        return view('peminjaman.index', compact('title', 'data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $title = 'peminjaman';
        $anggota = anggota::get();
        return view('peminjaman.create', compact('title', 'anggota'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama_peminjaman' => 'required',
            'id_anggota[]' => 'required',
        ]);

        peminjaman::create($request->all());
        return redirect()->route('peminjaman.index');
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
        $title = 'peminjaman';
        $data = peminjaman::findOrFail($id);
        return view('peminjaman.edit', compact('title', 'data'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'nama_peminjaman' => 'required',
            'id_anggota[]' => 'required',
        ]);

        peminjaman::find($id)->update($request->all());
        return redirect()->route('peminjaman.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        peminjaman::find($id)->delete();
        return redirect()->route('peminjaman.index');
    }
}
