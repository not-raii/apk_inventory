<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Category extends Model
{
    protected $table = "categories";
    protected $primaryKey = "id";
    protected $fillable = 
    [
        'id','nama_kategori'
    ];
    public function codes()
    {
        return $this->hasMany(Codes::class);
    }
}
