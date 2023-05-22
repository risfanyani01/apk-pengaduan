<?php

namespace App\Models;

use App\Models\Cabang;
use App\Models\Kategori;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Pengaduan extends Model
{
    use HasFactory;
    protected $fillable = [
        'kategori_id',
        'cabang',
        'npa',
        'nama',
        'alamat',
        'tanggal_pengajuan',
        'gambar'
    ];

    public function kategori()
    {
        return $this->belongsTo(Kategori::class, 'kategori_id');
    }
    
    public function cabang()
    {
        return $this->belongsTo(Cabang::class, 'cabang_id');
    }
}
