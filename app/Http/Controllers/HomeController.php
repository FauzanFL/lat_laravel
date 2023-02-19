<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Models\Student;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('login_auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $students = Student::all();
        $admins = Admin::all();

        $title = "Dashboard";
        $data = [
            'mahasiswa' => count($students),
            'admin' => count($admins),
        ];
        return view('home', ['data' => $data, 'title' => $title]);
    }
}
