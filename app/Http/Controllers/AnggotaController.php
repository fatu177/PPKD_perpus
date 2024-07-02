<?php

namespace App\Http\Controllers;

use App\Models\anggota;
use Illuminate\Http\Request;

class AnggotaController extends Controller
{
    public function index()
    {
        $title = 'Anggota';
        $data = anggota::get();
        return view('anggota.index', compact('title', 'data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $title = 'Anggota';
        return view('anggota.create', compact('title'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama_anggota' => 'required|max:255',
            'email' => 'required|email|unique:anggotas,email|max:255',
            'no_tlp' => 'required'
        ]);

        anggota::create($request->all());
        return redirect()->route('anggota.index');
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
        $title = 'Anggota';
        $data = anggota::findOrFail($id);
        return view('anggota.edit', compact('title', 'data'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'nama_anggota' => 'required|max:255',
            'email' => 'required|email|unique:anggotas,email,' . $id . '|max:255',
            'no_tlp' => 'required'
        ]);

        anggota::find($id)->update($request->all());
        return redirect()->route('anggota.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        anggota::find($id)->delete();
        return redirect()->route('anggota.index');
    }
}
