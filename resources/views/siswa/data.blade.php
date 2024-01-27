@extends('layouts\main')

@section('konten')
    <div class="row">
        <div class="col-xs-12">
            <div>
            <a href="siswa/create" class="btn btn-success">tambah</a>
            <table id="table-siswa" class="table table-striped table bordered table-hover">
                <thead>
                    <tr>
                        <th>id_siswa</th>
                        <th>nama_siswa</th>
                        <th>kelas</th>
                        <th>alamat</th>
                        <th>no_telp</th>
                        
                        
                    </tr>
                </thead>
                @foreach ($dataSiswa as $siswa)
                    <tbody>
                        <tr>
                            <td>{{$loop->iteration}}</td>
                            <td>{{$siswa->id_siswa}}</td>
                            <td>{{$siswa->nama_siswa}}</td>
                            <td>{{$siswa->kelas}}</td>
                            <td>{{$siswa->alamat}}</td>
                            <td>{{$siswa->no_telp}}</td>
                            <td>
                                <a class="btn btn-primary" href="siswa/{{$siswa->id_siswa}}"><i class="ace-icon fa fa-search-plus"></i></a>
                                <a class="btn btn-warning" href="siswa/{{$siswa->id_siswa}}/edit"><i class="ace-icon fa fa-pencil"></i></a>
                                <a class="btn btn-danger"href="siswa/delete/{{$siswa->id_siswa}}" onclick="return confirm('apakah anda ingin menghapus data ini')";><i class="ace-icon fa fa-trash"></i></a>
                            </td>
                        </tr>
                    </tbody>
                @endforeach
            </table>
            </div>
        </div>
    </div>
@endsections