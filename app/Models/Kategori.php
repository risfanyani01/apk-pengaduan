<?php

namespace App\Models;

use App\Models\Pengaduan;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Kategori extends Model
{
    use HasFactory;
    protected $fillable = [
        'jenis_permintaan',
    ];

    public function pengaduan(){
        return $this->hasMany(Pengaduan::class, 'pengaduan_id');
    }
    
}
