<?php

namespace App\Http\Controllers;

use App\Models\anggota;
use App\Models\buku;
use App\Models\detail_peminjam;
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
        $max = anggota::select('id')->max("id");
        $anggota = anggota::get();
        $buku = buku::get();
        $detail = detail_peminjam::get();
        return view('peminjaman.create', compact('title', 'anggota', 'max', 'detail', 'buku'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'no_transaksi' => 'required',
            'id_anggota' => 'required',
            'id_buku' => 'required',
            'tgl_pinjam' => 'required',
            'tgl_kembali' => 'required',
            'keterangan' => 'required',
        ]);

        peminjaman::create([
            'no_transaksi' => $request->no_transaksi,
            'id_anggota' => $request->id_anggota,
            'tgl_pinjam' => $request->tgl_pinjam,
            'tgl_kembali' => $request->tgl_kembali,

        ]);
        detail_peminjam::insert([
            'no_transaksi' => $request->no_transaksi,
            'id_buku' => $request->id_buku,
            'tgl_kembali_buku' => $request->tgl_kembali_buku,
            'keterangan' => $request->keterangan,

        ]);

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
