<?php

namespace App\Models;

use App\Models\Category;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Kyslik\ColumnSortable\Sortable;

class Codes extends Model
{
    use HasFactory;
    use Sortable;

    protected $guarded = ['id'];
    protected $fillable = [
        'kode_barang',
        'gambar_barang',
        'nama_barang',
        'id_categories'
    ];

    public $sortable = [
        'kode_barang',
        'nama_barang',
        'id_categories'
    ];

    public function categories()
    {
        return $this->belongsTo(Category::class, 'id_categories', 'id');
    }
}
