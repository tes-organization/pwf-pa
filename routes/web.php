<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SpotController;
use App\Http\Controllers\PengajuanController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;

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
    return view('./landingPage/landingPage');
});
Route::get('/login', function () {
    return view('login');
});
Route::get('/spot-guest', function () {
    return view('spot-guest');
});

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

//staff
Route::get('/dashboard', function () {
    return view('dashboard-staff');
});

//menampilkan spot
Route::get('/spot-staff',[SpotController::class, 'indexstaff']);
Route::get('/spot-user',[SpotController::class, 'indexuser']);
Route::get('/spot-guest',[SpotController::class, 'indexguest']);

//menampilkan pengajuan
Route::get('/pengajuan-user',[PengajuanController::class, 'indexuser']);

//menambah pengajuan
Route::post('/tambah-pengajuan-user/store',[PengajuanController::class,'store']);

//terima pengajuan
Route::post('/terima-pengajuan-user',[PengajuanController::class,'updateterima']);
//tolak pengajuan
Route::post('/tolak-pengajuan-user',[PengajuanController::class,'updatetolak']);