<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class KeranjangBelanjaController extends Controller
{
    // menampilkan data belanjaan
    public function index()
    {
        $keranjangbelanja = DB::table('keranjangbelanja')->get();

        foreach ($keranjangbelanja as $k) {
            // Hitung Total
            $k->total = $k->Jumlah * $k->Harga;

            // Format pemisah ribuan
            $k->harga_format = number_format($k->Harga, 0, ',', '.');
            $k->total_format = number_format($k->total, 0, ',', '.');
        }

        return view('keranjangbelanja.index', [
            'keranjangbelanja' => $keranjangbelanja
        ]);
    }

    // menampilkan form tambah
    public function tambah()
    {
        return view('keranjangbelanja.tambah');
    }

    // insert data ke database
    public function store(Request $request)
    {
        DB::table('keranjangbelanja')->insert([
            'KodeBarang' => $request->KodeBarang,
            'Jumlah' => $request->Jumlah,
            'Harga' => $request->Harga,
        ]);

        return redirect('/keranjangbelanja');
    }

    // membatalkan pembelian
    public function batal($id)
    {
        DB::table('keranjangbelanja')
            ->where('ID', $id)
            ->delete();

        return redirect('/keranjangbelanja');
    }
}
