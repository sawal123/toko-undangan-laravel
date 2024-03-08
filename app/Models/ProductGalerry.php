<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductGalerry extends Model
{
    use HasFactory;
    protected $fillable = ['gambar', 'undangan_uuid'];

    public function undangan(){
        return $this->belongsToMany(Undangan::class, 'undangans');
    }
}
