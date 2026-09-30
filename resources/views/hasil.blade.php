<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hasil Laporan</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css"
          rel="stylesheet"
          integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB"
          crossorigin="anonymous">
</head>

<body class="bg-light">
    <div class="container min-vh-100 d-flex justify-content-center align-items-center">
        <div class="card shadow border-0" style="width: 450px;">
            <div class="card-header bg-primary text-white text-center py-3">
                <h4 class="mb-0">Hasil Laporan</h4>
            </div>

            <div class="card-body p-4">

                <div class="mb-3">
                    <h6 class="text-muted mb-1">Nama Pelapor</h6>
                    <p class="fs-5 mb-0">{{ $name }}</p>
                </div>

                <hr>

                <div class="mb-3">
                    <h6 class="text-muted mb-1">Lokasi Kejadian</h6>
                    <p class="fs-5 mb-0">{{ $lokasi }}</p>
                </div>

                <hr>

                <div>
                    <h6 class="text-muted mb-1">Tinggi Genangan Air</h6>
                    <p class="fs-5 mb-0">{{ $tinggi }}</p>
                </div>

            </div>

            <div class="card-footer">
                <a href="{{ route('base.form') }}" type="button" class="btn btn-primary">Kembali</a>
            </div>
        </div>
    </div>
</body>
</html>
