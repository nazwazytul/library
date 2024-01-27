<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SiswaModel extends Model
{
    use HasFactory;
    use HasFactory;
    protected $table = 'siswas';
    protected $fillable = ['id_siswa','nama_siswa','kelas','alamat','no_telp'];
    
}