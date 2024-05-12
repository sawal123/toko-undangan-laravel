<?php

namespace App\Http\Controllers;

use App\Models\JenisUndanganCetak;
use App\Models\KategoriUndangan;
use App\Models\ProductGalerry;
use App\Models\UndanganCetak;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    //

    public function index()
    {
        $kategori = KategoriUndangan::orderBy('kategory', 'asc')->get();
        $jenis = JenisUndanganCetak::orderBy('jenis', 'asc')->get();
        return view('frontend.index', [
            'kategory' => $kategori,
            'jenis' => $jenis
        ]);
    }
    public function undanganCetak($product = null)
    {
        // dd($product);
        // $product = ProductGalerry::select('gambar', 'undangan_uuid')->get();
        if ($product === null) {
            $undangan = UndanganCetak::join('undangans', 'undangans.uuid', '=', 'undangan_cetaks.uid_undangan')
                // ->join('product_galerries', 'product_galerries.undangan_uuid','=', 'undangans.uuid')
                ->leftJoin('product_galerries', function ($join) {
                    $join->on('product_galerries.undangan_uuid', '=', 'undangans.uuid')
                        ->whereRaw('product_galerries.id = (select id from product_galerries where undangan_uuid = undangans.uuid limit 1)');
                })
                ->select('uuid', 'name', 'stok', 'harga', 'gambar', 'slug')
                ->orderBy('undangans.name', 'asc')->get();

            // dd($undangan);
            return view('frontend.undangan', [
                'undangan' => $undangan
            ]);
        }
    }
    public function productDetail($product = null)
    {
        if ($product === null) {
            return abort('403');
        } else {
            return view('frontend.detail');
        }
    }
}
