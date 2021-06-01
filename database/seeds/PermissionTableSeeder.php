<?php

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;

class PermissionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Permission::truncate();
        $permissions = [
            'role-list',
            'role-create',
            'role-edit',
            'role-delete',
            'user-management',
            'user-list',
            'user-create',
            'user-edit',
            'user-delete',
            'item-manage',
            'item-add',
            'item-edit',
            'item-remove',

            'customer-manage',
            'customer-add',
            'customer-edit',
            'customer-remove',
        ];

        foreach ($permissions as $permission) {
            Permission::create(['name' => $permission]);
        }
    }
}
