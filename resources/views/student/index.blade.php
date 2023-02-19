@extends('layouts.navsidebar')

@section('navbar')
    @if (session()->has('pesan'))
        <div class="alert alert-success w-50 mt-2 ml-2 alert-dismissible fade show" role="alert">
            <strong>{{ session('pesan') }}!</strong>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <h1 class="m-0">Mahasiswa</h1>
        </div><!-- /.container-fluid -->
    </div>

    <section class="content p-3">
        <div class="content-fluid">
            <div class="card">
                <div class="card-header">
                    <div class="d-flex justify-content-end">
                        <a class="btn btn-success" href="/students/create"><i class="mr-1 fa fa-plus-circle"
                                aria-hidden="true"></i>Tambah</a>
                    </div>
                </div>
                <div class="card-body">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">Nama</th>
                                <th scope="col">NIM</th>
                                <th scope="col">Jenis Kelamin</th>
                                <th scope="col">Email</th>
                                <th scope="col">Jurusan</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($students as $mahasiswa)
                                <tr>
                                    <th scope="row">{{ $loop->iteration }}</th>
                                    <td>{{ $mahasiswa->nama }}<a
                                            href="{{ route('student.show', ['student' => $mahasiswa->id]) }}"><i
                                                class="ml-1 fa fa-eye" aria-hidden="true"></i></a>
                                    </td>
                                    <td>{{ $mahasiswa->nim }}</td>
                                    <td>{{ $mahasiswa->jk == 'p' ? 'Perempuan' : 'Laki-laki' }}</td>
                                    <td>{{ $mahasiswa->email }}</td>
                                    <td>{{ $mahasiswa->jurusan }}</td>
                                    <td>
                                        <form class="d-inline-block"
                                            action="{{ route('student.destroy', ['student' => $mahasiswa->id]) }}"
                                            method="POST">
                                            @method('DELETE') @csrf
                                            <button type="submit" class="btn btn-danger"><i class="mr-1 fa fa-trash-o"
                                                    aria-hidden="true"></i>Hapus</button>
                                        </form>
                                        <a class="btn btn-warning"
                                            href="{{ route('student.edit', ['student' => $mahasiswa->id]) }}"><i
                                                class="mr-1 fa fa-pencil-square-o" aria-hidden="true"></i>Edit</a>
                                    </td>
                                </tr>
                            @empty
                                <td colspan="7" class="text-center">Tidak ada data...</td>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>
@endsection
