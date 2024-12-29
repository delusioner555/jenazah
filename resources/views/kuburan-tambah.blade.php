@extends('layouts.admin')

@section('content')
    <div class="content-wrapper" style="background-image: url('assets/images/delusiback.jpg'); background-size: cover;">
        <h4>Nambei Kobhuren</h4>
        <form class="card" action="/kuburan-tambah" method="POST">
            @csrf
            <div class="row">
                <div class="col-12 grid-margin stretch-card">
                    <div class="card corona-grey-card">
                        <div class="card-body py-0 px-0 px-sm-3">
                            <div class="card-header">
                            </div>
                            <div class="card-body">
                                <div class="mb-3">
                                    <label for="nama_kuburan" class="form-label">Nyamana kobhuren</label>
                                    <input type="text" class="form-control" name="nama_kuburan" id="nama_kuburan"
                                        placeholder="Nyamana kobhurenna">
                                </div>
                                <div class="mb-3">
                                    <label for="lokasi" class="form-label">Lokasina</label>
                                    <input type="text" class="form-control" name="lokasi" id="lokasi"
                                    placeholder="Lokasina esabe' edimma">
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">statusse</label>
                                    <select class="form-control" name="status" aria-label="Default select example">
                                        <option selected>pele sala settonga</option>
                                        <option value='baru'>lama</option>
                                        <option value='lama'>baru</option>
                                    </select>
                                </div>
                            </div>
                            <div class="card-footer">
                                <button class="btn btn-info" type="submit">Sempen</button>
                                <a href="/kuburan" class="btn btn-danger">kloar</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </div>
    </form>
@endsection
