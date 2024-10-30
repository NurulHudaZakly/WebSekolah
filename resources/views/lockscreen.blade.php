@extends('layouts.master')

@section('content')
    <div class="d-flex justify-content-center align-items-center vh-100">
        <div class="lockscreen-container text-center">
            <img src="{{ asset('AdminLTE/dist/img/avatar.png') }}" alt="User Avatar" class="rounded-circle mb-3" width="100">
            <h3 class="mb-3">Locked</h3>
            <form method="POST" action="{{ route('unlock') }}">
                @csrf
                <div class="mb-3">
                    <input type="password" name="password" class="form-control" placeholder="Enter your password" required>
                </div>
                <button type="submit" class="btn btn-primary w-100">Unlock</button>
            </form>
        </div>
    </div>
@endsection
