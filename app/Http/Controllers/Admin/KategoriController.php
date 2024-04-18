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
        
        return view('backend.kategori.kategori');
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


