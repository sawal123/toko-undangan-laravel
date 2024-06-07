<?php

namespace App\Http\Controllers;

use App\Models\Slide;
use App\Models\Undangan;
use Illuminate\Http\Request;
use App\Models\UndanganCetak;
use App\Models\ProductGalerry;
use App\Models\KategoriUndangan;

use App\Models\JenisUndanganCetak;
use App\Http\Controllers\Controller;
use function PHPUnit\Framework\isEmpty;

class IndexController extends Controller
{
    //

    public function index()
    {
        $kategori = KategoriUndangan::orderBy('kategory', 'asc')->get();
        $jenis = JenisUndanganCetak::orderBy('jenis', 'asc')->get();

        $undangan = UndanganCetak::join('undangans', 'undangans.uuid', '=', 'undangan_cetaks.uid_undangan')
        ->leftJoin('product_galerries', function ($join) {
            $join->on('product_galerries.undangan_uuid', '=', 'undangans.uuid')
                ->whereRaw('product_galerries.id = (select id from product_galerries where undangan_uuid = undangans.uuid limit 1)');
        })
        ->join('jenis_undangan_cetaks', 'jenis_undangan_cetaks.uuid', '=', 'undangans.jenis')
        ->select('undangans.uuid', 'name', 'stok', 'harga', 'gambar', 'slug')
        ->where('undangan_cetaks.favorite', 'Y')
        ->orderBy('undangans.name', 'asc')->get();
        return view('frontend.index', [
            'kategory' => $kategori,
            'jenis' => $jenis,
            'undangan'=> $undangan
        ]);
    }
    public function undanganCetak($product = null)
    {
        // dd($product);
        // $product = ProductGalerry::select('gambar', 'undangan_uuid')->get();
        $slide = Slide::orderBy('sort', 'asc')->get();
        if ($product === null) {
            $undangan = UndanganCetak::join('undangans', 'undangans.uuid', '=', 'undangan_cetaks.uid_undangan')
                ->leftJoin('product_galerries', function ($join) {
                    $join->on('product_galerries.undangan_uuid', '=', 'undangans.uuid')
                        ->whereRaw('product_galerries.id = (select id from product_galerries where undangan_uuid = undangans.uuid limit 1)');
                })
                ->select('uuid', 'name', 'stok', 'harga', 'gambar', 'slug')
                ->orderBy('undangans.name', 'asc')->get();

            // dd($undangan);

        } else {
            $undangan = UndanganCetak::join('undangans', 'undangans.uuid', '=', 'undangan_cetaks.uid_undangan')
                ->leftJoin('product_galerries', function ($join) {
                    $join->on('product_galerries.undangan_uuid', '=', 'undangans.uuid')
                        ->whereRaw('product_galerries.id = (select id from product_galerries where undangan_uuid = undangans.uuid limit 1)');
                })
                ->join('jenis_undangan_cetaks', 'jenis_undangan_cetaks.uuid', '=', 'undangans.jenis')
                ->select('undangans.uuid', 'name', 'stok', 'harga', 'gambar', 'slug')
                ->where('jenis_undangan_cetaks.jenis', $product)
                ->orderBy('undangans.name', 'asc')->get();
        }

        $jenis = JenisUndanganCetak::orderBy('jenis', 'asc')->get();
        return view('frontend.undangan', [
            'undangan' => $undangan,
            'jenis' => $jenis,
            'slide'=> $slide
        ]);
    }
    public function productDetail($product = null)
    {
        if ($product === null) {
            return abort('403');
        } else {
            $undangan = Undangan::join('undangan_cetaks', 'undangan_cetaks.uid_undangan', '=', 'undangans.uuid')
                ->select('uuid', 'undangans.name', 'undangan_cetaks.harga', 'undangan_cetaks.stok', 'undangans.jenis', 'undangans.kategory','undangan_cetaks.deskripsi')
                ->where('undangans.slug', $product)->first();
            $galery = ProductGalerry::where('undangan_uuid', $undangan->uuid)->select('undangan_uuid','gambar')->get();

            $serupa = UndanganCetak::join('undangans', 'undangans.uuid', '=', 'undangan_cetaks.uid_undangan')
            ->leftJoin('product_galerries', function ($join) {
                $join->on('product_galerries.undangan_uuid', '=', 'undangans.uuid')
                    ->whereRaw('product_galerries.id = (select id from product_galerries where undangan_uuid = undangans.uuid limit 1)');
            })
            ->join('jenis_undangan_cetaks', 'jenis_undangan_cetaks.uuid', '=', 'undangans.jenis')
            ->select('undangans.uuid', 'name', 'stok', 'harga', 'gambar', 'slug')
            ->where('undangans.jenis', $undangan->jenis)
            ->orderBy('undangans.name', 'asc')->get();

            // dd($serupa);
            return view('frontend.detail',[
                'undangan'=> $undangan,
                'galery'=> $galery,
                'serupa'=>$serupa
            ]);
        }
    }
    public function undanganDigital(){
        return view('frontend.stuck.noData');
    }
}
