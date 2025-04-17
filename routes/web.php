<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\PengirimanController;
use App\Models\Pengiriman;
use Illuminate\Support\Facades\Auth;
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
    return redirect('/login');
});

// Auth Section
Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login']);

Route::get('/register', [AuthController::class, 'showRegisterForm'])->name('register');
Route::post('/register', [AuthController::class, 'register']);

Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

// Protected route
Route::get('/home', function () {
    return view('home');
})->middleware('auth');

Route::get('/home', [MainController::class, 'home'])->name('home');
Route::get('/dataPaket', [MainController::class, 'dataPaket'])->name('dataPaket');
Route::get('/trackingHistory', [MainController::class, 'trackingHistory'])->name('trackingHistory');
Route::get('/profile', [Authcontroller::class, 'profile'])->name('profile');
Route::put('/profile/{id}', [Authcontroller::class, 'updateProfile'])->name('profile.update');
Route::get('/pengiriman', [PengirimanController::class, 'Pengiriman'])->name('pengiriman');
Route::get('/tarifHarga', [MainController::class, 'tarifHarga'])->name('tarifHarga');
Route::get('/tabelRiwayat', [MainController::class, 'tabelRiwayat'])->name('tabelRiwayat');

//data paket
Route::get('/dataPaketProses', [MainController::class, 'dataPaketProses'])->name('dataPaketProses');
Route::post('/simpanPaket', [MainController::class, 'storePaket'])->name('simpanPaket');
Route::get('/data_paket/hapusPaket/{id}', [MainController::class, 'destroyPaket'])->name('hapusPaket');
Route::get('/data_paket/editDataPaket/{id}', [MainController::class, 'editPaket'])->name('editPaket');
Route::post('/data_paket/updatePaket/{id}', [MainController::class, 'updatePaket'])->name('updatePaket');

//data track
Route::post('/trackingHistory', [MainController::class, 'trackingHistoryProses'])->name('trackingHistory');
Route::post('/simpanTrack', [MainController::class, 'storeTrack'])->name('simpanTrack');
Route::get('/data_Track/hapusTrack/{id}', [MainController::class, 'destroyTrack'])->name('hapusTrack');
Route::get('/data_Track/editDataTrack/{id}', [MainController::class, 'editTrack'])->name('editTrack');
Route::post('/data_Track/updateTrack/{id}', [MainController::class, 'updateTrack'])->name('updateTrack');

//data pengiriman
Route::get('/pengirimanProses', [PengirimanController::class, 'pengirimanProses'])->name('pengirimanProses');
Route::post('/simpanPengiriman', [PengirimanController::class, 'storePengiriman'])->name('simpanPengiriman');
Route::get('/data_Pengiriman/hapusPengiriman/{id}', [PengirimanController::class, 'destroyPengiriman'])->name('hapusPengiriman');
Route::get('/data_Pengiriman/editDataPengiriman/{id}', [PengirimanController::class, 'editPengiriman'])->name('editPengiriman');
Route::post('/data_Pengiriman/updatePengiriman/{id}', [PengirimanController::class, 'updatePengiriman'])->name('updatePengiriman');

Route::get('/uas', [MainController::class, 'uas'])->name('uas');
Route::post('/storeUas', [MainController::class, 'storeUas'])->name('storeUas');
