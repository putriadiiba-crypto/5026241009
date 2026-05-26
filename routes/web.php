<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DosenController;
use App\Http\Controllers\PegawaiController;

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
