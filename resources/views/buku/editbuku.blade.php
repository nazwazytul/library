<form action="/buku/{{$data->id_buku}}" method="post">
    @csrf
    @method('put')
    <div class="mb-3">
    <h1>id_buku: {{ $data->id_buku }}</h1>
    </div>
    <div class="mb-3">
        <label for="judul" class="form-label">judul</label>
        <input type="text" name="judul" class="form-control" id="judul" value="{{$data->judul}}">
    </div>
    <div class="mb-3">
        <label for="tahun_terbit" class="form-label">penerbit</label>
        <input type="text" name="penerbit" class="from-control"id="penerbit" value="{{$data->penerbit}}">  
    </div>
    <div class="mb-3">
        <label for="stok" class="form-label">stok</label>
        <input type="text" name="stok" class="from-control"id="stok" value="{{$data->stok}}">       
    </div>
    <button type="submit">Simpan</button>  
</form>
