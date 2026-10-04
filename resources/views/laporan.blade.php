@extends('layouts.app')

@section('title', 'Daftar Laporan')

@section('content')
<div class="container-fluid px-4 px-lg-5 py-4">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <div>
            <h2 class="fw-bold mb-1">Daftar Laporan</h2>
            <p class="text-muted mb-0">
                Laporan kondisi genangan yang telah dikirim.
            </p>
        </div>

        <a href="{{ route('laporan.form') }}" class="btn btn-primary">
            + Buat Laporan
        </a>
    </div>

    @forelse ($laporan as $item)
        <div class="mb-3">
            @include('partials.laporan-card', ['laporan' => $item,])
        </div>
    @empty
        <div class="card border-0 shadow-sm">
            <div class="card-body text-center py-5">
                <h5 class="mb-2">Belum Ada Laporan</h5>

                <p class="text-muted mb-4">
                    Belum ada laporan genangan yang tersedia.
                </p>

                <a href="{{ route('laporan.form') }}" class="btn btn-primary">
                    Buat Laporan
                </a>
            </div>
        </div>
    @endforelse
</div>

@endsection
