<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MobilController extends Controller
{
    // menampilkan data mobil
    public function index()
    {
        $mobil = DB::table('mobil')->paginate(10);

        return view('mobil.index', [
            'mobil' => $mobil
        ]);
    }

    // menampilkan form tambah mobil
    public function tambah()
    {
        return view('mobil.tambah');
    }

    // insert data mobil ke database
    public function store(Request $request)
    {
        DB::table('mobil')->insert([

            'merkmobil' => $request->merkmobil,
            'stockmobil' => $request->stockmobil,
            'tersedia' => $request->tersedia

        ]);

        return redirect('/mobil');
    }

    // menampilkan form edit
    public function edit($id)
    {
        $mobil = DB::table('mobil')
            ->where('kodemobil', $id)
            ->get();

        return view('mobil.edit', [
            'mobil' => $mobil
        ]);
    }

    // update data mobil
    public function update(Request $request)
    {
        DB::table('mobil')
            ->where('kodemobil', $request->id)
            ->update([

                'merkmobil' => $request->merkmobil,
                'stockmobil' => $request->stockmobil,
                'tersedia' => $request->tersedia

            ]);

        return redirect('/mobil');
    }

    // hapus data mobil
    public function hapus($id)
    {
        DB::table('mobil')
            ->where('kodemobil', $id)
            ->delete();

        return redirect('/mobil');
    }
}
