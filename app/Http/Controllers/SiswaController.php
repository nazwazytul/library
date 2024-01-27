<?php

namespace App\Http\Controllers;
use App\Models\siswaModel;

use Illuminate\Http\Request;

class SiswaController extends Controller
{
    //index
    public function index(){
        //tampil data
        $data = [
        'title'=>'Data Siswa',
        //'dataSiswa'=> SiswaModel::all()
        'dataSiswa'=>SiswaModel::orderBy('id_siswa','desc')->paginate(5)
        ];
        return View('Siswa.data', $data);
    }

    public function create(){
        //menuju form tambah
        return View('Siswa.tambahSiswa');
    }

    public function store(Request $r){
        //simpan data
        $r->validate([
            'id_siswa'=>'required|numeric',
            'nama_siswa'=>'required',
            'kelas'=>'required',
            'alamat'=>'required',
            'no_telp'=>'required'
        ]);
        $data=[
            'id_siswa'=> $r->input('id_siswa'),
            'nama_siswa'=> $r->input('nama_siswa'),
            'kelas'=> $r->input('kelas'),
            'alamat'=> $r->input('alamat'),
            'no_telp'=> $r->input('no_telp')
        ];
        SiswaModel::create($data);
        return redirect('Siswa')->with('msg',"Data Berhasil disimpan");
    }

    //untuk detail data
    public function show($id){
        $data = SiswaModel::where('id_siswa',$id)->first();
        return View('Siswa.detail')->with('data',$data);
    }
    
    //untuk menghapus data 
    public function destroy($id){
        SiswaModel::where('id_siswa',$id)->delete();
        return redirect('/Siswa')->with('msg',"Data Berhasil dihapus");
    }

    //menuju kr form edit
    public function edit($id){
        $data = SiswaModel::where('id_siswa',$id)->first();
        return View('Siswa.editSiswa')->with('data',$data);
    }
    //proses update data
    public function update(Request $r,$id){
        //simpan update data
        $r->validate([
            'id_siswa'=>'required',
            'nama_siswa'=>'required',
            'kelas'=>'required',
            'alamat'=>'required',
            'no_telp'=>'required'
        ]);
        $data=[
            'id_siswa'=> $r->input('id_siswa'),
            'nama_siswa'=> $r->input('nama_siswa'),
            'kelas'=> $r->input('kelas'),
            'alamat'=> $r->input('alamat'),
            'no_telp'=> $r->input('no_telp')
        ];
        SiswaModel::where('id_siswa',$id)->update($data);
        return redirect('Siswa')->with('msg',"Data Berhasil diubah!");
}
}