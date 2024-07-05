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
                    <input type="text" class="form-control" name="nama_level[]" id="nama_level[]"
                        placeholder="Masukan Nama Level" aria-describedby="floatingInputHelp" />
                    <label for="floatingInput">Name</label>

                </div>
                <div class="form-floating">
                    <input type="text" class="form-control" name="nama_level[]" id="nama_level[]"
                        placeholder="Masukan Nama Level" aria-describedby="floatingInputHelp" />
                    <label for="floatingInput">Name</label>

                </div>
            </div>
            <div class="card-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </form>
    </div>
@endsection
