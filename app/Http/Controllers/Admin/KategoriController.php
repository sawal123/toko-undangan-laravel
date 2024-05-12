<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Models\KategoriUndangan;
use App\Models\JenisUndanganCetak;
use App\Http\Controllers\Controller;

class KategoriController extends Controller
{

    public function index(){
        $kategori = KategoriUndangan::select('uuid', 'kategory')->orderBy('kategory', 'asc')->get();
        $jenis = JenisUndanganCetak::select('uuid', 'jenis')->orderBy('jenis', 'asc')->get();

        return view('backend.kategori.kategori',[
            'kategory'=>$kategori,
            'jenis'=> $jenis

        ]);
    }

    public function create(Request $request){
        $request->validate([
            'name'=> 'required|string',
            'type'=> 'required|string'
        ]);
        if($request->type === 'Kategori'){
            $kategori =   new KategoriUndangan();
            $kategori->uuid = Str::uuid();
           $kategori->kategory = $request->name;
           $kategori->save();
           return redirect()->back()->with('success', 'Kategori berhasil disimpan');
        }else{
            $jenis = new JenisUndanganCetak();
            $jenis->uuid = Str::uuid();
            $jenis->jenis = $request->name;
            $jenis->save();
            return redirect()->back()->with('success', 'Jenis berhasil disimpan');
        }

    }
}


