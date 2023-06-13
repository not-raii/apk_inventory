<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Supplies extends Model
{
    use HasFactory;

    public function code()
    {
        return $this->belongsTo(Codes::class, 'id_kode', 'id');
    }
}
