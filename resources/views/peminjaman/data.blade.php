@section('konten')
    <div class="row">
        <div class="col-xs-12">
            <div>
            <a href="peminjaman/create" class="btn btn-success">tambah</a>
            <table id="table-peminjaman" class="table table-striped table bordered table-hover">
                <thead>
                    <tr>
                        <th>id_peminjaman</th>
                        <th>id_siswa</th>
                        <th>id_buku</th>
                        <th>id_petugas</th>
                        <th>tanggal_peminjaman</th>
                        <th>tanggal_pengembalian</th>
                        <th>telat </th>
                        <th>denda</th>
                        
                        
                    </tr>
                </thead>
                @foreach ($datapeminjaman as $peminjaman)
                    <tbody>
                        <tr>
                            <td>{{$loop->iteration}}</td>
                            <td>{{$peminjaman->id_peminjaman}}</td>
                            <td>{{$peminjaman->id_siswa}}</td>
                            <td>{{$peminjaman->id_buku}}</td>
                            <td>{{$peminjaman->id_petugas}}</td>
                            <td>{{$peminjaman->tanggal_peminjaman}}</td>
                            <td>{{$peminjaman->tanggal_pengembalian}}</td>
                            <td>{{$peminjaman->telat}}</td>
                            <td>{{$peminjaman->denda}}</td>
                            <td>
                                <a class="btn btn-primary" href="peminjaman/{{$peminjaman->id_peminjaman}}"><i class="ace-icon fa fa-search-plus"></i></a>
                                <a class="btn btn-warning" href="peminjaman/{{$peminjaman->id_peminjaman}}/edit"><i class="ace-icon fa fa-pencil"></i></a>
                                <a class="btn btn-danger"href="peminjaman/delete/{{$peminjaman->id_peminjaman}}" onclick="return confirm('apakah anda ingin menghapus data ini')";><i class="ace-icon fa fa-trash"></i></a>
                            </td>
                        </tr>
                    </tbody>
                @endforeach
            </table>
            </div>
        </div>
    </div>
@endsection