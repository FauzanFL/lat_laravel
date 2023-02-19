<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;
use App\Models\User;

class StudentController extends Controller
{
    /**
     * Show the profile for a given user.
     *
     * @param  int  $id
     * @return \Illuminate\View\View
     */

    public function index()
    {
        $title = 'Mahasiswa';
        $mahasiswas = Student::all();
        return view('student.index', ['students' => $mahasiswas, 'title' => $title]);
    }

    public function create()
    {
        $title = 'Tambah Mahasiswa';
        return view('student.create', ['title' => $title]);
    }

    public function store(Request $request)
    {
        $validateData = $request->validate([
            'nim' => 'required|numeric|unique:students',
            'nama' => 'required|min:3|max:50',
            'email' => 'required',
            'jk' => 'required|in:p,l',
            'jurusan' => 'required'
        ]);

        $mahasiswa = new Student();
        $mahasiswa->nim = $validateData['nim'];
        $mahasiswa->nama = $validateData['nama'];
        $mahasiswa->email = $validateData['email'];
        $mahasiswa->jk = $validateData['jk'];
        $mahasiswa->jurusan = $validateData['jurusan'];
        $mahasiswa->save();
        $request->session()->flash('pesan', 'Berhasil menambahkan data!');
        return redirect()->route('student.index');
    }

    public function edit($id)
    {
        $title = 'Edit Mahasiswa';
        $result = Student::findOrFail($id);
        return view('student.edit', ['student' => $result, 'title' => $title]);
    }

    public function update(Request $request, Student $student)
    {
        $validateData = $request->validate([
            'nim' => 'required|numeric|unique:students',
            'nama' => 'required|min:3|max:50',
            'email' => 'required',
            'jk' => 'required|in:p,l',
            'jurusan' => 'required'
        ]);
        $student->nim = $validateData['nim'];
        $student->nama = $validateData['nama'];
        $student->email = $validateData['email'];
        $student->jk = $validateData['jk'];
        $student->jurusan = $validateData['jurusan'];
        $student->save();
        $request->session()->flash('pesan', 'Berhasil mengubah data!');
        return redirect()->route('student.index');
    }

    public function destroy(Request $request, Student $student)
    {
        $student->delete();
        $request->session()->flash('pesan', 'Data berhasil dihapus!');
        return redirect()->route('student.index');
    }

    public function show($id)
    {
        $result = Student::findOrFail($id);
        $title = $result->nama;
        return view('student.show', ['student' => $result, 'title' => $title]);
    }
}
