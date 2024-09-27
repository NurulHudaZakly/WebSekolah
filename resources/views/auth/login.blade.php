@extends('layout')

@section('content')
    <div class="container">
        <h1>Halaman Login</h1>

        @if ($errors->any())
            <div class="alert alert-danger">
                @foreach ($errors->all() as $error)
                    <div>{{ $error }}</div>
                @endforeach
            </div>
        @endif

        <form action="{{ route('login') }}" method="POST" class="login-form">
            @csrf
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" name="email" id="email" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="password">Password:</label>
                <input type="password" name="password" id="password" class="form-control" required>
            </div>
            <button type="submit" class="btn btn-primary">Login</button>
        </form>
    </div>

    <style>
        body {
            background-color: #f8f9fa;
            /* Warna latar belakang */
            font-family: 'Arial', sans-serif;
        }

        .container {
            max-width: 400px;
            /* Lebar maksimum untuk container */
            margin: 100px auto;
            /* Margin atas/bawah 100px dan auto untuk tengah */
            padding: 20px;
            background-color: #ffffff;
            /* Warna latar belakang form */
            border-radius: 8px;
            /* Sudut melengkung */
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            /* Bayangan lembut */
        }

        h1 {
            text-align: center;
            /* Pusatkan teks */
            margin-bottom: 20px;
            /* Jarak bawah */
            color: #008080;
            /* Warna teks teal */
        }

        .form-group label {
            font-weight: bold;
            /* Teks tebal untuk label */
        }

        .form-control {
            width: 100%;
            /* Lebar penuh */
            padding: 10px;
            /* Padding di dalam input */
            margin: 5px 0 15px 0;
            /* Jarak atas dan bawah */
            border: 1px solid #ced4da;
            /* Border abu-abu */
            border-radius: 4px;
            /* Sudut melengkung pada input */
            box-sizing: border-box;
            /* Menghitung padding dan border dalam total width */
        }

        .btn-primary {
            width: 100%;
            /* Lebar penuh untuk tombol */
            padding: 10px;
            /* Padding di dalam tombol */
            background-color: #008080;
            /* Warna tombol teal */
            border: none;
            /* Tanpa border */
            border-radius: 4px;
            /* Sudut melengkung */
            color: white;
            /* Warna teks putih */
            font-size: 16px;
            /* Ukuran font */
            cursor: pointer;
            /* Pointer saat hover */
        }

        .btn-primary:hover {
            background-color: #006666;
            /* Warna saat hover */
        }

        .alert {
            margin-bottom: 20px;
            /* Jarak bawah untuk alert */
        }
    </style>
@endsection
