<?php

use Illuminate\Support\Facades\Route;

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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('nama-siswa', [App\Http\Controllers\SiswaController::class, 'nama']);
Route::get('alamat', [App\Http\Controllers\SiswaController::class, 'alamat']);

Route::get('namaguru', [App\Http\Controllers\GuruController::class, 'namaguru']);
Route::get('mapel', [App\Http\Controllers\GuruController::class, 'mapel']);

Route::resource('/makanan', App\Http\Controllers\MakananController::class);
Route::resource('/pesanan', App\Http\Controllers\PesananController::class);
Route::resource('/mobil', App\Http\Controllers\MobilController::class);
?>