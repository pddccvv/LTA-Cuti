@extends('layouts.master')

@section('title', 'Welcome')

@section('content')
    <div class="d-flex justify-content-center align-content-center">
        <h2 class="text-center">Cuti Kepegawaian </br> Pengadilan Tinggi Pontianak</span>
    </div>
    <div class="d-flex justify-content-center align-content-center mt-5">
        <form class="w-25">
            <div class="mb-3">
                <label for="" class="form-label">Username</label>
                <input type="text" class="form-control">
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword" class="form-label">Password</label>
                <input type="password" class="form-control" id="exampleInputPassword">
            </div>
            <div class="text-center">
                <div class="mb-2">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
                <div>
                    <button type="submit" class="btn btn-success">Cuti Pegawai</button>
                </div>
            </div>
        </form>
    </div>
@endsection
