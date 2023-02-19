@extends('layouts.app')

@section('content')
    <div class="container d-flex justify-content-center pt-4">
        <div class="card px-3">
            <div class="card-body">
                <h1>Tambah Mahasiswa</h1>
                <hr>
                <form action="{{ route('student.store') }}" method="POST"> @csrf <div class="form-group">
                        <label for="nim">NIM</label>
                        <input type="text" class="form-control @error('nim') is-invalid @enderror" id="nim"
                            name="nim"> @error('nim')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="nama">Nama Lengkap</label>
                        <input type="text" class="form-control @error('nama') is-invalid @enderror" id="nama"
                            name="nama"> @error('nama')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="text" class="form-control @error('email') is-invalid @enderror" id="email"
                            name="email"> @error('email')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label>Jenis Kelamin</label>
                        <div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="jk" id="laki_laki" value="l">
                                <label class="form-check-label" for="laki_laki">Laki-laki</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="jk" id="perempuan" value="p">
                                <label class="form-check-label" for="perempuan">Perempuan</label>
                            </div> @error('jk')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="jurusan">Jurusan</label>
                        <select class="form-control" name="jurusan" id="jurusan">
                            <option value="Teknik Informatika">
                                Teknik Informatika </option>
                            <option value="Sistem Informasi">
                                Sistem Informasi </option>
                            <option value="Ilmu Komputer"> Ilmu
                                Komputer </option>
                            <option value="Teknik Komputer">
                                Teknik Komputer </option>
                            <option value="Teknik Telekomunikasi"> Teknik
                                Telekomunikasi
                            </option>
                            <option value="Rekayasa Perangkat Lunak"> Rekayasa Perangkat
                                Lunak
                            </option>
                        </select> @error('jurusan')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <button type="submit" class="btn btn-primary mb-2">Tambah</button>
                </form>
            </div>
        </div>
    </div>
@endsection
