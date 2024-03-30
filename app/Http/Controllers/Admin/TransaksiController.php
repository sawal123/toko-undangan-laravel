<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Costumer;
use Illuminate\Http\Request;

class TransaksiController extends Controller
{
    //
    public function index(){
        $bulan = [
            'Januari',
            'Feburuari',
            'Maret',
            'April',
            'Mei',
            'Juni',
            'Juli',
            'Agustus',
            'September',
            'Oktober',
            'November',
            'Desember',
        ];


        return view('backend.transaksi.transaksi', [
            'bulan'=> $bulan
        ]);
    }

    public function create(){
        $costumer = Costumer::all();
        return view('backend.transaksi.createTransaksi',
    [
        'costumer'=>$costumer
    ]);
    }
}
