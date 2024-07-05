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
                        <select name="id_anggota" id="id_anggota" class="form-control mb-3" required>
                            <option selected hidden value="">Pilih Anggota</option>
                            @foreach ($anggota as $a)
                                <option value="{{ $a->id }}">{{ $a->nama_anggota }}</option>
                            @endforeach
                        </select>
                        <label for="floatingInput">Name</label>
                    </div>
                </div>
                <div class="table-responsive text-nowrap">
                    <div align="right">
                        <button type="button" class="btn btn-primary btnadd" onclick="btnadd()">Tambah</a>
                    </div>
                    <table class="table table-hover" id="example">
                        <thead>
                            <tr>
                                <th>NO</th>
                                <th>Buku</th>
                                <th>Tanggal Kembali Buku</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>

                            <tr class="list1">

                                <td>1</td>
                                <td>
                                    <select name="id_buku" id="" class="form-control" required>
                                        <option selected value="" hidden>Pilih Buku</option>
                                        @foreach ($buku as $bukus)
                                            <option value="{{ $bukus->id }}">{{ $bukus->nama_buku }}</option>
                                        @endforeach
                                    </select>
                                </td>
                                <td><input type="date" name="tgl_kembali_buku" id="" class="form-control"></td>
                                <td>
                                    <div class="form-floating">


                                        <input type="text" class="form-control" name="keterangan" placeholder="">

                                        <label for="floatingInput">Keterangan</label>
                                    </div>
                                </td>
                                <td><button class="btn btn-danger">Hapus</button></td>
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
    <script>
        let i = 1


        function btnadd() {
            i += 1
            let TR = "<tr class='list" + i + "'>"
            TR += "<td>" + i + "</td>"
            TR +=
                "<td><select name='id_buku' id='' class='form-control' required><option selected value='' hidden>Pilih Buku</option>"
            @foreach ($buku as $bukus)
                TR += "<option value='{{ $bukus->id }}'>{{ $bukus->nama_buku }}</option>"
            @endforeach
            TR += " <td><input type='date' name='tgl_kembali_buku' id='' class='form-control'></td>"
            TR += `<td><div class="form-floating">
                        <input type="text" class="form-control mb-3" name="keterangan" placeholder="">
                        <label for="floatingInput">Keterangan</label>
                    </div></td>`
            TR += "</td><td><button class='btn btn-danger'>Hapus</button></td></tr>"
            $('tbody').append(TR);
        };
    </script>
@endsection
