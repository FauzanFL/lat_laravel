@extends('layouts.navsidebar')

@section('navbar')
    @if (session()->has('msg'))
        <div class="alert alert-success w-50 mt-2 ml-2 alert-dismissible fade show" role="alert">
            <strong>Hello {{ session('username') }}!</strong> Welcome back to my channel again.
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <h1 class="m-0">Dashboard</h1>
        </div><!-- /.container-fluid -->
    </div>

    <section class="content p-3">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-3 col-6">
                    <!-- small box -->
                    <div class="small-box bg-success">
                        <div class="inner">
                            <h3>{{ $data['admin'] }}</h3>

                            <p>Admin</p>
                        </div>
                        <div class="icon">
                            <i class="fa fa-user" aria-hidden="true"></i>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-6">
                    <!-- small box -->
                    <div class="small-box bg-warning">
                        <div class="inner">
                            <h3>{{ $data['mahasiswa'] }}</h3>

                            <p>Mahasiswa</p>
                        </div>
                        <div class="icon">
                            <i class="fa fa-graduation-cap" aria-hidden="true"></i>
                        </div>
                        <a href="{{ route('student.index') }}" class="small-box-footer">More info<i
                                class="ml-2 fa fa-arrow-right" aria-hidden="true"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
