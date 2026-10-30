<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>@yield('title', 'Sistem Laporan Genangan')</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        html, body { min-height: 100%; }
        .auth-page { min-height: 100%; width: 100%; display: flex; align-items: center; justify-content: center; }
        .auth-card { width: 100%; max-width: 540px; border: 0; border-radius: 1rem; box-shadow: 0 1rem 2.5rem rgba(15, 45, 75, .12); }
        .auth-card .card-header { background: #fff; border-bottom: 0; padding: 1.5rem 1.75rem 0; font-size: 1.5rem; font-weight: 700; }
        .auth-card .card-body { padding: 1.5rem 1.75rem 1.75rem; }
    </style>
</head>

<body class="bg-light d-flex flex-column min-vh-100">

    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <div class="container">
            <a class="navbar-brand" href="{{ route('laporan.form') }}">
                Laporan Genangan
            </a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="{{ route('laporan.form') }}">Form Laporan</a></li>
                    @guest
                        <li class="nav-item"><a class="nav-link" href="{{ route('login') }}">Login</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{ route('register') }}">Register</a></li>
                    @endguest
                    @auth
                        <li class="nav-item"><a class="nav-link" href="{{ route('laporan.index') }}">Daftar Laporan</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{ route('profile') }}">Profil Petugas</a></li>
                        <li class="nav-item">
                            <form method="POST" action="{{ route('logout') }}">@csrf
                                <button class="nav-link border-0 bg-transparent" type="submit">Logout</button>
                            </form>
                        </li>
                    @endauth
                </ul>
            </div>
        </div>
    </nav>

    <main class="container py-4 flex-grow-1">
        @yield('content')
    </main>

    <footer class="bg-primary text-white text-center py-3 mt-auto">
        <p class="mb-0">
            &copy; {{ date('Y') }} Sistem Laporan Genangan
        </p>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
