<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use Illuminate\Database\Seeder;
use Database\Seeders\UserSeeder;
use Database\Seeders\JenisUnSeeder;
use Database\Seeders\KategoriUnSeed;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        $this->call([
            JenisUnSeeder::class,
            KategoriUnSeed::class,
            PermissionSeeder::class,
            UserSeeder::class,
            // RoleSeeder::class
        ]);
    }
}
