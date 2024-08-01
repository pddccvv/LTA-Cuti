<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PermohonanController;



Route::get('/', function () {
    return view('index');
});

Route::get('/admin/dashboard', function () {
    return view('pages.admin.dashboardAdmin');
})->name("dashboard");


Route::get('/admin/data', function () {
    return view('pages.admin.dataPegawai');
})->name("pegawai");


// Rute untuk melihat daftar permohonan
Route::get('/admin/verifikasi', [PermohonanController::class, 'index'])->name('permohonan.index');

// Rute untuk menampilkan formulir pembuatan permohonan
Route::get('/pegawai/permohonan', [PermohonanController::class, 'create'])->name('permohonan.create');

// Rute untuk menyimpan permohonan baru
Route::post('/admin/permohonan', [PermohonanController::class, 'store'])->name('permohonan.store');

// Rute untuk melihat status permohonan
Route::get('/pegawasi/status/', [PermohonanController::class, 'cekStatus'])->name('pegawai.status');
Route::patch('/admin/permohonan/{id}/status', [PermohonanController::class, 'updateStatus'])->name('permohonan.updateStatus');