<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        app()[\Spatie\Permission\PermissionRegistrar::class]->forgetCachedPermissions();

        // create permissions
        Permission::create(['name' => 'manage products']);
        Permission::create(['name' => 'view products']);
        Permission::create(['name' => 'manage users']);

        // create roles and assign created permissions

        Role::create(['name' => 'USR'])
            ->givePermissionTo(['view products']);

        $role = Role::create(['name' => 'ADM']);
        $role->givePermissionTo(Permission::all());
    }
}
