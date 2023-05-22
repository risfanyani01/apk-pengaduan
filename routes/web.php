<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\CabangController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\AktivitasController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PengaduanController;

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

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('login', [LoginController::class, 'index'])->name('login');
Route::post('proseslogin', [LoginController::class,'proseslogin'])->name('proseslogin');
Route::get('register', [RegisterController::class, 'index'])->name('register');
Route::post('prosesregister', [RegisterController::class,'prosesregister'])->name('prosesregister');
    

Route::middleware(['auth'])->group(function () {

Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

//Kategori
Route::get('/kategori', [KategoriController::class, 'index'])->name('kategori.index');
Route::get('/kategori/tambah', [KategoriController::class, 'create'])->name('kategori.create');
Route::post('/kategori/store', [KategoriController::class, 'store'])->name('kategori.store');
Route::get('/kategori/edit/{id}', [KategoriController::class, 'edit'])->name('kategori.edit');
Route::put('/kategori/update/{id}', [KategoriController::class, 'update'])->name('kategori.update');
Route::delete('/kategori/delete/{id}', [KategoriController::class, 'delete'])->name('kategori.delete');

// Edit Password
Route::get('/editPassword', [PasswordController::class, 'index'])->name('password');
Route::patch('/editPassword', [PasswordController::class, 'update'])->name('passwordUpdate');

// Pengaduan
Route::get('pengaduan', [PengaduanController::class, 'index'])->name('pengaduan.index');
Route::get('/pengaduan/tambah', [PengaduanController::class, 'create'])->name('pengaduan.create');
Route::post('/pengaduan/store', [PengaduanController::class, 'store'])->name('pengaduan.store');
Route::get('/pengaduan/detail/{id}', [PengaduanController::class, 'show'])->name('pengaduan.detail');
Route::get('/pengaduan/edit/{id}', [PengaduanController::class, 'edit'])->name('pengaduan.edit');
Route::put('/pengaduan/update/{id}', [PengaduanController::class, 'update'])->name('pengaduan.update');
Route::delete('/pengaduan/delete/{id}', [PengaduanController::class, 'delete'])->name('pengaduan.delete');
Route::get('/pengaduan-selesai', [PengaduanController::class, 'pengaduan_selesai'])->name('pengaduan.selesai');
Route::get('/pengaduan-proses', [PengaduanController::class, 'pengaduan_proses'])->name('pengaduan.proses');
Route::get('/laporan-pengaduan', [PengaduanController::class, 'laporan'])->name('laporan.index');
Route::get('pengaduan/cetak/', [PengaduanController::class, 'printDataAll']);
Route::get('pengaduan/cetak/{id}', [PengaduanController::class, 'printData']);

// Approve Pengaduan
Route::get('process/{id}', [PengaduanController::class, 'proses'])->name('pengaduan.diproses');
Route::get('success/{id}', [PengaduanController::class, 'done'])->name('pengaduan.success');

// Logout
Route::get('logout', [LoginController::class, 'logout'])->name('logout');

Route::get('/user/show/{id}', [UserController::class, 'show'])->name('user.show');
    
//Cabang
Route::get('/cabang', [CabangController::class, 'index'])->name('cabang.index');
Route::get('/cabang/tambah', [CabangController::class, 'create'])->name('cabang.create');
Route::post('/cabang/store', [CabangController::class, 'store'])->name('cabang.store');
Route::get('/cabang/edit/{id}', [CabangController::class, 'edit'])->name('cabang.edit');
Route::put('/cabang/update/{id}', [CabangController::class, 'update'])->name('cabang.update');
Route::delete('/cabang/delete/{id}', [CabangController::class, 'delete'])->name('cabang.delete');

//User
Route::get('/user', [UserController::class, 'index'])->name('user.index');
Route::get('/user/tambah', [UserController::class, 'create'])->name('user.create');
Route::post('/user/store', [UserController::class, 'store'])->name('user.store');
Route::get('/user/edit/{id}', [UserController::class, 'edit'])->name('user.edit');
Route::put('/user/update/{id}', [UserController::class, 'update'])->name('user.update');
Route::delete('/user/delete/{id}', [UserController::class, 'delete'])->name('user.delete');

});