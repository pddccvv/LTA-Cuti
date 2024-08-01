<?php

use Illuminate\Support\Facades\Route;


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

Route::get('/pegawai/cekstatus', function () {
    return view('pages.admin.cekStatus');
})->name("status");

Route::get('/pegawai/permohonan', function () {
    return view('pages.pegawai.permohonanCuti');
})->name("permohonan");