<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role = Role::firstOrCreate(['name' => 'superadmin']);
        if ($role) {
            $role->givePermissionTo(Permission::where('name', 'grant-superadmin-access')->get());
        }
    }
}
