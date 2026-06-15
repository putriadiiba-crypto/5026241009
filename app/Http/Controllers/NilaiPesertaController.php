<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class NilaiPesertaController extends Controller
{
    public function index()
    {
        $nilai = DB::table('nilai_peserta')->get();

        foreach ($nilai as $n) {
            $n->ratarata = ($n->nilaiteori + $n->nilaipraktek) / 2;

            if ($n->ratarata >= 75) {
                $n->status = 'Lulus';
            } else {
                $n->status = 'Gagal';
            }
        }

        return view('eas.index', ['nilai' => $nilai]);
    }

    public function tambah()
    {
        return view('eas.tambah');
    }

    public function store(Request $request)
    {
        DB::table('nilai_peserta')->insert([
            'nopeserta' => $request->nopeserta,
            'nilaiteori' => $request->nilaiteori,
            'nilaipraktek' => $request->nilaipraktek,
        ]);

        return redirect('/eas');
    }
}
