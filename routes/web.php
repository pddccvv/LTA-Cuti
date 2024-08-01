<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PermohonanController;



Route::get('/', function () {
    return view('index');
});

Route::get('/admin/dashboard', function () {
    return view('pages.admin.dashboardAdmin');
})->name("dashboard");

Route::get('/admin/verifikasi', function () {
    return view('pages.admin.verifikasi');
})->name("verifikasi");

Route::get('/admin/data', function () {
    return view('pages.admin.dataPegawai');
})->name("pegawai");


Route::resource('permohonan', PermohonanController::class);