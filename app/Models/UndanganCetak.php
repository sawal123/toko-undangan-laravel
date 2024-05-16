<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UndanganCetak extends Model
{
    use HasFactory;

    protected $fillable = ['uid_undangan' , 'stok', 'terjual', 'harga', 'deskripsi','favorite'];

    public function undangan()
    {
        return $this->belongsTo(Undangan::class, 'uid_undangan', 'uuid');
    }


}
