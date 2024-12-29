@extends('layouts.admin')

@section('content')
    <div class="content-wrapper" style="background-image: url('assets/images/delusiback.jpg'); background-size: cover;">
        <h4>Data jenazah</h4>
        <a href="/jenazah-tambah"><button class="btn btn-info">Tambah Data</button></a>

        <div class="row">
            <div class="col-12 grid-margin stretch-card">
                <div class="card corona-grey-card">
                    <div class="card-body py-0 px-0 px-sm-3">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Nomer</th>
                                    <th>Nyamanah jenazah</th>
                                    <th>alamatdhe</th>
                                    <th>aghemana</th>
                                    <th>kennengan ekobhuraghi</th>
                                    <th>aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($jenazah as $key)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $key->nama_jenazah }}</td>
                                        <td>{{ $key->alamat }}</td>
                                        <td>{{ $key->agama }}</td>
                                        <td>{{ $key->kuburan->nama_kuburan }}</td>
                                        <td>
                                            <a href="/jenazah/{{ $key->id }}/edit" class="btn btn-info">obe</a>
                                            <a href="/jenazah/{{ $key->id }}/hapus" class="btn btn-danger"
                                                onclick="return confirm('ongghu ngapusse data kuburan rea?');">bueng</a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
