<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RolePermissionSeeder extends Seeder
{
    public function run(): void
    {
        // Reset cached roles and permissions
        app()[\Spatie\Permission\PermissionRegistrar::class]->forgetCachedPermissions();

        // Create permissions for customers
        $permissions = [
            'view_customer',
            'create_customer',
            'update_customer',
            'delete_customer',
            'import_customer',
            'export_customer',
            'view_role',
            'create_role',
            'update_role',
            'delete_role',
        ];

        foreach ($permissions as $permission) {
            Permission::firstOrCreate(['name' => $permission]);
        }

        // Admin role - full access
        $adminRole = Role::firstOrCreate(['name' => 'admin']);
        $adminRole->syncPermissions($permissions);

        // Employee role - view and update only
        $empRole = Role::firstOrCreate(['name' => 'emp']);
        $empRole->syncPermissions([
            'view_customer',
            'update_customer',
            'export_customer',
        ]);

        // Create admin user
        $admin = User::firstOrCreate(
            ['email' => 'sysadmin@bachkhoadigital.com'],
            [
                'name' => 'System Admin',
                'password' => bcrypt('123456789'),
            ]
        );
        $admin->syncRoles(['admin']);

        // Create employee user
        $emp = User::firstOrCreate(
            ['email' => 'sysemp@bachkhoadigital.com'],
            [
                'name' => 'System Employee',
                'password' => bcrypt('12341234'),
            ]
        );
        $emp->syncRoles(['emp']);
    }
}
