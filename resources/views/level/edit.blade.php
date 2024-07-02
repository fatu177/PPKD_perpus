@extends('layout.app')
@section('level')
active
@endsection
@section('content')
<div class="card">
    <div class="card-header">
        <h2>Edit {{ $title }}</h2>
    </div>
    <form action="{{ route('level.update', $data->id) }}" method="post">
        @csrf
        @method('PUT')
        <div class="card-body">
            <div class="form-floating">
                <input type="text" class="form-control" name="nama_level" placeholder="Masukan Nama Level" aria-describedby="floatingInputHelp" value="{{ $data->nama_level }}" />
                <label for="floatingInput">Name</label>
            </div>
        </div>
        <div class="card-footer">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </form>
</div>

@endsection
