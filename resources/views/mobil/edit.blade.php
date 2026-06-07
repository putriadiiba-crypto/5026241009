@extends('template')

@section('title', 'Edit Data Mobil')

@section('konten')

<a href="/mobil" class="btn btn-secondary mb-4">

    Kembali

</a>

@foreach($mobil as $m)

<div class="card">

    <div class="card-header">

        Form Edit Data Mobil

    </div>

    <div class="card-body">

        <form action="/mobil/update" method="post">

            {{ csrf_field() }}

            <input
                type="hidden"
                name="id"
                value="{{ $m->kodemobil }}">

            <div class="row mb-3">

                <label class="col-sm-2 col-form-label">

                    Merk Mobil

                </label>

                <div class="col-sm-10">

                    <input
                        type="text"
                        name="merkmobil"
                        class="form-control"
                        required
                        value="{{ $m->merkmobil }}">

                </div>

            </div>

            <div class="row mb-3">

                <label class="col-sm-2 col-form-label">

                    Stock Mobil

                </label>

                <div class="col-sm-10">

                    <input
                        type="number"
                        name="stockmobil"
                        class="form-control"
                        required
                        value="{{ $m->stockmobil }}">

                </div>

            </div>

            <div class="row mb-3">

                <label class="col-sm-2 col-form-label">

                    Tersedia

                </label>

                <div class="col-sm-10">

                    <select
                        name="tersedia"
                        class="form-select">

                        <option
                            value="Y"
                            {{ $m->tersedia == 'Y' ? 'selected' : '' }}>

                            Tersedia

                        </option>

                        <option
                            value="N"
                            {{ $m->tersedia == 'N' ? 'selected' : '' }}>

                            Tidak Tersedia

                        </option>

                    </select>

                </div>

            </div>

            <div class="row">

                <div class="offset-sm-2 col-sm-10">

                    <input
                        type="submit"
                        value="Simpan Data"
                        class="btn btn-primary">

                </div>

            </div>

        </form>

    </div>

</div>

@endforeach

@endsection
