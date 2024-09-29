<?php

use App\Http\Controllers\AuthController;

Route::get('/', function () {
    return view('welcome');
});

// Login start

// menampilkan form login
Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login'); // memanggil kelas auth, memanggil method showLoginForm, menginisialisasi nama untuk rute saat ini.

// memproses form login
Route::post('/login', [AuthController::class, 'login']); // menangkap setiap data post yang dikirimkan melalui form untuk kemudian di proses oleh controller/method login.

// redirect ke halaman dashboard yang hanya bisa diakses oleh user yang telah berhasil login
// Di Laravel, middleware bertindak sebagai penjaga yang dapat mencegah atau mengizinkan pengguna mengakses rute tertentu.
Route::get('/dashboard', [AuthController::class, 'dashboard'])->middleware('auth')->name('dashboard');

// Logout
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

// Login end