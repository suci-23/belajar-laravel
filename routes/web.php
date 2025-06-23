<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BelajarController;

Route::get('/', function () {
    return view('welcome');
});

//get: hanya bisa melihat dan membaca
//post: tambah dan ubah data(form)
//put: ubah data(form)
//delete: hapus data(form)

Route::get('belajar', [BelajarController::class, 'index'])->name('belajar');

Route::get('tambah', [BelajarController::class, 'tambah'])->name('tambah');
Route::post('tambah-action', [BelajarController::class, 'tambahAction'])->name('tambah-action');

Route::get('kurang', [BelajarController::class, 'kurang'])->name('kurang');
Route::post('kurang-action', [BelajarController::class, 'kurangAction'])->name('kurang-action');

Route::get('kali', [BelajarController::class, 'kali'])->name('kali');
Route::post('kali-action', [BelajarController::class, 'kaliAction'])->name('kali-action');

Route::get('bagi', [BelajarController::class, 'bagi'])->name('bagi');
Route::post('bagi-action', [BelajarController::class, 'bagiAction'])->name('bagi-action');

Route::get('duar/{id}', [BelajarController::class, 'trololo']);
Route::get('edit', [BelajarController::class, 'update']);
