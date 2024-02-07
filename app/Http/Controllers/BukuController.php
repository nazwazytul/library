<?php

namespace App\Http\Controllers;
use App\Models\BukuModel;

use Illuminate\Http\Request;

class BukuController extends Controller
{
    //index
    public function index(){
        //tampil data
        $data = [
        'title'=>'Data Buku',
        //'dataBuku'=> BukuModel::all()
        'dataBuku'=> BukuModel::orderBy('id_buku','desc')->paginate(5)
        ];
        return View('buku.data', $data);
    }

    public function create(){
        //menuju form tambah
        return View('buku.tambahbuku');
    }

    public function store(Request $r){
        //simpan data
        $r->validate([
            'id_buku'=>'required|numeric',
            'judul'=>'required',
            'penerbit'=>'required',
            'stok'=>'required'
        ]);
        $data=[
            'id_buku'=> $r->input('id_buku'),
            'judul'=> $r->input('judul'),
            'penerbit'=> $r->input('penerbit'),
            'stok'=> $r->input('stok')
        ];
        BukuModel::create($data);
        return redirect('buku')->with('msg',"Data Berhasil disimpan");
    }

    //untuk detail data
    public function show($id){
    $data = BukuModel::where('id_buku',$id)->first();
        return View('buku.detail')->with('data',$data);
    }
    
    //untuk menghapus data 
    public function destroy($id){
        BukuModel::where('id_buku',$id)->delete();
        return redirect('/buku')->with('msg',"Data Berhasil dihapus");
    }

    //menuju kr form edit
    public function edit($id){
        $data = BukuModel::where('id_buku',$id)->first();
        return View('buku.editbuku')->with('data',$data);
    }
    //proses update data
    public function update(Request $r,$id){
        //simpan update data
        $r->validate([
            'judul'=>'required',
            'penerbit'=>'required',
            'stok'=>'required'
        ]);
        $data=[
            'judul'=> $r->input('judul'),
            'penerbit'=> $r->input('penerbit'),
            'stok'=> $r->input('stok')
        ];
        BukuModel::where('id_buku',$id)->update($data);
        return redirect('buku')->with('msg',"Data Berhasil diubah!");
}
}