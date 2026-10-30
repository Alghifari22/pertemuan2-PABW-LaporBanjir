@extends('layouts.app')

@section('title', 'Profil Petugas')

@section('content')
    <div class="row justify-content-center">
        <div class="col-md-8 col-lg-6">
            <div class="card shadow-sm border-0">
                <div class="card-header bg-white fw-bold">Profil Petugas</div>
                <div class="card-body">
                    <dl class="row mb-0">
                        <dt class="col-sm-4">Nama</dt><dd class="col-sm-8">{{ Auth::user()->name }}</dd>
                        <dt class="col-sm-4">Email</dt><dd class="col-sm-8">{{ Auth::user()->email }}</dd>
                        <dt class="col-sm-4">Akun dibuat</dt><dd class="col-sm-8">{{ Auth::user()->created_at?->format('d M Y, H:i') ?? '—' }}</dd>
                    </dl>
                </div>
            </div>
        </div>
    </div>
@endsection
