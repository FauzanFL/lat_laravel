@extends('layouts.app')

@section('content')
    <div class="container d-flex justify-content-center mt-5">
        <div class="card px-2">
            <div class="card-body">
                <div class="py-4 d-flex justify-content-end align-items-center">
                    <h2 class="mr-auto fw-bold">Login</h2>
                </div>
                @if (session()->has('pesan'))
                    <div class="alert alert-success">
                        {{ session()->get('pesan') }}
                    </div>
                @endif
                <form action="{{ route('login.process') }}" method="POST"> @csrf <div class="form-group">
                        <label for="nim">Username</label>
                        <input type="text" class="form-control @error('username') is-invalid @enderror" id="username"
                            name="username" value="{{ old('username') }}"> @error('username')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" class="form-control @error('password') is-invalid @enderror" id="password"
                            name="password" value="{{ old('password') }}"> @error('password')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="d-flex justify-content-between align-items-center">
                        <button type="submit" class="btn btn-primary mt-3 mb-2">Masuk</button>
                        <div class="ml-4">Belum punya akun? <a href="{{ route('register.index') }}">register</a></div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
