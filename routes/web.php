<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;


use App\Http\Controllers\KendaraanController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\JenisPerawatanController;



Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', [HomeController::class, "index"])->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');


    Route::get("/kendaraan", [KendaraanController::class, "index"])->name("kendaraan.index");
    Route::get("/tambah_kendaraan", [KendaraanController::class, "tambah"])->name("kendaraan.tambah");

    Route::get("/tambah_jenis_perawatan", [JenisPerawatanController::class, "tambah"])->name("tambah.jenis.perawatan");
    Route::post("/tambah_jenis_perawatan", [JenisPerawatanController::class, "aksi_tambah"])->name("aksi.tambah.jenis_perawatan");

    Route::post("/tambah_kendaraan", [KendaraanController::class, "aksi_tambah"])->name("aksi.tambah.kendaraan");

});


require __DIR__.'/auth.php';
