<?php

namespace App\Models;

use App\Models\Pengaduan;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Cabang extends Model
{
    
    use HasFactory;
    protected $fillable = [
        'nama_cabang',
    ];

    // Relasi Dengan Tabel Pengaduan
    public function pengaduan(){
        $this->hasMany(Pengaduan::class, 'pengaduan_id');
    }
}
