<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tentang_gas extends Model
{
    use HasFactory;

    protected $table = 'tentang_gas';
    protected $fillable = ['deskripsi', 'kategori', 'gambar'];

    public function detail_tentang()
    {
        return $this->belongsTo(Detail_tentang::class);
    }
}
