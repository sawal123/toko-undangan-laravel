<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Undangan extends Model
{
    use HasFactory;
    protected $fillable = ['uuid', 'name', 'jenis', 'kategory', 'tag', 'gambar'];

    public function jenis()
    {
        return $this->hasOne(JenisUndanganCetak::class);
    }

    public function undanganGet()
    {
        return $this->join('jenis_undangan_cetaks', 'undangans.jenis', '=', 'jenis_undangan_cetaks.uuid')
            ->join('kategori_undangans', 'undangans.kategory', '=', 'kategori_undangans.uuid')
            ->join('undangan_cetaks', 'undangans.uuid', '=', 'undangan_cetaks.uid_undangan')
            ->select(
                'undangans.uuid',
                'undangans.name',
                'jenis_undangan_cetaks.jenis',
                'kategori_undangans.kategori_undangan',
                'undangans.tag',
                'undangans.gambar',
                'undangan_cetaks.stok',
                'undangan_cetaks.terjual',
                'undangan_cetaks.harga',
                'undangan_cetaks.deskripsi',
                'undangans.created_at',
            )
            ->get();
    }
}
