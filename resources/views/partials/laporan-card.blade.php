<div class="card shadow-sm mb-3">
    <div class="card-body">

        <h5 class="card-title">
            {{ $laporan['lokasi'] }}
        </h5>

        <p class="mb-2">
            <strong>Pelapor:</strong>
            {{ $laporan['nama_pelapor'] }}
        </p>

        <p class="mb-2">
            <strong>Tinggi Genangan:</strong>
            {{ $laporan['tinggi_genangan'] }} cm
        </p>

        <p class="mb-2">
            <strong>Status:</strong>

            @if ($laporan['tinggi_genangan'] < 30)
                <span class="badge text-bg-warning">
                    Waspada
                </span>
            @elseif ($laporan['tinggi_genangan'] <= 70)
                <span class="badge text-bg-info">
                    Siaga
                </span>
            @else
                <span class="badge text-bg-danger">
                    Awas
                </span>
            @endif
        </p>
    </div>
</div>
