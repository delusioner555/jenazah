@extends('layouts.admin')

@section('content')
    <div class="content-wrapper" style="background-image: url('assets/images/delusiback.jpg'); background-size: cover;">
        <h4>Nambe datanah jenazah anyar</h4>
        <form class="card" action="/jenazah/tambah" method="POST">
            @csrf
            <div class="card-header">
                <div class="row">
                    <div class="col-12 grid-margin stretch-card">
                        <div class="card corona-grey-card">
                            <div class="card-body py-0 px-0 px-sm-3">
                                <div class="card-header">
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="mb-3">
                                    <label for="nama_jenazah" class="form-label">Nyamah jenazah anyar</label>
                                    <input type="text" class="form-control" name="nama_jenazah" id="nama_jenazah"
                                        placeholder="Nama Jenazah">
                                </div>
                                <div class="mb-3">
                                    <label for="alamat" class="form-label">derih</label>
                                    <input type="text" class="form-control" name="alamat" id="alamat"
                                        placeholder="Alamat">
                                </div>
                                <div class="mb-3">
                                    <label for="agama" class="form-label">Aghemana</label>
                                    <input type="text" class="form-control" name="agama" id="agama"
                                        placeholder="Agama">
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">lokasi ekobhuraghi</label>
                                    <select class="form-control" name="lokasi_dikubur" aria-label="Default select example">
                                        <option selected>pilih</option>
                                        @foreach ($kuburan as $item)
                                            <option value="{{ $item->id }}">{{ $item->nama_kuburan }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="card-footer">
                                <button class="btn btn-info" type="submit">Sempen</button>
                                <a href="/jenazah" class="btn btn-danger">Kloar</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </div>
    </form>
@endsection
