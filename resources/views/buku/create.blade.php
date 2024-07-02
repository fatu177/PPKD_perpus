@extends('layout.app')
@section('buku')
active
@endsection
@section('content')
<div class="card">
    <div class="card-header">
        <h2>Tambah {{ $title }}</h2>
    </div>
    <form action="{{ route('buku.store') }}" method="post">
        @csrf
        <div class="card-body">
            <div class="form-floating">
                <input type="text" class="form-control mb-3" name="nama_buku" id="nama_buku" placeholder="Masukan Nama Buku" aria-describedby="floatingInputHelp" />
                <label for="floatingInput">Nama Buku</label>
            </div>
            <div class="form-floating">
                <input type="text" class="form-control mb-3" name="penerbit" id="penerbit" placeholder="Masukan Nama Penerbit" aria-describedby="floatingInputHelp" />
                <label for="floatingInput">Penerbit</label>
            </div>
            <div class="form-floating">
                <input type="number" class="form-control mb-3" name="qty" id="qty" placeholder="Masukan Jumlah Buku" aria-describedby="floatingInputHelp" />
                <label for="floatingInput">Jumlah</label>
            </div>
            <div class="form-floating">
                <input type="text" class="form-control mb-3" name="deskripsi" id="deskripsi" placeholder="Masukan Deskripsi Buku" aria-describedby="floatingInputHelp" />
                <label for="floatingInput">Deskripsi</label>
            </div>
            <div class="form-floating">
                <input type="text" class="form-control mb-3" name="penulis" id="penulis" placeholder="Masukan Nama Penulis Buku" aria-describedby="floatingInputHelp" />
                <label for="floatingInput">Penulis</label>
            </div>
            <div class="form-floating">
                <input type="text" class="form-control mb-3" name="genre" id="genre" placeholder="Masukan Genre Buku" aria-describedby="floatingInputHelp" />
                <label for="floatingInput">Genre</label>
            </div>
        </div>
        <div class="card-footer">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </form>
</div>

@endsection
