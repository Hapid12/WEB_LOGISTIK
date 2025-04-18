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
// login
Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login']);

// register
Route::get('/register', [AuthController::class, 'showRegisterForm'])->name('register');
Route::post('/register', [AuthController::class, 'register']);

// logout
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

// profile
Route::get('/profile', [Authcontroller::class, 'profile'])->name('profile');
Route::put('/profile/{id}', [Authcontroller::class, 'updateProfile'])->name('profile.update');

// Protected route
Route::get('/home', function () {
    return view('home');
})->middleware('auth');

// home
Route::get('/home', [MainController::class, 'home'])->name('home');

// data pengirim
Route::get('/dataPengirim', [MainController::class, 'dataPengirim'])->name('dataPengirim');
Route::post('/simpanPengirim', [MainController::class, 'storePengiriman'])->name('simpanPengirim');

// tracking
Route::get('/tracking', [MainController::class, 'tracking'])->name('tracking');
Route::get('/simpanTrack', [MainController::class, 'tracking'])->name('simpanTrack');

// history
Route::get('/history', [MainController::class, 'history'])->name('history');

// tarif
Route::get('/tarifHarga', [MainController::class, 'tarifHarga'])->name('tarifHarga');
