@extends('template')

@section('title', 'Nilai Peserta')

@section('konten')

<a href="/eas/tambah" class="btn btn-primary mb-3">
    + Tambah Peserta Baru
</a>

<table class="table table-striped table-bordered">
    <thead class="table-dark">
        <tr>
            <th>ID</th>
            <th>No Peserta</th>
            <th>Nilai Teori</th>
            <th>Nilai Praktek</th>
            <th>Rata-rata</th>
            <th>Status</th>
        </tr>
    </thead>
    <tbody>
        @foreach($nilai as $n)
        <tr>
            <td>{{ $n->ID }}</td>
            <td>{{ $n->nopeserta }}</td>
            <td>{{ $n->nilaiteori }}</td>
            <td>{{ $n->nilaipraktek }}</td>
            <td>{{ $n->ratarata }}</td>
            <td
                @if($n->status == 'Lulus')
                    style="background-color: green; color: white;"
                @else
                    style="background-color: red; color: white;"
                @endif
            >
                {{ $n->status }}
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

@endsection
