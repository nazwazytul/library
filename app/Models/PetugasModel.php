<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PetugasModel extends Model
{
    use HasFactory;
    use HasFactory;
    protected $table = 'petugas';
    protected $fillable = ['id_petugas','nama_petugas','no_telp'];
    
}