<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JenisUndanganCetak extends Model
{
    use HasFactory;

    protected $fillable = ['uuid', 'jenis'];

    public function undangan()
    {
        return $this->belongsTo(Undangan::class);
    }
}
