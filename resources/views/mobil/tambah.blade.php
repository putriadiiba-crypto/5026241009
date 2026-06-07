@extends('template')

@section('title', 'Tambah Data Mobil')

@section('konten')

<a href="/mobil" class="btn btn-secondary mb-4">

    Kembali

</a>

<div class="card">

    <div class="card-header">

        Form Tambah Data Mobil

    </div>

    <div class="card-body">

        <form action="/mobil/store" method="post">

            {{ csrf_field() }}

            <div class="row mb-3">

                <label class="col-sm-2 col-form-label">

                    Merk Mobil

                </label>

                <div class="col-sm-10">

                    <input
                        type="text"
                        name="merkmobil"
                        class="form-control"
                        required>

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
                        required>

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

                        <option value="Y">

                            Tersedia

                        </option>

                        <option value="N">

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

@endsection
