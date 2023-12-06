<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Database\Seeders\Traits\DisableForeignKeys;
use App\Models\User;

class PermissionRoleTableSeeder extends Seeder
{
    use DisableForeignKeys;
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $this->disableForeignKeys();

        // Create Roles
        $admin = Role::create(['name' =>'admin']);

        $user = Role::create(['name' => 'user']);


        $permissions = [

            ['id' => 1, 'name' => 'user_management_access',],
            ['id' => 2, 'name' => 'user_management_create',],
            ['id' => 3, 'name' => 'user_management_edit',],
            ['id' => 4, 'name' => 'user_management_view',],
            ['id' => 5, 'name' => 'user_management_delete',],

            ['id' => 6, 'name' => 'permission_access',],
            ['id' => 7, 'name' => 'permission_create',],
            ['id' => 8, 'name' => 'permission_edit',],
            ['id' => 9, 'name' => 'permission_view',],
            ['id' => 10, 'name' => 'permission_delete',],

            ['id' => 11, 'name' => 'role_access',],
            ['id' => 12, 'name' => 'role_create',],
            ['id' => 13, 'name' => 'role_edit',],
            ['id' => 14, 'name' => 'role_view',],
            ['id' => 15, 'name' => 'role_delete',],

            ['id' => 16, 'name' => 'user_access',],
            ['id' => 17, 'name' => 'user_create',],
            ['id' => 18, 'name' => 'user_edit',],
            ['id' => 19, 'name' => 'user_view',],
            ['id' => 20, 'name' => 'user_delete',],

            ['id' => 21, 'name' => 'test_access',],
            ['id' => 22, 'name' => 'test_create',],
            ['id' => 23, 'name' => 'test_edit',],
            ['id' => 24, 'name' => 'test_view',],
            ['id' => 25, 'name' => 'test_delete',],

            ['id' => 26, 'name' => 'contact_access',],

            ['id' => 27, 'name' => 'view backend',],


            ['id' => 28, 'name' => 'reason_access',],
            ['id' => 29, 'name' => 'reason_create',],
            ['id' => 30, 'name' => 'reason_edit',],
            ['id' => 31, 'name' => 'reason_view',],
            ['id' => 32, 'name' => 'reason_delete',],

            ['id' => 33, 'name' => 'blog_access',],
            ['id' => 34, 'name' => 'blog_create',],
            ['id' => 35, 'name' => 'blog_edit',],
            ['id' => 36, 'name' => 'blog_view',],
            ['id' => 37, 'name' => 'blog_delete',],

            ['id' => 38, 'name' => 'brand_access',],
            ['id' => 39, 'name' => 'brand_create',],
            ['id' => 40, 'name' => 'brand_edit',],
            ['id' => 41, 'name' => 'brand_view',],
            ['id' => 42, 'name' => 'brand_delete',],

          

         

           
        ];

        foreach ($permissions as $item) {
            Permission::create($item);
        }

           //        $admin_permissions = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28, 29, 30, 31, 32, 33, 34, 35, 36, 37, 38, 39, 40, 41, 42, 43, 44, 45, 46, 47, 48, 49, 50, 51, 52, 53, 54, 55, 56, 57, 58, 59, 60, 61, 62, 63, 64, 65, 66, 67];

    

        $admin->syncPermissions(Permission::all());

       
      

        $this->enableForeignKeys();
    }
}
