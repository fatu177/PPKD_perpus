@extends('layout.app')
@section('level')
    active
@endsection
@section('content')
    <div class="card">
        <div class="card-header">
            <h2>Tambah {{ $title }}</h2>

        </div>
        <form action="{{ route('peminjaman.store') }}" method="post">
            @csrf
            <div class="card-body">
                <div class="row">


                    <div class="form-floating col-6">
                        @php
                            date_default_timezone_set('Asia/Jakarta');

                        @endphp

                        <input type="text" class="form-control mb-3" name="no_transaksi" value="{{ date("YmdGi$max") }}"
                            readonly>

                        <label for="floatingInput">Name</label>
                    </div>

                    <div class="form-floating col-6">
                        <select name="id_anggota" id="id_anggota" class="form-control mb-3">
                            <option selected hidden>Pilih Anggota</option>
                            @foreach ($anggota as $a)
                                <option value="{{ $a->id }}">{{ $a->nama_anggota }}</option>
                            @endforeach
                        </select>
                        <label for="floatingInput">Name</label>
                    </div>
                </div>
                <div class="table-responsive text-nowrap">
                    <table class="table table-hover" id="example">
                        <thead>
                            <tr>
                                <th>NO</th>
                                <th>Buku</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>
                                    <select name="" id="">
                                        @foreach ($buku as $buku)

                                        <option value="{{$buku}}"></option>
                                        @endforeach
                                </select></td>
                                <td></td>
                            </tr>

                        </tbody>
                    </table>
                </div>
            </div>
            <div class="card-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>

        </form>
    </div>
@endsection
