
@section('konten')
<form action="/buku/store" method="post">
    @csrf
    <div class="mb-3">
        <label for="id_peminjaman" class="form-label">id_peminjaman</label>
        <input type="text" name="id_peminjaman" class="form-control" id="id_peminjaman">
    </div>
    <div class="mb-3">
        <label for="id_buku" class="form-label">id_buku</label>
        <input type="text" name="id_buku" class="form-control" id="id_buku">
    </div>
    <div class="mb-3">
        <label for="id_siswa" class="form-label">id_siswa</label>
        <input type="text" name="id_siswa" class="form-control" id="id_siswa">
    </div>
    <div class="mb-3">
        <label for="id_petugas" class="form-label">id_petugas</label>
        <input type="text" name="id_petugas" class="form-control" id="id_petugas">
    </div>
    <div class="mb-3">
        <label for="tanggal_peminjaman" class="form-label">tanggal_peminjaman</label>
        <input type="text" name="tanggal_peminjaman" class="form-control" id="tanggal_peminjaman">
    </div>
    <div class="mb-3">
        <label for="tanggal_pengembalian" class="form-label">tanggal_pengembalian</label>
        <input type="text" name="tanggal_pengembalian" class="form-control" id="tanggal_pengembalian">
    </div>
    <div class="mb-3">
        <label for="telat" class="form-label">telat</label>
        <input type="text" name="telat" class="form-control" id="telat">
    </div>
    <div class="mb-3">
        <label for="denda" class="form-label">denda</label>
        <input type="text" name="denda" class="form-control" id="denda">
    <button type="submit">Simpan</button>
</form>   
@endsection
