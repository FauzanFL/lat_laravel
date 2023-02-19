<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome', ['title' => 'Web Mhs']);
})->middleware('check_guest');

Route::get('/register', [AdminController::class, 'register'])->name('register.index')->middleware('check_guest');
Route::post('/register', [AdminController::class, 'registerProcess'])->name('register.process');

Route::get('/login', [AdminController::class, 'index'])->name('login.index')->middleware('check_guest');
Route::post('/login', [AdminController::class, 'process'])->name('login.process');
Route::get('/logout', [AdminController::class, 'logout'])->name('login.logout')->middleware('login_auth');

Route::group(['prefix' => '/students', 'middleware' => 'login_auth'], function () {
    Route::get('/', [StudentController::class, 'index'])->name('student.index');
    Route::get('/create', [StudentController::class, 'create'])->name('student.create');
    Route::post('/', [StudentController::class, 'store'])->name('student.store');
    Route::get('/{student}/edit', [StudentController::class, 'edit'])->name('student.edit');
    Route::patch('/{student}', [StudentController::class, 'update'])->name('student.update');
    Route::delete('/{student}', [StudentController::class, 'destroy'])->name('student.destroy');
    Route::get('/{student}', [StudentController::class, 'show'])->name('student.show');
});

Route::get('/home', [HomeController::class, 'index'])->name('home')->middleware('login_auth');
