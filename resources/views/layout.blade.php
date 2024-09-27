<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SEKOLAHKU</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">



    <style>
        html,
        body {
            height: 100%;
            margin: 0;
            display: flex;
            flex-direction: column;
            font-family: 'Arial', sans-serif;
        }

        .content {
            flex: 1;
            /* Konten mengisi sisa ruang */
        }

        .navbar-custom {
            background-color: #008080;
            /* Warna teal */
        }

        .navbar-custom .nav-link {
            color: white;
            /* Warna teks putih untuk tautan */
        }

        .navbar-custom .nav-link:hover {
            color: #FFD700;
            /* Warna saat hover */
        }

        footer {
            background-color: #343a40;
            /* Warna footer gelap */
        }

        footer .text-center {
            padding: 10px 0;
        }

        /* Tambahkan margin untuk konten di atas */
        .container.content {
            margin-top: 20px;
        }
    </style>
</head>

<body>
    <!-- Navigasi -->
    <nav class="navbar navbar-expand-lg navbar-light navbar-custom">
        <a class="navbar-brand text-white" href="#">Sekolahku</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('home') }}">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('visimisi.index') }}">Visi Misi</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('siswa.index') }}">Data Siswa</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('guru.index') }}">Data Guru</a>
                </li>
            </ul>

            <ul class="navbar-nav ml-auto">
                @if (Auth::check())
                    <li class="nav-item">
                        <form action="{{ route('logout') }}" method="POST" class="d-inline">@csrf
                            <button type="submit" class="btn btn-link nav-link">Logout</button>
                        </form>
                    </li>
                @else
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}">Login</a>
                    </li>
                @endif
            </ul>
        </div>
    </nav>


    <div class="container content mt-5">
        @yield('content')
    </div>

    <footer class="text-white text-center py-3 mt-5">
        <div class="text-center">
            © 2024 CMS Sekolah. All rights reserved.
        </div>
    </footer>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>
