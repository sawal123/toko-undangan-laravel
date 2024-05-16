<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $admin = Role::updateOrCreate(['name' => 'admin'], ['name' => 'admin']);
        $costumer = Role::updateOrCreate(['name' => 'costumer'], ['name' => 'costumer']);
        $partner = Role::updateOrCreate(['name' => 'partner'], ['name' => 'partner']);

        $permission = Permission::updateOrCreate(['name'=> 'dashboard'],['name'=> 'dashboard']);
        $permission2 = Permission::updateOrCreate(['name'=> 'partner'],['name'=> 'partner']);
        $permission3 = Permission::updateOrCreate(['name'=> 'costumer'],['name'=> 'costumer']);

        $admin->givePermissionTo($permission);
        $partner->givePermissionTo($permission2);
        $costumer->givePermissionTo($permission3);
    }
}
