<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Coba;
use App\Http\Controllers\PegawaiController;
use App\Http\Controllers\PegawaiDBController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\TugasCRUD;
use App\Http\Controllers\LatihanUAS;
use App\Http\Controllers\KeranjangBelanjaController;
use App\Http\Controllers\TrafficController;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/selamat', function () {
    return view('welcome');
});

Route::get('halo', function () {
	return "<h1>Halo, Selamat datang di tutorial laravel www.malasngoding.com</h1>";
});

Route::get('blog', function () {
	return view('blog');
});

Route::get('/formulir', [PegawaiController::class, 'formulir']); //halaman isian
Route::post('/formulir/proses', [PegawaiController::class, 'proses']); //action form


Route::get('/hello', [Coba::class, 'helloworld']);

Route::get('/bootstrap1', function () {
    return view('bootstrap1');
});

Route::get('/bootstrap2', function () {
    return view('bootstrap2');
});

Route::get('/pagepagination', function () {
    return view('index');
});

Route::get('/js1', function () {
    return view('js1');
});

Route::get('/js2', function () {
    return view('js2');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/linktree', function () {
    return view('linktree');
});

Route::get('/pertama', function () {
    return view('pertama');
});

Route::get('/frontend', function () {
    return view('frontend');
});

//route Pegawai
Route::get('dosen', [Coba::class, 'index']);
// Route::get('/pegawai/{nama}', [PegawaiController::class, 'index']);
Route::get('/formulir', [PegawaiController::class, 'formulir']);  //halaman isian formulir
Route::post('/formulir/proses', [PegawaiController::class, 'proses']); //action untuk mengirim data formulir

// route untuk CRUD Pegawai
Route::get('/pegawai', [PegawaiDBController::class, 'index']);
Route::get('/pegawai/tambah', [PegawaiDBController::class, 'tambah']);
Route::post('/pegawai/store', [PegawaiDBController::class, 'store']);
Route::get('/pegawai/edit/{id}', [PegawaiDBController::class, 'edit']);
Route::post('/pegawai/update/', [PegawaiDBController::class, 'update']);
Route::get('/pegawai/hapus/{id}', [PegawaiDBController::class, 'hapus']);
Route::get('/pegawai/cari', [PegawaiDBController::class, 'cari']);


// route blog
Route::get('/blog', [BlogController::class, 'home']);
Route::get('/blog/tentang', [BlogController::class, 'tentang']);
Route::get('/blog/kontak', [BlogController::class, 'kontak']);

// route untuk CRUD meja
Route::get('/meja', [TugasCRUD::class, 'index']);
Route::get('/meja/tambah', [TugasCRUD::class, 'tambah']);
Route::post('/meja/store', [TugasCRUD::class, 'store']);
Route::get('/meja/edit/{id}', [TugasCRUD::class, 'edit']);
Route::post('/meja/update/', [TugasCRUD::class, 'update']);
Route::get('/meja/hapus/{id}', [TugasCRUD::class, 'hapus']);
Route::get('/meja/cari', [TugasCRUD::class, 'cari']);

// route untuk CRUD meja
Route::get('/karyawan', [LatihanUAS::class, 'index']);
Route::get('/karyawan/tambah', [LatihanUAS::class, 'tambah']);
Route::post('/karyawan/store', [LatihanUAS::class, 'store']);
Route::post('/karyawan/update/', [LatihanUAS::class, 'update']);
Route::get('/karyawan/hapus/{id}', [LatihanUAS::class, 'hapus']);

//route keranjang belanjaAdd commentMore actions

Route::get('/keranjangbelanja', [KeranjangBelanjaController::class, 'indexkeranjangbelanja']);
Route::get('/keranjangbelanja/belikeranjangbelanja/{id}', [KeranjangBelanjaController::class, 'belikeranjangbelanja']);
Route::get('/keranjangbelanja/batalkeranjangbelanja/{id}', [KeranjangBelanjaController::class, 'batalkeranjangbelanja']);
Route::post('/keranjangbelanja/storekeranjangbelanja', [KeranjangBelanjaController::class, 'storekeranjangbelanja']);
Route::post('/keranjangbelanja/updatekeranjangbelanja', [KeranjangBelanjaController::class, 'updatekeranjangbelanja']);

//route untuk LATIHAN 2Add commentMore actions
Route::get('/pagecounter', [TrafficController::class, 'index']);
?>
