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
                    <label for="nama_pelapor" class="form-label">Nama Pelapor</label>
                    <input type="text" class="form-control" id="nama_pelapor" name="nama_pelapor">
                </div>

                <div class="mb-3">
                    <label for="lokasi" class="form-label">Lokasi Kejadian</label>
                    <input type="text" class="form-control" id="lokasi" name="lokasi">
                </div>

                <div class="mb-3">
                    <label for="tinggi_genangan" class="form-label">Tinggi Genangan Air</label>
                    <input type="number" class="form-control" id="tinggi_genangan" name="tinggi_genangan">
                </div>

                <div class="mb-3">
                    <label for="tanggal_kejadian" class="form-label">Tanggal Kejadian</label>
                    <input type="date" class="form-control" id="tanggal_kejadian" name="tanggal_kejadian">
                </div>

                <button type="submit" class="btn btn-primary">Kirim Laporan</button>
            </form>
        </div>
    </div>
</div>
@endsection
