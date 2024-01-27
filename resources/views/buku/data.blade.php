@section('konten')
    <div class="row">
        <div class="col-xs-12">
            <div>
            <a href="buku/create" class="btn btn-success">tambah</a>
            <table id="table-bukus" class="table table-striped table bordered table-hover">
                <thead>
                    <tr>
                        <th>id_buku</th>
                        <th>judul</th>
                        <th>penerbit</th>
                        <th>stok</th>
                        
                        
                    </tr>
                </thead>
                @foreach ($dataBuku as $buku)
                    <tbody>
                        <tr>
                            <td>{{$loop->iteration}}</td>
                            <td>{{$buku->id_buku}}</td>
                            <td>{{$buku->judul}}</td>
                            <td>{{$buku->penerbit}}</td>
                            <td>{{$buku->stok}}</td>
                            <td>
                                <a class="btn btn-primary" href="buku/{{$buku->id_buku}}"><i class="ace-icon fa fa-search-plus"></i></a>
                                <a class="btn btn-warning" href="buku/{{$buku->id_buku}}/edit"><i class="ace-icon fa fa-pencil"></i></a>
                                <a class="btn btn-danger"href="buku/delete/{{$buku->id_buku}}" onclick="return confirm('apakah anda ingin menghapus data ini')";><i class="ace-icon fa fa-trash"></i></a>
                            </td>
                        </tr>
                    </tbody>
                @endforeach
            </table>
            </div>
        </div>
    </div>
@endsection