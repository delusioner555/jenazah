<?php

namespace App\Http\Controllers;
use App\Models\KuburanModel;
use Illuminate\Http\Request;

class KuburanController extends Controller
{
    public function index()
    {
        $data = [
            'kuburan' => KuburanModel::get()
        ];
        return view('kuburan', $data);
    }

    public function tambah()
    {
        $data=([
            'kuburan' => KuburanModel::all()
        ]);
        return view('kuburan-tambah', $data);
    }

    public function action_tambah(Request $request)
    {
        $kuburan = new KuburanModel();
        $kuburan->nama_kuburan = $request->nama_kuburan;
        $kuburan->lokasi = $request->lokasi;
        $kuburan->status = $request->status;

        $kuburan->save();
        return redirect('/kuburan')->with('success', 'Makam berhasil ditambahkan');
    }

    public function edit($id)
    {
        $data = [
            'detail' => KuburanModel::findOrFail($id)
        ];

        return view('kuburan-edit', $data);
    }

   public function update(Request $request, $id)
{
    $kuburan = KuburanModel::findOrFail($id);

    $request->validate([
        'nama_kuburan' => 'required|string|max:255',
        'lokasi' => 'required|string|max:255',
        'status' => 'required|string|max:255',
    ]);

    $kuburan->update($request->all());

    return redirect()->route('kuburan.index')->with('success', 'Data kuburan berhasil diperbarui.');
}

    public function hapus($id)
    {
        $kuburan = KuburanModel::findOrFail($id);
        $kuburan->delete();

        return redirect('/kuburan')->with('success', 'Kuburan berhasil dihapus');
    }
}
