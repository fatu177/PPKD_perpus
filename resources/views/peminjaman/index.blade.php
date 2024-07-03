@extends('layout.app')
@section('peminjaman')
active
@endsection

@section('content')
<div class="m-3" align="right">
    <a class="btn btn-primary mb-0" href="{{ route('peminjaman.create') }}"><i class='bx bx-plus-medical'></i> Tambah {{ $title }}</a>
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
                        <th>Nama Peminjam</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($data as $data)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $data->anggota->nama_anggota }}</td>
                        <td>
                            <a class="btn btn-primary" href="{{ route('peminjaman.edit', $data->id) }}"><i class='bx bx-pencil'></i></a>
                            <a class="btn btn-primary" href="{{ route('peminjaman.edit', $data->id) }}"><i class='bx bx-print'></i></a>
                            <form action="{{ route('peminjaman.destroy',$data->id) }}" method="post">
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
