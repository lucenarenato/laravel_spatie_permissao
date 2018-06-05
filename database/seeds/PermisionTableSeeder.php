<?php

use Illuminate\Database\Seeder;

class PermisionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        $permissions = [
           'role-list',
           'role-create',
           'role-edit',
           'role-delete',
           'product-list',
           'product-create',
           'product-edit',
           'product-delete'
        ];
        foreach ($permissions as $permissions) {
        	# code...
        	Permission::create(['name' => $permissions]);
        }
    }
}
