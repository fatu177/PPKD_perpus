@extends('layout.app')
@section('level')
active
@endsection
@section('content')
<div class="card">
    <div class="card-header">
        <h2>Tambah {{ $title }}</h2>
    </div>
    <form action="{{ route('level.store') }}" method="post">
        @csrf
        <div class="card-body">
            <div class="form-floating">
                <input type="text" class="form-control mb-3" name="no_transaksi" value="{{ date("YmdGi") }}" readonly>

                <label for="floatingInput">Name</label>
            </div>
            <div class="form-floating">
                <select name="id_anggota[]" id="id_anggota[]" class="form-control mb-3" multiple>
                    <option selected hidden>Pilih Anggota</option>
                    @foreach($anggota as $a)
                    <option value="{{ $a->id }}">{{ $a->nama_anggota }}</option>
                    @endforeach
                </select>
                <label for="floatingInput">Name</label>
            </div>
        </div>
        <div class="card-footer">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </form>
</div>

@endsection
