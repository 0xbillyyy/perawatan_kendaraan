<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;


use App\Http\Controllers\KendaraanController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\JenisPerawatanController;
use App\Http\Controllers\ServiceController;



Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', [HomeController::class, "index"])->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');


    Route::get("/kendaraan", [KendaraanController::class, "index"])->name("kendaraan.index");
    Route::get("/tambah_kendaraan", [KendaraanController::class, "tambah"])->name("kendaraan.create");
    Route::post('/kendaraan/store', [KendaraanController::class, 'store'])->name('kendaraan.store');
    Route::get("/kendaraan/edit/{id}", [KendaraanController::class, "edit"])->name("kendaraan.edit");
    Route::delete("/kendaraan/destroy/{id}", [KendaraanController::class, "destroy"])->name("kendaraan.destroy");
    Route::put("/kendaraan/update/{id}", [KendaraanController::class, "update"])->name("kendaraan.update");

    //added service in kendaraan
    Route::get("/kendaraan/service/{id}", [KendaraanController::class, "added_service"])->name("kendaraan.service");


    //added service
    Route::get('/service', [ServiceController::class, 'index'])->name('service.index');
    Route::get('/service/create', [ServiceController::class, 'create'])->name('service.create');
    Route::post('/service', [ServiceController::class, 'store'])->name('service.store');    
    Route::get('/service/{id}/edit', [ServiceController::class, 'edit'])->name('service.edit');
    Route::put('/service/{id}', [ServiceController::class, 'update'])->name('service.update');
    Route::delete('/service/{id}', [ServiceController::class, 'destroy'])->name('service.destroy');
    


    Route::get("/jenis_perawatan", [JenisPerawatanController::class, "index"])->name("jenis_perawatan");
    Route::get("/tambah_jenis_perawatan", [JenisPerawatanController::class, "tambah"])->name("tambah.jenis.perawatan");
    Route::post("/tambah_jenis_perawatan", [JenisPerawatanController::class, "aksi_tambah"])->name("aksi.tambah.jenis_perawatan");
    Route::delete('/jenis-perawatan/{id}', [JenisPerawatanController::class, 'destroy'])->name('jenis_perawatan.destroy');







});


require __DIR__.'/auth.php';
