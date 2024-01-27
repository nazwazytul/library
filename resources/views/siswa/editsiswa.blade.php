<form action="/siswa/{{$data->id_siswa}}" method="post">
    @csrf
    @method('put')
    <div class="mb-3">
    <h1>id: {{ $data->id_siswa }}</h1>
    </div>
    <div class="mb-3">
        <label for="id_siswa" class="form-label">id_siswa</label>
        <input type="text" name="id_siswa" class="form-control" id="id_siswa" value="{{$data->id_siswa}}">
    </div>
    <div class="mb-3">
        <label for="nama_siswa" class="form-label">nama_siswa</label>
        <input type="text" name="nama_siswa" class="from-control"id="nama_siswa" value="{{$data->nama_siswa}}">
    </div>
    <div class="mb-3">
        <label for="kelas" class="form-label">kelas</label>
        <input type="text" name="kelas" class="from-control"id="kelas" value="{{$data->kelas}}">  
    </div>
    <div class="mb-3">
        <label for="alamat" class="form-label">alamat</label>
        <input type="text" name="alamat" class="from-control"id="stok" value="{{$data->alamat}}">       
    </div>
    <div class="mb-3">
        <label for="no_telp" class="form-label">no_telp</label>
        <input type="text" name="no_telp" class="from-control"id="no_telp" value="{{$data->no_telp}}">       
    </div>
    <button type="submit">Simpan</button>  
</form>
