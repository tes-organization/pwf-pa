<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SpotController;
use App\Http\Controllers\PengajuanController;
use App\Http\Controllers\AutentikasiController;

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

//umum
Route::get('/', function () {
    return view('landingPage/landingPage');
});
Route::get('/spot-guest', function () {
    return view('guest/spot-guest');
});

// Register
Route::get('/registrasi',[AutentikasiController::class, 'viewRegistrasi']);
Route::post('/registrasi',[AutentikasiController::class, 'registrasi']);

// Login
Route::get('/masuk',[AutentikasiController::class, 'viewMasuk'])->name('login');
Route::post('/masuk',[AutentikasiController::class, 'masuk']);
Route::post('/keluar',[AutentikasiController::class, 'keluar']);

//Dasbor User
Route::middleware(['auth', 'cekrole:user'])->group(function () {
    Route::get('/dasbor-spot',[SpotController::class, 'indexuser']);
    Route::get('/dasbor-pengajuan',[PengajuanController::class, 'indexuser']);
    Route::get('/dasbor-bantuan',[PengajuanController::class, 'viewBantuan']);
    Route::get('/pengajuan',[PengajuanController::class, 'indexuser']);
});

// Dasbor Staff
Route::middleware(['auth', 'cekrole:staff'])->group(function () {
    Route::get('/pengajuan-staff',[PengajuanController::class, 'indexstaff']);
    Route::get('/spot-staff',[SpotController::class, 'indexstaff']);
    Route::get('/tolak-pengajuan-user/{no_pengajuan}',[PengajuanController::class,'updatetolak']);
    Route::get('/hapus-spot/{no_pengajuan}',[SpotController::class,'destroy']);
    Route::get('/terima-pengajuan-user/{no_pengajuan}',[PengajuanController::class,'updateterima']);
});

Route::get('/spot-guest',[SpotController::class, 'indexguest']);

