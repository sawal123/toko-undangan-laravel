<?php

namespace App\Models;

use App\Models\ProductGalerry;
use App\Models\JenisUndanganCetak;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Undangan extends Model
{
    use HasFactory;
    protected $fillable = ['uuid', 'name', 'jenis', 'kategory', 'tag', 'slug'];

    // public function jenis()
    // {
    //     return $this->belongsTo(JenisUndanganCetak::class, 'jenis', 'uuid');
    // }
    public function product_galerries()
    {
        return $this->hasMany(ProductGalerry::class);
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
                'kategori_undangans.kategory',
                'undangans.tag',
                'undangans.slug',
                // 'product_galerries.gambar',
                'undangan_cetaks.stok',
                'undangan_cetaks.terjual',
                'undangan_cetaks.harga',
                'undangan_cetaks.deskripsi',
                'undangans.created_at',
                // DB::raw('GROUP_CONCAT(product_galerries.gambar) as gambar_array')
            )->groupBy(
                'undangans.uuid',
                'undangans.name',
                'jenis_undangan_cetaks.jenis',
                'kategori_undangans.kategory',
                'undangans.tag',
                'undangans.slug',
                // 'product_galerries.gambar',
                'undangan_cetaks.stok',
                'undangan_cetaks.terjual',
                'undangan_cetaks.harga',
                'undangan_cetaks.deskripsi',
                'undangans.created_at',
            )
            ->get();
    }
}

