<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\KuburanController;
use App\Http\Controllers\JenazahController;
use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;

Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login', [LoginController::class, 'login'])->name('login');

Route::get('/', function () {
    return redirect()->route('login');
})->name('home');
Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard.index')->middleware('auth');

Route::get('/kuburan', [KuburanController::class, 'index'])->name('kuburan.index')->middleware('auth');
Route::get('/kuburan-tambah', [KuburanController::class, 'tambah'])->name('kuburan.tambah')->middleware('auth');
Route::post('/kuburan-tambah', [KuburanController::class, 'action_tambah'])->name('kuburan.action_tambah')->middleware('auth');
Route::get('/kuburan/{id}/edit', [KuburanController::class, 'edit'])->name('kuburan.edit')->middleware('auth');
Route::put('/kuburan/{id}', [KuburanController::class, 'update'])->name('kuburan.update')->middleware('auth');
Route::get('/kuburan/{id}/hapus', [KuburanController::class, 'hapus'])->name('kuburan.hapus')->middleware('auth');

Route::get('/jenazah', [JenazahController::class, 'index'])->name('jenazah.index')->middleware('auth');
Route::get('/jenazah-tambah', [JenazahController::class, 'tambah'])->name('jenazah.tambah')->middleware('auth'); // Renamed for consistency
Route::post('/jenazah/tambah', [JenazahController::class, 'action_tambah'])->name('jenazah.action_tambah')->middleware('auth');
Route::get('/jenazah/{id}/edit', [JenazahController::class, 'edit'])->name('jenazah.edit')->middleware('auth');
Route::put('/jenazah/{id}', [JenazahController::class, 'action_edit'])->name('jenazah.update')->middleware('auth');
Route::get('/jenazah/{id}/hapus', [JenazahController::class, 'hapus'])->name('jenazah.hapus')->middleware('auth');

// Registration Routes
Route::get('/register', [LoginController::class, 'showRegistrationForm'])->name('register');
Route::post('/register', [LoginController::class, 'register'])->name('register');
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');
