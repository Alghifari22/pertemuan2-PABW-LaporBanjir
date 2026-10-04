@extends('layouts.app')

@section('title', 'Konfirmasi Laporan')

@section('content')
<div class="w-100 d-flex justify-content-center align-items-center">
    <div class="row justify-content-center" style="width: 1000px;">
        <div class="col-md-8">

            <x-alert>Laporan berhasil dikirim.</x-alert>

            <div class="card shadow-sm">
                <div class="card-body text-center">

                    <h3 class="mb-3">Laporan Berhasil Dikirim</h3>
                    <p class="text-muted">Nama Pelapor: {{ $name}}</p>
                    <p class="text-muted">Lokasi: {{ $lokasi }}</p>
                    <p class="text-muted">Tinggi Genangan: {{ $tinggi }}</p>

                    <p class="text-muted">Terima kasih telah melaporkan kondisi genangan.</p>

                    <a href="{{ route('laporan.index') }}" class="btn btn-primary">
                        Lihat Daftar Laporan
                    </a>

                    <a href="{{ route('laporan.form') }}" class="btn btn-outline-secondary">
                        Buat Laporan Baru
                    </a>
                </div>
            </div>

        </div>
    </div>
</div>
@endsection
