@extends('layout.app')
@section('anggota')
active
@endsection
@section('content')
<div class="card">
    <div class="card-header">
        <h2>Edit {{ $title }}</h2>
    </div>
    <form action="{{ route('anggota.update', $data->id) }}" method="post">
        @csrf
        @method('PUT')
        <div class="card-body">
            <div class="form-floating">
                <input value="{{ $data->nama_anggota }}" type="text" class="form-control mb-3" name="nama_anggota" id="nama_anggota" placeholder="Masukan Nama Anda" aria-describedby="floatingInputHelp" />
                <label for="floatingInput">Nama</label>
            </div>
            <div class="form-floating">
                <input value="{{ $data->email }}" type="email" class="form-control mb-3" name="email" id="email" placeholder="Masukan Email Anda" aria-describedby="floatingInputHelp" />

                <label for="floatingInput">Email</label>
            </div>
            <div class="form-floating">
                <input value="{{ $data->no_tlp }}" type="text" class="form-control mb-3" name="no_tlp" id="no_tlp" placeholder="Masukan Nomor Telepon Anda" aria-describedby="floatingInputHelp" />

                <label for="floatingInput">No Telepon</label>
            </div>

        </div>

        <div class="card-footer">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </form>
</div>

@endsection
