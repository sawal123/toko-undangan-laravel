<?php

namespace App\Http\Controllers\Admin;

use App\Models\Costumer;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
// use Illuminate\Support\Facades\Request as FacadesRequest;

class CostumerController extends Controller
{
    public function costumer(){
        $costumer = Costumer::all();
        return view('backend.Costumer.costumer',[
            'costumer'=> $costumer
        ]);
    }

    public function add(Request $request){
        $request->validate([
            'name'=> "required|string",
            'nomor'=> "numeric",
        ]); 

        $costumer = new Costumer();
        $costumer->uuid = Str::uuid();
        $costumer->name = $request->name;
        $costumer->nomor = $request->nomor;
        $costumer->alamat = $request->alamat;
        $costumer->badan_usaha = $request->badan;
        $costumer->save();
        return redirect()->back()->with('success', 'Costumer berhasil ditambah');
    }

    public function update(Request $request){
        $request->validate([
            'uuid' => "required|string",
            'name'=> "required|string",
            'nomor'=> "numeric",
        ]); 

        $costumer = Costumer::where('uuid', $request->uuid)->first();
        // dd($costumer->badan_usaha);
        $costumer->update([
            "name"=> $request->name,
            "nomor"=> $request->nomor,
            "alamat"=> $request->alamat,
            "badan_usaha"=> $request->badan,
        ]);
        return redirect()->back()->with('success', 'Costumer berhasil ditambah');
    }
    public function delete($uid){
        $costumer = Costumer::where('uuid', $uid)->first();
        $costumer->delete();
        return redirect()->back()->with('success', 'Costumer berhasil dihapus');
    }

    public function detail($uid){
        $costumer = Costumer::where('uuid', $uid)->first();
        // dd($costumer);
        return view('backend.Costumer.detail-costumer');
    }
}
