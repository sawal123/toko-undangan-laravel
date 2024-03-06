<?php

namespace Database\Seeders;

use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use App\Models\KategoriUndangan;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class KategoriUnSeed extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $jenis = KategoriUndangan::insert([
            [
                'uuid'=> Str::uuid(),
                'kategori_undangan'=> 'Undangan Digital'
            ],
            [
                'uuid'=> Str::uuid(),
                'kategori_undangan'=> 'Undangan Cetak'
            ],
            [
                'uuid'=> Str::uuid(),
                'kategori_undangan'=> 'Undangan Animasi'
            ],

        ]);
    }
}
