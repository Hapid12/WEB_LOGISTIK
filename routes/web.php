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

//data paket
Route::get('/dataPaketProses', [MainController::class, 'dataPaketProses'])->name('dataPaketProses');
Route::post('/simpanPaket', [MainController::class, 'storePaket'])->name('simpanPaket');
Route::get('/data_paket/hapusPaket/{id}', [MainController::class, 'destroyPaket'])->name('hapusPaket');
Route::get('/data_paket/editDataPaket/{id}', [MainController::class, 'editPaket'])->name('editPaket');    
Route::post('/data_paket/updatePaket/{id}', [MainController::class, 'updatePaket'])->name('updatePaket');

//data track
Route::get('/trackingHistoryProses', [MainController::class, 'trackingHistoryProses'])->name('trackingHistoryProses');
Route::post('/simpanTrack', [MainController::class, 'storeTrack'])->name('simpanTrack');
Route::get('/data_Track/hapusTrack/{id}', [MainController::class, 'destroyTrack'])->name('hapusTrack');
Route::get('/data_Track/editDataTrack/{id}', [MainController::class, 'editTrack'])->name('editTrack');    
Route::post('/data_Track/updateTrack/{id}', [MainController::class, 'updateTrack'])->name('updateTrack');
