@extends('layouts.app')

@section('content')
    <nav class="main-header navbar navbar-expand navbar-white navbar-light">
        <!-- Left navbar links -->
        <ul class="navbar-nav ml-3">
            <li class="nav-item">
                <a class="nav-link sidebar-toggle-btn" data-widget="pushmenu" href="#" role="button"><i class="fa fa-bars"
                        aria-hidden="true"></i></a>
            </li>
            <li class="nav-item d-none d-sm-inline-block">
                <a href="{{ route('home') }}" class="nav-link">Home</a>
            </li>
            <li class="nav-item d-none d-sm-inline-block">
                <a href="https://github.com/FauzanFL" target="blank" rel="noreferrer noopener" class="nav-link">About Us</a>
            </li>
        </ul>
        <ul class="navbar-nav ml-auto mr-3">
            <li class="nav-item">
                <a class="btn btn-danger" href="/logout">
                    <i class="nav-icon fa fa-sign-out" aria-hidden="true"></i>
                    Logout
                </a>
            </li>
        </ul>
    </nav>

    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
        <!-- Sidebar -->
        <div class="sidebar">
            <!-- Sidebar user panel (optional) -->
            <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                <div class="info">
                    <h2 class="d-block fs-4 text-white">{{ session('username') }}</h2>
                </div>
            </div>

            <!-- Sidebar Menu -->
            <nav class="mt-2">
                <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu">

                    <li class="nav-item menu-open">
                        <a href="{{ route('home') }}" class="nav-link {{ $title == 'Dashboard' ? 'active' : '' }}">
                            <i class="nav-icon fa fa-tachometer"></i>
                            <p>Dashboard</p>
                        </a>
                    </li>
                    <li class="nav-item menu-open">
                        <a href="{{ route('student.index') }}" class="nav-link {{ $title == 'Mahasiswa' ? 'active' : '' }}">
                            <i class="nav-icon fa fa-address-card-o" aria-hidden="true"></i>
                            <p>Mahasiswa</p>
                        </a>
                    </li>
                </ul>
            </nav>
            <!-- /.sidebar-menu -->
        </div>
        <!-- /.sidebar -->
    </aside>
    <div class="content-wrapper">
        @yield('navbar')
    </div>
    <footer class="main-footer">
        <strong>Copyright &copy; FauzanFL - 2023.</strong>
        All rights reserved.
    </footer>
@endsection
