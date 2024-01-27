<form action="/peminjaman/{{$data->id_peminjaman}}" method="post">
    @csrf
    @method('put')
    <div class="mb-3">
    <h1>id_peminjaman: {{ $data->id_peminjaman }}</h1>
    </div>
    <div class="mb-3">
        <label for="id_peminjaman" class="form-label">id_peminjaman</label>
        <input type="text" name="id_peminjaman" class="form-control" id="id_peminjaman" value="{{$data->id_peminjaman}}">
    </div>
    <div class="mb-3">
        <label for="id_siswa" class="form-label">id_siswa</label>
        <input type="text" name="id_siswa" class="from-control"id="id_siswa" value="{{$data->id_siswa}}">  
    </div>
    <div class="mb-3">
        <label for="id_buku" class="form-label">id_buku</label>
        <input type="text" name="id_buku" class="from-control"id="id_buku" value="{{$data->id_buku}}">       
    </div>
    <div class="mb-3">
        <label for="id_petugas" class="form-label">id_petugas</label>
        <input type="text" name="id_petugas" class="from-control"id="id_petugas" value="{{$data->id_petugas}}">
    </div>
    <div class="mb-3">
        <label for="tanggal peminjaman" class="form-label">tanggal_peminjaman</label>
        <input type="text" name="tanggal_peminjaman" class="from-control"id="tanggal_peminjaman" value="{{$data-"tanggal_peminjaman}}">
        </div>
        <div class="mb-3">
        <label for="tanggal_pengembalian" class="form-label">tanggal_pengembalian</label>
        <input type="text" name="tanggal_pengembalian" class="from-control"id="tanggal_pengembalian" value="{{$data-"tanggal_pengembalian}}">
    </div>
    <div class="mb-3">
        <label for="telat" class="form-label">telat</label>
        <input type="text" name="telat" class="from-control"id="telat" value="{{$data-"telat}}">
    </div>
    <div class="mb-3">
        <label for="denda" class="form-label">denda</label>
        <input type="text" name="denda" class="from-control"id="denda" value="{{$data-"denda}}">                
    <button type="submit">Simpan</button>  
</form>
