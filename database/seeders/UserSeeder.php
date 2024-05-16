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
        $admin = User::create([
            'uid'=> Str::uuid(),
            'name'=> 'Sawalinto',
            'email'=> 'sawalinto@gmail.com',
            'id_google'=> null,
            'image'=> 'null',
            'password'=> bcrypt('sawal123'),
            'phone'=> '082274677715'
        ]);
        $partner = User::create([
            'uid'=> Str::uuid(),
            'name'=> 'Partner',
            'email'=> 'partner@gmail.com',
            'id_google'=> null,
            'image'=> 'null',
            'password'=> bcrypt('sawal123'),
            'phone'=> '08224574545'
        ]);
        $admin->assignRole('admin');
        $partner->assignRole('partner');
    }
}
