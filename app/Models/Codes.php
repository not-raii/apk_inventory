<?php

namespace App\Models;

use App\Models\Category;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Codes extends Model
{
    use HasFactory;

    protected $fillable = [
        'kode_barang',
        'nama_barang',
        'jumlah_barang',
        'harga',
        'id_categories'
    ];

    public function categories()
    {
        return $this->belongsTo(Category::class, 'id_categories', 'id');
    }
}
