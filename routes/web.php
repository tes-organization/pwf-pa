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

<<<<<<< HEAD
//user
Route::get('/basedashboard', function () {
    return view('./base/basedashboard');
});
Route::get('/pengajuan-user', function () {
    return view('pengajuan-user');
});
Route::get('/tambah-pengajuan-user', function () {
    return view('tambah-pengajuan-user');
});
Route::get('/bantuan-user', function () {
    return view('bantuan-user');
});
=======
// Register
Route::get('/registrasi',[AutentikasiController::class, 'viewRegistrasi']);
Route::post('/registrasi',[AutentikasiController::class, 'registrasi']);
>>>>>>> origin/raya

// Login
Route::get('/masuk',[AutentikasiController::class, 'viewMasuk'])->name('login');
Route::post('/masuk',[AutentikasiController::class, 'masuk']);
Route::post('/keluar',[AutentikasiController::class, 'keluar']);

//menampilkan spot
Route::get('/spot-staff',[SpotController::class, 'indexstaff']);
Route::get('/spot',[SpotController::class, 'indexuser'])->middleware('auth');
Route::get('/spot-guest',[SpotController::class, 'indexguest']);

//menampilkan pengajuan
Route::get('/pengajuan',[PengajuanController::class, 'indexuser']);
Route::get('/pengajuan-staff',[PengajuanController::class, 'indexstaff']);

//menambah pengajuan
Route::post('/tambah-pengajuan-user/store',[PengajuanController::class,'store']);

//terima pengajuan
Route::get('/terima-pengajuan-user/{no_pengajuan}',[PengajuanController::class,'updateterima']);

//tolak pengajuan
Route::get('/tolak-pengajuan-user/{no_pengajuan}',[PengajuanController::class,'updatetolak']);

//hapus spot
Route::get('/hapus-spot/{no_pengajuan}',[SpotController::class,'destroy']);