<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\RedirectResponse;
use App\Models\Undangan;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Models\KategoriUndangan;
use App\Models\JenisUndanganCetak;
use App\Http\Controllers\Controller;
use App\Models\UndanganCetak;

class UndanganCetakController extends Controller
{
    public function index()
    {
        $jenis = JenisUndanganCetak::all();
        $kategori = KategoriUndangan::all();

        $unda =  Undangan::with('jenis')->get();
        $undanganModel = new Undangan();
        $u = $undanganModel->undanganGet();

        dd($unda);

        return view('backend.undangancetak', [
            'jenis' => $jenis,
            'kategori' => $kategori
        ]);
    }
    public function add(Request $request): RedirectResponse
    {
        // $name = $request->file('gambar');
        // dd($name);
        $uid = Str::uuid();
        // dd(base_path());

        $request->validate([
            'name' => 'required|string',
            'jenis' => 'required|string',
            'kategori' => 'required|string',
            'stok' => 'required|numeric',
            'harga' => 'required|numeric',
            'terjual' => 'required|numeric',
            'deskripsi' => 'required',
        ]);

        $images = $request->file('gambar');
        if ($request->hasFile('gambar')) :
            $arr = [];
            $i = 0;
            foreach ($images as $item) :
                $imageName = $i++.'-'.str::random(4).$item->getClientOriginalName();
                $item->storeAs('undangancetak',$imageName, 'public');
                $arr[] = $imageName;
            endforeach;
            $image = implode(",", $arr);
        else :
            $image = '';
        endif;
        // dd($image);
        $undangan = new Undangan;
        $unCetak = new UndanganCetak;

        $undangan->uuid = $uid;
        $undangan->name = $request->name;
        $undangan->jenis = $request->jenis;
        $undangan->kategory = $request->kategori;
        $undangan->tag = 'null';
        $undangan->gambar = $image;

        $unCetak->uid_undangan = $uid;
        $unCetak->stok = $request->stok;
        $unCetak->terjual = $request->terjual;
        $unCetak->harga = $request->harga;
        $unCetak->deskripsi = $request->deskripsi;

        $undangan->save();
        $unCetak->save();

        return redirect('dashboard-undangan');




    }
}
