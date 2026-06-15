<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DosenController;
use App\Http\Controllers\PegawaiController;
use App\Http\Controllers\MobilController;

// Controller Nilai Kuliah
use App\Http\Controllers\NilaiKuliahController;

// Controller Keranjang Belanja
use App\Http\Controllers\KeranjangBelanjaController;

// Controller Siswa
use App\Http\Controllers\SiswaController;

//Controller Nilai Peserta
use App\Http\Controllers\NilaiPesertaController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('halo', function () {
    return "<h1> Halo, Selamat datang</h1> di tutorial laravel www.malasngoding.com";
});

Route::get('blog', function () {
    return view('blog');
});

Route::get('pert5', function () {
    return view('pert5');
});

Route::get('dosen', [DosenController::class, 'index']);
Route::get('biodata', [DosenController::class, 'biodata']);

Route::get('/intro', function () {
    return view('intro');
});

Route::get('/news', function () {
    return view('news');
});

Route::get('/contoh', function () {
    return view('contoh');
});

Route::get('/responsive', function () {
    return view('responsive');
});

Route::get('/5026241009', function () {
    return view('5026241009');
});

Route::get('/pertemuan5', function () {
    return view('pertemuan5');
});

Route::get('/linktree', function () {
    return view('linktree');
});

Route::get('/main', function () {
    return view('main');
});

// Route CRUD Pegawai
Route::get('/pegawai', [PegawaiController::class, 'index']);
Route::get('/pegawai/tambah', [PegawaiController::class, 'tambah']);
Route::post('/pegawai/store', [PegawaiController::class, 'store']);
Route::get('/pegawai/edit/{id}', [PegawaiController::class, 'edit']);
Route::post('/pegawai/update', [PegawaiController::class, 'update']);
Route::get('/pegawai/hapus/{id}', [PegawaiController::class, 'hapus']);

// Route CRUD Mobil
Route::get('/mobil', [MobilController::class, 'index']);
Route::get('/mobil/tambah', [MobilController::class, 'tambah']);
Route::post('/mobil/store', [MobilController::class, 'store']);
Route::get('/mobil/edit/{id}', [MobilController::class, 'edit']);
Route::post('/mobil/update', [MobilController::class, 'update']);
Route::get('/mobil/hapus/{id}', [MobilController::class, 'hapus']);

// Route CRUD Nilai Kuliah
Route::get('/nilaikuliah', [NilaiKuliahController::class, 'index']);
Route::get('/nilaikuliah/tambah', [NilaiKuliahController::class, 'tambah']);
Route::post('/nilaikuliah/store', [NilaiKuliahController::class, 'store']);
Route::get('/nilaikuliah/edit/{id}', [NilaiKuliahController::class, 'edit']);
Route::post('/nilaikuliah/update', [NilaiKuliahController::class, 'update']);
Route::get('/nilaikuliah/hapus/{id}', [NilaiKuliahController::class, 'hapus']);

// Route CRUD Keranjang Belanja
Route::get('/keranjangbelanja', [KeranjangBelanjaController::class, 'index']);
Route::get('/keranjangbelanja/tambah', [KeranjangBelanjaController::class, 'tambah']);
Route::post('/keranjangbelanja/store', [KeranjangBelanjaController::class, 'store']);
Route::get('/keranjangbelanja/batal/{id}', [KeranjangBelanjaController::class, 'batal']);

// Route CRUD Siswa
Route::get('/siswa', [SiswaController::class, 'index'])->name('siswa.index');
Route::get('/siswa/create', [SiswaController::class, 'create'])->name('siswa.create');
Route::post('/siswa', [SiswaController::class, 'store'])->name('siswa.store');
Route::get('/siswa/{nrp}/edit', [SiswaController::class, 'edit'])->name('siswa.edit');
Route::put('/siswa/{nrp}', [SiswaController::class, 'update'])->name('siswa.update');
Route::delete('/siswa/{nrp}', [SiswaController::class, 'destroy'])->name('siswa.destroy');

//ROUTE CRUD Nilai Peserta
Route::get('/eas', [NilaiPesertaController::class, 'index']);
Route::get('/eas/tambah', [NilaiPesertaController::class, 'tambah']);
Route::post('/eas/store', [NilaiPesertaController::class, 'store']);


