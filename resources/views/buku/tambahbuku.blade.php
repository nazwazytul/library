@extends('layouts.main')
@section('konten')
<form action="/buku/store" method="post">
    @csrf
    <div class="mb-3">
        <label for="id_buku" class="form-label">id_buku</label>
        <input type="text" name="id_buku" class="form-control" id="id_buku">
    </div>
    <div class="mb-3">
        <label for="judul" class="form-label">Judul</label>
        <input type="text" name="judul" class="form-control" id="judul">
    </div>
    <div class="mb-3">
        <label for="penerbit" class="form-label">penerbit</label>
        <input type="text" name="penerbit" class="form-control" id="penerbit">
    </div>
    <div class="mb-3">
        <label for="stok" class="form-label">stok</label>
        <input type="text" name="stok" class="form-control" id="stok">
    </div>
    <button type="submit">Simpan</button>
</form>   
@endsection
