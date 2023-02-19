@extends('layouts.app')

@section('content')
    <div class="container d-flex justify-content-center pt-4">
        <div class="card p-4">
            <h1>Welcome to the SUS</h1>
            <div class="card-body">
                <div class="d-flex justify-content-center">
                    <img src="https://media.tenor.com/FgV-WaAvFLQAAAAM/terserah-kamu-deh-mau-yang-mana-anang-hermansyah.gif"
                        alt="pilih">
                </div>
                <div class="d-flex justify-content-center">
                    <div class="mt-2">
                        <a class="btn btn-primary" href="{{ route('login.index') }}"><i class="mr-1 fa fa-sign-in"
                                aria-hidden="true"></i>Masuk</a>
                        <a class="btn btn-warning" href="{{ route('register.index') }}"><i class="mr-1 fa fa-reddit-alien"
                                aria-hidden="true"></i>Register</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
