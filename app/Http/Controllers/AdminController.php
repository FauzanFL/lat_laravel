<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    public function index()
    {
        $title = 'Login';
        return view('login.login', ['title' => $title]);
    }
    public function process(Request $request)
    {
        $validateData = $request->validate([
            'username' => 'required',
            'password' => 'required',
        ]);
        $password = env('SALT') . $validateData['password'] . env('SALT');
        $result = Admin::where('username', '=', $validateData['username'])->first();
        if ($result) {
            if (Hash::check($password, $result->password)) {
                session(['username' => $request->username]);
                return redirect('/home')->with('msg', 'success');
            } else {
                return back()->withInput()->with('pesan', "Login Gagal!");
            }
        } else {
            return back()->withInput()->with('pesan', "Login Gagal!");
        }
    }

    public function register()
    {
        $title = 'Register';
        return view('register.register', ['title' => $title]);
    }

    public function registerProcess(Request $request)
    {
        $validateData = $request->validate([
            'username' => 'required|unique:admins|min:8|max:20',
            'password' => 'required|min:8',
        ]);

        $admin = new Admin();
        $admin->username = $validateData['username'];
        $newPass = env('SALT') . $validateData['password'] . env('SALT');
        $admin->password = Hash::make($newPass);
        $admin->save();
        return redirect('login')->with('pesan', 'Registrasi berhasil! Silakan login');
    }

    public function logout()
    {
        session()->forget('username');
        return redirect('/login')->with('pesan', 'Logout berhasil!');
    }
}
