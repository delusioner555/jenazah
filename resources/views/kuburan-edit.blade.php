@extends('layouts.admin')

@section('content')
<div class="content-wrapper" style="background-image: url('assets/images/delusiback.jpg'); background-size: cover;">
    <h4>obe datana kobhuren</h4>
    <a href="/kuburan-tambah"><button class="btn btn-info">Nambe datanah kobhuren</button></a>
    <div class="row">
        <div class="col-12 grid-margin stretch-card">
            <div class="card corona-grey-card">
                <div class="card-body py-0 px-0 px-sm-3">
                    <form action="{{ route('kuburan.update', $detail->id) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="mb-3">
                            <label for="nama_kuburan" class="form-label">Nyama Kobhuren</label>
                            <input type="text" class="form-control" value="{{ $detail->nama_kuburan }}" name="nama_kuburan" id="nama_kuburan" placeholder="Nyamana Kobhuranna">
                        </div>
                        <div class="mb-3">
                            <label for="lokasi" class="form-label">Lokasina</label>
                            <input type="text" class="form-control" value="{{ $detail->lokasi }}" name="lokasi" id="lokasi" placeholder="Lokasina esabek edimma">
                        </div>
                        <div class="mb-3">
                            <label for="status" class="form-label">Status</label>
                            <input type="text" class="form-control" value="{{ $detail->status }}" name="status" id="status" placeholder="Statusse apa anyar apa abit">
                        </div>
                        <button class="btn btn-info" type="submit">Edit</button>
                        <a href="/kuburan" class="btn btn-danger">Kembali</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
