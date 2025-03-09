<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\MainController;
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

Route::get('/', [AuthController::class, 'login'])->name('login');
Route::get('/register', [AuthController::class, 'register'])->name('register');

Route::get('/home', [MainController::class, 'home'])->name('home');
Route::get('/dataPaket', [MainController::class, 'dataPaket'])->name('dataPaket');
Route::get('/trackingHistory', [MainController::class, 'trackingHistory'])->name('trackingHistory');
Route::get('/dataKurir', [MainController::class, 'dataKurir'])->name('dataKurir');
Route::get('/dataPengguna', [MainController::class, 'dataPengguna'])->name('dataPengguna');
Route::get('/dataGudang', [MainController::class, 'dataGudang'])->name('dataGudang');
Route::get('/tarifPengiriman', [MainController::class, 'tarifPengiriman'])->name('TarifPengiriman');

//data paket
Route::get('/dataPaketProses', [MainController::class, 'dataPaketProses'])->name('dataPaketProses');
Route::post('/simpanPaket', [MainController::class, 'storePaket'])->name('simpanPaket');
Route::get('/data_paket/hapusPaket/{id}', [MainController::class, 'destroyPaket'])->name('hapusPaket');
Route::get('/data_paket/editDataPaket/{id}', [MainController::class, 'editPaket'])->name('editPaket');    
Route::post('/data_paket/updatePaket/{id}', [MainController::class, 'updatePaket'])->name('updatePaket');

Route::get('/trackingHistoryProses', [MainController::class, 'trackingHistoryProses'])->name('trackingHistoryProses');
Route::get('/dataKurirProses', [MainController::class, 'dataKurirProses'])->name('dataKurirProses');
Route::get('/dataPenggunaProses', [MainController::class, 'dataPenggunaProses'])->name('dataPenggunaProses');

