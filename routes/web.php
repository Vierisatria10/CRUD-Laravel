<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\GuruController;
use App\Http\Controllers\SiswaController;
use App\Http\Controllers\PenjualanController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PelangganController;



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
// Route HomeController untuk pemanggilan Home
Route::get('/', [HomeController::class, 'index']);
// end Route HomeController

// Route PenjualanController untuk pemanggilan penjualan
Route::get('/penjualan', [PenjualanController::class, 'index']);
Route::get('/penjualan/print', [PenjualanController::class, 'print']);
Route::get('/penjualan/printpdf', [PenjualanController::class, 'printpdf']);



Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');



// Hak Akses untuk Admin
Route::group(['middleware' => 'admin'], function () {
    // Route GuruController untuk pemanggilan Data Guru
Route::get('/guru', [GuruController::class, 'index'])->name('guru');
Route::get('/guru/detail/{id_guru}', [GuruController::class, 'detail']);
Route::get('/guru/add', [GuruController::class, 'add']);
Route::get('/guru/edit/{id_guru}', [GuruController::class, 'edit']);
Route::get('/guru/delete/{id_guru}', [GuruController::class, 'delete']);
Route::post('/guru/insert', [GuruController::class, 'insert']);
Route::post('/guru/update/{id_guru}', [GuruController::class, 'update']);
// end Route GuruController

// Route GuruController untuk pemanggilan Data sISWA
Route::get('/siswa', [SiswaController::class, 'index'])->name('siswa');
Route::get('/siswa/detail/{id_siswa}', [SiswaController::class, 'detail']);
});

// Hak Akses untuk User
Route::group(['middleware' => 'user'], function () {
    // Route UserController untuk pemanggilan Data User
Route::get('/user', [UserController::class, 'index'])->name('user');
});

// Hak Akses untuk Pelanggan
Route::group(['middleware' => 'pelanggan'], function () {
// Route PelangganController untuk pemanggilan Data Pelanggan
Route::get('/pelanggan', [PelangganController::class, 'index'])->name('pelanggan');
});