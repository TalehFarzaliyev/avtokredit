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
       $permissions = [
            //Car Brand Permission
           'car-brand-list',
           'car-brand-create',
           'car-brand-edit',
           'car-brand-delete',
          
           // Car Model Permission
           'car-model-list',
           'car-model-create',
           'car-model-edit',
           'car-model-delete',
         
           //Currency Permission
           'currency-list',
           'currency-create',
           'currency-edit',
           'currency-delete',
            // Language Permission
           'language-list',
           'language-create',
           'language-edit',
           'language-delete',
           
           //Page Permission
           'page-list',
           'page-create',
           'page-edit',
           'page-delete',
            //Role Permission
           'role-list',
           'role-create',
           'role-edit',
           'role-delete',
            // User Permission
           'user-list',
           'user-create',
           'user-edit',
           'user-delete',
           // Body Type
           'body-type-list',
           'body-type-create',
           'body-type-edit',
           'body-type-delete',
           // Fuel Type
           'fuel-type-list',
           'fuel-type-create',
           'fuel-type-edit',
           'fuel-type-delete',
           // Gear
           'gear-list',
           'gear-create',
           'gear-edit',
           'gear-delete',
           // Transmission
           'transmission-list',
           'transmission-create',
           'transmission-edit',
           'transmission-delete',
           // Color
           'colors-list',
           'colors-create',
           'colors-edit',
           'colors-delete',

            // Car
           'car-list',
           'car-create',
           'car-edit',
           'car-delete',

           //City
           'city-list',
           'city-create',
           'city-edit',
           'city-delete',

           //Company
           'company-list',
           'company-create',
           'company-edit',
           'company-delete',

           //Company group
           'company_group-list',
           'company_group-create',
           'company_group-edit',
           'company_group-delete',

           //technical-specification
           'technical-specification-list',
           'technical-specification-create',
           'technical-specification-edit',
           'technical-specification-delete'


        ];

        $permissions = array_unique($permissions);

        foreach ($permissions as $permission) {
             Permission::create([
                 'name' => $permission,
                 'guard_name' => 'web'
             ]);
        }
    }
}
