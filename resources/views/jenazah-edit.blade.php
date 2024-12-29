@extends('layouts.admin')

@section('content')
    <form class="card" action="{{ route('jenazah.update', $detail->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="card-header">
            <h4>Edit Daftar Jenazah</h4>
        </div>
        <div class="card-body">
            <div class="mb-3">
                <label for="nama_jenazah" class="form-label">Nama Jenazah</label>
                <input type="text" class="form-control" value="{{ $detail->nama_jenazah }}" name="nama_jenazah" id="nama_jenazah" placeholder="Nama Jenazah">
            </div>
            <div class="mb-3">
                <label for="alamat" class="form-label">Alamat</label>
                <input type="text" class="form-control" value="{{ $detail->alamat }}" name="alamat" id="alamat" placeholder="Alamat">
            </div>
            <div class="mb-3">
                <label for="agama" class="form-label">Agama</label>
                <input type="text" class="form-control" value="{{ $detail->agama }}" name="agama" id="agama" placeholder="Agama">
            </div>
            <div class="mb-3">
                <label for="lokasi_dikubur" class="form-label">Lokasi Dikubur</label>
                <input type="text" class="form-control" value="{{ $detail->lokasi_dikubur }}" name="lokasi_dikubur" id="lokasi_dikubur" placeholder="Lokasi Dikubur">
            </div>
        </div>
        <div class="card-footer">
            <button class="btn btn-primary" type="submit">Edit</button>
            <a href="/jenazah" class="btn btn-danger">Kembali</a>
        </div>
    </form>
@endsection
