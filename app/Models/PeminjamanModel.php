<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PeminjamanModel extends Model
{
    use HasFactory;
    use HasFactory;
    protected $table = 'peminjaman';
    protected $fillable = ['id_peminjaman','id_siswa','id_buku','id_petugas','tanggal_peminjaman','tanggal_pengembalian','telat','denda'];
    
}