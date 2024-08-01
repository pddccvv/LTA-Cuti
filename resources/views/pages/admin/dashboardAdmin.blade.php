@extends('layouts.masterSidebar')

@section('title', 'Dashboard')

<!-- Menggunakan Bootstrap CDN -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
    integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
    integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

@section('content')
    <div class="container mt-4">
        <h3>Welcome to Dashboard</h3>
        <div class="row gap-2 mb-4">
            <div class="col border rounded-4 p-3">
                <span>Menunggu Verifikasi</span> <br>
                <span>0</span>
            </div>
            <div class="col border rounded-4 p-3">
                <span>Sedang Verifikasi</span> <br>
                <span>0</span>
            </div>
            <div class="col border rounded-4 p-3">
                <span>Usulan Diterima</span> <br>
                <span>0</span>
            </div>
            <div class="col border rounded-4 p-3">
                <span>Usulan Ditolak</span> <br>
                <span>0</span>
            </div>
        </div>
        <div class="border rounded-4 p-3 mb-4">
            <span>Shortcut</span>
            <div class="mt-2">
                <button class="btn btn-outline-danger text-dark">Verifikasi Permohonan</button>
                <button class="btn btn-outline-danger text-dark ms-2">Data Cuti Pegawai</button>
            </div>
        </div>
        <div class="row border rounded-4 p-3">
            <div class="col">
                <span>Syarat Cuti Tahunan</span>
                <p>Syarat...</p>
            </div>
            <div class="col"></div>
        </div>
    </div>
@endsection
