@extends('template')

@section('title', 'Keranjang Belanja')

@section('konten')

<a href="/keranjangbelanja/tambah" class="btn btn-primary mb-3">
    + Beli
</a>

<table class="table table-striped table-bordered">
    <thead class="table-dark">
        <tr>
            <th>Kode Pembelian</th>
            <th>Kode Barang</th>
            <th>Jumlah Pembelian</th>
            <th>Harga per item</th>
            <th>Total</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach($keranjangbelanja as $k)
        <tr>
            <td>{{ $k->ID }}</td>
            <td>{{ $k->KodeBarang }}</td>
            <td>{{ $k->Jumlah }}</td>
            <td>{{ $k->harga_format }}</td>
            <td>{{ $k->total_format }}</td>
            <td>
                <a href="/keranjangbelanja/tambah"
                    class="btn btn-warning btn-sm">
                    Beli
                </a>
                <a href="/keranjangbelanja/batal/{{ $k->ID }}"
                    class="btn btn-danger btn-sm"
                    onclick="return confirm('Yakin batalkan pembelian ini?')">
                    Batal
                </a>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

@endsection
