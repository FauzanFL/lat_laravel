@extends('layouts.app')

@section('content')
    <div class="container d-flex justify-content-center pt-4">
        <div class="card px-3">
            <div class="card-body">
                <h1>Edit Mahasiswa</h1>
                <hr>
                <form action="{{ route('student.update', ['student' => $student->id]) }}" method="POST"> @method('PATCH')
                    @csrf <div class="form-group">
                        <label for="nim">NIM</label>
                        <input type="text" class="form-control @error('nim') is-invalid @enderror" id="nim"
                            name="nim" value="{{ old('nim') ?? $student->nim }}"> @error('nim')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="nama">Nama Lengkap</label>
                        <input type="text" class="form-control @error('nama') is-invalid @enderror" id="nama"
                            name="nama" value="{{ old('nama') ?? $student->nama }}"> @error('nama')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="text" class="form-control @error('email') is-invalid @enderror" id="email"
                            name="email" value="{{ old('email') ?? $student->email }}"> @error('email')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label>Jenis Kelamin</label>
                        <div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="jk" id="laki_laki" value="l"
                                    {{ (old('jk') ?? $student->jk) == 'l' ? 'checked' : '' }}>
                                <label class="form-check-label" for="laki_laki">Laki-laki</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="jk" id="perempuan" value="p"
                                    {{ (old('jk') ?? $student->jk) == 'p' ? 'checked' : '' }}>
                                <label class="form-check-label" for="perempuan">Perempuan</label>
                            </div> @error('jk')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="jurusan">Jurusan</label>
                        <select class="form-control" name="jurusan" id="jurusan">
                            <option value="Teknik Informatika"
                                {{ (old('jurusan') ?? $student->jurusan) == 'Teknik Informatika' ? 'selected' : '' }}>
                                Teknik Informatika </option>
                            <option value="Sistem Informasi"
                                {{ (old('jurusan') ?? $student->jurusan) == 'Sistem Informasi' ? 'selected' : '' }}>
                                Sistem Informasi </option>
                            <option value="Ilmu Komputer"
                                {{ (old('jurusan') ?? $student->jurusan) == 'Ilmu Komputer' ? 'selected' : '' }}>
                                Ilmu Komputer </option>
                            <option value="Teknik Komputer"
                                {{ (old('jurusan') ?? $student->jurusan) == 'Teknik Komputer' ? 'selected' : '' }}>
                                Teknik Komputer </option>
                            <option value="Teknik Telekomunikasi"
                                {{ (old('jurusan') ?? $student->jurusan) == 'Teknik Telekomunikasi' ? 'selected' : '' }}>
                                Teknik Telekomunikasi </option>
                            <option value="Rekayasa Perangkat Lunak"
                                {{ (old('jurusan') ?? $student->jurusan) == 'Rekayasa Perangkat Lunak' ? 'selected' : '' }}>
                                Rekayasa Perangkat Lunak </option>
                        </select> @error('jurusan')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <button type="submit" class="btn btn-primary mb-2">Update</button>
                </form>
            </div>
        @endsection
