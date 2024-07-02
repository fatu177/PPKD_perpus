@extends('layout.app')
@section('user')
active
@endsection
@section('content')
<div class="card">
    <div class="card-header">
        <h2>Edit {{ $title }}</h2>
    </div>
    <form action="{{ route('user.update', $data->id) }}" method="post">
        @csrf
        @method('PUT')
        <div class="card-body">
            <div class="form-floating">
                <input type="text" class="form-control mb-3" name="name" id="name" placeholder="Masukan Nama Anda" aria-describedby="floatingInputHelp" value="{{ $data->name }}" />
                <label for="floatingInput">Nama</label>
            </div>
            <div class="form-floating">
                <input type="text" class="form-control mb-3" name="email" id="email" placeholder="Masukan Email Anda" aria-describedby="floatingInputHelp" value="{{ $data->email }}" />

                <label for="floatingInput">Email</label>
            </div>
            <div class="form-floating">
                <input type="password" class="form-control mb-3" name="password" id="password" placeholder="Masukan Password" aria-describedby="floatingInputHelp" />
                <label for="floatingInput">Password</label>
            </div>

        </div>
        <div class="card-footer">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </form>
</div>

@endsection
