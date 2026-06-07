@extends('template')

@section('title', 'Data Mobil')

@section('konten')

<a href="/mobil/tambah" class="btn btn-primary mb-3">

    + Tambah Mobil Baru

</a>

<table class="table table-striped table-bordered">

    <thead class="table-dark">

        <tr>

            <th>Merk Mobil</th>

            <th>Stock Mobil</th>

            <th>Tersedia</th>

            <th>Opsi</th>

        </tr>

    </thead>

    <tbody>

        @foreach($mobil as $m)

        <tr>

            <td>

                {{ $m->merkmobil }}

            </td>

            <td>

                {{ $m->stockmobil }}

            </td>

            <td>

                @if($m->tersedia == 'Y')

                    <span class="badge bg-success">

                        Tersedia

                    </span>

                @else

                    <span class="badge bg-danger">

                        Tidak Tersedia

                    </span>

                @endif

            </td>

            <td>

                <a
                    href="/mobil/edit/{{ $m->kodemobil }}"
                    class="btn btn-warning btn-sm">

                    Edit

                </a>

                <a
                    href="/mobil/hapus/{{ $m->kodemobil }}"
                    class="btn btn-danger btn-sm"
                    onclick="return confirm('Yakin hapus data ini?')">

                    Hapus

                </a>

            </td>

        </tr>

        @endforeach

    </tbody>

</table>

{{ $mobil->links() }}

@endsection
