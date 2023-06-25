<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\GambarController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', [HomeController::class, 'index'])->name('home');

// Route::get('/login', [LoginController::class, 'halamanlogin'])->name('login');

Route::get('/login',[LoginController::class, 'login'])->name('login');

Route::post('/postlogin', [LoginController::class, 'postlogin'])->name('postlogin');

Route::get('/logout', [LoginController::class, 'logout'])->name('logout');

Route::get('/registrasi', [LoginController::class, 'registrasi'])->name('registrasi');

Route::post('/simpanregistrasi', [LoginController::class, 'simpanregistrasi'])->name('simpanregistrasi');

Route::group(['middleware' => ['auth','ceklevel:admin,mahasiswa']], function () {

    Route::get('/', [HomeController::class, 'index'])->name('home');

    Route::get('/data-pengguna', [UserController::class, 'index'])->name('data-pengguna');

    Route::get('/ubah-pengguna/{id}', [UserController::class, 'edit'])->name('ubah-pengguna');

    Route::post('/simpan-ubah-pengguna/{id}',[UserController::class, 'simpanUbahPengguna']);

    Route::get('/delete-data/{id}',[UserController::class, 'hapuspengguna']);

    Route::get('/upload', [GambarController::class, 'gambar'])->name('upload');

    Route::post('/simpan-gambar', [GambarController::class, 'store'])->name('simpan-gambar');

});
