@extends('layouts.admin') <!-- Sesuaikan dengan layout utama Anda -->

@section('content')
    <div class="content-wrapper" style="background-image: url('assets/images/delusiback.jpg'); background-size: cover;">
        <h4>Data kuburan</h4>
        <a href="/kuburan-tambah"><button class="btn btn-info">Nambe datanah kobhuren</button></a>
        <div class="row">
            <div class="col-12 grid-margin stretch-card">
                <div class="card corona-grey-card">
                    <div class="card-body py-0 px-0 px-sm-3">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>nyama_kobhuren</th>
                                    <th>lokasina</th>
                                    <th>statusse</th>
                                    <th>klakoan</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($kuburan as $key)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $key->nama_kuburan }}</td>
                                        <td>{{ $key->lokasi }}</td>
                                        <td>{{ $key->status }}</td>
                                        <td>
                                            <a href="/kuburan/{{ $key->id }}/edit" class="btn btn-info">obe</a>
                                            <a href="/kuburan/{{ $key->id }}/hapus" class="btn btn-danger"
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
