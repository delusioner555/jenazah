<?php

namespace App\Http\Controllers;
use App\Models\jenazahModel;
use App\Models\kuburanModel;
use Illuminate\Http\Request;

class JenazahController extends Controller
{
    public function index()
    {
        $data = [
            'jenazah' => jenazahModel::get()
        ];
        return view('jenazah', $data);
    }

    public function tambah()
    {
        $data=([
            'kuburan' => kuburanModel::all(),
        ]);
        return view('jenazah-tambah',$data);
    }

    public function action_tambah(Request $request)
    {
        $nama_jenazah = $request->nama_jenazah;
        $alamat = $request->Alamat;
        $agama = $request->agama;
        $lokasi_dikubur = $request->lokasi_dikubur;

        $jenazah = new jenazahModel();
        $jenazah->nama_jenazah = $nama_jenazah;
        $jenazah->alamat = $alamat;
        $jenazah->agama = $agama;
        $jenazah->lokasi_dikubur = $lokasi_dikubur;

        $jenazah->save();
        return redirect('/jenazah')->with('success', 'jenazah berhasil didata');
    }

    public function edit($id)
    {
        $data = [
            'detail' => jenazahModel::findOrFail($id)
        ];

        return view('jenazah-edit', $data);
    }

    public function action_edit(Request $request, $id)
    {
        $jenazah = jenazahModel::findOrFail($id);

        $request->validate([
            'nama_jenazah' => 'required|string|max:255',
            'alamat' => 'required|string|max:255',
            'agama' => 'required|string|max:50',
            'lokasi_dikubur' => 'required|string|max:255',
        ]);

        $jenazah->update($request->all());

        return redirect()->route('jenazah.index')->with('success', 'Data jenazah berhasil diubah');
    }



    public function hapus($id)
    {
        $jenazah = jenazahModel::findOrFail($id);
        $jenazah->delete();

        return redirect('/jenazah')->with('success', 'data jenazah berhasil dihapus');
    }
}
