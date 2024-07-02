@extends('layout.app')
@section('buku')
active
@endsection

@section('content')
<div class="m-3" align="right">
    <a class="btn btn-primary mb-0" href="{{ route('buku.create') }}"><i class='bx bx-plus-medical'></i> Tambah {{ $title }}</a>
</div>

<div class="card">
    <div class="card-header">
        <h2>{{ $title }}</h2>
    </div>
    <div class="card-body">
        <div class="table-responsive text-nowrap">
            <table class="table table-hover" id="example">
                <thead>
                    <tr>
                        <th>NO</th>
                        <th>Nama Buku</th>
                        <th>Penerbit</th>
                        <th>Jumlah</th>
                        <th>Deskripsi</th>
                        <th>Penulis</th>
                        <th>genre</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($data as $data)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $data->nama_buku }}</td>
                        <td>{{ $data->penerbit }}</td>
                        <td>{{ $data->qty }}</td>
                        <td>{{ $data->deskripsi }}</td>
                        <td>{{ $data->penuilis }}</td>
                        <td>{{ $data->genre }}</td>
                        <td>
                            <a class="btn btn-primary" href="{{ route('buku.edit', $data->id) }}"><i class='bx bx-pencil'></i></a>
                            <form action="{{ route('buku.destroy',$data->id) }}" method="post">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-danger" type="submit"><i class='bx bx-trash danger'></i></button>

                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
