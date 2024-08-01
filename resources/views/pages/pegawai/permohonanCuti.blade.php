@extends('layouts.masterSidebar')

@section('title', 'Cek Status')
<!-- Menggunakan Bootstrap CDN -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
    integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
    integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous">
</script>

@section('content')
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <h2>Tambah Permohonan</h2>
                <form action="{{ route('permohonan.store') }}" method="POST">
                    @csrf
                    <div class="form-group mb-3">
                        <label for="nama">Nama:</label>
                        <input type="text" name="nama" class="form-control" required>
                    </div>
                    <div class="form-group mb-3">
                        <label for="nip">NIP:</label>
                        <input type="text" name="nip" class="form-control" required>
                    </div>
                    <div class="form-group mb-3">
                        <label for="jabatan">Jabatan:</label>
                        <input type="text" name="jabatan" class="form-control" required>
                    </div>
                    <div class="form-group mb-3">
                        <label for="lama_cuti">Lama Cuti (hari):</label>
                        <input type="number" name="lama_cuti" class="form-control" required>
                    </div>
                    <div class="form-group mb-3">
                        <label for="alasan">Alasan:</label>
                        <textarea name="alasan" class="form-control" required></textarea>
                    </div>
                    <button type="submit" class="btn btn-success">Submit</button>
                </form>
            </div>
        </div>
    </div>
@endsection
