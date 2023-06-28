<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BarangMasuk extends Model
{
    use HasFactory;

    protected $fillable = ['codes_id', 'barang_id', 'qty', 'tgl_masuk'];

    public function codes()
    {
        return $this->belongsTo(Codes::class, 'codes_id','id');
    }
}
