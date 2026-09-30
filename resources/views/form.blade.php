<!DOCTYPE html>
<html lang="en">
<head>
    <title>Lapor Banjir</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</head>
<body class="bg-light">
     <div class="container min-vh-100 d-flex justify-content-center align-items-center">
        <div class="card shadow border-0" style="width: 500px;">
            <div class="card-body p-4">

                <h1 class="mt-4">Lapor Banjir</h1>
                <form action="/proses" method="POST">
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
</body>
</html>