<?php

namespace Database\Seeders;

use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use App\Models\JenisUndanganCetak;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class JenisUnSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $jenis = JenisUndanganCetak::insert([
            [
                'uuid'=> Str::uuid(),
                'jenis'=> 'Lintang'
            ],
            [
                'uuid'=> Str::uuid(),
                'jenis'=> 'Jago'
            ],
            [
                'uuid'=> Str::uuid(),
                'jenis'=> 'Mq'
            ],
            [
                'uuid'=> Str::uuid(),
                'jenis'=> 'Erba'
            ]
        ]);
    }
}
