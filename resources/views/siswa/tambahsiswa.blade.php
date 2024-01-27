@extends('layouts.main')

@section('konten')
<form action="/siswa/store" method="post">
    @csrf
    <div class="mb-3">
        <label for="id" class="form-label">Id_siswa</label>
        <input type="text" name="id" class="form-control" id="id">
    </div>
    <div class="mb-3">
        <label for="nama_siswa" class="form-label">nama_siswa</label>
        <input type="text" name="nama_siswa" class="form-control" id="nama_siswa">
    </div>
    <div class="mb-3">
        <label for="kelas" class="form-label">kelas</label>
        <input type="text" name="kelas" class="form-control" id="kelas">
    </div>
    <div class="mb-3">
        <label for="alamat" class="form-label">alamat</label>
        <input type="text" name="alamat" class="form-control" id="alamat">
    </div>
    <div class="mb-3">
        <label for="no_telp" class="form-label">no_telp</label>
        <input type="text" name="no_telp" class="form-control" id="no_telp">
    </div>
    <button type="submit">Simpan</button>
</form>   
@endsection
