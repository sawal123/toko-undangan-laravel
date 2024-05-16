<?php

namespace App\Http\Controllers\Admin;

use App\Models\Undangan;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Models\UndanganCetak;
use App\Models\ProductGalerry;
use App\Models\KategoriUndangan;
use App\Models\JenisUndanganCetak;
use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Storage;
use File;


class UndanganCetakController extends Controller
{
    public function index()
    {
        // error_reporting(0);
        $jenis = JenisUndanganCetak::all();
        $kategori = KategoriUndangan::all();
        $undanganModel = new Undangan();
        $productGalery = ProductGalerry::all();
        // dd($undanganModel->undanganGet());


        return view('backend.undangancetak', [
            'jenis' => $jenis,
            'kategori' => $kategori,
            'undangan' => $undanganModel->undanganGet(),
            'galery' => $productGalery
        ]);
    }
    public function delete($uid)
    {
        $undangan = Undangan::where('uuid', $uid)->first();
        $undanganCetak = UndanganCetak::where('uid_undangan', $uid)->first();
        $galery = ProductGalerry::where('undangan_uuid', $undangan->uuid)->get();

        if ($galery) {
            foreach ($galery as $gal) :
                $imagePath = public_path() . '/storage/undangancetak/' . $gal->gambar;
                if (file_exists($imagePath) === true) {
                    unlink($imagePath);
                }
                $gal->delete();
            endforeach;
        }
        $undangan->delete();
        $undanganCetak->delete();
        return redirect()->back()->with('success', 'Data Berhasil di Hapus!');
    }
    public function deleteImage(Request $request)
    {
        // dd($request->uidImage);
        $img = ProductGalerry::where('id', $request->uidImage)->first();
        $imagePath = public_path() . '/storage/undangancetak/' . $img->gambar;
        if (file_exists($imagePath) === true) {
            unlink($imagePath);
        }
        $img->delete();
        return redirect()->back()->with('message', 'Gambar Berhasil di Hapus.');
    }
    public function add(Request $request): RedirectResponse
    {
        $uid = Str::uuid();

        $request->validate([
            'name' => 'required|string',
            'jenis' => 'required|string',
            'kategori' => 'required|string',
            'stok' => 'required|numeric',
            'harga' => 'required|numeric',
            'terjual' => 'required|numeric',
            'deskripsi' => 'required',
        ]);
// dd($request->favorite);
        $images = $request->file('gambar');
        if ($request->hasFile('gambar')) :
            $arr = [];
            $i = 0;
            foreach ($images as $item) :
                $galery = new ProductGalerry();
                $imageName = $i++ . '-' . str::random(4) . $item->getClientOriginalName();
                $item->storeAs('undangancetak', $imageName, 'public');
                // $arr[] = $imageName;
                $galery->gambar = $imageName;
                $galery->undangan_uuid = $uid;
                $galery->save();
            endforeach;
            $image = implode(",", $arr);
        else :
            $image = '';
        endif;
        $slug = Str::slug($request->name);
        // dd($image);
        $undangan = new Undangan;
        $unCetak = new UndanganCetak;

        if (Undangan::where('slug', $slug)->exists()) {
            // Jika sudah ada, tambahkan angka unik di belakang slug, atau gunakan pendekatan lain
            $slug = $slug.'-'.Str::random(4); // Contoh penambahan angka unik
        }

        $undangan->uuid = $uid;
        $undangan->name = $request->name;
        $undangan->jenis = $request->jenis;
        $undangan->kategory = $request->kategori;
        $undangan->tag = 'null';
        $undangan->slug = $slug;
        // $undangan->gambar = $image;

        $unCetak->uid_undangan = $uid;
        $unCetak->stok = $request->stok;
        $unCetak->terjual = $request->terjual;
        $unCetak->harga = $request->harga;
        $unCetak->deskripsi = $request->deskripsi;
        $unCetak->favorite = $request->favorite;

        $undangan->save();
        $unCetak->save();

        return redirect('dashboard/undangan')->with('success', 'Data Berhasil di Tambah');
    }

    public function update(Request $request)
    {

        // $uid = Str::uuid();
        $request->validate([
            'uuid' => 'required|string',
            'name' => 'required|string',
            'jenis' => 'required|string',
            'kategory' => 'required|string',
            'stok' => 'required|numeric',
            'harga' => 'required|numeric',
            'terjual' => 'required|numeric',
            'deskripsi' => 'required',
        ]);
// dd($request->favorite);
        $jenis = JenisUndanganCetak::where('jenis', $request->jenis)->first();
        $kategory = KategoriUndangan::where('kategory', $request->kategory)->first();
        $unJen = Undangan::where('uuid', $request->uuid)->first();
        $undangan = UndanganCetak::where('undangan_cetaks.uid_undangan', $request->uuid)->first();


        $images = $request->file('gambar');
        if ($request->hasFile('gambar')) :
            $arr = [];
            $i = 0;
            foreach ($images as $item) :
                $galery = new ProductGalerry();
                $imageName = $i++ . '-' . str::random(4) . $item->getClientOriginalName();
                $item->storeAs('undangancetak', $imageName, 'public');
                // $arr[] = $imageName;
                $galery->gambar = $imageName;
                $galery->undangan_uuid = $request->uuid;
                $galery->save();
            endforeach;
            $image = implode(",", $arr);
        else :
            $image = '';
        endif;

        $undangan->update([
            'stok'=> $request->stok,
            'terjual'=> $request->terjual,
            'harga'=> $request->harga,
            'deskripsi'=> $request->deskripsi,
            'favorite'=> $request->favorite
        ]);

        $unJen->update([
            'name' => $request->name,
            'jenis' => $jenis->uuid,
            'kategory'=>$kategory->uuid
        ]);
        // $undangan->undangan()->update(['name' => $request->name]);
        return redirect()->back()->with('success', 'Data Berhasil di Update');
    }
}
