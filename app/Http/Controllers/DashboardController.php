<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\kuburanModel;
use App\Models\jenazahModel;

class DashboardController extends Controller
{
    public function index()
    {


        $jumlahJenazah = jenazahModel::count();
        $totalKuburan = kuburanModel::count();
        $jumlahStatusLamaBaru = kuburanModel::whereIn('status', ['lama', 'baru'])->count(); 

        return view('dashboard', compact('jumlahJenazah', 'totalKuburan', 'jumlahStatusLamaBaru'));
    }
}
