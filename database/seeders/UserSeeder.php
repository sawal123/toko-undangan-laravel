<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user = User::create([
            'uid'=> Str::uuid(),
            'name'=> 'Sawalinto',
            'email'=> 'sawalinto@gmail.com',
            'id_google'=> null,
            'image'=> 'null',
            'password'=> bcrypt('sawal123')
        ]);
    }
}
