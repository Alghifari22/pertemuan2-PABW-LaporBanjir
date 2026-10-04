@extends('layouts.app')

@section('title', 'Form Laporan')

@section('content')
<div class="w-100 d-flex justify-content-center align-items-center">
    <div class="card shadow border-0" style="width: 500px;">
        <div class="card-body p-4">

            <h1 class="mt-4">Lapor Banjir</h1>
            <form action="{{ route('laporan.store') }}" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="nama" class="form-label">Nama Pelapor</label>
                    <input type="text" class="form-control" id="nama" name="nama">

                </div>

                <div class="mb-3">
                    <label for="lokasi" class="form-label">Lokasi Kejadian</label>
                    <input type="text" class="form-control" id="lokasi" name="lokasi">
                </div>

                <div class="mb-3">
                    <label for="tinggi" class="form-label">Tinggi Genangan Air</label>
                    <input type="number" class="form-control" id="tinggi" name="tinggi">
                </div>

                <button type="submit" class="btn btn-primary">Kirim Laporan</button>
            </form>
        </div>
    </div>
</div>
@endsection
