<?php

namespace Database\Seeders;

use Spatie\Permission\Models\Permission;

use Illuminate\Database\Seeder;

class PermissionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            'user-list',
            'user-create',
            'user-edit',
            'user-delete',
            'role-list',
            'role-create',
            'role-edit',
            'role-delete',
            'permission-list',
            'permission-create',
            'permission-edit',
            'permission-delete',
            'post-list',
            'post-create',
            'post-edit',
            'post-delete',
            'category-list',
            'category-create',
            'category-edit',
            'category-delete',
            'foodType-list',
            'foodType-create',
            'foodType-edit',
            'foodType-delete',
            'subcategory-list',
            'subcategory-create',
            'subcategory-edit',
            'subcategory-delete',
            'currency-list',
            'currency-create',
            'currency-edit',
            'currency-delete',
            'restaurant-list',
            'restaurant-create',
            'restaurant-edit',
            'restaurant-delete',
            'dishes-list',
            'dishes-create',
            'dishes-edit',
            'dishes-delete',
            'menus-list',
            'menus-create',
            'menus-edit',
            'menus-delete',


        ];

        foreach ($data as $permission) {
             Permission::create(['name' => $permission]);
        }
    }
}
