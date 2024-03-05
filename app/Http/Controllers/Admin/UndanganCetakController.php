<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\JenisUndanganCetak;
use Illuminate\Http\Request;

class UndanganCetakController extends Controller
{
    public function index (){
        $jenis = JenisUndanganCetak::all();
        return view('backend.undangancetak', [
            'jenis' => $jenis
        ]);
    }
    public function add(Request $request)
    {
        // $name = $request->file('gambar');
        // dd($name);

        $validate = $request->validate([
            'name'=> 'required|string',
            'jenis'=> 'required|string',
            'kategori'=> 'require|string',
            'deskripsi'=> 'text'
        ]);

        $images = $request->file('gambar');
        if ($request->hasFile('gambar')) :
            foreach ($images as $item) :
                $var = date_create();
                $time = date_format($var, 'YmdHis');
                $imageName = $time . '-' . $item->getClientOriginalName();
                $item->move(base_path() . '/storage/undangancetak/', $imageName);
                $arr[] = $imageName;
            endforeach;
            $image = implode(",", $arr);
        else :
            $image = '';
        endif;

    }
}
