<?php

namespace App\Http\Controllers;
use App\Models\PeminjamanModel;

use Illuminate\Http\Request;

class PeminjamanController extends Controller
{
    //index
    public function index(){
        //tampil data
        $data = [
        'title'=>'Data Peminjaman',
        //'dataPeminjaman'=> PeminjamanModel::all()
        'dataBuku'=> PeminjamanModel::orderBy('id_peminjaman','desc')->paginate(5)
        ];
        return View('peminjaman.data', $data);
    }

    public function create(){
        //menuju form tambah
        return View('peminjaman.tambahpeminjaman');
    }

    public function store(Request $r){
        //simpan data
        $r->validate([
            'id_peminjaman'=>'required',
            'id_siswa'=>'required',
            'id_buku'=>'required',
            'id_buku'=>'required',
            'id_petugas'=>'required',
            'tanggal peminjaman'=>'required',
            'tanggal pengembalian'=>'required',
            'telat'=>'required',
            'denda'=>'required',
        ]);
        $data=[
            'id_peminjaman'=> $r->input('id_peminjaman'),
            'id_siswa'=> $r->input('id_siswa'),
            'id_buku'=> $r->input('id_buku'),
            'id_petugas'=> $r->input('id_petugas'),
            'tanggal peminjaman'=> $r->input('tanggal peminjaman'),
            'tanggal pengembalian'=> $r->input('tanggal pengembalian'),
            'telat'=> $r->input('telat'),
            'denda'=> $r->input('denda'),
            
        ];
        PeminjamanModel::create($data);
        return redirect('peminjamnan')->with('msg',"Data Berhasil disimpan");
    }

    //untuk detail data
    public function show($id_peminjaman){
    $data = PeminjamanModel::where('id_peminjaman',$id_peminjaman)->first();
        return View('peminjaman.detail')->with('data',$data);
    }
    
    //untuk menghapus data 
    public function destroy($id_peminjaman){
        PeminjamanModel::where('id_peminjaman',$id_peminjaman)->delete();
        return redirect('/peminjaman')->with('msg',"Data Berhasil dihapus");
    }

    //menuju kr form edit
    public function edit($id_peminjaman){
        $data = PeminjamanModel::where('id_peminjaman',$id_peminjaman)->first();
        return View('peminjaman.editpeminjaman')->with('data',$data);
    }
    //proses update data
    public function update(Request $r,$id_peminjaman){
        //simpan update data
        $r->validate([
            'id_peminjaman'=>'required',
            'id_siswa'=>'required',
            'id_buku'=>'required',
            'id_buku'=>'required',
            'id_petugas'=>'required',
            'tanggal peminjaman'=>'required',
            'tanggal pengembalian'=>'required',
            'telat'=>'required',
            'denda'=>'required',
        ]);
        $data=[
            'id_peminjaman'=> $r->input('id_peminjaman'),
            'id_siswa'=> $r->input('id_siswa'),
            'id_buku'=> $r->input('id_buku'),
            'id_petugas'=> $r->input('id_petugas'),
            'tanggal peminjaman'=> $r->input('tanggal peminjaman'),
            'tanggal pengembalian'=> $r->input('tanggal pengembalian'),
            'telat'=> $r->input('telat'),
            'denda'=> $r->input('denda'),
        ];
        PeminjamanModel::where('id_peminjaman',$id_peminjaman)->update($data);
        return redirect('peminjaman')->with('msg',"Data Berhasil diubah!");
}
}